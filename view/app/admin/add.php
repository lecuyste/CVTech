<form action="" method="post">
    <?php

    echo $form->label('title');
    echo $form->input('title');
    echo $form->error('title');

    echo $form->label('content');
    echo $form->textarea('content');
    echo $form->error('content');

    echo $form->submit();


    ?>


</form>
