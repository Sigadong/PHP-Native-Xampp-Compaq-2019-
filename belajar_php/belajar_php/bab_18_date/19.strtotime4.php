<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  echo date("d M Y", strtotime("11-10-2016")); // 11 Oct 2016
  echo "<br>";
  echo date("d M Y", strtotime("11/10/2016")); // 10 Nov 2016
?>
</body>
</html>