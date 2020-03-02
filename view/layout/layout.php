<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CVTech</title>
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.25.0/slimselect.min.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.25.0/slimselect.min.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav>
          <ul>
              <li><a href="<?= $view->path('home'); ?>">Home</a></li>
              <li><a href="<?= $view->path('testgenerateCv'); ?>">Generation de CV</a></li>
              <li><a href="<?= $view->path('testMail'); ?>">Envoi de mail</a></li>
          </ul>
      </nav>
    </header>

    <div class="container">
        <?= $content; ?>
    </div>

    <footer>

    </footer>

    <script src="asset/js/main.js"></script>
  </body>
</html>
