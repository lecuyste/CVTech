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
        $message = 'Coucou';
        $errors = array();
        if (!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $valid = new Validation();
            $errors['test'] = $valid->textValid($post['test'], 'test', 2, 20);
        }
        $form = new Form($errors);
        $this->render('app.testGenerateCv.testgenerateCv', array(
            'message' => $message,
            'form' => $form,
        ));
    }
}