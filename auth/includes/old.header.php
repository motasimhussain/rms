<?php require ("includes/connect.php");
$authorized = checkuser();
<<<<<<< HEAD
if ($authorized == false){
	header ("location: ../index.php");
}
$user_type = $_SESSION['user_type'];
 ?>
 
<!DOCTYPE html>
<html>
<head>
<title>RMS - Result Management System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link href="../css/login.css" rel="stylesheet" type="text/css">
<link href="../css/ui-lightbox.css" type="text/css" rel="stylesheet">
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>-->
<script src="../js/jquery-1.4.2.js" type="text/javascript" ></script>
<script src="../js/uilightbox.jquery.js" type="text/javascript" ></script>
<script src="../js/jpopup.js" type="text/javascript" ></script>
=======
if ($authorized == false) {
    header("location: ../index.php");
}
$user_type = $_SESSION['user_type'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>RMS - Result Management System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../css/login.css" rel="stylesheet" type="text/css">
    <link href="../css/ui-lightbox.css" type="text/css" rel="stylesheet">
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>-->
    <script src="../js/jquery-1.4.2.js" type="text/javascript"></script>
    <script src="../js/uilightbox.jquery.js" type="text/javascript"></script>
    <script src="../js/jpopup.js" type="text/javascript"></script>
>>>>>>> GithubRMS/master

</head>
<body>
<div id="wrapper">
<<<<<<< HEAD
<!-- HEADER IMAGE -->

<div id= "header">
<div class="left">
<div id="heading-header">RESULT MANAGEMENT SYSTEM</div>
<div id="sub-heading"><?php echo $_SESSION['user_name']; ?></div>
<?php if ($user_type == "student"){?>
<div id="sub-heading">EP #: <?php echo $_SESSION['user_ep']; ?> </div>
<?php }?>
</div>
<div class="right">
		
			<?php if ($user_type == "admin"){ echo "<div class=\"right-button\"><a href=\"#\"  onClick=\"var result =''; var type ='add'; jpopup(result,type);\"><img src=\"../images/add.png\" class=\"right-img\"></a><div align=\"center\">Add Result</div></div><div class=\"right-button\"><a href=\"#\"  onClick=\"var result =''; var type ='view_stu'; jpopup(result,type);\"><img src=\"../images/users.png\" class=\"right-img\"></a><div align=\"center\">View Students</div></div><div class=\"right-button\"><a href=\"#\" onClick=\"var result =''; var type ='view_stu'; jpopup(result,type);\"><img  class=\"right-img\" src=\"../images/search.png\"></a><div align = \"center\">Search</div></div>";}?>
		
	
		<div class = "right-button">
			<a href="#"  onClick="var result = ''; var type = 'logout'; jpopup(result,type);"><img class="right-img" src="../images/logout.png"></a>
			<div align = "center">Logout</div>
		</div>
</div>
</div>
 

<?php if ($user_type == "admin"){ 
if ($thispage == "details"){
?>
<div id="nav" align="center"><a href="admincp.php" >Control Panel</a></div>
<div id="nav" align="center"><a href="./add.php?sno=<?php echo $getsno;?>"  class="navigation" >EDIT</a></div>
<?php echo '<div id="nav" align="center"><a href="#" onClick="var result =\''.$table_name.'\'; type =\'delete\'; jpopup(result,type);" >DELETE</a></div>';?>
<div id="nav" align="center"><a href="./listings.php" class="navigation">STATS & LISTS</a></div>
<?php }
else {
?>
	<div id="nav" align="center"><a href="admincp.php" >Control Panel</a></div>
	<div id="nav" align="center"><a href="./listings.php" class="navigation">STATS & LISTS</a></div>
<?php }
?>

<?php }else if ($user_type == "student"){?>
	
	
<div id="nav" align="center"><a href="./showall.php"  class="navigation" >SHOW ALL</a></div>
<div id="nav" align="center"><a href="#search" onClick="var result = ''; type = 'search'; jpopup(result,type);">SEARCH</a></div>
	
	
<?php }else if ($user_type == "faculty"){
	if ($thispage == "details"){
	?>
	
	<div id="nav" align="center"><a href="./showall.php"  class="navigation" >SHOW ALL</a></div>
	<div id="nav" align="center"><a href="#" onClick="var result = ''; type = 'add'; jpopup(result,type);">ADD</a></div>
	<div id="nav" align="center"><a href="./add.php?sno=<?php echo $getsno;?>"  class="navigation" >EDIT</a></div>
<?php echo '<div id="nav" align="center"><a href="#" onClick="var result =\''.$table_name.'\'; type =\'delete\'; jpopup(result,type);" >DELETE</a></div>';?>
	<div id="nav" align="center"><a href="#search" onClick="var result = ''; type = 'search'; jpopup(result,type);">SEARCH</a></div>
	
<?php }
else {?>
	<div id="nav" align="center"><a href="./showall.php"  class="navigation" >SHOW ALL</a></div>
	<div id="nav" align="center"><a href="#" onClick="var result = ''; type = 'add'; jpopup(result,type);">ADD</a></div>
	<div id="nav" align="center"><a href="#search" onClick="var result = ''; type = 'search'; jpopup(result,type);">SEARCH</a></div>
<?php }
}?>
<br>
=======
    <!-- HEADER IMAGE -->

    <div id="header">
        <div class="left">
            <div id="heading-header">RESULT MANAGEMENT SYSTEM</div>
            <div id="sub-heading"><?php echo $_SESSION['user_name']; ?></div>
            <?php if ($user_type == "student") { ?>
            <div id="sub-heading">EP #: <?php echo $_SESSION['user_ep']; ?> </div>
            <?php }?>
        </div>
        <div class="right">

            <?php if ($user_type == "admin") {
            echo "<div class=\"right-button\"><a href=\"#\"  onClick=\"var result =''; var type ='add'; jpopup(result,type);\"><img src=\"../images/add.png\" class=\"right-img\"></a><div align=\"center\">Add Result</div></div><div class=\"right-button\"><a href=\"#\"  onClick=\"var result =''; var type ='view_stu'; jpopup(result,type);\"><img src=\"../images/users.png\" class=\"right-img\"></a><div align=\"center\">View Students</div></div><div class=\"right-button\"><a href=\"#\" onClick=\"var result =''; var type ='view_stu'; jpopup(result,type);\"><img  class=\"right-img\" src=\"../images/search.png\"></a><div align = \"center\">Search</div></div>";
        }?>


            <div class="right-button">
                <a href="#" onClick="var result = ''; var type = 'logout'; jpopup(result,type);"><img class="right-img"
                                                                                                      src="../images/logout.png"></a>

                <div align="center">Logout</div>
            </div>
        </div>
    </div>


    <?php if ($user_type == "admin") {
    if ($thispage == "details") {
        ?>
        <div id="nav" align="center"><a href="admincp.php">Control Panel</a></div>
        <div id="nav" align="center"><a href="./add.php?sno=<?php echo $getsno;?>" class="navigation">EDIT</a></div>
        <?php echo '<div id="nav" align="center"><a href="#" onClick="var result =\'' . $table_name . '\'; type =\'delete\'; jpopup(result,type);" >DELETE</a></div>'; ?>
        <div id="nav" align="center"><a href="./listings.php" class="navigation">STATS & LISTS</a></div>
        <?php
    } else {
        ?>
        <div id="nav" align="center"><a href="admincp.php">Control Panel</a></div>
        <div id="nav" align="center"><a href="./listings.php" class="navigation">STATS & LISTS</a></div>
        <?php
    }
    ?>

    <?php } else if ($user_type == "student") { ?>


    <div id="nav" align="center"><a href="./showall.php" class="navigation">SHOW ALL</a></div>
    <div id="nav" align="center"><a href="#search" onClick="var result = ''; type = 'search'; jpopup(result,type);">SEARCH</a>
    </div>


    <?php
} else if ($user_type == "faculty") {
    if ($thispage == "details") {
        ?>

        <div id="nav" align="center"><a href="./showall.php" class="navigation">SHOW ALL</a></div>
        <div id="nav" align="center"><a href="#" onClick="var result = ''; type = 'add'; jpopup(result,type);">ADD</a>
        </div>
        <div id="nav" align="center"><a href="./add.php?sno=<?php echo $getsno;?>" class="navigation">EDIT</a></div>
        <?php echo '<div id="nav" align="center"><a href="#" onClick="var result =\'' . $table_name . '\'; type =\'delete\'; jpopup(result,type);" >DELETE</a></div>'; ?>
        <div id="nav" align="center"><a href="#search" onClick="var result = ''; type = 'search'; jpopup(result,type);">SEARCH</a>
        </div>

        <?php
    } else {
        ?>
        <div id="nav" align="center"><a href="./showall.php" class="navigation">SHOW ALL</a></div>
        <div id="nav" align="center"><a href="#" onClick="var result = ''; type = 'add'; jpopup(result,type);">ADD</a>
        </div>
        <div id="nav" align="center"><a href="#search" onClick="var result = ''; type = 'search'; jpopup(result,type);">SEARCH</a>
        </div>
        <?php
    }
}?>
    <br>
>>>>>>> GithubRMS/master

