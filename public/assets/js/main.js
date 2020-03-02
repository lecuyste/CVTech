$( function() {
    $( "#draggable" ).draggable({
        containment : '.demo'
    });
} );

$('#img1').on('click',function() {
    if($('#nom').val() == ''){

    }else{
        $(this).fadeOut(500, function () {
            $('input[type=text][name=nom]').remove()
            $('#title1').html('Nom <img src="assets/img/icons8-coche-26.png" />')
        })
        var text = $('input[type=text][name=nom]').val();
        if (text != '') {
            $('#bravo').append('<p>' + text + '</p>');
        } else {
        }
    }
})
$('#img2').on('click',function(){
    if($('#prenom').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[type=text][name=prenom]').remove()
            $('#title2').html('Prenom <img src="assets/img/icons8-coche-26.png" />')
        })
        var text = $('input[type=text][name=prenom]').val();
        if (text != '') {
            $('#bravo').append('<p>' + text + '</p>');
        } else {

        }
    }
})
$('#img3').on('click',function(){
    if($('#email').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[type=mail][name=email]').remove()
            $('#title3').html('E-Mail <img src="assets/img/icons8-coche-26.png" />')
        })
        var text = $('input[type=mail][name=email]').val();
        if (text != '') {
            $('#bravo').append('<p>' + text + '</p>');
        } else {

        }
    }
})
$('#img4').on('click',function(){
    if($('#tel').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[type=tel][name=tel]').remove()
            $('#title4').html('Télephone Portable <img src="assets/img/icons8-coche-26.png" />')
        })
        var text = $('input[type=tel][name=tel]').val();
        if (text != '') {
            $('#bravo').append('<p>Portable: ' + text + '</p>');
        } else {

        }
    }
})
$('#img5').on('click',function(){
    if($('#adress').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[type=text][name=adress]').remove()
            $('#title5').html('Adresse <img src="assets/img/icons8-coche-26.png" />')
        })
        var text = $('input[type=text][name=adress]').val();
        if (text != '') {
            $('#bravo').append('<p>Adresse: ' + text + '</p>');
        } else {

        }
    }
})
$('#img6').on('click',function(){
    if($('#about').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('textarea[name=about]').remove()
            $('#title6').html('Motivation <img src="assets/img/icons8-coche-26.png" />')
        })
        var text = $('textarea[name=about]').val();
        if (text != '') {
            $('#bravo').append('<p>' + text + '</p>');
        } else {

        }
    }
})
$('#img14').on('click',function(){
    var recup = $('div#qualifications input[type=text][name="comp[]"]');
    console.log(recup)
    if($('input[name="comp[]"]').val() == ''){

    }else {
        $(this).fadeOut(500, function () {
            $('input[name="comp[]"]').remove()
            $('#moin').remove();
            $('#title14').html('Competances <img src="assets/img/icons8-coche-26.png" />')
        })

        var text = $('input[name="comp[]"]').each(function(){
            if (text != '') {
                $('#bravo').append('<p>' + $(this).val() + '</p>');
            } else {

            }
        });
    }
})
$('#ajout_comp').on('click',function(){
    var total = $('input[name="comp[]"]').length;

    $('#moin').remove();
    $('#img14').after('<img id="moin" src="assets/img/icons8-effacer-26.png"/>');
    if($('#ajout_comp').before('<input id="nom'+total+'" name="comp[]" type="text" value=""/><span class="error"></span>') == ''){

    } else {
        $('#moin').on('click', function () {
            if ($('input[name="comp[]"]').length == 1) {
                $('#moin').remove();
            } else {
                $('input[name="comp[]"]:last').remove();
            }
        })
    }
})
