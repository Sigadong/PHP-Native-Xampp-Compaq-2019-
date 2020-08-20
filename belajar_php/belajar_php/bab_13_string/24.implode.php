<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $array_sumber = array("HTML","CSS","PHP","MySQL","JavaScript");

  $string_hasil=implode("#",$array_sumber); 
  echo $string_hasil;   // HTML#CSS#PHP#MySQL#JavaScript
?>
</body>
</html>