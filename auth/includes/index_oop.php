<?php
  include "db_con_class.php";
  
  $db = new database();
  $db->connect("sql2.freesqldatabase.com","sql24913","aV3!wJ3!");
  $db->select_db("sql24913"); 
  echo $db->ret_current_db();
  echo mysql_fetch_array($db->query("*","test","name","usman"));
  
  
?>
