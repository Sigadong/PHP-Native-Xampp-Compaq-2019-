<?php
 $alamat_link=array("home.php","Kategori.php","artikel.php", "shop.php",
                    "login.php");
 $judul_link=array("Link ke halaman Home", "Link ke halaman Kategori",
                   "Link ke halaman Artikel", "Link ke halaman Shop",
                   "Link ke halaman Login");
?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  echo "<a href=\"$alamat_link[0]\">$judul_link[0]</a>";
  echo "<br>";  
  echo "<a href=\"$alamat_link[1]\">$judul_link[1]</a>";
  echo "<br>";  
  echo "<a href=\"$alamat_link[2]\">$judul_link[2]</a>";
  echo "<br>";  
  echo "<a href=\"$alamat_link[3]\">$judul_link[3]</a>";
  echo "<br>"; 
  echo "<a href=\"$alamat_link[4]\">$judul_link[4]</a>";
  echo "<br>";
?>
</body>
</html>