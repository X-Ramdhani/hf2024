<?php
// Input dari user
echo "Masukkan sebuah angka: ";
$angka = trim(fgets(STDIN));

// Percabangan dengan 3 kondisi
if ($angka > 0) {
    echo "Angka tersebut adalah bilangan positif.\n";
} elseif ($angka < 0) {
    echo "Angka tersebut adalah bilangan negatif.\n";
} else {
    echo "Angka tersebut adalah nol.\n";
}
?>
