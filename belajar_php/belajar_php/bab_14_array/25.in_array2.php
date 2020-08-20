<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $absensi = array("andi", "gina", "joko", "santi");
  if (in_array("joko",$absensi)) {
      echo "joko hadir";
  }
  else {
      echo "joko tidak hadir";
  }
  // joko hadir 
?>
</body>
</html>