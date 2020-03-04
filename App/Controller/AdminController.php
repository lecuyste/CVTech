<?php


namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\AdminModel;
use App\Service\Form;
use App\Service\Validation;
use App\Weblitzer\Database;

class AdminController extends controller
{
    public function index()
    {

        $admin = AdminModel::all();
        $count = AdminModel::count();

        $this->render('app.admin.frontpage', ['admin' => $admin, 'count' => $count]);
    }

    public function detail($id)
    {
        $admin = AdminModel::findById($id);
        if (empty($admin)) {
            $this->Abort404();
        }
        $this->render('app.admin.detail', ['admin' => $admin]);
    }

    public function addadmin()
    {
        $errors = array();
        if (!empty($_POST['submitted'])) {
            //faille Xss
            $post = $this->cleanXss($_POST);
            //Valider les champs
            //Validation
            $v = new Validation();

            $errors['title'] = $v->textValid($post['title'], 'titre', 3, 100);
            $errors['content'] = $v->textValid($post['content'], 'description', 10, 1000);
            //Is Valid
            if ($v->IsValid($errors)) {
                AdminModel::insert($post['title'], $post['content']);
                $this->redirect('index.php?page=admin');
            };

            //Insertion en Bdd
            // die('It just works');

        }

        $form = new Form($errors);
        $this->render('app.admin.add', ['form' => $form]);
    }

    public function edit($id)
    {
        $edit = AdminModel::findById($id);
        if (empty($edit)) {
            $this->Abort404();
        }
        $errors = array();
        if (!empty($_POST['submitted'])) {
            //faille Xss
            $post = $this->cleanXss($_POST);
            //Valider les champs
            //Validation
            $v = new Validation();

            $errors['tilte'] = $v->textValid($post['title'], 'titre', 3, 100);
            $errors['content'] = $v->textValid($post['content'], 'description', 10, 10000);
            //Is Valid
            if ($v->IsValid($errors)) {
                AdminModel::edit($id, $post['title'], $post['content']);
                $this->redirect('index.php?page=admin');
            };

            //Insertion en Bdd
            // die('oki doki');

        }

        $form = new Form($errors);
        $this->render('app.admin.edit', ['form' => $form,'edit'=>$edit]);
    }
    public function delete($id)
    {
        $admin = AdminModel::findById($id);
        if(empty($admin)) { $this->Abort404(); }
        AdminModel::delete($id);
        $this->render('index.php?page=admin');
    }

}
