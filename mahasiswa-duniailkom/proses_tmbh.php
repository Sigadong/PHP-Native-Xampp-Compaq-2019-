<?php
  session_start();
  if (!isset($_SESSION["nama"])) {
     header("Location: login.php");
  }
  include("koneksi.php");
  
  if (isset($_POST["tambah"])) {  

    $npm = htmlentities(strip_tags(trim($_POST["npm"])));
    $nama = htmlentities(strip_tags(trim($_POST["nama"])));
    $tempat_lahir = htmlentities(strip_tags(trim($_POST["tempat_lahir"])));
    $jurusan = htmlentities(strip_tags(trim($_POST["jurusan"])));
    $konsentrasi = htmlentities(strip_tags(trim($_POST["konsentrasi"])));
    $ipk = htmlentities(strip_tags(trim($_POST["ipk"])));
    $tgl = htmlentities(strip_tags(trim($_POST["tgl"])));
    $bln = htmlentities(strip_tags(trim($_POST["bln"])));
    $thn = htmlentities(strip_tags(trim($_POST["thn"])));
    
    $pesan_error="";
    
    if (empty($npm)) {
      $pesan_error .= "npm belum diisi <br>";
    }
    elseif (!preg_match("/^[0-9]{8}$/",$npm) ) {
      $pesan_error .= "npm harus berupa 8 digit angka <br>";
    }
    
    $npm = mysqli_real_escape_string($link,$npm);
    $query = "SELECT * FROM mahasiswa WHERE npm='$npm'";
    $hasil_query = mysqli_query($link, $query);
  
    $jumlah_data = mysqli_num_rows($hasil_query);
     if ($jumlah_data >= 1 ) {
       $pesan_error .= "npm yang sama sudah digunakan <br>";  
    }

    if (empty($nama)) {
      $pesan_error .= "Nama belum diisi <br>";
    }
    
    if (empty($tempat_lahir)) {
      $pesan_error .= "Tempat lahir belum diisi <br>";
    }
    
    if (empty($konsentrasi)) {
      $pesan_error .= "konsentrasi belum diisi <br>";
    }
           
    $select_teknik=""; $select_sistem=""; $select_manajemen="";
    
    switch($jurusan) {
     case "Teknik Informatika" : $select_teknik = "selected";  break;
     case "Sistem Informatika" : $select_sistem = "selected";  break;
     case "Manajemen Informatika" : $select_manajemen = "selected";  break;
    } 
    
    if (!is_numeric($ipk) OR ($ipk <=0)) {
      $pesan_error .= "IPK harus diisi dengan angka";
    }   
    
    if ($pesan_error === "") { 
      $npm = mysqli_real_escape_string($link,$npm);
      $nama = mysqli_real_escape_string($link,$nama );
      $tempat_lahir = mysqli_real_escape_string($link,$tempat_lahir);
      $jurusan = mysqli_real_escape_string($link,$jurusan);
      $konsentrasi = mysqli_real_escape_string($link,$konsentrasi);
      $tgl = mysqli_real_escape_string($link,$tgl);
      $bln = mysqli_real_escape_string($link,$bln);
      $thn = mysqli_real_escape_string($link,$thn);
      $ipk = (float) $ipk;
      
      $tgl_lhr = $thn."-".$bln."-".$tgl;
      
      $query = "INSERT INTO mahasiswa VALUES('$npm', '$nama', '$tempat_lahir','$tgl_lhr','$jurusan','$konsentrasi',$ipk)";

      $result = mysqli_query($link, $query);
      
      if($result) {
        $pesan = "Mahasiswa dengan nama = \"<b>$nama</b>\" sudah berhasil di tambah";
        $pesan = urlencode($pesan);
        header("Location: tampil_mhs.php?pesan={$pesan}");
      } 
      else { 
      die ("Query gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }    
    }
  }
  else {
    $pesan_error = "";
    $npm = "";
    $nama = "";
    $tempat_lahir = "";
    $select_teknik= "selected";
    $select_sistem= "";
    $select_manajemen= "";
    $konsentrasi = "";
    $ipk="";
    $tgl=1;$bln="1";$thn=1996;
  }

  $arr_bln = array( "1"=>"Januari",
                    "2"=>"Februari",
                    "3"=>"Maret",
                    "4"=>"April",
                    "5"=>"Mei",
                    "6"=>"Juni",
                    "7"=>"Juli",
                    "8"=>"Agustus",
                    "9"=>"September",
                    "10"=>"Oktober",
                    "11"=>"Nopember",
                    "12"=>"Desember" );
?>