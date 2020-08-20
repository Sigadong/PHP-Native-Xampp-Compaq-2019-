<?php
 $alamat_link=array("home.php","Kategori.php","artikel.php", "shop.php",
                    "login.php");
 $judul_link=array("Home", "Kategori", "Artikel", "Shop", "Login");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
  <style>
    ul {
      list-style: none;
      padding: 0;
      margin: 0;
      width: 200px;
    }
    li a {
      display: block;
      background-color: #198C13;
      color: white;
      text-decoration: none;
      font-size: 20px;
      height: 30px;
      line-height: 30px;
      padding-left: 10px;
      border-bottom: 2px solid #FFF;
    }
    li a:hover {
      background-color: #0AED0A;
      color: black;
    }
  </style>
<body>
<ul>
<?php
  for ($i=0; $i<count($alamat_link); $i++)
  {
?>
  <li>
    <a href="<?php echo $alamat_link[$i] ?>">
    <?php echo strtoupper($judul_link[$i]) ?></a>
  </li>
<?php
  }
?>
</ul>
</body>
</html>