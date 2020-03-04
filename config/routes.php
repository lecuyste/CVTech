<?php
$page = 'home';
if(!empty($_GET['page'])) {
    $page = $_GET['page'];
}


if($page == 'home') {
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
    $controller = new App\Controller\DefaultController();
    $controller->logout();
}

else {
    $controller = new App\Controller\DefaultController();
    $controller->Page404();
}
