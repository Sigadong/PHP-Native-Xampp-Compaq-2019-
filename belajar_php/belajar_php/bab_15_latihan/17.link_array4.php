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
<a href="<?php echo $alamat_link[0] ?>"><?php echo $judul_link[0] ?></a>
<br>
<a href="<?php echo $alamat_link[1] ?>"><?php echo $judul_link[1] ?></a>
<br>
<a href="<?php echo $alamat_link[2] ?>"><?php echo $judul_link[2] ?></a>
<br>
<a href="<?php echo $alamat_link[3] ?>"><?php echo $judul_link[3] ?></a>
<br>
<a href="<?php echo $alamat_link[4] ?>"><?php echo $judul_link[4] ?></a>
</body>
</html>