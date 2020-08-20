<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $nama="andi";
  define("GAJI", 3500000);
  
  echo "$nama bergaji Rp. GAJI"; // hasil: andi bergaji Rp. GAJI
  echo "<br>";
  echo "$nama bergaji Rp. ".GAJI; // hasil: andi bergaji Rp. 3500000
?>
</body>
</html>