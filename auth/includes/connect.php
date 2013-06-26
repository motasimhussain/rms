<?php
session_start();

$databasehost = 'localhost';
$databaseusername = 'root';
$databasepassword = '';
$databasename = 'ubit';
$db = mysql_connect($databasehost, $databaseusername, $databasepassword, $databasename) or die('Could not connect to databse, Please run <a href="../setup.php">SETUP</a>! ' . mysql_error());
mysql_select_db('ubit', $db);


function showresults_approved()
{
    $temp_results = mysql_query("SHOW TABLES LIKE '%apr'") or die(mysql_error());
    return $temp_results;
}

function showresults_pending()
{
    $temp_results = mysql_query("SHOW TABLES LIKE '%pnd'") or die(mysql_error());
    return $temp_results;
}

function registerUser($epnum, $password, $full_name, $father_name, $semester, $section, $field_name, $age, $dob, $doa, $contact_no)
{
    mysql_query("INSERT INTO `stu_login`(`epnum`,`password`, `full_name`, `father_name`, `field_name`,`semester`,`section`, `age`, `dob`, `doa`, `contact_no`) VALUES ('$epnum','$password','$full_name','$father_name','$field_name','$semester','$section','$age','$dob','$doa','$contact_no')") or die (mysql_error());
    $errortext = "Registered succesfully";
    return $errortext;
}

function res_det($table_name)
{
    $res = mysql_query("SELECT " . $table_name . ".epnum, stu_login.full_name, stu_login.father_name, " . $table_name . ".marks_obtained, " . $table_name . ".marks_max FROM " . $table_name . " LEFT JOIN stu_login ON " . $table_name . ".epnum=stu_login.epnum")or die(mysql_error());
    return $res;

}

function loginuser($user, $password, $type)
{
    if ($type == "student") {
        $sql = mysql_query("SELECT * FROM stu_login WHERE `epnum` = '$user' AND `password` = '$password'") or die (mysql_error());
        $sql_results = mysql_fetch_array($sql);
        $user_exists = mysql_num_rows($sql);
        if ($user_exists == 1) {
            $_SESSION['user_name'] = $sql_results[2];
            $_SESSION['user_ep'] = $sql_results[0];
            $_SESSION['valid_user'] = true;
            $_SESSION['user_type'] = "student";
            $loginerror = "Login sucessful.";
        }
    } else {
        $loginerror = "Incorrect username or password.";
    }
    if ($type == "admin") {
        $sql = mysql_query("SELECT * FROM admin_login WHERE `username` = '$user' AND `password` = '$password'") or die (mysql_error());
        $sql_results = mysql_fetch_array($sql);
        $user_exists = mysql_num_rows($sql);
        if ($user_exists == 1) {
            $_SESSION['user_name'] = $sql_results[0];
            $_SESSION['valid_user'] = true;
            if ($sql_results[2] == "yes") {
                $_SESSION['user_type'] = "admin";
                $loginerror = "Login sucessful.";
            } else {
                $_SESSION['user_type'] = "faculty";
                $loginerror = "Login sucessful.";
            }
        }
    } else {
        $loginerror = "Incorrect username or password.";
    }

    return $loginerror;
}


function checkuser()
{
    if ($_SESSION['valid_user'] != true) {
        $authorized = false;
    } else {
        $authorized = true;
    }
    return $authorized;
}

function log_write($user, $type)
{
    $ip = $_SERVER['REMOTE_ADDR'];
    date_default_timezone_set('Asia/Tashkent');
    $date = date('m/d/Y h:i:s a', time());
    $data = "ip.txt";
    $fp = fopen("$data", "a+");
    fputs($fp, $user . " " . $type . " from ip " . $ip . " at " . $date . "\n");
    fclose($fp);
}

function logout()
{

    session_destroy();

    $logout = true;
    return $logout;
}

function table_name_filter($table_name)
{

    ereg("([a-z]{3})[[:punct:]]([a-z\_]{3,15})[[:punct:]]([0-9]{4})[[:punct:]]([0-9a-z]{2})[[:punct:]]([a-z]{4})[[:punct:]]([a-c]{1})[[:punct:]]([a-z\_]{3,20})[[:punct:]]([a-z]{3})", $table_name, $parts);
    return $parts; // Returns the PARTS array containing the filtered table name (1-7)
}

