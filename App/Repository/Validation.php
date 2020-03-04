<?php
namespace App\Repository;

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


}
