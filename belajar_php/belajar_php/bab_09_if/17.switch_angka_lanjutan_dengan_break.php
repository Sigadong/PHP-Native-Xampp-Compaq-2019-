<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $a=6;
  switch ($a)
  {
    case 0 : echo "Angka berada di dalam range 0-3";  break;
    case 1 : echo "Angka berada di dalam range 0-3";  break;
    case 2 : echo "Angka berada di dalam range 0-3";  break;
    case 3 : echo "Angka berada di dalam range 0-3";  break;
    case 4 : echo "Angka berada di dalam range 4-7";  break;
    case 5 : echo "Angka berada di dalam range 4-7";  break;
    case 6 : echo "Angka berada di dalam range 4-7";  break;
    case 7 : echo "Angka berada di dalam range 4-7";  break;
    default : echo "Angka diluar jangkauan";          break;
  }
?>
</body>
</html>