/**
 * Sistema de filtros para el template Rutas de Tren
 * Permite filtrar rutas por origen, destino y duración
 */

document.addEventListener('DOMContentLoaded', function() {
    // Solo ejecutar en la página de rutas de tren
    if (!document.querySelector('.rutas-template')) {
        return;
    }

    // Elementos del DOM - Hero section (únicos filtros)
    const searchOriginHero = document.getElementById('search-origin-hero');
    const searchDestinationHero = document.getElementById('search-destination-hero');
    const durationFilterHero = document.getElementById('duration-filter-hero');
    const searchButtonHero = document.getElementById('search-button-hero');
    
    const searchOriginHeroDesktop = document.getElementById('search-origin-hero-desktop');
    const searchDestinationHeroDesktop = document.getElementById('search-destination-hero-desktop');
    const durationFilterHeroDesktop = document.getElementById('duration-filter-hero-desktop');
    const searchButtonHeroDesktop = document.getElementById('search-button-hero-desktop');
    
    // Elementos comunes
    const routeCards = document.querySelectorAll('.route-card');
    const noResults = document.getElementById('no-results');
    
    // Estado de los filtros
    let filters = {
        origin: '',
        destination: '',
        duration: ''
    };

    // Función para normalizar texto (sin acentos, minúsculas)
    function normalizeText(text) {
        return text.toLowerCase()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '')
            .trim();
    }

    // Función para convertir duración a minutos para comparación
    function durationToMinutes(duration) {
        if (!duration) return 0;
        
        const hours = duration.match(/(\d+)h/);
        const minutes = duration.match(/(\d+)min/);
        
        let totalMinutes = 0;
        if (hours) totalMinutes += parseInt(hours[1]) * 60;
        if (minutes) totalMinutes += parseInt(minutes[1]);
        
        return totalMinutes;
    }

    // Función para filtrar rutas
    function filterRoutes() {
        let visibleCount = 0;

        routeCards.forEach(card => {
            let showCard = true;

            // Filtro por origen
            if (filters.origin) {
                const origin = card.dataset.origin || '';
                if (!normalizeText(origin).includes(normalizeText(filters.origin))) {
                    showCard = false;
                }
            }

            // Filtro por destino
            if (filters.destination) {
                const destination = card.dataset.destination || '';
                if (!normalizeText(destination).includes(normalizeText(filters.destination))) {
                    showCard = false;
                }
            }

            // Filtro por duración
            if (filters.duration) {
                const cardDuration = durationToMinutes(card.dataset.duration || '');
                
                switch (filters.duration) {
                    case 'short': // Menos de 2 horas
                        if (cardDuration >= 120) showCard = false;
                        break;
                    case 'medium': // 2-4 horas
                        if (cardDuration < 120 || cardDuration >= 240) showCard = false;
                        break;
                    case 'long': // 4-6 horas
                        if (cardDuration < 240 || cardDuration >= 360) showCard = false;
                        break;
                    case 'very-long': // Más de 6 horas
                        if (cardDuration < 360) showCard = false;
                        break;
                }
            }

            // Mostrar/ocultar carta con animación
            if (showCard) {
                card.style.display = 'block';
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 10);
                visibleCount++;
            } else {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    card.style.display = 'none';
                }, 300);
            }
        });

        // Mostrar mensaje de "no hay resultados"
        if (noResults) {
            if (visibleCount === 0) {
                noResults.style.display = 'block';
                setTimeout(() => {
                    noResults.style.opacity = '1';
                }, 10);
            } else {
                noResults.style.opacity = '0';
                setTimeout(() => {
                    noResults.style.display = 'none';
                }, 300);
            }
        }

        // Actualizar contador de resultados
        updateResultsCounter(visibleCount);
    }

    // Función para actualizar contador de resultados (eliminada)
    function updateResultsCounter(count) {
        // Función vacía - contador eliminado
    }


    // Event listeners para selectores de duración (sin debounce)
    if (durationFilterHero) {
        durationFilterHero.addEventListener('change', function() {
            filters.duration = this.value;
            filterRoutes();
        });
    }

    if (durationFilterHeroDesktop) {
        durationFilterHeroDesktop.addEventListener('change', function() {
            filters.duration = this.value;
            filterRoutes();
        });
    }

    // Event listeners para botones
    if (searchButtonHero) {
        searchButtonHero.addEventListener('click', function(e) {
            e.preventDefault();
            filterRoutes();
            
            // Scroll to results
            document.querySelector('.route-card')?.scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
            
            // Animación del botón
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);
        });
    }

    if (searchButtonHeroDesktop) {
        searchButtonHeroDesktop.addEventListener('click', function(e) {
            e.preventDefault();
            filterRoutes();
            
            // Scroll to results
            document.querySelector('.route-card')?.scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
            
            // Animación del botón
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);
        });
    }


    // Inicializar estilos de transición para las cartas
    routeCards.forEach(card => {
        card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
    });


    // Búsqueda en tiempo real con Enter
    [searchOriginHero, searchDestinationHero, searchOriginHeroDesktop, searchDestinationHeroDesktop].forEach(input => {
        if (input) {
            input.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    filterRoutes();
                    
                    // Scroll to results
                    document.querySelector('.route-card')?.scrollIntoView({ 
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        }
    });

    // Función para destacar texto encontrado
    function highlightSearchTerms() {
        routeCards.forEach(card => {
            const title = card.querySelector('.route-title');
            const description = card.querySelector('.route-description');
            
            if (title && (filters.origin || filters.destination)) {
                let text = title.textContent;
                
                if (filters.origin) {
                    const regex = new RegExp(`(${filters.origin})`, 'gi');
                    text = text.replace(regex, '<mark>$1</mark>');
                }
                
                if (filters.destination) {
                    const regex = new RegExp(`(${filters.destination})`, 'gi');
                    text = text.replace(regex, '<mark>$1</mark>');
                }
                
                title.innerHTML = text;
            }
        });
    }

    // Debounce para optimizar performance
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // Aplicar debounce a la búsqueda
    const debouncedFilter = debounce(filterRoutes, 300);

    // Aplicar debounce a los filtros del hero
    if (searchOriginHero) {
        searchOriginHero.addEventListener('input', function() {
            filters.origin = this.value;
            debouncedFilter();
        });
    }

    if (searchDestinationHero) {
        searchDestinationHero.addEventListener('input', function() {
            filters.destination = this.value;
            debouncedFilter();
        });
    }

    if (searchOriginHeroDesktop) {
        searchOriginHeroDesktop.addEventListener('input', function() {
            filters.origin = this.value;
            debouncedFilter();
        });
    }

    if (searchDestinationHeroDesktop) {
        searchDestinationHeroDesktop.addEventListener('input', function() {
            filters.destination = this.value;
            debouncedFilter();
        });
    }

    console.log('🚄 Sistema de filtros de rutas inicializado correctamente');
});