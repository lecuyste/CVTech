<?php

namespace App\Controller;

use App\Model\JardinierModel;
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
        $contact = ContactModel::all();
        $errors = array();
        if (!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $v = new Validation();
            $errors['mail'] = $v->emailValid($post['mail']);
            $errors['object'] = $v->textValid($post['object'], 'object', 5, 100);
            $errors['message'] = $v->textValid($post['message'], 'message', 20, 500);
            if($v->isValid($errors)) {
                ContactModel::insert($post);
                $this->redirectIndex();
            }

        }
        $form = new Form($errors);
        $message = 'Vous avez une question ?';

        $this->render('app.contact.contact', array(
            'message' => $message,
            'form' => $form,
        ));
    }
    private function redirectIndex()
    {
        $this->redirect('index.php?page=contact');
    }

}



