<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  $komentar="<b>Nice info gan</b>, <br> <i>kunjungi blog ane ya.. </i>
             <a href='http://www.situsspam.com'>www.situsspam.com</a>";
  echo $komentar;
  // <b>Nice info gan</b>, <br> <i>kunjungi blog ane ya.. </i>
  // <a href='http://www.situsspam.com'>www.situsspam.com</a> 
  echo "<br>";
  
  echo strip_tags($komentar);
  // Nice info gan,  kunjungi blog ane ya.. 
  // www.situsspam.com 
  echo "<br>";
  
  echo strip_tags($komentar,"<br><i>");    
  // Nice info gan, <br> <i>kunjungi blog ane ya.. </i>
  // www.situsspam.com
?>
</body>
</html>