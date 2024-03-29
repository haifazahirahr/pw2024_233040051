<?php
// Array 
// Membuat array
$hari = array("senin", "selasa", "rabu");
$bulan = ["januari", "februari", "maret"];
$arr = [100, "teks", true];

//menampilkan array
//versi debuging
var_dump($hari);
echo "<br>";
print_r($bulan);

//menampilkan 1 elemen pada array
echo $arr[0];
echo "<br>";
echo "<br>";
?>

<!-- array yang menggunakan pengulangan -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: skyblue;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php
    $angka = [
        [1, 2, 3,],
        [4, 5, 6],
        [7, 8, 9]
    ];
    ?>

    <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $b) : ?>
            <div class="kotak"><?= $b; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>

</html>