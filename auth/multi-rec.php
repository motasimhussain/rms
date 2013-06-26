<?php include "includes/inc.header.php"; ?>
<h2>Multi records</h2>
<form id="form" method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
   <label for="stats">
      Statistics:
   </label>
   <input type="text" name="stats" id="stats" />
   <br>
   <label for="eng">
      English:
   </label>
   <input type="text" name="eng" id="eng" />
   <br>
   <label for="#comp">
      Computer:
   </label>
   <input type="text" name="comp" id="comp" />
   <br>
   <label for="#phys">
      Physics:
   </label>
   <input type="text" name="phys" id="phys" />
   <br>
   <label for="#islam">
      Islamiat:
   </label>
   <input type="text" name="islam" id="islam" />
   <br>
   <label for="#urdu">
      Urdu:
   </label>
   <input type="text" name="urdu" id="urdu" />
   <br>
   <label for="#pst">
      Pakistan Studies:
   </label>
   <input type="text" name="pst" id="pst" />
   <input type="submit" name="submit">
</form>
<?php 


include "includes/inc.header.php";
?>	