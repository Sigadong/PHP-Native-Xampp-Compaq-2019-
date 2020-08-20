<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  for ($i=0; $i <=10; $i++) {
    if ($i==5) {
      continue;
    }             
  echo "<p>$i</p>";
  }
?>
</body>
</html>