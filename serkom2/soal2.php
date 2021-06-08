<?php

$ni = 192010097;
$nama = "Muhamad Faried";
$nuts = 90;
$nuas = 85;
$na = ($nuts * 0.4) + ($nuas * 0.6);

echo " NI : $ni ";
echo "<br>";
echo " Nama : $nama ";
echo "<br>";
echo " Nilai UTS : $nuts ";
echo "<br>";
echo " Nilai UAS : $nuas ";
echo "<br>";
echo " Nilai Akhir : $na ";
echo "<br>";
echo " Status : ";

if ($nuts > 70) {
    if ($na >= 60) {
        echo " Lulus ";
    } else {
        echo " Tidak Lulus ";
    }
} else {
    echo "Tidak Lulus ";
}
