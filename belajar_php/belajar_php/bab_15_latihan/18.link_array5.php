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
  for ($i=0; $i<count($alamat_link); $i++)
  {
    echo "<a href=\"$alamat_link[$i]\">$judul_link[$i]</a>";
    echo "<br>";
  }
?>
</body>
</html>