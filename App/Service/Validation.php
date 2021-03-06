<?php
namespace App\Service;

class Validation
{
    protected $errors = array();

    public function IsValid($errors)
    {
        foreach ($errors as $key => $value) {
            if(!empty($value)) { // a verifier ++
                return false;
            }
        }
        return true;
    }

    /**
     * emailValid
     * @param email $email
     * @return string $error
     */

    public function emailValid($email)
    {
        $error = '';
        if(empty($email) || (filter_var($email, FILTER_VALIDATE_EMAIL)) === false) {
            $error = 'Adresse email invalide.';
        }
        return $error;
    }

    /**
     * textValid
     * @param POST $text string
     * @param title $title string
     * @param min $min int
     * @param max $max int
     * @param empty $empty bool
     * @return string $error
     */

    public function textValid($text, $title, $min = 3,  $max = 50, $empty = true)
    {

        $error = '';
        if(!empty($text)) {
            $strtext = strlen($text);
            if($strtext > $max) {
                $error = 'Votre ' . $title . ' est trop long.';
            } elseif($strtext < $min) {
                $error = 'Votre ' . $title . ' est trop court.';
            }
        } else {
            if($empty) {
                $error = 'Veuillez renseigner un ' . $title . '.';
            }
        }
        return $error;

    }
    public function generateErrorRepeat($value, $value2, $text){
        if($value != $value2){
            return '<p style="color: red">'.$text.'</p>';
        }
    }

    public function generateErrorCheckBox($value, $text){
        if(!$value){
            return $text;
        }
    }
    public function validChamp($errors,$value,$key,$min,$max,$empty = false)
    {
        if(!empty($value)) {
            if(mb_strlen($value) < $min) {
                $errors[$key] = 'Minimum ' .$min . ' caractères';
            } elseif (mb_strlen($value) > $max) {
                $errors[$key] = 'Maximum ' .$max . ' caractères';
            }
        } else {
            if(!$empty){
                $errors[$key] = 'Veuillez renseigner ce champ';
            }
        }
        return $errors;
    }
    public function phoneNumber($phone, $title, $empty = true)
    {
        $error = '';
        if (!empty($phone)) {
            $strtext = strlen($phone);
            if (!preg_match('/^0[0-9]{9}$/', $phone)) {
                $error = 'Votre ' . $title . ' doit seulement contenir 10 chiffres.';
            }
        } else {
            if ($empty) {
                $error = 'Veuillez renseigner un ' . $title . '.';
            }
        }
        return $error;
    }

    public function validateCodePostal($codePostal, $title, $empty = true)
    {
        $error = '';
        if (!empty($codePostal)) {
            $strtext = strlen($codePostal);
            if (!preg_match('/[0-9]{5}$/', $codePostal)) {
                $error = 'Votre ' . $title . ' doit seulement contenir 5 chiffres.';
            }
        } else {
            if ($empty) {
                $error = 'Veuillez renseigner un ' . $title . '.';
            }
        }
        return $error;
    }

    public function validateYear($year, $title, $empty = true)
    {
        $error = '';
        if (!empty($year)) {
            $strtext = strlen($year);
            if (!preg_match('/[0-9]{4}$/', $year)) {
                $error = 'Votre ' . $title . ' doit contenir 4 chiffres.';
            }
        } else {
            if ($empty) {
                $error = 'Veuillez renseigner un ' . $title . '.';
            }
        }
        return $error;
    }

    public function urlValidate($lien){
        $error='';
        $lien = filter_var($lien, FILTER_SANITIZE_URL); //Supprime les caractères "illégales" dans une URL
        if (!empty($lien) && filter_var($lien, FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED || FILTER_FLAG_HOST_REQUIRED || FILTER_FLAG_PATH_REQUIRED) === false){
            $error='Veuillez rentrer un url valide.';
        }
        return $error;
    }

    public function selectCheckboxValidate($name){
        $error='';
        if (!isset($_POST[$name]) || empty($_POST[$name])){
            $error='Faîtes au moins un choix dans la liste';
        }
        return $error;
    }
}
