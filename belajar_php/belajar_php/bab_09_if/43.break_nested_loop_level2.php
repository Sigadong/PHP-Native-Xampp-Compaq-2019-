<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  for ($i=0; $i <10; $i++)
  {
    for ($j=0; $j <10; $j++)
    {
      if ($i==4)
      {
        break 2;
      }
      echo $i;
    }
  echo "<br>";
  }
?>
</body>
</html>