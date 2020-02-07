<?php

function textValid($err, $value, $minl, $maxl, $key, $empty = true)
{
    if (!empty($value)) {
        if (mb_strlen($value) < $minl) {
            $err[$key] = 'Minimum ' . $minl . ' caracteres';
        } elseif (mb_strlen($value) > $maxl) {
            $err[$key] = 'Maximum ' . $maxl . ' caracteres';
        }
    } else {
        if ($empty) {
            $err[$key] = 'Veuillez renseigner ce champ';
        }
    }
    return $err;
}