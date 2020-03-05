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

ScrollReveal().reveal('.service_candidat0, .service_candidat1', {
    delay: 500,
    interval:500,
    reset:true
});
ScrollReveal().reveal('.service_candidat2,.service_candidat3,.service_candidat4,.service_candidat5', {
    delay: 1500,
    interval:500,
    reset:true
});
ScrollReveal().reveal('.service_recruteur0, .service_recruteur1, .service_recruteur2, .service_recruteur3', {
    delay: 1000,
    interval:500,
    reset:true
});

// When the user scrolls the page, execute myFunction
window.onscroll = function () {
    myFunction()
};

function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
};