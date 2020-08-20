<?php 
// variabel => jkk, lembur, GHBuruh
$jkk = 11;

if ($jkk > 8 && $jkk < 10) {
	$lembur = 2.0 * 17500*($jkk - 8);
	$GHBuruh= 8*17500;
} elseif ($jkk > 10) {
	$lembur = 3.0 * 17500*($jkk - 8);
	$GHBuruh= 8*17500;
}
else {
	$lembur= 0;
	$GHBuruh= 8*17500;
}

echo "Lembur : ". $lembur;
echo "<br></br>";
echo "GHBuruh : ". $GHBuruh;
echo "<br></br>";
echo "Total Gaji : ".$Total= $GHBuruh + $lembur;





// variabel => Pjual, diskon1, diskon2
// $Pjual = 1800000;

// if ($Pjual == 500000) {
// 	$diskon1 = 0.1 * $Pjual; 
// 	$diskon2 = 0* $Pjual; 
// } else if ($Pjual == 1000000 ){
// 	$diskon1 = 0.1 * $Pjual; 
// 	$diskon2 = 0 * $Pjual; 
// } elseif ($Pjual > 1000000) {
// 	$diskon1 = 0.1* 1000000;  
// 	$diskon2 = 0.15 *($Pjual-1000000);
// } else {
// 	$diskon1 = 0 * $Pjual; 
// 	$diskon2 = 0 * $Pjual; 
// }

// echo "Diskon-1 : ".$diskon1;
// echo "<br></br>";
// echo "Diskon-2 : ".$diskon2;
// echo "<br></br>";
// echo "Total Diskon : ".$total = $diskon1 + $diskon2;
 ?>