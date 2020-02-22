<?php

function Cek($input)
{
    $angka = preg_replace("/[^0-9]/", '', $input);
    $jumlah = strlen($angka);
    $y = 1;

    for ($x = 0; $x < $jumlah; $x++) {
        if ($y % 3 == 0) {
            echo $angka[$x] . "-";
        } else {
            echo $angka[$x];
        }
        $y++;
    }
}