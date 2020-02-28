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
} else {
    $controller = new App\Controller\DefaultController();
    $controller->Page404();
}
