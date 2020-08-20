<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $mahasiswa = array(
                    array("01", "Joko", "Akuntansi"),
                    array("02", "Nona", "Psikologi"),
                    array("03", "Lestya", "Matematika"),
                    array("04", "Tasya", "Kedokteran")                    
                    );
  
  while(list($no, $nama, $jurusan) = array_shift($mahasiswa))
  {
    echo "$no $nama $jurusan";
    echo "<br>";
  }
?>
</body>
</html>