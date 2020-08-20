<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
 $kalimat1=htmlspecialchars("tag <table> digunakan untuk membuat tabel di HTML");
 echo $kalimat1;
 
 echo "<br>";
 
 $kalimat2=htmlspecialchars("tag <a href=\"index.php\">, digunakan untuk membuat link ke halaman index.php");
 echo $kalimat2;
?>
</body>
</html>