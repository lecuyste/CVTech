<h1 style="font-size:25px;margin-top: 100px;margin-left: 50px; color: darkolivegreen">
    <?= $message; ?>
</h1>

<form action="" method="post">
    <?php echo $form->label('mail'); ?>
    <?php echo $form->input('mail'); ?>
    <?php echo $form->error('mail'); ?>

    <?php echo $form->label('object'); ?>
    <?php echo $form->input('object'); ?>
    <?php echo $form->error('object'); ?>

    <?php echo $form->label('message'); ?>
    <?php echo $form->textarea('message'); ?>
    <?php echo $form->error('message'); ?>

    <?php echo $form->submit('submitted'); ?>
</form>