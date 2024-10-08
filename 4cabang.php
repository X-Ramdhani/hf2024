<?php
// Input dari user
echo "Masukkan sebuah angka: ";
$angka = trim(fgets(STDIN));

// Percabangan dengan 4 kondisi
if ($angka > 0 && $angka % 2 == 0) {
    echo "Angka tersebut adalah bilangan positif dan genap.\n";
} elseif ($angka > 0 && $angka % 2 != 0) {
    echo "Angka tersebut adalah bilangan positif dan ganjil.\n";
} elseif ($angka < 0 && $angka % 2 == 0) {
    echo "Angka tersebut adalah bilangan negatif dan genap.\n";
} elseif ($angka < 0 && $angka % 2 != 0) {
    echo "Angka tersebut adalah bilangan negatif dan ganjil.\n";
} else {
    echo "Angka tersebut adalah nol.\n";
}
?>
