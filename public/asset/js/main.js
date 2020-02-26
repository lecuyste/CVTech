var res = "";

function onKeyup(t) {
    res = t.value;
    document.getElementById("cvTest").innerHTML = res;
}