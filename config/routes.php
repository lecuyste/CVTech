<?php
$page = 'homepage';
if(!empty($_GET['page'])) {
    $page = $_GET['page'];
}


if($page == 'homepage') {
    $controller = new App\Controller\DefaultController();
    $controller->index();
} elseif ($page == 'contact') {
    $controller = new App\Controller\ContactController();
    $controller->contact();
} elseif ($page == 'redirection') {
    $controller = new App\Controller\ContactController();
    $controller->redirection();
} elseif ($page == 'candidat') {
    $controller = new App\Controller\CandidatController();
    $controller->candidat();
} else {
    $controller = new App\Controller\DefaultController();
    $controller->Page404();
}
