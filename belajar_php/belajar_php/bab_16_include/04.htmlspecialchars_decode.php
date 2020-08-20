<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
 $kalimat1=htmlspecialchars("tag <a href=\"index.php\">, digunakan untuk membuat link ke halaman index.php");
 echo $kalimat1;
 
 echo "<br>";
 
 $kalimat1_decode=htmlspecialchars_decode($kalimat1);
 echo $kalimat1_decode;
?>
</body>
</html>