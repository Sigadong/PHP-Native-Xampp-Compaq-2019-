<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<?php
  class siswa {
    public $nama;
    public $umur;
    public $tgl_lahir;
    
    function get_nama(){
      return $this->nama;
    }
  }
  
  $andi = new siswa;
  $andi->nama="Andi";
  $andi->umur=13;
  $andi->tgl_lahir="13 Des 1990";
  
  echo "<pre>";
  print_r($andi);
  echo "</pre>";
?> 
</body>
</html>