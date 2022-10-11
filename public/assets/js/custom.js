document.getElementById("checkbox").onchange = function(ev) {
    document.getElementById("nama").toggleAttribute('disabled') = ev.checked;
};

document.getElementById("checkbox").addEventListener('change',reset);

function reset() {
    var x = document.getElementById("checkbox");
    var y = document.getElementById("nama");
    if (x) {
        y.value = '';
        y.placeholder = 'Anonim';
    }
}
