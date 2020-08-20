<?php
 $siswa=array("siswa1" => array ("Joko","Medan","12 Agustus 1998"),
              "siswa2" => array ("Rini","Jakarta","22 Juli 1999"),
              "siswa3" => array ("Alex","Bandung","9 Januari 2000"),
              "siswa4" => array ("Joy","Samarinda","4 Maret 1998"),
              "siswa5" => array ("Santi","Palembang","12 Desember 1999")
 );
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
 echo "<p>{$siswa["siswa1"][0]} - {$siswa["siswa1"][1]} - 
       {$siswa["siswa1"][2]} </p>";
 echo "<p>{$siswa["siswa2"][0]} - {$siswa["siswa2"][1]} - 
      {$siswa["siswa2"][2]} </p>";
 echo "<p>{$siswa["siswa3"][0]} - {$siswa["siswa3"][1]} - 
      {$siswa["siswa3"][2]} </p>";
 echo "<p>{$siswa["siswa4"][0]} - {$siswa["siswa4"][1]} - 
      {$siswa["siswa4"][2]} </p>";
 echo "<p>{$siswa["siswa5"][0]} - {$siswa["siswa5"][1]} - 
      {$siswa["siswa5"][2]} </p>";
?>
</body>
</html>