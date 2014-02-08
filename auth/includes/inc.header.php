<?php require ("includes/connect.php");
$authorized = checkuser();
<<<<<<< HEAD
if ($authorized == false){
	header ("location: ../index.php");
}
$user_type = $_SESSION['user_type'];
 ?>
 
=======
if ($authorized == false) {
    header("location: ../index.php");
}
$user_type = $_SESSION['user_type'];
?>

>>>>>>> GithubRMS/master

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<<<<<<< HEAD
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css' />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="Result Managment System" />
<meta name="keywords" content="RMS, Result Managment System"  />
<!--<link rel="stylesheet" type="text/css" href="../css/style_fixed.css" />-->
<link rel="stylesheet" type="text/css" href="../css/style_fluid.css" />
<link href="../css/login.css" rel="stylesheet" type="text/css">
<link href="../css/demo_table.css" rel="stylesheet" type="text/css">
<link href="../css/TableTools.css" rel="stylesheet" type="text/css">

<link href="../css/ui-lightbox.css" type="text/css" rel="stylesheet">
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>-->
<script src="../js/jquery-1.4.2.js" type="text/javascript" ></script>
<script src="../js/uilightbox.jquery.js" type="text/javascript" ></script>
<script src="../js/jpopup.js" type="text/javascript" ></script>
		<script type="text/javascript" language="javascript" src="../js/jquery.dataTables.js"></script>
		
		<script type="text/javascript" charset="utf-8" src="../js/ZeroClipboard.js"></script>
		<script type="text/javascript" charset="utf-8" src="../js/TableTools.js"></script>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
			var i = 0;
			
				$('#res_det').dataTable();
				$('#pending').dataTable();
				$('#approved').dataTable();
				$('#stu_rec').dataTable();
				
					var oTable = $('#stu_rec').dataTable();
					var oTableTools = new TableTools( oTable, {
							"sSwfPath": "swf/copy_csv_xls_pdf.swf",
							"aButtons": [
										"print",
										{
										"sExtends":    "collection",
										"sButtonText": "Save",
										"aButtons":    ["xls", "pdf" ]
										}
										]

					
	});
	$('#table_container').before( oTableTools.dom.container );

	
			});

		</script>
		
	
<script type="text/javascript">
function submitform()
{
document.forms["result"].submit();
}
</script>
<script language="JavaScript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
  if(popUpWin)
  {
    if(!popUpWin.closed) popUpWin.close();
  }
  popUpWin = open(URLStr, 'popUpWin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=yes, width='+width+', height='+height+', left='+left+', top='+top+', screenX='+left+', screenY='+top+'');
}
</script>

<title>Result Management System</title>
=======
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="Result Managment System"/>
    <meta name="keywords" content="RMS, Result Managment System"/>
    <!--<link rel="stylesheet" type="text/css" href="../css/style_fixed.css" />-->
    <link rel="stylesheet" type="text/css" href="../css/style_fluid.css"/>
    <link href="../css/login.css" rel="stylesheet" type="text/css">
    <link href="../css/demo_table.css" rel="stylesheet" type="text/css">
    <link href="../css/TableTools.css" rel="stylesheet" type="text/css">

    <link href="../css/ui-lightbox.css" type="text/css" rel="stylesheet">
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>-->
    <script src="../js/jquery-1.4.2.js" type="text/javascript"></script>
    <script src="../js/uilightbox.jquery.js" type="text/javascript"></script>
    <script src="../js/jpopup.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="../js/jquery.dataTables.js"></script>

    <script type="text/javascript" charset="utf-8" src="../js/ZeroClipboard.js"></script>
    <script type="text/javascript" charset="utf-8" src="../js/TableTools.js"></script>

    <script type="text/javascript" charset="utf-8">
        $(document).ready(function () {
            var i = 0;

            $('#res_det').dataTable();
            $('#pending').dataTable();
            $('#approved').dataTable();
            $('#stu_rec').dataTable();

            var oTable = $('#stu_rec').dataTable();
            var oTableTools = new TableTools(oTable, {
                "sSwfPath":"swf/copy_csv_xls_pdf.swf",
                "aButtons":[
                    "print",
                    {
                        "sExtends":"collection",
                        "sButtonText":"Save",
                        "aButtons":["xls", "pdf" ]
                    }
                ]


            });
            $('#table_container').before(oTableTools.dom.container);


        });

    </script>


    <script type="text/javascript">
        function submitform() {
            document.forms["result"].submit();
        }
    </script>
    <script type="text/javascript">
        var popUpWin = 0;
        function popUpWindow(URLStr, left, top, width, height) {
            if (popUpWin) {
                if (!popUpWin.closed) popUpWin.close();
            }
            popUpWin = open(URLStr, 'popUpWin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=yes, width=' + width + ', height=' + height + ', left=' + left + ', top=' + top + ', screenX=' + left + ', screenY=' + top + '');
        }
    </script>

    <title>Result Management System</title>
>>>>>>> GithubRMS/master
</head>
<body>

<div id="top">

<<<<<<< HEAD
<div id="header">
<h1>RESULT MANAGEMENT SYSTEM</h1>
</div>

