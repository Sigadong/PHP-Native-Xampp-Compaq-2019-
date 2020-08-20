<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $i=1000;
  while ($i <= 10)
  {
    echo "$i";
    echo "<p>Tidak akan tampil di browser</p>";
    $i=$i+1;
  }
?>
</body>
</html>