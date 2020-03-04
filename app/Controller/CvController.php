<?php


namespace App\Controller;


use App\Weblitzer\Controller;
use App\Model\CvModel;

class CvController extends Controller
{
    public function display()
    {
        if(!empty($_POST['submitted']))
        {
            $city = 'SELECT * FROM cv ORDER BY id DESC';

        }
    }
}