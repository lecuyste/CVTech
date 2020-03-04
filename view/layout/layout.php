<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i&display=swap"
          rel="stylesheet">
    <title>Framework POO</title>
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    <title>cvtech</title>
</head>
<body>

<header>
    <div>



        <?php if (empty($_SESSION)) { ?>

            <a href="<?= $view->path('inscription'); ?>">Inscription</a>
            <a href="<?= $view->path('login'); ?>">Connexion</a>

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

    </div>


</header>

<div class="container">
    <?= $content; ?>
</div>

<footer>

</footer>

<script src="../public/assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>
