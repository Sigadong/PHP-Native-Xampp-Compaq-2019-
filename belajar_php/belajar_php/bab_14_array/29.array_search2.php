<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $nilai = array("anton" => 82, "rudy" => 81,"rini" => 95);
  $key = array_search(95,$nilai);
  
  if ($key!==false) {
      echo "Siswa yang dapat nilai 95 adalah $key";
  }
  else {
      echo "Tidak ada siswa yang dapat nilai 95";
  }
  //  Siswa yang dapat nilai 95 adalah rini 
?> 
</body>
</html>