<?php

// 1. Membuat Array
$hari = array("senin", "selasa", "rabu");
$bulan = ["januari", "februari", "maret"];
$mhs = ["Haifa", 3.7, false];
// 2. Mencetak Array (1)
// cetak 1 nilai menggunakan index
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mhs[1];
echo "<hr>";
// cetak seluruh isi array
//var_dump() atau print_r()
// digunakan untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mhs);
echo "<hr>";
// 3. Manipulasi Array
// Menambah isi array
// di akhir: [] atau array_push()
$hari[] = "kamis";
$hari[] = "jumat";
print_r($hari);
echo "<br>";
array_push($bulan, "april", "mei");
print_r($bulan);
echo "<br>";
//di awal array: array_unshift()
array_unshift($mhs, "233040051");
print_r($mhs);
echo "<hr>";

// Menghapus isi array
// dibelakang: array_pop()
//diawal: aray_shift()
array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);

// 4. Mencetak Array (2)
