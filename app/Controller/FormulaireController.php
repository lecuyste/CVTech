<?php


namespace App\Controller;


use App\Weblitzer\Controller;
use App\Model\FormulaireModel;
use App\Service\Form;
use App\Service\Validation;

class FormulaireController extends Controller
{
    public function Inscription()
    {
        $formulaire = FormulaireModel::all();
        $errors = array();
        if (!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $v = new Validation();
            $errors['name'] = $v->textValid($post['name'],'zgoui',3,100);
            $errors['surname'] = $v->textValid($post['surname'],'zgua',3,100);
            $errors['mail'] = $v->emailValid($post['mail']);
            if ($v->IsValid($errors)) {
                FormulaireModel::insert($post);
                $this->redirectIndex();

            }
        }
        $form = new Form($errors);
        $this->render('app.formulaire.add', compact('formulaire','form'));

    }



    private function redirectIndex()
    {
        $this->redirect('index.php?page=home');
    }

}