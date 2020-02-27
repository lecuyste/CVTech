
<h1 style="font-size:25px;margin-top: 100px;margin-left: 50px; color: darkolivegreen">
    <?= $message; ?>
</h1>
<div id="form" style="float: left;margin-left: 10px;width: 40%;">
    <form action="#" method="post">
        <?php
        echo $form->label('titre de votre CV : ');
        echo $form->input('titre', null, 'onKeyup(this,\'titreCV\')');
        echo $form->error('titre');
        echo "<br>" . $form->label('nom et prénom : ');
        echo $form->input('nom', null, 'onKeyup(this,\'nomSurname\')');
        echo $form->error('nom');
        echo "<br>" . $form->label('n° de rue : ');
        echo $form->input('numAdress', null, 'onKeyup(this,\'num\')');
        echo $form->error('numAdress');
        echo "<br>" . $form->label('nom de rue : ');
        echo $form->input('street', null, 'onKeyup(this,\'nameStreet\')');
        echo $form->error('street');
        echo "<br>" . $form->label('ville : ');
        echo $form->input('city', null, 'onKeyup(this,\'nameCity\')');
        echo $form->error('city');
        echo "<br>" . $form->label('n° de téléphone : ');
        echo $form->input('phone', null, 'onKeyup(this,\'phoneNumber\')');
        echo $form->error('phone');
        echo "<br>" . $form->label('adresse mail : ');
        echo $form->input('mail', null, 'onKeyup(this,\'mailAdress\')');
        echo $form->error('mail');
        echo "<br>" . $form->label('lien(s) : ');
        echo $form->input('lien', null, 'onKeyup(this,\'lienInternet\')');
        echo $form->error('lien');
        echo '<br><br>' . $form->submit();
        ?>
    </form>
</div>

<div id="cv" style="float: right;margin-right: 300px; width: 350px; height: 500px; background-color: aquamarine;">
    <div id="titleCV" style="margin-top: 80px; margin: 0 auto;background-color: tomato; text-align: center;"><p id="titreCV" style="width: 100%;word-break: break-all;"></p></div>
    <div id="coord" style="background-color: darkgray; margin-top: 8px; width: 20%;margin-left: 10px">
        <p id="nomSurname" style="width: 100%;word-break: break-all; background-color: coral;"></p>
        <div id="adresse" style="background-color: darkcyan;">
            <p id="num" style="width: 100%;word-break: break-all;"></p>
            <p id="nameStreet" style="width: 100%;word-break: break-all;"></p>
            <p id="nameCity" style="width: 100%;word-break: break-all;"></p>
        </div>
        <p id="phoneNumber" style="width: 100%;word-break: break-all;background-color: darkkhaki;"></p>
        <p id="mailAdress" style="width: 100%;word-break: break-all; background-color: indianred;"></p>
        <p id="lienInternet" style="width: 100%;word-break: break-all; background-color: lightgreen;"></p>
    </div>
</div>
