<?php $thispage = "add"; ?>
<?php include ("includes/inc.header.php"); ?>
<br>
<?php
if (isset($_POST['create'])) {
    $subject_temp = isset($_POST['subject']) ? $_POST['subject'] : '';
    $subject = strtolower(preg_replace(" ", "_", $subject_temp));
    $year = isset($_POST['year']) ? $_POST['year'] : '';
    $semester = isset($_POST['semester']) ? $_POST['semester'] : '';
    $field = isset($_POST['field']) ? $_POST['field'] : '';
    $section = isset($_POST['section']) ? $_POST['section'] : '';
    $teach_temp = isset($_POST['teacher']) ? $_POST['teacher'] : '';
    $teacher = strtolower(preg_replace(" ", "_", $teach_temp));
    $ep_from = isset($_POST['ep_from']) ? $_POST['ep_from'] : '';
    $ep_to = isset($_POST['ep_to']) ? $_POST['ep_to'] : '';
    $max_marks = isset($_POST['max_marks']) ? $_POST['max_marks'] : '';
    $i = 0;
    $max_stu = ($ep_to - $ep_from) + 1;


    $table_name = "res_" . $subject . "_" . $year . "_" . $semester . "_" . $field . "_" . $section . "_" . $teacher;
//echo $table_name; Debug the creation of complete table name.
    ?>
<h2>Add Result</h2>
<div id="heading-content">
    <table align="center" style="text-align:left;">
        <tr>
            <td><?php echo "<p><b>Subject:</b> " . $subject_temp . "</p>";?></td>
            <td><?php echo "<p><b>Year:</b> " . $year . "</p>";?></td>
            <td> <?php echo "<p><b>Teacher:</b> " . preg_replace("_", " ", $teacher);?></td>
        </tr>
        <tr>
            <td> <?php echo "<p><b>Semester:</b> " . preg_replace("s", " ", $semester) . "</p>";?></td>
            <td><?php echo "<p><b>Field:</b> " . strtoupper($field) . "</p>";?></td>
            <td><?php echo "<p><b>Section:</b> " . preg_replace("_", " ", $section) . "</p>";?></td>
        </tr>
    </table>

</div>

<table align="center" class="header">
    <tr>
        <td width="33%">Enrolment #:</td>
        <td width="33%">Marks Obtained:</td>
        <td width="33%">Max Marks:</td>
    </tr>
</table>
<?php
    echo '<div id = "scrollable" class= "border"><form name="result" method="post" action="includes/process.php">';
    echo '<table align = "center">';
    for ($i = 0; $i < $max_stu; $i++) {

        echo "<tr>";


        echo '<td width="33%"><input type="text" name="stu_epnum' . $i . '" value="' . ($ep_from + $i) . '"></td>';
        echo '<td width="33%"><input type="text" name="stu_marks' . $i . '" value="0" tabindex="' . ($i + 1) . '"> </td>';
        echo '<td width="33%">' . $max_marks . '</td>';


        echo "</tr>";
    }
    echo '<input type="hidden" name="marks_max" value="' . $max_marks . '">';
    echo '<input type="hidden" name="stu_max" value="' . $i . '">';
    echo '<input type="hidden" name="table_name" value="' . $table_name . '">';
    echo '</table>';
    echo '<input type="submit" name="save_result" value="Save" style="float:right;margin:10px;">';
    echo '</form></div>';

}
?>
<?php include ("includes/inc.footer.php"); ?>