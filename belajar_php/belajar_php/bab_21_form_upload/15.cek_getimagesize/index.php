<?php
// cek apakah form telah di submit
  if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file_upload"]["tmp_name"]);
    var_dump($check);
    
    echo "<pre>";
    print_r($check);
    echo "</pre>";
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<h1>Upload File</h1>
  <form action="index.php" method="post" enctype="multipart/form-data"> 
    <p>Upload File: 
      <input type="file" name="file_upload" id="file_upload">
    </p>
    <input type="submit" name="submit" value="Proses Upload">
  </form>
</body>
</html>