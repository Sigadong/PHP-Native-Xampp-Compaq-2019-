<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $angka_nol=0;
  $angka_int=12;
  $angka_float=99.75;
  $bool_true=true;
  $bool_false=false;
  $array_isi = array ("a","b","c");
  $null = null;
  $object = new stdClass;
  $resource = mysql_connect("localhost", "root", ""); 
  
  $angka_nol = (string) $angka_nol;
  var_dump($angka_nol); // string(1) "0" 
  echo "<br>";
  
  $angka_int = (string) $angka_int;
  var_dump($angka_int); // string(2) "12" 
  echo "<br>";
  
  $angka_float = (string) $angka_float;
  var_dump($angka_float); // string(5) "99.75" 
  echo "<br>";
  
  $bool_true = (string) $bool_true;
  var_dump($bool_true); // string(1) "1" 
  echo "<br>";
  
  $bool_false = (string) $bool_false;
  var_dump($bool_false); // string(0) "" 
  echo "<br>";
  
  $array_isi = (string) $array_isi;
  var_dump($array_isi); // string(5) "Array" (dengan error Notice)
  echo "<br>";
  
  $null = (string) $null;
  var_dump($null); // string(0) "" 
  echo "<br>";
  
  $resource = (string) $resource;
  var_dump($resource); // string(14) "Resource id #3" 
  echo "<br>"; 
  
  $object = (string) $object;
  var_dump($object); // error
  // Catchable fatal error: Object of class stdClass
  // could not be converted to string
?>
</body>
</html>