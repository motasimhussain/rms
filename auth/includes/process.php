<?php header("location: ../showall.php"); ?>
<?php require_once ('connect.php'); ?>
<?php
if (isset($_POST['logout'])) {
    $user = ($_SESSION['user_ep'] != "" ? $_SESSION['user_ep'] : ($_SESSION['user_name']));
    $type = "logged out";
    log_write($user, $type);
    $logout = logout();

    if ($logout == true) {
        header('Location: ../../index.php');
    }
}
?>
<?php
if (isset($_POST['delete'])) {
    $table_name = isset($_POST['table_name']) ? $_POST['table_name'] : '';
    if ($table_name == '') {
        echo '<script>alert("Delete failed.");</script>';
    } else {
        $sql = 'DROP TABLE ' . $table_name;
        mysql_query($sql) or die (mysql_error());
        echo '<script>alert("Result deleted.");location = "../showall.php";</script>';
        header('Location: ../showall.php');
    }
}
?>
<?php
if (isset($_POST['add'])) {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $cfrm_password = isset($_POST['cfrm_password']) ? $_POST['cfrm_password'] : '';
    if (($cfrm_password != $password) || ($password == '') || ($username == '') || ($cfrm_password == '')) {
        echo '<script>var result = "Missing or invalid information."; type="user_add"; jpopup(result,type);</script>';
    } else {
        $registererror = registerUser($username, $password, $cfrm_password);
        echo '<script>var result ="';
        echo $registererror;
        echo '"; type="user_add"; jpopup(result,type);</script>';
    }


}
?>
<?php
if (isset($_POST['admin_reg'])) {
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $cfrm_password = isset($_POST['cfrm_password']) ? $_POST['cfrm_password'] : '';
    if (($cfrm_password != $password) || ($password == '') || ($cfrm_password == '')) {
        echo '<script>var result = "Missing or invalid information."; type="admin_reg"; jpopup(result,type);</script>';
    } else {
        $registererror = Admin($password, $cfrm_password);
        echo '<script>var result ="';
        echo $registererror;
        echo '"; type="admin_reg"; jpopup(result,type);</script>';
    }


}
?>
<?php
if (isset($_POST['change_status'])) {
    $result_name = isset($_POST['result_name']) ? $_POST['result_name'] : '';
    $action = isset($_POST['action']) ? $_POST['action'] : '';
    if ($action == "approve") {
        $parts = table_name_filter($result_name);
        $result_name_new = $parts[1] . '_' . $parts[2] . '_' . $parts[3] . '_' . $parts[4] . '_' . $parts[5] . '_' . $parts[6] . '_' . $parts[7] . '_apr';
        mysql_query("INSERT INTO `announcements`(`title`, `content`, `author`) VALUES ('New Result','A new Result has been posted','system')");
    } else if ($action == "remove") {
        $parts = table_name_filter($result_name);
        $result_name_new = $parts[1] . '_' . $parts[2] . '_' . $parts[3] . '_' . $parts[4] . '_' . $parts[5] . '_' . $parts[6] . '_' . $parts[7] . '_pnd';
    }

    if ($result_name == '') {
        echo '<script>alert("Unable to perform the action.")</script>';
    } else {
        mysql_query("RENAME TABLE `$result_name` TO `$result_name_new`;");
        echo '<script>alert("Success.");location = "../admincp.php";</script>';
    }


}
?>
<?php
if ((isset($_POST['save_result'])) || (isset($_POST['stu_max']))) {
    $i = $_POST['stu_max'];
    $table_name = $_POST['table_name'];
    $table_name_admin = $table_name . "_pnd";
    $marks_max = $_POST['marks_max'];
    $j = 0;
//echo $i."<br>"; debug the amount of times loop must run
    $sql1 = "CREATE TABLE IF NOT EXISTS ";
    $sql2 = "(serial int(2) AUTO_INCREMENT KEY, epnum int(10), marks_obtained int(3), marks_max int(3))";
    $sql = $sql1 . $table_name_admin . $sql2;
//echo $sql; debug sql query for table creation
    mysql_query($sql, $db)or die (mysql_error());
    for ($j = 0; $j < $i; $j++) {
//echo $_POST['stu_epnum'.$j]; Debug the values of epnum array.
//echo $_POST['stu_marks'.$j]."<br>"; Debug the values of marks obtained array.
        mysql_query("INSERT INTO " . $table_name_admin . "(epnum,marks_obtained,marks_max) VALUES (" . $_POST['stu_epnum' . $j] . "," . $_POST['stu_marks' . $j] . "," . $marks_max . ")")or die (mysql_error());
    }
    header("location: ../details.php?result=$table_name_admin");
}
?>
<?php
if (isset($_POST['login'])) {
    $epnum = isset($_POST['epnum']) ? $_POST['epnum'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($epnum == '') {
        $type = "admin";
        $login_res = loginuser($username, $password, $type);
    } else {
        $type = "student";
        $login_res = loginuser($epnum, $password, $type);
    }

    $user = ($_SESSION['user_ep'] != "" ? ($_SESSION['user_ep']) : ($_SESSION['user_name']));
    $type = "logged in";
    $log = log_write($user, $type);

    if ($login_res == "Login sucessful.") {


        header("Location: ../showall.php");

    } else {
        echo '<script>alert("' . $login_res . '");location = "../../index.php";</script>';
    }
}
?>
<?php
if (isset($_POST['register'])) {

    $epnum = isset($_POST['epnum']) ? $_POST['epnum'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $full_name = isset($_POST['full_name']) ? $_POST['full_name'] : '';
    $father_name = isset($_POST['father_name']) ? $_POST['father_name'] : '';
    $contact_no = isset($_POST['contact_no']) ? $_POST['contact_no'] : '';
    $doa = isset($_POST['doa']) ? $_POST['doa'] : '';
    $section = isset($_POST['section']) ? $_POST['section'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
    $field_name = isset($_POST['field_name']) ? $_POST['field_name'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';

    $year = date('Y');
    $month = date('m');
    /*echo $year."_".$month."<br>";*/
    if ($doa < $year) {
        $diff = $year - $doa;
        /*echo $diff."<br>";*/
    }
    if ($doa == $year) {
        $diff = 1;
        /*echo $diff."<br>";*/
    }

    if ($month > '08') {
        $semester = $diff * 2;
        /*echo $semester."<br>";*/
    }
    if ($month < '08') {
        $semester = ($diff * 2) - 1;
        /*echo $semester."<br>";*/
    }


    if (($epnum == "") || ($full_name == "") || ($father_name == "") || ($field_name == "") || ($age == "") || ($doa == "") || ($contact_no == "")) {
        echo '<script>alert("Missing or invalid information");location = "../../index.php";</script>';
    } else {
        $registererror = registerUser($epnum, $password, $full_name, $father_name, $semester, $section, $field_name, $age, $dob, $doa, $contact_no);
        if ($registererror == "Registered succesfully") {
            echo '<script>alert("Registered Successfully");location = "../../index.php";</script>';
        } else {
            echo '<script>alert("Not registerd");location = "../../index.php";</script>';
        }

    }
}
?>
<?php
if (isset($_POST['count'])) {
    $max = $_POST['count'];
    for ($j = 0; $j < $max; $j++) {
        if (isset($_POST['ep_chkbox' . $j])) {
            mysql_query("DELETE FROM `stu_login` WHERE epnum = '" . $_POST['ep_chkbox' . $j] . "'")or die (mysql_error());
        }

    }
    echo'<script>location = "../view_stu.php";</script>';
}
?>
<?php
if (isset($_POST['create_news'])) {
    $news_title = isset($_POST['news_title']) ? $_POST['news_title'] : '';
    $news_content = isset($_POST['news_content']) ? $_POST['news_content'] : '';
    if ($user_type == "admin") {
        $author = "admin";
    } elseif ($user_type == "faculty") {
        $author = "faculty";
    }
    $news = news_create($news_content, $news_title, $author);
    if ($news == true)
        header("location: ../showall.php");
    else
        alert("Failed");
}
?>
