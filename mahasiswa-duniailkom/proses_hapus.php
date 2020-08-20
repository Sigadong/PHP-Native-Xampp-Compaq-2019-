<?php
  session_start();
  if (!isset($_SESSION["nama"])) {
     header("Location: login.php");
  }
 
  include("koneksi.php");

  if (isset($_POST["hapus"])) {
    $npm = htmlentities(strip_tags(trim($_POST["npm"])));
    $npm = mysqli_real_escape_string($link,$npm);
    
    $query = "DELETE FROM mahasiswa WHERE npm='$npm' ";
    $hasil_query = mysqli_query($link, $query);
  
    if($hasil_query) {
        $pesan = "Mahasiswa dengan npm = \"<b>$npm</b>\" sudah berhasil di hapus";
      $pesan = urlencode($pesan);
        header("Location: tampil_mhs.php?pesan={$pesan}");
    } 
    else { 
      die ("kuery gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));
    }
  }
?>