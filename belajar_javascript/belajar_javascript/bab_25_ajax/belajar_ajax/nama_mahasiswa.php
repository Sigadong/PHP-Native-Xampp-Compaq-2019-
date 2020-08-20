<?php
  // buat koneksi dengan database mysql
  $link = mysqli_connect("localhost","root","","kampusku");
 
  // ambil kolom nama dari tabel mahasiswa
  $query  = "SELECT nama FROM mahasiswa";
  $result = mysqli_query($link, $query);
  
  // tambahkan tag <option> untuk setiap nama mahasiswa
  while($data = mysqli_fetch_array($result)) { 
    echo "<option value='{$data['nama']}'>{$data['nama']}</option>";
  }
?>