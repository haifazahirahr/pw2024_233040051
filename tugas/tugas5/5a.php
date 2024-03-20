<?php
//Array Associative

$mahasiswa = [
    [
        "nrp" => "233040051",
        "nama" => "Haifa Zahirah Ramdhan",
        "email" => "haifazahirahr5@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "haifazrr.jpg"
    ],
    [
        "nrp" => "233040038",
        "nama" => "Nada Putri Aqilah Rukanda",
        "email" => "putriaqilah05@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "nada.jpg"
    ],
    [
        "nrp" => "233040046",
        "nama" => "Chalida Rahma",
        "email" => "chalidarlh@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "chalida.jpg"
    ],
    [
        "nrp" => "233040074",
        "nama" => "Nurfatimah",
        "email" => "nurfatimahhh1603z@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "nur.jpg"
    ],
    [
        "nrp" => "233040041",
        "nama" => "Ariska Putri",
        "email" => "ariskaputri918@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "ariska.jpg"
    ],
    [
        "nrp" => "233040061",
        "nama" => "Ellen Aplida Zalni",
        "email" => "ellenaplidazalni@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "elen.jpg"
    ],
    [
        "nrp" => "233040055",
        "nama" => "Daffa Kamiliya Mufidah",
        "email" => "kamiliyamufidah16@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "amel.jpg"
    ],
    [
        "nrp" => "231351155",
        "nama" => "Syifa Rustyani",
        "email" => "syifaputriirustynii@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "syifa.jpg"
    ],
    [
        "nrp" => "233040156",
        "nama" => "Faizal akbar budiansyah",
        "email" => "faizalakbarbudiansyah@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "faizal.jpg"
    ],
    [
        "nrp" => "233040071",
        "nama" => "Reza nurjaman",
        "email" => "rezanurjamanr@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "reza.jpg"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>