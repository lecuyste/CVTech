<h1>
    <?= $title ?>
</h1>


<form action="#" method="post">
<?php

echo $form->label('mail', ' Renseignez votre mail');
echo $form->input('mail','Votre mail', 'email');
echo $form->error('mail');

echo $form->label('password', 'Mot de passe');
echo $form->input('password','Votre mot de passe', 'password');
echo $form->error('password');

echo $form->submit();

?>
</form>
