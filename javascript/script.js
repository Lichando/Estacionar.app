// script.js
window.addEventListener('load', function() {
    // Asegura que la pantalla de carga dure al menos 5 segundos
    setTimeout(function() {
        // Esconde la pantalla de carga
        var loader = document.getElementById('loader');
        loader.style.display = 'none';

        // Muestra el contenido principal
        var content = document.getElementById('content');
        content.style.display = 'block';
    }, 5000); // 5000 milisegundos = 5 segundos
});
