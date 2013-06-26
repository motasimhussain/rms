<?php include "includes/inc.header.php"; ?>

<h2>Available Results</h2>
<table id="approved" class="border">
<thead>
<tr>
    <?php
    $results = showresults_approved();
    if (mysql_num_rows($results) <= 0)
        echo '<th>Results:</th></tr></thead><tbody><tr><th>No Approved results</th></tr></tbody></table>';
    else {
        ?>
        <th width="10%">Type:</th>
        <th width="10%">Subject:</th>
        <th width="5%">Year:</th>
        <th width="15%">Semester:</th>
        <th width="5%">Section:</th>
        <th width="20%">Teacher:</th>
        <?php if ($user_type == "admin") { ?>
            <th width="10%">Action:</th>
            <?php } ?>
</tr>
</thead>
<tbody>
<?php

        $i = 0;
        While ($data = mysql_fetch_array($results, MYSQL_BOTH)) {

            echo "<tr>";


            $parts = table_name_filter($data[0]);
            echo '<th width="10%"><a href="details.php?result=' . $data[0] . '">Result</a></th>';
            echo '<th width="10%">' . preg_replace("_", " ", $parts[2]) . '</th>';
            echo '<th width="5%">' . $parts[3] . '</th>';
            echo '<th width="15%">' . preg_replace("s", "-", $parts[4]) . strtoupper($parts[5]) . '</th>';
            echo '<th width="5%">' . preg_replace("_", " ", $parts[6]) . '</th>';
            echo '<th width="20%">' . preg_replace("_", " ", $parts[7]) . '</th>';
            if ($user_type == "admin") {
                echo '<th width="10%"><form name="result_status" action="includes/process.php" method="post"><input type= "hidden" name="result_name" value="' . $parts[0] . '"><input type = "hidden" name = "action" value="remove"><input type="submit" value="Remove" name="change_status"></form></th>';
            }


            echo "</tr>";


            $i++;
        }

    }?>
</tbody>
</table>

<?php

include "includes/inc.footer.php";
?>
