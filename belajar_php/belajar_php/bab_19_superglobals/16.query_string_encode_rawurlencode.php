<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<h1>Query String</h1>
<?php
  $alamat_folder=rawurlencode("data siswa/folder penting/index.php");
  $nama=urlencode("Ria Amelia & Echa Putri");
  $alamat=urlencode("Jakarta Selatan");
  $url="{$alamat_folder}?nama={$nama}&alamat=$alamat";
  
  echo $url."<br>";
?>
<a href="<?php echo $url; ?>">Link Rahasia</a>
</body>
</html>