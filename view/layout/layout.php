<!DOCTYPE html>
<html lang="fr" dir="ltr">
  
<head>

    <link rel="stylesheet" href="asset/css/styleYann.css">
    <link rel="stylesheet" href="asset/css/styleMathis.css">
    <link rel="stylesheet" type="text/css" href="asset/css/form.css">
    <title>CVTech</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>

<div class="wrap">
    <header>

        <h1>CVTech</h1>
        <nav>
            <label for="show-menu" class="show-menu">show menu</label>
            <input type="checkbox" id="show-menu" role="button">

            <ul id="menu">
                <li><a class="logo-link" href="<?= $view->path('homepage'); ?>"><img class="nav-logo"
                                                                                 src="asset/img/logocvtech.png" alt=""></a>
                </li>
                <li><a class="button btn-1" href="<?= $view->path('homepage'); ?>">home</a></li>
                <li><a class="button btn-1" href="#services">services</a></li>
                <li><a class="button btn-1" href="">about</a></li>
              <li><a href="<?= $view->path('contact'); ?>">contact</a></li>
                <?php if (empty($_SESSION)) { ?>
                <li id="login">
                    <a class="button btn-1" href="#">connexion</a>
                    <ul class="hidden">
                        <li><a class="button btn-1" href="#">candidat</a></li>
                        <li><a class="button btn-1" href="#">recruteur</a></li>
                    </ul>
                </li>
                <li>
                    <a class="button btn-1" href="">inscription</a>
                    <ul class="hidden">
                        <li><a class="button btn-1" href="#">candidat</a></li>
                        <li><a class="button btn-1" href="#">recruteur</a></li>
                    </ul>
                </li>
                <?php } elseif ($_SESSION['role'] == "admin") { ?>
                    <li >
                        <a href="<?= $view->path('logout') ?>">Déconnexion</a>
                    </li>

                <?php } else { ?>
                    <li >
                        <a href="<?= $view->path('account') ?>">Mon compte</a>
                    </li>
                    <li >
                        <a href="<?= $view->path('logout') ?>">Déconnexion</a>
                    </li>


                <?php } ?>
            </ul>
        </nav>
        <div class="clear"></div>
        <div class="header">
            <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div>
        </div>
    </header>
</div>


<div class="container">
    <?= $content; ?>
</div>

<footer>
    <div class="list">
        <a class="linkf link1" href="">Home</a>
        <a class="linkf" href="">Services</a>
        <a class="linkf" href="">About</a>
        <a class="linkf" href="">Mentions Légales</a>
        <a class="linkf link5" href="">CGU</a>
    </div>
</footer>

<script src="asset/js/main.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

</body>
</html>
