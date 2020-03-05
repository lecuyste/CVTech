<form action="" method="post">
    <?php
    echo $form->label('title');
    echo $form->input('title',$edit->title);
    echo $form->error('title');

    echo $form->label('content');
    echo $form->textarea('content',$edit->content);
    echo $form->error('content');

    echo $form->submit();


    ?>


</form>
