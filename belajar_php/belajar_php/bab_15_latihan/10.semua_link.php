<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  echo "<a href=home.php>Link ke halaman Home</a>";
  echo "<a href='home.php'>Link ke halaman Home</a>";
  echo "<a href=\"home.php\">Link ke halaman Home</a>";
  echo '<a href="home.php">Link ke halaman Home</a>';
?>
<a href="<?php echo "home.php"; ?>"><?php echo "Link ke halaman Home" ?></a>
</body>
</html>