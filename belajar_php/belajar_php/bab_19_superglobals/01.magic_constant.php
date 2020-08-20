<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<h1>PHP Magic Constants</h1>
<?php
  function ada_ada_saja() {
    return "Teks ini berasal dari fungsi: ".__FUNCTION__;
  }
  
  echo "Teks ini berada di baris : ".__LINE__."<br>";
  echo "Alamat lengkap file ini adalah : ".__FILE__."<br>";
  echo "File ini berada di folder: ".__DIR__."<br>";
  echo ada_ada_saja()."<br>";
?>
</body>
</html>