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

    // HERO video: reproducir solo una vez y mostrar imagen al finalizar
    const video = document.querySelector('.hero__video');
    const imageFallback = document.querySelector('.hero__image-fallback');

    if (video && imageFallback) {
        video.addEventListener('loadedmetadata', () => {
            video.playbackRate = 0.6;
        });
        imageFallback.style.display = 'none';
        video.addEventListener('ended', () => {
            video.pause();
            video.style.display = 'none';
            imageFallback.style.display = 'block';
        });
    }
});