<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $angka_float=99.75;
  $string_kosong="";
  $string_nol="0";
  $string_spasi=" ";
  $string_angka="99 ekor kucing";
  $string_kata="belajar PHP";
  $bool_true=true;
  $bool_false=false;
  $array_kosong = array ();
  $array_isi = array ("a","b","c");
  $null = null;
  $object = new stdclass;
  
  $angka_float = (int) $angka_float;
  var_dump($angka_float); // int(99) 
  echo "<br>";
  
  $string_kosong = (int) $string_kosong;
  var_dump($string_kosong); // int(0) 
  echo "<br>";
  
  $string_nol = (int) $string_nol;
  var_dump($string_nol); // int(0) 
  echo "<br>";
  
  $string_spasi = (int) $string_spasi;
  var_dump($string_spasi); // int(0) 
  echo "<br>"; 
  
  $string_angka = (int) $string_angka;
  var_dump($string_angka); // int(99) 
  echo "<br>";
  
  $string_kata = (int) $string_kata;
  var_dump($string_kata); // int(0) 
  echo "<br>";
  
  $bool_true = (int) $bool_true;
  var_dump($bool_true); // int(1) 
  echo "<br>";
  
  $bool_false = (int) $bool_false;
  var_dump($bool_false); // int(0) 
  echo "<br>";
  
  $array_kosong = (int) $array_kosong;
  var_dump($array_kosong); // int(0) 
  echo "<br>";
  
  $array_isi = (int) $array_isi;
  var_dump($array_isi); // int(1) 
  echo "<br>";
  
  $null = (int) $null;
  var_dump($null); // int(0) 
  echo "<br>";
  
  $object = (int) $object;
  var_dump($object); // int(1)  
  // Notice: Object of class stdClass could not be converted to int 
?>
</body>
</html>