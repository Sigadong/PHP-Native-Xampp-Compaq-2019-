<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  var_dump(10=='10'); // bool(true) 
  echo "<br />";
  
  var_dump(10==='10'); // bool(false) 
  echo "<br />";
  
  var_dump('Andi'==0); // bool(true) 
  echo "<br />";
  
  var_dump('10 ayam'==10); // bool(true) 
  echo "<br />";
  
  var_dump('10 ayam'===10); // bool(false) 
  echo "<br />";
  
  var_dump(true<false); // bool(false) 
  echo "<br />";
  
  $siswa1 = array("anto","andri");
  $siswa2 = array("anto","andri");
  var_dump($siswa1==$siswa2); // bool(true)
?>
</body>
</html>