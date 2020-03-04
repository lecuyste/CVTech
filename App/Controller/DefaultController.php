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
        $message = 'CVTech';

        $this->render('app.default.frontpage',array(
            'message' => $message,
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
