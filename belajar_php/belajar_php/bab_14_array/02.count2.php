<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $zoo = 
    array(
         "ayam" => array("kampung","buras","kate","hutan"),
         "kucing" => array("persia","himalaya","anggora","kampung","hutan")
         );
  echo count($zoo); // 2 
  echo "<br>";
  echo count($zoo,COUNT_RECURSIVE); // 11
?> 
</body>
</html>