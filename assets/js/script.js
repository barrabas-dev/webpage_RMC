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

    // HERO video: lógica SOLO para escritorio (min-width: 768px)
    const video1 = document.querySelector('.hero__video');
    const video2 = document.querySelector('.hero__video-1');
    const imageFallback = document.querySelector('.hero__image-fallback-1');
    const heroMediaBg = document.querySelector('.hero__media-background');

    // Crear overlay para fade si no existe
    let heroFadeOverlay = document.querySelector('.hero__fade-overlay');
    if (!heroFadeOverlay && heroMediaBg) {
        heroFadeOverlay = document.createElement('div');
        heroFadeOverlay.className = 'hero__fade-overlay';
        heroMediaBg.appendChild(heroFadeOverlay);
    }

    function fadeToImage(callback) {
        if (!heroFadeOverlay) return callback();
        heroFadeOverlay.style.opacity = 0;
        heroFadeOverlay.style.display = 'block';
        // Forzar reflow para asegurar la transición
        void heroFadeOverlay.offsetWidth;
        heroFadeOverlay.style.opacity = 1;
        setTimeout(() => {
            callback();
            heroFadeOverlay.style.opacity = 0;
            setTimeout(() => {
                heroFadeOverlay.style.display = 'none';
            }, 800);
        }, 800);
    }

    function isDesktop() {
        return window.matchMedia('(min-width: 768px)').matches;
    }

    function isMobile() {
        return window.matchMedia('(max-width: 767px)').matches;
    }

    // ESCRITORIO (>=768px)
    if (isDesktop() && video1 && video2 && imageFallback) {
        imageFallback.style.display = 'none';
        [video1, video2].forEach(video => {
            video.currentTime = 0;
            video.playbackRate = 0.6;
            video.play();
        });
        setTimeout(() => {
            fadeToImage(() => {
                [video1, video2].forEach(video => {
                    video.pause();
                    video.style.display = 'none';
                });
                imageFallback.style.display = 'block';
            });
        }, 13000);
    }
    // MÓVIL (<768px) - solo video1
    else if (isMobile() && video1 && imageFallback) {
        imageFallback.style.display = 'none';
        video1.currentTime = 0;
        video1.playbackRate = 0.6;
        video1.play();
        setTimeout(() => {
            fadeToImage(() => {
                video1.pause();
                video1.style.display = 'none';
                imageFallback.style.display = 'block';
            });
        }, 13000);
    }
});