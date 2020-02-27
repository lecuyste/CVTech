var res = "";

function onKeyup(t,$elemId) {
   var  res = t.value;
    var elem = document.getElementById($elemId);
    elem.innerHTML = res;
}