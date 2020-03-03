<?php
$page = 'home';
if(!empty($_GET['page'])) {
    $page = $_GET['page'];
}


if($page == 'home') {
    $controller = new App\Controller\DefaultController();
    $controller->index();
}

elseif($page == 'search') {
    $controller = new App\Controller\SearchController();
    $controller->searchCity();
}

else {
    $controller = new App\Controller\DefaultController();
    $controller->Page404();
}
