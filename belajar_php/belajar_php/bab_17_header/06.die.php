<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
  <h1>Belajar HTTP header</h1>
  <?php
  $nama = "joko";
  if ($nama=="joko") {
    exit("Maaf, joko tidak boleh masuk");
    echo "Ah yang bener mas...."; // tidak akan pernah diproses
  } 
  ?>
</body>
</html>