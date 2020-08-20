<?php

if (isset($_GET["pesan"])) {
  $pesan = $_GET["pesan"];
}

if (isset($_POST["submit"])) {
 
  $username = htmlentities(strip_tags(trim($_POST["username"])));
  $password = htmlentities(strip_tags(trim($_POST["password"])));

  $pesan_error="";
  
  if (empty($username)) {
    $pesan_error .= "Username belum diisi <br>";
  }
  
  if (empty($password)) {
    $pesan_error .= "Password belum diisi <br>";
  }
  
  include("koneksi.php");
  
  $username = mysqli_real_escape_string($link,$username);
  $password = mysqli_real_escape_string($link,$password);
  
  $password_sha1 = sha1($password);
  
  $query = "SELECT * FROM admin WHERE username = '$username' 
  AND password = '$password_sha1'";
  $result = mysqli_query($link,$query);
  
  if(mysqli_num_rows($result) == 0 )  { 
    $pesan_error .= "Username dan/atau Password tidak sesuai";
  }
  
  mysqli_free_result($result);
  
  mysqli_close($link);

  if ($pesan_error === "") {
    session_start();
    $_SESSION["nama"] = $username;
    header("Location: tampil_mhs.php");
  }
}
else {
  $pesan_error = "";
  $username = "";
  $password = "";
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Aplikasi Mahasiswa</title>
  <link rel="icon" href="favicon.png" type="image/png" >
  <link rel="stylesheet" href="style_login.css">
</head>
<body>
  <div class="container">
    <h1>Selamat Datang</h1>
    <h3>Aplikasi Mahasiswa</h3>
    <?php
  // tampilkan pesan jika ada
    if (isset($pesan)) {
      echo "<div class=\"pesan\">$pesan</div>";
    }

  // tampilkan error jika ada
    if ($pesan_error !== "") {
      echo "<div class=\"error\">$pesan_error</div>";
    }
    ?>
    <form action="login.php" method="post">
      <fieldset>
        <legend>Login</legend>
        <p>
          <label for="username">Username : </label> 
          <input type="text" name="username" id="username" 
          value="<?php echo $username ?>">
        </p>
        <p>
          <label for="password">Password : </label> 
          <input type="password" name="password" id="password" 
          value="<?php echo $username ?>">
        </p>
        <p>
          <input type="submit" name="submit" value="Log In">
        </p>
      </fieldset>
    </form> 
  </div>
</body>
</html>