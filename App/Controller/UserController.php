<?php

namespace App\Controller;

use App\Service\Controller;
use App\Model\UserModel;
use App\Repository\Form;
use App\Repository\Validation;

class UserController extends Controller
{
    public function inscription()
    {
        $title = 'Inscription';

        $errors = array();
        $form = new Form($errors, 'post');
        if (isset($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $v = new Validation();
            $errors['nom'] = $v->textValid($post['nom'], 'nom', 2, 50);
            $errors['prenom'] = $v->textValid($post['prenom'], 'prenom', 2, 50);
            $errors['mail'] = $v->emailValid($post['mail']);
            $errors['password1'] = $v->textValid($post['password1'], 'password', 5, 20);
            $errors['password2'] = $v->generateErrorRepeat($post['password1'], $post['password2'], 'Les mots de passe ne sont pas identiques.');


            if ($v->IsValid($errors) == true) {
                $hash = password_hash($post['password1'], PASSWORD_DEFAULT);
                UserModel::insertUser($post['nom'], $post['prenom'], $post['mail'], $hash);
            }
        }

        $this->render('app.default.inscription', array(
            'title' => $title,
            'form' => $form,
            'errors' => $errors
        ));
    }

    public function login()
    {
        $title = 'Connexion';

        $errors = array();
        $form = new Form($errors, 'post');
        if (isset($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $this->debug($post);
            $v = new Validation();
            $errors['mail'] = $v->emailValid($post['mail']);

            if ($v->IsValid($errors) == true) {
                $user = UserModel::userLogin($post['mail']);
                if ($user->mail === $post['mail'] && password_verify($post['password'], $user->pass)) {
                    $_SESSION = array(
                        'id'    => $user->id,
                        'nom'   => $user->name,
                        'prenom'=> $user->surname,
                        'role'  => $user->role,
                        'mail' => $user->mail,

                    );
                } else {
                        $errors['password'] = 'Mot de passe ou mail incorrect';
                }
            }
        } else {
            $errors['mail'] = 'Error ';
        }

        $this->render('app.default.login', array(
            'title' => $title,
            'form'  => $form
        ));
    }
}
