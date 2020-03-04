<?php
$page = 'homepage';
if(!empty($_GET['page'])) {
    $page = $_GET['page'];
}

if($page == 'homepage') {
    $controller = new App\Controller\DefaultController();
    $controller->index();
}
elseif ($page == 'inscription') {
    $controller = new App\Controller\UserController();
    $controller->inscription();
}
elseif ($page == 'login') {
    $controller = new App\Controller\UserController();
    $controller->login();
}
elseif($page == 'logout'){
    $controller = new App\Controller\UserController();
    $controller->logout();
} elseif ($page == 'contact') {
    $controller = new App\Controller\ContactController();
    $controller->contact();
} elseif ($page == 'redirection') {
    $controller = new App\Controller\ContactController();
    $controller->redirection();
} else {
    $controller = new App\Controller\DefaultController();
    $controller->Page404();
}
