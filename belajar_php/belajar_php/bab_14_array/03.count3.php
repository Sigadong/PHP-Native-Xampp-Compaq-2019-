<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $zoo = array("kucing","ikan","ayam","bebek","sapi");
  
  for ($i=0; $i < count($zoo); $i++) {
      echo $zoo[$i];
      echo "<br>";
  }
?>
</body>
</html>