<?php


namespace App\Controller;

use App\Service\Form;
use App\Weblitzer\Controller;
use App\Model\CityModel;
use App\Model\KeywordsModel;

class SearchController extends Controller
{
    public function searchCity()
    {

        $searchCity = new CityModel();
        $searchKeywords = new KeywordsModel();
        $form = new Form();

        $this->render('app.search.search',[
            'searchC' => $searchCity->getC(),
            'searchK' => $searchKeywords->getK(),
            'form' => $form
        ]);
    }
}