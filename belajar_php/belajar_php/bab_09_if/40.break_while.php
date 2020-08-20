<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $i=0;
  while ($i <= 10)
  {
    $i++;
    if ($i==5)
    {
      break;
    }
  echo "<p>$i</p>";
  }
?>
</body>
</html>