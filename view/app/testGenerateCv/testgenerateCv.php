
<h1 style="font-size:25px;margin-top: 100px;margin-left: 50px; color: darkolivegreen">
    <?= $message; ?>
</h1>
<form action="#" method="post">
    <?php
    echo $form->label('test');
    echo $form->input('test', null, 'onKeyup(this)');
    echo $form->error('test');
    echo '<br><br>' . $form->submit();
    ?>
</form>

<br><p id="cvTest"></p>