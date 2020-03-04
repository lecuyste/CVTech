<h1>
    <?= $title ?>
</h1>


<form action="#" method="post" style="text-align: center; margin-top: 50px">
   <?php
    echo $form->label('nom', 'Insérez votre nom');
    echo $form->input('text','nom','nom');
    if (!empty($errors['nom'])) {
        echo '<span class="error">'.$errors['nom'].'</span>';
    }

    echo $form->label('prenom', 'Insérez votre prénom');
    echo $form->divStart('nomdeclasse');
    echo $form->input('text','prenom','prenom');
    echo $form->divEnd();
   if (!empty($errors['prenom'])) {
       echo '<span class="error">'.$errors['prenom'].'</span>';
   }

    echo $form->label('mail', 'Insérez votre mail');
    echo $form->input('email','mail');
   if (!empty($errors['mail'])) {
       echo '<span class="error">'.$errors['mail'].'</span>';
   }

    echo $form->label('password1', 'Mot de passe');
    echo $form->input('password','password1');
   if (!empty($errors['password1'])) {
       echo '<span class="error">'.$errors['password1'].'</span>';
   }

    echo $form->label('password2', 'Confirmez votre mot de passe');
    echo $form->input('password', 'password2');


    echo $form->submit();
    ?>

</form>

