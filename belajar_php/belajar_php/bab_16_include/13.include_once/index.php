<?php
  include("function.php");
  include("header.php");
?>

<article>
  <p>Konten Halaman Home</p>
</article>

<?php
 include("function.php"); // Fatal error: Cannot redeclare salam() 
 echo koneksi("root");
 
 include("footer.php");
?>