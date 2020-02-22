<?php

function arkademy($input)
{
    if (is_numeric($input) == true) {
        $x = 1;
        while ($x <= $input) {
            if ($x % 3 == 0) {
                if ($x % 7 == 0) {
                    echo "Arkademy, ";
                } else {
                    echo "Arka, ";
                }
            } elseif ($x % 7 == 0) {
                if ($x % 3 == 0) {
                    echo "Arkademy, ";
                } else {
                    echo "Demy, ";
                }
            } else {
                echo "" . $x . ", ";
            }
            $x++;
        }
    } else {
        echo "Input harus angka!";
    }
}