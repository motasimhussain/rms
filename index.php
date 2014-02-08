<?php require_once ("auth/includes/connect.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<<<<<<< HEAD
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css' />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="Result Managment System - Login" />
<meta name="keywords" content="RMS, Result Managment System, Login" />
<!--<link rel="stylesheet" type="text/css" href="css/style_fixed.css" />-->
<link rel="stylesheet" type="text/css" href="css/style_fluid.css" />
<link href="css/login.css" rel="stylesheet" type="text/css">
<link href="css/jquery.ui.all.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.core.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.tabs.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.datepicker.min.js"></script>
<script type="text/javascript" src="js/jlogin.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
   var jQueryTabs1Opts =
   {
      fx:
      {
         opacity: 'toggle',
         duration: 'normal'
      },
      event: 'click',
      deselectable: 'false'
   };
   $("#jQueryTabs1").tabs(jQueryTabs1Opts);
  
     var jQueryDatePicker1Opts =
   {
      dateFormat: 'dd/mm/yy',
      changeMonth: true,
      changeYear: true,
      showButtonPanel: false,
      showAnim: 'show'
   };
   $("#jQueryDatePicker1").datepicker(jQueryDatePicker1Opts);
   $("#jQueryDatePicker1").datepicker("setDate", "new Date()");
  
});



</script>
<title>Result Management System</title>
=======
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="Result Managment System - Login"/>
    <meta name="keywords" content="RMS, Result Managment System, Login"/>
    <!--<link rel="stylesheet" type="text/css" href="css/style_fixed.css" />-->
    <link rel="stylesheet" type="text/css" href="css/style_fluid.css"/>
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.ui.all.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.ui.core.min.js"></script>
    <script type="text/javascript" src="js/jquery.ui.widget.min.js"></script>
    <script type="text/javascript" src="js/jquery.ui.tabs.min.js"></script>
    <script type="text/javascript" src="js/jquery.ui.datepicker.min.js"></script>
    <script type="text/javascript" src="js/jlogin.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var jQueryTabs1Opts =
            {
                fx:{
                    opacity:'toggle',
                    duration:'normal'
                },
                event:'click',
                deselectable:'false'
            };
            $("#jQueryTabs1").tabs(jQueryTabs1Opts);

            var jQueryDatePicker1Opts =
            {
                dateFormat:'dd/mm/yy',
                changeMonth:true,
                changeYear:true,
                showButtonPanel:false,
                showAnim:'show'
            };
            $("#jQueryDatePicker1").datepicker(jQueryDatePicker1Opts);
            $("#jQueryDatePicker1").datepicker("setDate", "new Date()");

        });


    </script>
    <title>Result Management System</title>
>>>>>>> GithubRMS/master
</head>
<body>

<div id="top">

<<<<<<< HEAD
<div id="header">
<h1>Login</h1>
</div>
<div class="clear"> </div>
=======
    <div id="header">
        <h1>Login</h1>
    </div>
    <div class="clear"></div>
>>>>>>> GithubRMS/master
</div>


<div id="contentwrap">

<<<<<<< HEAD
<div class = "cleft">
<h3>Student Login:</h3>
<div id="sidebar">
<form id="form_login" name="login" action="auth/includes/process.php" method="post">Enrolment No:<br><input type="text" value="" name="epnum"><br>Password:<br><input type="password" value="" name="password"><br><input id="form_submit_normal" type="submit" value="Login" name="login"></form>
</div>

<h3>Admin / Faculty Login</h3>
<div id="sidebar">
<form id="form_login" name="login" action="auth/includes/process.php" method="post">Username:<br><select name="username"><option value="administrator" selected="selected">Administrator</option><option value="faculty">Faculty</option></select><br>Password:<br><input type="password" value="" name="password"><br><input id="form_submit_normal" type="submit" value="Login" name="login"></form>
</div>

</div>
<div class="cright">
<div style="width:410px; margin:30px auto; text-align:center;">
<img src="images/rms.png" id="Image1" alt="" border="0" style="width:188px;height:100px; margin:auto;">
</div>
<h2>Announcements</h2>
<?php $data = show_news('system');
while($news = mysql_fetch_array($data)){
echo '<div align="left">'.$news[2].'</div>';
}?>
</div>
</div>
<div class="clear"> </div>
=======
    <div class="cleft">
        <h3>Student Login:</h3>

        <div id="sidebar">
            <form id="form_login" name="login" action="auth/includes/process.php" method="post"><label>Enrolment
                No:</label><br><input type="text" value="" name="epnum"><br><label>Password:</label><br><input
                    type="password" value="" name="password"><br><input id="form_submit_normal" type="submit"
                                                                        value="Login" name="login"></form>

            <h3>Admin / Faculty Login</h3>

            <form id="form_login" name="login" action="auth/includes/process.php" method="post"><label>Username:</label><br><select
                    name="username">
                <option value="administrator" selected="selected">Administrator</option>
                <option value="faculty">Faculty</option>
            </select><br><label>Password:</label><br><input type="password" value="" name="password"><br><input
                    id="form_submit_normal" type="submit" value="Login" name="login"></form>
        </div>

    </div>
    <div class="cright">
        <div style="width:410px; margin:30px auto; text-align:center;">
            <img src="images/rms.png" id="Image1" alt="" border="0" style="width:188px;height:100px; margin:auto;">
        </div>
        <h2>Announcements</h2>
        <?php $data = show_news('system');
        while ($news = mysql_fetch_array($data)) {
            echo '<div align="left">' . $news[2] . '</div>';
        }?>
    </div>
</div>
<div class="clear"></div>
>>>>>>> GithubRMS/master

</div>

<div id="footer">
<<<<<<< HEAD
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20003234-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<div class="left">
Copyright &copy; 2012 by <a href="#">RMS</a>
</div>

<div class="right"> 
<!-- Please consider leaving the credit - link back to our website in the footer intact or if you want to remove it please buy link back free license on http://www.simpletemplates.org/simple-website-template-2.html
-->
Design by <a href="http://www.facebook.com/usmandgreat">Usman Durrani</a>
</div>

<div class="clear"> </div>
=======

    <div class="left">
        Copyright &copy; 2012 by <a href="#">RMS</a>
    </div>

    <div class="right">
        <!-- Please consider leaving the credit - link back to our website in the footer intact or if you want to remove it please buy link back free license on http://www.simpletemplates.org/simple-website-template-2.html
        -->
        Design by <a href="http://www.facebook.com/usmandgreat">Usman Durrani</a>
    </div>

    <div class="clear"></div>
>>>>>>> GithubRMS/master

</div>

</body>
</html>