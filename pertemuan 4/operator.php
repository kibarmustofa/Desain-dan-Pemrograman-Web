<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisabagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah: $hasilTambah<br>";
echo "Hasil Kurang: $hasilKurang<br>";
echo "Hasil Kali: $hasilKali<br>";
echo "Hasil Bagi: $hasilBagi<br>";
echo "Sisa Bagi: $sisabagi<br>";
echo "Pangkat: $pangkat<br>";

echo "<br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama: $hasilSama <br>";
echo "Hasil Tidak Sama: $hasilTidakSama <br>";
echo "Hasil Lebih Kecil: $hasilLebihKecil <br>";
echo "Hasil Lebih Besar: $hasilLebihBesar <br>";
echo "Hasil Lebih Kecil Sama: $hasilLebihKecilSama <br>";
echo "Hasil Lebih Besar Sama: $hasilLebihBesarSama <br>";

echo "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil And: $hasilAnd <br>";
echo "Hasil Or: $hasilOr <br>";
echo "Hasil Not A: $hasilNotA <br>";
echo "Hasil Not B: $hasilNotB <br>";

echo "<br><br>";

$a -= $b;  
echo "Hasil a -= b: $a<br>";

$a *= $b;  
echo "Hasil a *= b: $a<br>";

$a /= $b; 
echo "Hasil a /= b: $a<br>";

$a %= $b;  
echo "Hasil a %= b: $a<br>";

echo "<br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik: $hasilIdentik <br>";
echo "Hasil Tidak Identik: $hasilTidakIdentik <br>";

echo "<br><br>";

echo " jawab: soal latihan nomor (3.6) <br>";

$totalKursi = 45;
$kursiDitempati = 28;
$kursiKosong = $totalKursi - $kursiDitempati;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total Kursi: $totalKursi<br>";
echo "Kursi Ditempati: $kursiDitempati<br>";
echo "Kursi Kosong: $kursiKosong<br>";
echo "Persentase Kursi Kosong: " . round($persentaseKosong, 2) . "%<br>";

?>
