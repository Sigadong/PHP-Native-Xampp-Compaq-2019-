<?php
 $siswa=array("siswa1" => array ("Joko","Medan","12 Agustus 1998"),
              "siswa2" => array ("Rini","Jakarta","22 Juli 1999"),
              "siswa3" => array ("Alex","Bandung","9 Januari 2000"),
              "siswa4" => array ("Joy","Samarinda","4 Maret 1998"),
              "siswa5" => array ("Santi","Palembang","12 Desember 1999")
 );
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
    <style>
    table { 
      border-collapse:collapse;
      border-spacing:0;     
      font-size:18px;
      }
    table th {
      padding:10px;
      color:#fff;
      background-color:#2A72BA;
      border-top:1px black solid;
      border-bottom:1px black solid;
      }
    table td {
      padding:10px;
      border-top:1px black solid;
      border-bottom:1px black solid;
      }         
    tr:nth-child(even) {
     background-color: #DFEBF8;
     }
  </style>
</head>
<body>
<table border="1">
<tr>
  <th>No</th>
  <th>Nama</th>
  <th>Tempat Lahir</th>
  <th>Tanggal Lahir</th>
</tr>
<?php
  $i=1;
  foreach ($siswa as $value) { 
   echo "<tr>";
   echo "<td>".str_pad($i,2,0,STR_PAD_LEFT)."</td>";
   echo "<td>".strtoupper($value[0])."</td>";
   echo "<td>".strtolower($value[1])."</td>";
   echo "<td>{$value[2]}</td>";
   echo "</tr>";
   $i++;
  }
?>
</table>
</body>
</html>