<section id="globalForm">
    <div class="wrapForm">
        <h2 style="font-size: 2.8em;text-align: center; text-transform: uppercase; color: #3E5B80;">
            <?= $message; ?>
        </h2>
        <h2 class="textintro">Vous avez une question ? </h2>
        <div class="lignes"></div>

        <form action="#globalForm" method="post">
            <div class="w50">
                <?php echo $form->label('Votre email :'); ?>
                <?php echo $form->input('mail', 'Ex : monadresse@monmail.com'); ?>
                <?php echo $form->error('mail'); ?>
            </div>
            <div class="w50">
                <?php echo $form->label('Votre objet :'); ?>
                <?php echo $form->input('object', 'Ex : Titre du message'); ?>
                <?php echo $form->error('object'); ?>
            </div>
            <div class="w100">
                <?php echo $form->label('Votre message :'); ?>
                <?php echo $form->textarea('message', 'Ex : Mon message'); ?>
                <?php echo $form->error('message'); ?>
            </div>
            <?php echo $form->submit('submitted'); ?>
        </form>

        <div class="lignes"></div>
    </div>
</section>
