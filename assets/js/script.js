// assets/js/script.js

document.addEventListener('DOMContentLoaded', () => {
    // 1. Obtener los elementos del DOM
    const navToggle = document.querySelector('.nav__toggle');
    const navMenu = document.querySelector('.nav__menu');

    // 2. Escuchar el evento de clic en el botón (toggle)
    navToggle.addEventListener('click', () => {
        // 3. Alternar (añadir/quitar) la clase 'show' en el menú
        // La clase 'show' es la que aplica 'transform: translateX(0);' en CSS
        navMenu.classList.toggle('show');
    });
});