<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  // menampilkan nilai maksimal fungsi rand() jika tanpa argumen
  echo getrandmax(); // 32767 
  echo "<br>";  
  echo rand();       // 3157    
  echo "<br>";
  echo rand();       // 22122 
  echo "<br>";
  
  // angka acak dengan batas nilai
  echo rand(0,1);  // 1 
  echo "<br>";
  echo rand(0,100);  // 89 
  echo "<br>";
  
  //untuk membuat angka acak pecahan
  echo rand(0,100)/100;  // 0.57 
?>
</body>
</html>