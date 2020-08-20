<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<h1>Superglobals Variable $_SERVER</h1>
<?php
  $cari = strpos($_SERVER["HTTP_USER_AGENT"],"Firefox");
  if ($cari !== false) {
    echo "Anda mengakses web ini dari Mozilla Firefox";
  }
  else {
    echo "Anda tidak menggunakan web browser Mozilla Firefox";
  }
?>
</body>
</html>