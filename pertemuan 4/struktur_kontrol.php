<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A ";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik <= 89) {
    echo "Nilai huruf: B ";
} else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C ";
} else if ($nilaiNumerik >= 60 && $nilaiNumerik < 70) {
    echo "Nilai huruf: D ";
}

echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet terebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br><br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor  = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br><br>";

$nilaiSiswa = [85, 92, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60){
        echo "Nilai: $nilai (tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (lulus) <br>";
}

echo "<br><br>";

echo"percobaan 4 soal no (4.6)<br>";
$nilai = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);

sort($nilai);

$nilai_terpilih = array_slice($nilai, 2, 6);
$total = array_sum($nilai_terpilih);
$rata_rata = $total / count($nilai_terpilih);

echo "Total nilai (setelah mengabaikan dua nilai tertinggi dan terendah): $total<br>";
echo "Rata-rata nilai: " . round($rata_rata, 2) . "<br>";

echo "<br><br>";

echo "percobaan 4 soal no (4.7) <br>";
$hargaAwal = 120000;
$diskon = 0.2;
echo "diskon diberikan apabila pembelian lebih dari 100000 <br>";
echo "harga awal: $hargaAwal <br>";
if ($hargaAwal >= 100000) {
    $hargaDiskon = $hargaAwal * $diskon;
    $hargaAkhir = $hargaAwal - $hargaDiskon;
    echo "Harga setelah diskon: $hargaAkhir";
} else {
    echo "Total harga = $hargaAwal";
}

echo "<br><br>";

echo "percobaan 4 soal no (4.8) <br>";
$poin = 550;
$hadiah = ($poin > 500) ? "YA" : "TIDAK";
echo "Total skor pemain adalah: $poin <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah <br>";

?>
