var php_var = "<?php echo $position; ?>";
var btnAbrirPopup = document.getElementsByClassName('delete')[php_var - 1],
    overlay = document.getElementById('overlay'),
    popup = document.getElementById('popup'),
    btnCerrarPopup = document.getElementById('btn-cerrar-popup'),
    btnCerrarWin = document.getElementById('btn-cerrar');

btnAbrirPopup.addEventListener('click', function() {
    overlay.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function() {
    overlay.classList.remove('active');
})

btnCerrarWin.addEventListener('click', function() {
    overlay.classList.remove('active');
})
