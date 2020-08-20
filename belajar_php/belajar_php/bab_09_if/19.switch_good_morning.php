<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $user="sari";
  switch ($user)
  {
    case "joni" :
    case "andi" :
    case "joko" :
    case "alex" : echo "Good morning boys..."; break;
    case "ria"  :
    case "sari" :
    case "tia"  :
    case "nova" : echo "Good morning ladies..."; break;
  }
?>
</body>
</html>