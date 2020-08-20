<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $alamat_link="home.php";
  $judul_link="Link ke halaman home";
?> 
<a href="<?php echo $alamat_link ?>"><?php echo $judul_link ?></a>
</body>
</html>