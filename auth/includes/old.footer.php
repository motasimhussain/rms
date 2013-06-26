<?php
/*	include('includes/connect.php');
	$records = mysql_query("SELECT * FROM abadmis", $db);
	if($entries = @mysql_num_rows($records))
	{
		if ($entries > 1)
			$footer = "There are $entries entries in the database.";
		else
			if ($entries = 1)
				$footer = "There is only 1 entry in the databse.";
	}
	else
	{
		$footer = "There are no entries in the database !";
	}
	
	mysql_close($db);

*/
?>
<?php
require_once ("includes/connect.php");
mysql_select_db("information_schema") or die(mysql_error());
$query1 = "SELECT `CREATE_TIME` FROM `TABLES` WHERE `TABLE_SCHEMA` LIKE '$databasename' AND `TABLE_NAME` LIKE '$table_name'";
$result1 = mysql_query($query1) or die(mysql_error());
while ($row = mysql_fetch_array($result1)) {
    echo '<hr>';
    echo '<div id="footer" >Result created on: ' . $row[0] . '</div>';
}
?>
<br/>
</div>
</body>
</html>

