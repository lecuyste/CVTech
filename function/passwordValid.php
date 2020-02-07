<?php
function passwordValid($password, $err, $minl, $key)
{
    if (!empty($password)) {
        $lowercase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);
        if (!$lowercase || !$number) {
            $err[$key] = 'Votre mot de passe doit contenir au moins un chiffre';
        } elseif (mb_strlen($password) < $minl) {
            $err[$key] = 'Votre mot de passe doit faire un minimum de ' . $minl . ' caractères';
        }
    } else {
        $err[$key] = 'Veuillez remplir ce champ';
    }
    return $err;
}