<?php $thispage = "details" ?>
<<<<<<< HEAD
<?php 
=======
<?php
>>>>>>> GithubRMS/master
$table_name = $_GET['result'];
?>
<?php include "includes/inc.header.php"; ?>

<h2>Result Details</h2>
<<<<<<< HEAD
<div id = "heading-content">

	<?php	$parts = table_name_filter($table_name);?>
	<table align="center" style="text-align:left;">
	<tr>
	<th><?php echo "<p><b>Subject:</b> ".ereg_replace("_"," ",$parts[2])."</p>";?></th>
	<th><?php echo "<p><b>Year:</b> " .$parts[3]."</p>";?></th>
	<th> <?php echo "<p><b>Teacher:</b> " .ereg_replace("_"," ",$parts[7]);?></th>
	</tr>
	<tr>
	<th> <?php echo "<p><b>Semester:</b> " .ereg_replace("s","-Semester",$parts[4])."</p>";?></th>
	<th><?php echo "<p><b>Field:</b> " .strtoupper($parts[5])."</p>";?></th>
	<th><?php echo "<p><b>Section:</b> " .$parts[6]. "</p>";?></th>
	</tr>
	</table>
</div>
<br/>
<table id="res_det" class ="border">
<thead>
<tr>
<th width="12%">Enrolment #:</th>
<th width="20%">Students Name:</th>
<th width="20%">Fathers Name:</th>
<th width="15%">Marks Obtained:</th>
<th width="10%">Max Marks:</th>
<th width="10%">GPA / Grade:</th>
<th width="10%">Result:</th>
</tr>
</thead>
<tbody>
<?php 
$res = res_det($table_name);

While($data = mysql_fetch_array($res))

{
	echo "<tr>";
 

   	echo '<th width="12%">'.$data[0].'</th>';
	echo '<th width="20%">'.$data[1].'</th>';
	echo '<th width="20%">'.$data[2].'</th>';
	echo '<th width="15%">'.$data[3].'</th>';
	echo '<th width="10%">'.$data[4].'</th>';
$row_value = calc_gpa_grade($data[3],$data[4]);
	echo $row_value[0];
	echo $row_value[1];
			
						


	echo "</tr>";
	
 
  
	} ?>
</tbody>
</table>     
<?php
include "includes/inc.footer.php";   
=======
<div id="heading-content">

    <?php    $parts = table_name_filter($table_name);?>
    <table align="center" style="text-align:left;">
        <tr>
            <th><?php echo "<p><b>Subject:</b> " . preg_replace("_", " ", $parts[2]) . "</p>";?></th>
            <th><?php echo "<p><b>Year:</b> " . $parts[3] . "</p>";?></th>
            <th> <?php echo "<p><b>Teacher:</b> " . preg_replace("_", " ", $parts[7]);?></th>
        </tr>
        <tr>
            <th> <?php echo "<p><b>Semester:</b> " . preg_replace("s", "-Semester", $parts[4]) . "</p>";?></th>
            <th><?php echo "<p><b>Field:</b> " . strtoupper($parts[5]) . "</p>";?></th>
            <th><?php echo "<p><b>Section:</b> " . $parts[6] . "</p>";?></th>
        </tr>
    </table>
</div>
<br/>
<table id="res_det" class="border">
    <thead>
    <tr>
        <th width="12%">Enrolment #:</th>
        <th width="20%">Students Name:</th>
        <th width="20%">Fathers Name:</th>
        <th width="15%">Marks Obtained:</th>
        <th width="10%">Max Marks:</th>
        <th width="10%">GPA / Grade:</th>
        <th width="10%">Result:</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $res = res_det($table_name);

    While ($data = mysql_fetch_array($res)) {
        echo "<tr>";


        echo '<th width="12%">' . $data[0] . '</th>';
        echo '<th width="20%">' . $data[1] . '</th>';
        echo '<th width="20%">' . $data[2] . '</th>';
        echo '<th width="15%">' . $data[3] . '</th>';
        echo '<th width="10%">' . $data[4] . '</th>';
        $row_value = calc_gpa_grade($data[3], $data[4]);
        echo $row_value[0];
        echo $row_value[1];


        echo "</tr>";


    } ?>
    </tbody>
</table>
<?php
include "includes/inc.footer.php";
>>>>>>> GithubRMS/master
?>