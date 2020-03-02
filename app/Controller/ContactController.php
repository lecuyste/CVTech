<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\ContactModel;
use App\Weblitzer\Model;
use App\Service\Form;
use App\Service\Validation;

/**
 *
 */
class ContactController extends Controller
{
    public function contact()
    {
        $errors = array();
        if (!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $v = new Validation();
            $errors['mail'] = $v->emailValid($post['mail']);
            $errors['object'] = $v->textValid($post['object'], 'object', 5, 100);
            $errors['message'] = $v->textValid($post['message'], 'message', 20, 500);
            if($v->isValid($errors)) {
                ContactModel::insert($post);
                $this->redirect('index.php?page=redirection');
            }
        }
        $form = new Form($errors);
        $message = 'Formulaire de contact';

        $this->render('app.contact.contact', array(
            'message' => $message,
            'form' => $form,
        ));
    }
    public function redirection()
    {
        $redirection = 'Merci pour votre message !';
        $this->render('app.contact.redirection', array(
            'redirection' => $redirection,
        ));
    }
}



