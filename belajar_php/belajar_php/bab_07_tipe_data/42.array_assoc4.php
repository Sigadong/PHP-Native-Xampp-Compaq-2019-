<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $siswa = array(
                 "kelas_x"   => array ( "Santi", "Yanto", "Reza"),
                 "kelas_xi"  => array ( "Tia", "Siska", "Nova"),
                 "kelas_xii" => array ( "Robert", "Rudi", "Alex")
                 );
  
  echo $siswa["kelas_xi"][0];  //Tia
  echo "<br>";
  echo $siswa["kelas_xii"][2]; // Alex
  echo "<br>";
  echo $siswa["kelas_x"][1];   // Yanto
  
  echo "<pre>";
  print_r($siswa);
  echo "</pre>";
?>  
</body>
</html>