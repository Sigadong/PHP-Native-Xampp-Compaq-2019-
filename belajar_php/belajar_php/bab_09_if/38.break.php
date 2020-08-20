<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  for ($i=0; $i <= 10; $i++) {
    if ($i==5) {
      break;
    }             
  echo "<p>$i</p>";
  }
?>
</body>
</html>