<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class DefaultController extends Controller
{

    public function index()
    {
      $message = 'CVTECH';


      $this->render('app.default.frontpage',array(
          'message' => $message,

      ));
    }

    public function contact()
    {
      $message = 'Page Contact';

      $this->render('app.default.contact',array(
          'message' => $message
      ));

    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}
