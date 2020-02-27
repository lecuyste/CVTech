<?php


namespace App\Controller;


use App\Service\Form;
use App\Weblitzer\Controller;
use App\Model\GenerateCvModel;
use App\Weblitzer\Model;
use App\Service\Validation;

class GenerateCvController extends Controller
{
    public function generateCV()
    {
        $message = 'Génération de votre CV';
        $errors = array();
        if (!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $valid = new Validation();
            $errors['titre'] = $valid->textValid($post['titre'], 'titre de CV', 2, 20);
            $errors['nom'] = $valid->textValid($post['nom'], 'nom et prénom', 2, 20);
            $errors['numAdress'] = $valid->textValid($post['numAdress'], 'numéro de rue', 1, 10);
            $errors['street'] = $valid->textValid($post['street'], 'nom de la rue', 2, 50);
            $errors['city'] = $valid->textValid($post['city'], 'nom de la ville', 2, 50);
            $errors['phone'] = $valid->phoneNumber($post['phone'], 'numéro de téléphone');
            $errors['mail'] = $valid->emailValid($post['mail']);
            $errors['lien'] = $valid->urlValidate($post['lien']);
        }
        $form = new Form($errors);
        $this->render('app.testGenerateCv.testgenerateCv', array(
            'message' => $message,
            'form' => $form,
        ));
    }
}