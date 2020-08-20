<?php
// mulai session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
  <h1>Session</h1>
  <?php
    echo session_name(); // PHPSESSID 
  ?> 
</body>
</html>