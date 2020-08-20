<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<h1>Query String</h1>

<?php
  $nama=rawurlencode("Dewi & Thia");
  $alamat=rawurlencode("Bandung & Medan");
  $umur="23";
  
  $query_string="?nama={$nama}&alamat={$alamat}&umur={$umur}";
?>
<a href="proses.php<?php echo $query_string; ?>">Link Menuju proses.php</a>
</body>
</html>