<?php
// $date = date('m');
// {
// case 1 : echo "I"; break;
// case 2 : echo "II"; break;
// case 3 : echo "III"; break;
// case 4 : echo "IV"; break;
// case 5 : echo "V"; break;
// case 6 : echo "VI"; break;
// case 7 : echo "VII"; break;
// case 8 : echo "VIII"; break;
// case 9 : echo "IX"; break;
// case 10 : echo "X"; break;
// case 11 : echo "XI"; break;
// case 12 : echo "XII"; break;
// default : echo "Angka Romawi diluar jangkauan"; break;
// }
?>


<?php
$date = date('m');
// $date = 8;
switch ($date)
{
case 1 : $var="I"; break;
case 2 : $var="II"; break;
case 3 : $var="III"; break;
case 4 : $var="IV"; break;
case 5 : $var="V"; break;
case 6 : $var="VI"; break;
case 7 : $var="VII"; break;
case 8 : $var="VIII"; break;
case 9 : $var="IX"; break;
case 10 : $var="X"; break;
case 15 : $var="XI"; break;
case 12 : $var="XII"; break;
default : $var= "Angka Romawi diluar jangkauan"; break;
}
echo $var;

?>