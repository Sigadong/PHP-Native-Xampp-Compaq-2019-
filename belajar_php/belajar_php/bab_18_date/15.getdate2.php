<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  date_default_timezone_set("Asia/Jakarta");
  $merdeka = getdate(mktime(10, 00, 00, 8, 17, 1945));
  
  // Tanggal: 17-8-1945
  echo "Tanggal: {$merdeka["mday"]}-{$merdeka["mon"]}-{$merdeka["year"]}";
?>
</body>
</html>