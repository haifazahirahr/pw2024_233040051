<?php
$perangkat = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>

<body>
    <h3>Macam-macam Perangkat Keras Komputer</h3>
    <ol>
        <?php foreach ($perangkat as $p) : ?>
            <li><?= $p; ?></li>
        <?php endforeach; ?>
    </ol>
    <h3>Macam-macam Perangkat Keras Komputer baru</h3>
    <ol>
        <?php array_unshift($perangkat, "Card Reader", "Modem"); ?>
        <li><?= $perangkat[0]; ?></li>
        <li><?= $perangkat[4]; ?></li>
        <li><?= $perangkat[1]; ?></li>
        <li><?= $perangkat[2]; ?></li>
        <li><?= $perangkat[5]; ?></li>
        <li><?= $perangkat[3]; ?></li>
        <li><?= $perangkat[7]; ?></li>
        <li><?= $perangkat[6]; ?></li>
    </ol>
</body>

</html>