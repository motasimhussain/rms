<?php include ("./includes/inc.header.php"); ?>
<h2>System Information</h2>
<?php $sys_info = sys_info(); ?>
Total saved results: <?php echo $sys_info[0]; ?> <br>
Total registered students:  <?php echo $sys_info[1]; ?> <br>
Total approved results: <?php echo $sys_info[2]; ?> <br>
Total pending results: <?php echo $sys_info[3]; ?>
<?php include ("./includes/inc.footer.php"); ?>