/*  Unused. Replaced by jqdatatables builtin filter

function search_stu_func($epnum,$year,$semester,$section){
	
	

	$sqlep = "`epnum` LIKE '$epnum%'";
	if ($year != '')
	$sqlyear = "`doa` = '$year'";
	if ($semester != '')
	$sqlsemes = "`semester` = '$semester'";
	if ($section != '')
	$sqlsec = "`section` = '$section'";
	if (($epnum == '') && ($year == '') && ($semester == '') && ($section == '')){
		$sql = "SELECT * FROM stu_login";
	}
	else {
	$sql_main = "SELECT * FROM stu_login WHERE ";
	$sql = $sql_main.$sqlep.($sqlyear != ""?" AND ":"").$sqlyear.($sqlsemes != ""?"AND ":"").$sqlsemes.($sqlsec != ""?" AND ":"").$sqlsec;
	}

	
	$result = mysql_query($sql) or die (mysql_error());
	return $result;
	
}*/

function sys_info()
{
    $t_res = mysql_num_rows(mysql_query("SHOW TABLES LIKE 'res%'")) or mysql_error(); //total results
    $t_stu = mysql_num_rows(mysql_query("SELECT * FROM `stu_login`"))or mysql_error(); //total registered students
    $t_apr_res = mysql_num_rows(mysql_query("SHOW TABLES LIKE '%apr'"))or mysql_error(); //total approved results
    $t_pnd_res = mysql_num_rows(mysql_query("SHOW TABLES LIKE '%pnd'"))or mysql_error(); //total pending results
    $sys_info = array($t_res, $t_stu, $t_apr_res, $t_pnd_res);
    return $sys_info;
}

function calc_gpa_grade($marks, $tot_marks)
{
    $percentage = (($marks / $tot_marks) * 100);
    $row_value = array();
    if ($percentage <= 40)
        $row_value[0] = '<th width="10%">N/A</th>';
    if ($percentage > 40) {
        if (($percentage > 49) && ($percentage < 53))
            $row_value[0] = '<th width="10%" style="color:#CC0000;">1.0 / D</th>';
        if (($percentage > 52) && ($percentage < 57))
            $row_value[0] = '<th width="10%" style="color:#CC0000;">1.4 / D</th>';
        if (($percentage > 56) && ($percentage < 61))
            $row_value[0] = '<th width="10%" style="color:#CC0000;">1.8 / C-</th>';
        if (($percentage > 60) && ($percentage < 64))
            $row_value[0] = '<th width="10%" style="color:#FF8000;">2.0 / C</th>';
        if (($percentage > 63) && ($percentage < 68))
            $row_value[0] = '<th width="10%" style="color:#FF8000;">2.4 / C+</th>';
        if (($percentage > 67) && ($percentage < 71))
            $row_value[0] = '<th width="10%" style="color:#FF8000;">2.8 / B-</th>';
        if (($percentage > 70) && ($percentage < 75))
            $row_value[0] = '<th width="10%" style="color:#3D6600;">3.0 / B</th>';
        if (($percentage > 74) && ($percentage < 80))
            $row_value[0] = '<th width="10%" style="color:#3D6600;">3.4 / B+</th>';
        if (($percentage > 79) && ($percentage < 85))
            $row_value[0] = '<th width="10%" style="color:#3D6600;">3.8 / A-</th>';
        if (($percentage > 84) && ($percentage < 90))
            $row_value[0] = '<th width="10%" style="color:#3D6600;">4.0 / A</th>';
        if ($percentage > 89)
            $row_value[0] = '<th width="10%" style="color:#3D6600;">4.0 / A+</th>';
    }
    if ($percentage < 50)
        $row_value[1] = '<th width="10%" style="color:#CC0000;">Failed</th>';
    else
        $row_value[1] = '<th width="10%" style="color:#3D6600;">Passed</th>';

    return $row_value;
}

function query_all($table_name, $field_name, $field_value)
{
    $sql1 = "SELECT * FROM " . $table_name;
    $sql2 = "WHERE " . $field_name . " = " . $field_value;
    if (($field_name == '') && ($field_value == ''))
        $sql2 = "";
    $sql = $sql1 . $sql2;
    $result = mysql_query($sql);
    return $result;
}

function log_read()
{

    $fh = fopen("includes/ip.txt", 'r');
    $pageText = fread($fh, 25000);
    echo nl2br($pageText);
}

function news_create($news_content, $news_title, $author)
{
    mysql_query("INSERT INTO `announcements`(`title`, `content`, `author`) VALUES ('" . $news_title . "','" . $news_content . "','" . $author . "')");
    $query = true;
    return $query;
}

function show_news($author)
{
    if ($author == "admin")
        $news = mysql_query("SELECT * FROM `announcements` WHERE author = 'admin'");

    if ($author == "system")
        $news = mysql_query("SELECT * FROM `announcements` WHERE author = 'system'");

    if ($author == "faculty")
        $news = mysql_query("SELECT * FROM `announcements` WHERE author = 'faculty'");

    if ($author == "")
        $news = mysql_query("SELECT * FROM `announcements`");

    return $news;


}

?>