<div id="topmenu">
<ul>
			<?php if (($user_type == "admin") || ($user_type == "faculty")){ if ($thispage == "add") {echo "<li><a href=\"javascript: submitform()\" ><img src=\"../images/save.png\" class=\"right-img\">Save</a></li>";}else{echo "<li><a href=\"#\"  onClick=\"var result =''; var type ='add'; jpopup(result,type);\"><img src=\"../images/add.png\" class=\"right-img\">Add</a></li>";}if ($thispage == "details"){echo '<li><a href="#" onClick="var result =\''.$table_name.'\'; type =\'delete\'; jpopup(result,type);" ><img src="../images/delete.png" class="right-img">Delete</a></li>';} if ($thispage == "view_stu") {echo "<li><a href=\"javascript: submitform()\" ><img src=\"../images/delete.png\" class=\"right-img\">Delete</a></li>";}}if (($user_type == "admin") || ($user_type == "faculty")){echo "<li><a href=\"#\" onClick=\"var result =''; var type ='news'; jpopup(result,type);\"><img src=\"../images/news.png\" class=\"right-img\">Create News</a></li>";}?>

<li><a href="#"  onClick="var result = ''; var type = 'logout'; jpopup(result,type);"><img class="right-img" src="../images/logout.png">Logout</a></li>

</ul>
</div>

<div class="clear"> </div>
=======
    <div id="header">
        <h1>RESULT MANAGEMENT SYSTEM</h1>
    </div>

    <div id="topmenu">
        <ul>
            <?php if (($user_type == "admin") || ($user_type == "faculty")) {
            if ($thispage == "add") {
                ?>
                <li><a href="javascript: submitform();"><img src="../images/save.png" class="right-img">Save</a></li>
                <?php
            } else {
                ?>
                <li><a href="#" onClick="jpopup("","add");"><img alt="" src="../images/add.png" class="right-img">Add</a></li>
                <?php
            }
            if ($thispage == "details") {
                ?>
                <li><a href="#" onClick="jpopup('. $table_name . ',delete);"><img src="../images/delete.png"
                                                                                   class="right-img">Delete</a></li>
                <?php
            }
            if ($thispage == "view_stu") {
                ?>
                <li><a href="javascript: submitform();"><img src="../images/delete.png" class="right-img">Delete</a>
                </li>
                <?php
            }
                ?>
                <li><a href="#" onClick="jpopup(,news);"><img alt="" src="../images/news.png" class="right-img">Create News</a>
                </li>
            <?php
            }
            ?>
            <li><a href="#" onClick="var result = ''; var type = 'logout'; jpopup(result,type);"><img class="right-img"
                                                                                                      src="../images/logout.png">Logout</a>
            </li>

        </ul>
    </div>

    <div class="clear"></div>
>>>>>>> GithubRMS/master

</div>

<div id="contentwrap">

<<<<<<< HEAD
<div class="cleft">
<h3>Logged in as:</h3>
<div id="sidebar">
<div class ="user"><?php echo $_SESSION['user_name']; ?></div>
<?php if ($user_type == "student"){?>
<div class="user">EP No: <?php echo $_SESSION['user_ep']; ?> </div>
<?php }?>
</div>

<div class="clear"></div>
<ul>
<?php if ($user_type == "admin"){ echo "<li><a href=\"admincp.php\"><img  class=\"right-img\" src=\"../images/admincp.png\">Admin Panel</a></li><li><a href=\"showall.php\"><img  class=\"right-img\" src=\"../images/results.png\">All Results</a></li><li><a href=\"sys_info.php\"><img  class=\"right-img\" src=\"../images/system.png\">System Information</a></li>";}?>
<?php if (($user_type == "student") || ($user_type == "faculty")){ echo "<li><a href=\"showall.php\"><img  class=\"right-img\" src=\"../images/results.png\">All Results</a></li>";}?>
<?php if (($user_type == "admin") || ($user_type == "faculty")){ echo "<li><a href=\"view_stu.php\" ><img src=\"../images/users.png\" class=\"right-img\">View Students</a></li>";}?>
</ul>

</div>
<div class="cright">
=======
    <div class="cleft">
        <h3>Logged in as:</h3>

        <div id="sidebar">
            <div class="user"><?php echo $_SESSION['user_name']; ?></div>
            <?php if ($user_type == "student") { ?>
            <div class="user">EP No: <?php echo $_SESSION['user_ep']; ?> </div>
            <?php }?>
        </div>

        <div class="clear"></div>
        <ul>
            <?php if ($user_type == "admin") {
            echo '<li><a href="admincp.php"><img  class="right-img" src="../images/admincp.png">Admin Panel</a></li><li><a href="showall.php"><img  class="right-img" src="../images/results.png">All Results</a></li><li><a href="sys_info.php"><img  class="right-img" src="../images/system.png">System Information</a></li>';
        }?>
            <?php if (($user_type == "student") || ($user_type == "faculty")) {
            echo '<li><a href="showall.php"><img  class="right-img" src="../images/results.png">All Results</a></li>';
        }?>
            <?php if (($user_type == "admin") || ($user_type == "faculty")) {
            echo '<li><a href="view_stu.php" ><img src="../images/users.png" class="right-img">View Students</a></li>';
        }?>
        </ul>

    </div>
    <div class="cright">
>>>>>>> GithubRMS/master

