<?php $thispage = "view_stu"; ?>
<?php include "includes/inc.header.php" ?>
<?php
$stu_login = "stu_login";
$result = query_all($stu_login,"","");
$result_num = mysql_num_rows($result);
?>
<h2>Student Record</h2>
<div id="table_container">
    <form id="result" action="includes/process.php" method="post">
        <table class="display" id="stu_rec">
            <thead>
            <tr>
                <th width="21%">Enrolment No.</th>
                <th width="35%">Full Name</th>
                <th width="35%">Fathers Name</th>
                <th width="3%">Section</th>
                <th width="3%">Semester</th>
                <?php if ($user_type == "admin") { ?>
                <th width="3%">Check</th>
                <?php } ?>
            </tr>
            </thead>
            <tbody>
            <?php $i = 0; While ($data = mysql_fetch_array($result)) {
                echo '<tr>';
                echo '<th width="21%">' . $data[0] . '</th>';
                echo '<th width="35%">' . $data[2] . '</th>';
                echo '<th width="35%">' . $data[3] . '</th>';
                echo '<th width="3%">' . $data[4] . '</th>';
                echo '<th width="3%">' . $data[5] . '</th>';
                if ($user_type == "admin") {

                    echo '<th width="3%"><input type="checkbox" value="' . $data[0] . '" name="ep_chkbox' . $i . '"></th>';
                }
                echo '</tr>';
                $i++;
            } ?>
            </tbody>

        </table>
        <input type="hidden" name="count" value="100">
    </form>
</div>
<?php

include "includes/inc.footer.php";
?>