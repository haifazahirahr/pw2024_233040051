<?php
function urutan_angka($a)
{
    $nomor = 1;
    for ($i = 1; $i <= $a; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $nomor . " ";
            $nomor++;
        }
        echo "<br>";
    }
}

echo urutan_angka(5);
