<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6b</title>
    <style>
        .kotak1 {
            display: inline-flex;
            width: 50px;
            height: 50px;
            font-size: 30px;
            background-color: skyblue;
            border: 1px solid black;
            justify-content: center;
            align-items: center;
            margin: 2px;
        }

        .kotak2 {
            display: inline-flex;
            width: 50px;
            height: 50px;
            font-size: 30px;
            background-color: white;
            border: 1px solid black;
            justify-content: center;
            align-items: center;
            margin: 2px;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <label for="angka">Masukkan Angka :</label>
        <input type="text" name="angka" id="angka">
        <button type="submit">Tampilkan</button>
    </form>
    <br>

    <?php if (isset($_POST["angka"])) : ?>
        <?php
        for ($i = $_POST["angka"]; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                if ($i % 2 == 0) {
                    echo '<div class= "kotak1">' . $i . '</div>';
                } else
                    echo '<div class= "kotak2">' . $i . '</div>';
            }
            echo "<br>";
        }
        ?>
    <?php endif; ?>
</body>

</html>