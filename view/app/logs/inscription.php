<section id="inscriptionForm">
    <div class="wrapForm">
        <h2 style="font-size: 2.8em;text-align: center; text-transform: uppercase; color: #3E5B80;">
            <?= $title ?>
        </h2>
        <div class="lignes"></div>



        <form action="#inscriptionForm" method="post">
            <div class="w50">
            <?php
            echo $form->label('nom', 'Insérez votre nom');
            echo $form->input('nom', 'Votre nom');
            if (!empty($errors['nom'])) {
                echo '<span class="error">' . $errors['nom'] . '</span>';
            }
            ?>
            </div>
            <div class="w50">
            <?php


            echo $form->label('prenom', 'Insérez votre prénom');
            echo $form->input('prenom', 'Votre prénom');
            if (!empty($errors['prenom'])) {
                echo '<span class="error">' . $errors['prenom'] . '</span>';
            }
            ?>
            </div>
            <div class="w100">
            <?php

            echo $form->label('mail', 'Insérez votre mail');
            echo $form->input('mail', 'Votre adresse mail', 'email');
            if (!empty($errors['mail'])) {
                echo '<span class="error">' . $errors['mail'] . '</span>';
            }
            ?>
            </div>
            <div class="w50">
            <?php

            echo $form->label('password1', 'Mot de passe');
            echo $form->input('password1', 'Votre mot de passe', 'password');
            if (!empty($errors['password1'])) {
                echo '<span class="error">' . $errors['password1'] . '</span>';
            }
            ?>
            </div>
            <div class="w50">
            <?php

            echo $form->label('password2', 'Confirmez votre mot de passe');
            echo $form->input('password2', 'Confirmez votre mot de passe', 'password');
            ?>
            </div>
            <?php


            echo $form->submit('submitted');
            ?>

        </form>
        <div class="lignes"></div>
    </div>
</section>

