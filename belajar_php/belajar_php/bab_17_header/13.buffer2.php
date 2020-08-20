<?php
  echo "Teks ini sudah dikirim ke web browser";
  ob_start();
  
  header("Location: http://www.google.com");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
  <h1>Belajar HTTP header</h1>
</body>
</html>
<?php 
  ob_end_flush();
?>