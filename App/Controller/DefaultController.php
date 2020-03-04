<?php

namespace App\Controller;

use App\Service\Controller;

/**
 *
 */
class DefaultController extends Controller
{

    public function index()
    {
<<<<<<< HEAD:App/Controller/DefaultController.php
        $message = 'CVTech';
=======
>>>>>>> develop:app/Controller/DefaultController.php


        $this->render('app.homepage.homepage',array(

        ));
    }

    public function logout()
    {
        $this->render('app.default.logout');
    }


    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}
