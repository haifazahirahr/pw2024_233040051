<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2d</title>
</head>

<body>
    <table border="1px solid black" cellspacing="0" cellspacing="0">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                if (($i + $j) % 2 == 0) {
                    echo "<td height='60px' width='60px' style='background-color: black; border:1px solid black';></td>";
                } else {
                    echo "<td height='60px' width='60px' style='background-color: white; border:1px solid black';></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>