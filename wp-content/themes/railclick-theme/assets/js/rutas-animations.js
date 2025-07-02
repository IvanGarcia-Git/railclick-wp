/**
 * Sistema de animaciones para el template Rutas de Tren
 * Maneja animaciones de entrada, scroll effects y transiciones
 */

document.addEventListener('DOMContentLoaded', function() {
    // Solo ejecutar en la página de rutas de tren
    if (!document.querySelector('.rutas-template')) {
        return;
    }

    // Intersection Observer para animaciones al hacer scroll
    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -100px 0px',
        threshold: 0.1
    };

    // Función para animar elementos al entrar en viewport
    const animateOnScroll = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                
                // Añadir clase de animación
                if (element.classList.contains('route-card')) {
                    element.classList.add('animate-in');
                }
                
                if (element.classList.contains('filter-section')) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
                
                // No observar más este elemento
                animateOnScroll.unobserve(element);
            }
        });
    }, observerOptions);

    // Observar elementos para animaciones
    const elementsToAnimate = document.querySelectorAll('.route-card, .filter-section');
    elementsToAnimate.forEach(el => {
        animateOnScroll.observe(el);
    });

    // Efecto parallax para el hero
    const hero = document.querySelector('.hero-parallax');
    if (hero) {
        let ticking = false;
        
        function updateParallax() {
            const scrolled = window.pageYOffset;
            const parallax = scrolled * 0.5;
            hero.style.transform = `translate3d(0, ${parallax}px, 0)`;
            ticking = false;
        }
        
        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(updateParallax);
                ticking = true;
            }
        }
        
        window.addEventListener('scroll', requestTick);
    }

    // Animaciones staggered para las características
    function animateFeatures() {
        const featureTags = document.querySelectorAll('.feature-tag');
        featureTags.forEach((tag, index) => {
            tag.style.animationDelay = `${index * 0.1}s`;
        });
    }

    // Efecto de typing para títulos
    function typeWriter(element, text, speed = 50) {
        if (!element || !text) return;
        
        element.innerHTML = '';
        let i = 0;
        
        function type() {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(type, speed);
            }
        }
        
        type();
    }

    // Efecto de contador animado
    function animateCounter(element, target, duration = 2000) {
        if (!element) return;
        
        const start = 0;
        const increment = target / (duration / 16);
        let current = start;
        
        const timer = setInterval(() => {
            current += increment;
            element.textContent = Math.floor(current);
            
            if (current >= target) {
                element.textContent = target;
                clearInterval(timer);
            }
        }, 16);
    }


    // Efecto de ondas en botones
    function createRipple(event) {
        const button = event.currentTarget;
        const ripple = document.createElement('span');
        const rect = button.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = event.clientX - rect.left - size / 2;
        const y = event.clientY - rect.top - size / 2;
        
        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.classList.add('ripple');
        
        // Añadir CSS para el ripple
        if (!document.getElementById('ripple-styles')) {
            const style = document.createElement('style');
            style.id = 'ripple-styles';
            style.textContent = `
                .ripple {
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.4);
                    transform: scale(0);
                    animation: ripple 0.6s linear;
                    pointer-events: none;
                }
                
                @keyframes ripple {
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
                }
                
                .btn-ripple {
                    position: relative;
                    overflow: hidden;
                }
            `;
            document.head.appendChild(style);
        }
        
        button.classList.add('btn-ripple');
        button.appendChild(ripple);
        
        setTimeout(() => {
            ripple.remove();
        }, 600);
    }

    // Añadir efecto ripple a botones
    const buttons = document.querySelectorAll('button, .btn-primary');
    buttons.forEach(button => {
        button.addEventListener('click', createRipple);
    });

    // Smooth scroll para enlaces internos
    const internalLinks = document.querySelectorAll('a[href^="#"]');
    internalLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            if (href !== '#') {
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // Animación de loading para filtros
    function showLoading(element) {
        if (element) {
            element.classList.add('loading');
            setTimeout(() => {
                element.classList.remove('loading');
            }, 800);
        }
    }

    // Observar cambios en el filtro para mostrar loading
    const filterInputs = document.querySelectorAll('#search-origin, #search-destination, #duration-filter');
    filterInputs.forEach(input => {
        input.addEventListener('input', () => {
            showLoading(input);
        });
    });

    // Entrada escalonada de tarjetas
    function staggeredEntrance() {
        const cards = document.querySelectorAll('.route-card');
        cards.forEach((card, index) => {
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 100);
        });
    }

    // Efecto de hover mejorado para imágenes
    const routeImages = document.querySelectorAll('.route-image');
    routeImages.forEach(img => {
        const card = img.closest('.route-card');
        if (card) {
            card.addEventListener('mouseenter', () => {
                img.style.transform = 'scale(1.1) rotate(1deg)';
            });
            
            card.addEventListener('mouseleave', () => {
                img.style.transform = 'scale(1) rotate(0deg)';
            });
        }
    });

    // Función para animar el contador de resultados
    function animateResultsCounter() {
        const counter = document.getElementById('results-counter');
        if (counter) {
            counter.style.opacity = '0';
            counter.style.transform = 'translateY(-10px)';
            
            setTimeout(() => {
                counter.style.opacity = '1';
                counter.style.transform = 'translateY(0)';
            }, 300);
        }
    }

    // Observar cambios en el contador
    const resultsObserver = new MutationObserver(animateResultsCounter);
    const resultsCounter = document.getElementById('results-counter');
    if (resultsCounter) {
        resultsObserver.observe(resultsCounter, {
            childList: true,
            characterData: true,
            subtree: true
        });
    }

    // Efecto de partículas en el fondo (opcional)
    function createParticles() {
        const particlesContainer = document.createElement('div');
        particlesContainer.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
            overflow: hidden;
        `;
        
        for (let i = 0; i < 20; i++) {
            const particle = document.createElement('div');
            particle.style.cssText = `
                position: absolute;
                width: 4px;
                height: 4px;
                background: rgba(59, 130, 246, 0.1);
                border-radius: 50%;
                animation: float ${3 + Math.random() * 4}s ease-in-out infinite;
                animation-delay: ${Math.random() * 2}s;
                left: ${Math.random() * 100}%;
                top: ${Math.random() * 100}%;
            `;
            particlesContainer.appendChild(particle);
        }
        
        document.body.appendChild(particlesContainer);
    }

    // Inicializar animaciones
    setTimeout(() => {
        staggeredEntrance();
        animateFeatures();
        // createParticles(); // Descomenta si quieres partículas
    }, 500);

    // Limpiar listeners en unload
    window.addEventListener('beforeunload', () => {
        animateOnScroll.disconnect();
        if (resultsObserver) resultsObserver.disconnect();
    });

    // Optimización para dispositivos móviles
    const isMobile = window.innerWidth <= 768;
    if (isMobile) {
        // Reducir animaciones en móviles
        document.documentElement.style.setProperty('--animation-duration', '0.3s');
        document.documentElement.style.setProperty('--stagger-delay', '0.05s');
    }

    console.log('🎨 Sistema de animaciones inicializado correctamente');
});