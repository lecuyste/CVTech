
var res = "";

function onKeyup(t,$elemId) {
   var  res = t.value;
    var elem = document.getElementById($elemId);
    elem.innerHTML = res;
}
new SlimSelect({
    select: '#languages'
});

function ajoutItems($list) {
     var NewItems = $('.'+$list +' input').first().clone();
     $(NewItems).appendTo('.'+$list);
     return false;
}
function cloneDiv($class) {
    var NewItems = $('.'+$class).first().clone();
    $(NewItems).appendTo('.'+$class);
    return false;
}
function removeClone($cloneId){
    $($cloneId + ':last-child').remove();
    return false;
}
