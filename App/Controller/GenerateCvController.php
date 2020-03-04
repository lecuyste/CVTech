<?php


namespace App\Controller;


use App\Model\languageModel;
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
        $experience = 'Mes expériences';
        $formation = 'Mes formations';
        $errors = array();
        $languages = languageModel::all();
        $cvs = GenerateCvModel::all();
        if (!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $valid = new Validation();
            $errors['titre'] = $valid->textValid($post['titre'], 'titre de CV', 2, 20);
            $errors['nom'] = $valid->textValid($post['nom'], 'nom et prénom', 2, 20);
            $errors['numAdress'] = $valid->textValid($post['numAdress'], 'numéro de rue', 1, 10);
            $errors['street'] = $valid->textValid($post['street'], 'nom de la rue', 2, 50);
            $errors['codePostal'] = $valid->validateCodePostal($post['codePostal'], 'code postal');
            $errors['city'] = $valid->textValid($post['city'], 'nom de la ville', 2, 50);
            $errors['phone'] = $valid->phoneNumber($post['phone'], 'numéro de téléphone');
            $errors['mail'] = $valid->emailValid($post['mail']);
            $errors['lien'] = $valid->urlValidate($post['lien']);
            $errors['langages'] = $valid->selectCheckboxValidate('langages');
            $errors['formationName'] = $valid->textValid($post['formationName'], 'nom  de formation', 2, 50);
            $errors['formationCity'] = $valid->textValid($post['formationCity'], 'ville de formation', 2, 50);
            $errors['formationDate'] = $valid->validateYear($post['formationDate'], 'date de formation');
            $errors['experienceName'] = $valid->textValid($post['experienceName'], 'nom d\'experience', 2, 50);
            $errors['experienceCity'] = $valid->textValid($post['experienceCity'], 'ville de formation', 2, 50);
            $errors['experienceDate'] = $valid->validateYear($post['experienceDate'], 'date d\'expérience');
            if ($valid->IsValid($errors)) {
                GenerateCvModel::insert($post['titre'], $post['phone'], $post['street'], $post['codePostal'], $post['city'], $post['lien'], $post['langages'], $cvs['id'], $cvs['id'], $post['experienceName'], $post['experienceDate'], $post['experienceCity'], $post['formationName'], $post['formationDate'], $post['formationCity'] );
                $this->redirect('index.php?page=testgenerateCv');
            }
        }
        $form = new Form($errors);
        $this->render('app.testGenerateCv.testgenerateCv', array(
            'message' => $message,
            'form' => $form,
            'languages' => $languages,
            'experience' => $experience,
            'formation' => $formation,
            'cvs' => $cvs,
        ));
    }
}