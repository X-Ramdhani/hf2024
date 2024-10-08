<?php
// Fungsi kalkulator sederhana
function kalkulator($angka1, $angka2, $operasi) {
    switch ($operasi) {
        case '+':
            return $angka1 + $angka2;
        case '-':
            return $angka1 - $angka2;
        case '*':
            return $angka1 * $angka2;
        case '/':
            return $angka2 != 0 ? $angka1 / $angka2 : "Pembagian dengan nol tidak diperbolehkan.";
        default:
            return "Operasi tidak valid.";
    }
}

// Input dari user
echo "Masukkan angka pertama: ";
$angka1 = trim(fgets(STDIN));

echo "Masukkan angka kedua: ";
$angka2 = trim(fgets(STDIN));

echo "Masukkan operasi (+, -, *, /): ";
$operasi = trim(fgets(STDIN));

// Hasil kalkulasi
$hasil = kalkulator($angka1, $angka2, $operasi);
echo "Hasil: $hasil\n";
?>
