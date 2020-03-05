<section id="loginForm">
    <div class="wrapForm">
        <h2 style="font-size: 2.8em;text-align: center; text-transform: uppercase; color: #3E5B80;">
            <?= $title ?>
        </h2>
        <div class="lignes"></div>


        <form action="#loginForm" method="post">
            <div class="w50">
                <?php

                echo $form->label('email :', ' Renseignez votre email');
                echo $form->input('mail', 'Votre mail', 'email');
                echo $form->error('mail');
                ?>
            </div>
            <div class="w50">
                <?php
                echo $form->label('mot de passe :', 'Mot de passe');
                echo $form->input('password', 'Votre mot de passe', 'password');
                echo $form->error('mot de passe');
                ?>
            </div>
                <?php

                echo $form->submit('submitted');
                ?>
        </form>
        <div class="lignes"></div>

    </div>
</section>
