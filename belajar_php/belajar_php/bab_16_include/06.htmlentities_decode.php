<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
 $kalimat="Sedang sarapan & \"minum kopi\" seharga £5.00 di café starbuck™";
 $kalimat_encode=htmlentities($kalimat);
 
 echo $kalimat_encode;
 echo "<br>";
 
 $kalimat_dencode=html_entity_decode($kalimat);
 echo $kalimat_dencode;
?>
</body>
</html>