<?php
$page = 'home';
if(!empty($_GET['page'])) {
    $page = $_GET['page'];
}


if($page == 'home') {
    $controller = new App\Controller\DefaultController();
    $controller->index();
} else if ($page =='testgenerateCv'){
    $controller = new App\Controller\GenerateCvController();
    $controller->generateCV();
} else if($page == 'testMail'){
    $controller = App\Controller\TestMailController();
    $controller ->mail();
}
else {
    $controller = new App\Controller\DefaultController();
    $controller->Page404();
}
