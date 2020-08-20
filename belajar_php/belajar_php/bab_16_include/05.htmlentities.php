<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
 $kalimat="Sedang sarapan & \"minum kopi\" seharga £5.00 di café starbuck™";
 echo $kalimat;
 echo "<br>";
 
 echo htmlspecialchars($kalimat);
 echo "<br>";
 
 echo htmlentities($kalimat);
?>
</body>
</html>