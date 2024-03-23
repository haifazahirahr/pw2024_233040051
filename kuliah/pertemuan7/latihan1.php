<?php
// Variabel scope / lingkup variabel
$x = 10;

function tampilX()
{
    global $x;
    echo $x;
}

tampilX();
echo "<hr>";

// Superglobals
// Variabel global milik PHP
// Merupakan array associative

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
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?gambar=<?= $mhs["gambar"]; ?>&nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>