<div class="wrapForm">
    <h1 style="font-size:25px;margin-top: 100px;margin-left: 50px; color: darkolivegreen">
        <?= $message; ?>
    </h1>
    <h2 class="textintro">Vous avez une question ? </h2>
    <div class="lignes"></div>

    <form id="globalForm" action="" method="post">
        <?php echo $form->label('Votre email :'); ?>
        <?php echo $form->input('mail'); ?>
        <?php echo $form->error('mail'); ?>

        <?php echo $form->label('Votre object :', 'toto'); ?>
        <?php echo $form->input('object'); ?>
        <?php echo $form->error('object'); ?>

        <?php echo $form->label('Votre message :'); ?>
        <?php echo $form->textarea('message'); ?>
        <?php echo $form->error('message'); ?>

        <?php echo $form->submit('submitted'); ?>
    </form>

    <div class="lignes"></div>
</div>
