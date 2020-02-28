<?php
$page = 'home';
if (!empty($_GET['page'])) {
    $page = $_GET['page'];
}

if ($page == 'home') {
    $controller = new App\Controller\DefaultController();
    $controller->index();
} elseif ($page == 'inscription') {
    $controller = new App\Controller\FormulaireController();
    $controller->Inscription();

}  else {
    $controller = new App\Controller\DefaultController();
    $controller->Page404();
}
