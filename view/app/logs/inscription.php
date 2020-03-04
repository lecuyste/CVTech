<h1>
    <?= $title ?>
</h1>


<form action="#" method="post" style="text-align: center; margin-top: 50px">
   <?php
    echo $form->label('nom', 'Insérez votre nom');
    echo $form->input('nom','Votre nom');
    if (!empty($errors['nom'])) {
        echo '<span class="error">'.$errors['nom'].'</span>';
    }

    echo $form->label('prenom', 'Insérez votre prénom');
    echo '<div class="nomdeclasse">';
    echo $form->input('prenom','Votre prénom');
    echo '</div>';
   if (!empty($errors['prenom'])) {
       echo '<span class="error">'.$errors['prenom'].'</span>';
   }

    echo $form->label('mail', 'Insérez votre mail');
    echo $form->input('mail','Votre adresse mail', 'email');
   if (!empty($errors['mail'])) {
       echo '<span class="error">'.$errors['mail'].'</span>';
   }

    echo $form->label('password1', 'Mot de passe');
    echo $form->input('password1','Votre mot de passe', 'password');
   if (!empty($errors['password1'])) {
       echo '<span class="error">'.$errors['password1'].'</span>';
   }

    echo $form->label('password2', 'Confirmez votre mot de passe');
    echo $form->input('password2', 'Confirmez votre mot de passe', 'password');


    echo $form->submit();
    ?>

</form>

