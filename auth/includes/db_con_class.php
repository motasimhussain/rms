<?php
  //OOP Conversion
  //DB connection class
  class database
  {
      public function connect($server,$user,$pass)
      {
          mysql_connect($server,$user,$pass)or die(mysql_error());
      }
      public function select_db($dbase)
      {
          mysql_select_db($dbase)or die(mysql_error());
          
      }
     public function ret_current_db()
     {
         $r= mysql_query("SELECT DATABASE()") or die(mysql_error());
         return mysql_result($r,0);

     }
     public function query($select_type,$table_name,$field_name,$field_value)
     {
         return mysql_query("SELECT $select_type FROM $table_name WHERE $field_name = $field_value")or die(mysql_error());
          
     
     }
  }
?>
