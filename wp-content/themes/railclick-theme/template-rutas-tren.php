<?php
/*
Template Name: Rutas de Tren
*/
get_header();
?>

<div class="min-h-screen bg-white rutas-template">
      
    <!-- Hero Section -->
    <section class="relative h-[50vh] flex items-center justify-center px-4 sm:px-6 py-4">
        
        <div class="relative w-full sm:w-[90vw] max-w-none sm:max-w-none h-[50vh] mx-auto rounded-3xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-2xl">
          
            <div class="absolute inset-0">
                <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'rutas_hero_bg_image', true ) ); ?>" alt="Rutas de Tren" class="object-cover w-full h-full" />
                <div class="absolute inset-0 bg-black/60"></div>
            </div>

            <!-- Header -->
            <div class="relative z-10 h-[50vh] flex flex-col">
                
                <header class="p-4 sm:p-6 lg:p-8 flex-shrink-0">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-6 h-6 sm:w-8 sm:h-8 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 sm:w-6 sm:h-6 text-white"><path d="M10 9.5 14 5.5"/><path d="m14 14-4 4"/><path d="M10 18.5 14 14.5"/><path d="m14 9.5-4-4"/><path d="M5 12h14"/><path d="M5 12h14"/><path d="M8 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2"/><path d="M18 3h-2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2"/></svg>
                            </div>
                            <span class="text-white font-semibold text-lg sm:text-xl">RailClick</span>
                        </div>

                        <!-- Navigation -->
                        <nav class="hidden lg:flex items-center space-x-6 xl:space-x-8">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">Inicio</a>
                            <a href="#rutas" class="text-white hover:text-white transition-colors text-sm xl:text-base font-semibold">Rutas de Tren</a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Tipos de Tren' ) ) ); ?>" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">Tipos de Tren</a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Estaciones' ) ) ); ?>" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">Estaciones</a>
                        </nav>

                        <!-- Mobile menu button -->
                        <button class="lg:hidden p-2 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                        </button>
                    </div>
                </header>

                <!-- Hero Content -->
                <div class="flex-1 flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8 min-h-0">
                    <div class="text-center max-w-4xl mx-auto mb-6 sm:mb-8">
                        <p class="text-white/90 text-sm sm:text-base lg:text-lg mb-2 sm:mb-4 font-medium">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'rutas_hero_subtitle', true ) ); ?>
                        </p>
                        <h1 class="text-white text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-4 sm:mb-6">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'rutas_hero_title', true ) ); ?>
                        </h1>
                        <p class="text-white/90 text-base sm:text-lg lg:text-xl max-w-2xl mx-auto mb-6 sm:mb-8 leading-relaxed">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'rutas_hero_description', true ) ); ?>
                        </p>
                    </div>

                    <!-- Glassmorphism Filter Bar -->
                    <div class="relative bg-white/20 backdrop-blur-md border border-white/30 rounded-2xl sm:rounded-full p-3 sm:p-2 mb-6 sm:mb-8 w-full max-w-5xl shadow-2xl">
                        
                        <!-- Mobile Layout -->
                        <div class="flex flex-col sm:hidden space-y-3">
                            <input type="text" 
                                   id="search-origin-hero"
                                   placeholder="<?php echo esc_attr( get_post_meta( get_the_ID(), 'rutas_hero_search_placeholder', true ) ?: 'Origen: Roma, Milano...' ); ?>" 
                                   class="w-full bg-transparent text-white placeholder-white/70 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-white/40 border border-white/30">
                            <input type="text" 
                                   id="search-destination-hero"
                                   placeholder="Destino: Florencia, Venecia..." 
                                   class="w-full bg-transparent text-white placeholder-white/70 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-white/40 border border-white/30">
                            <select id="duration-filter-hero" class="w-full bg-transparent text-white placeholder-white/70 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-white/40 border border-white/30">
                                <option value="" class="text-gray-900">Cualquier duración</option>
                                <option value="short" class="text-gray-900">Menos de 2 horas</option>
                                <option value="medium" class="text-gray-900">2-4 horas</option>
                                <option value="long" class="text-gray-900">4-6 horas</option>
                                <option value="very-long" class="text-gray-900">Más de 6 horas</option>
                            </select>
                            <button id="search-button-hero" class="w-full bg-gradient-to-r from-blue-500 to-teal-500 hover:from-blue-600 hover:to-teal-600 text-white py-3 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-105 shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                                Buscar Rutas
                            </button>
                        </div>

                        <!-- Desktop Layout -->
                        <div class="hidden sm:flex items-center gap-1">
                            <div class="flex-1">
                                <input type="text" 
                                       id="search-origin-hero-desktop"
                                       placeholder="<?php echo esc_attr( get_post_meta( get_the_ID(), 'rutas_hero_search_placeholder', true ) ?: 'Origen' ); ?>" 
                                       class="w-full bg-transparent text-white placeholder-white/70 px-3 lg:px-4 py-3 rounded-full focus:outline-none focus:ring-2 focus:ring-white/30 border-0 text-sm lg:text-base">
                            </div>
                            <div class="w-px h-8 bg-white/40"></div>
                            <div class="flex-1">
                                <input type="text" 
                                       id="search-destination-hero-desktop"
                                       placeholder="Destino" 
                                       class="w-full bg-transparent text-white placeholder-white/70 px-3 lg:px-4 py-3 rounded-full focus:outline-none focus:ring-2 focus:ring-white/30 border-0 text-sm lg:text-base">
                            </div>
                            <div class="w-px h-8 bg-white/40"></div>
                            <div class="flex-1">
                                <select id="duration-filter-hero-desktop" class="w-full bg-transparent text-white placeholder-white/70 px-3 lg:px-4 py-3 rounded-full focus:outline-none focus:ring-2 focus:ring-white/30 border-0 text-sm lg:text-base">
                                    <option value="" class="text-gray-900">Duración</option>
                                    <option value="short" class="text-gray-900">< 2h</option>
                                    <option value="medium" class="text-gray-900">2-4h</option>
                                    <option value="long" class="text-gray-900">4-6h</option>
                                    <option value="very-long" class="text-gray-900">6h+</option>
                                </select>
                            </div>
                            <button id="search-button-hero-desktop" class="bg-gradient-to-r from-blue-500 to-teal-500 hover:from-blue-600 hover:to-teal-600 text-white px-6 lg:px-8 py-3 rounded-full transition-all duration-300 hover:scale-105 shadow-lg text-sm lg:text-base flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                                Buscar
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- Routes Grid Section -->
    <section class="py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
                
                <?php for ($i = 1; $i <= 6; $i++): ?>
                    <?php
                    $route_name = get_post_meta( get_the_ID(), "ruta_{$i}_name", true );
                    $route_origin = get_post_meta( get_the_ID(), "ruta_{$i}_origin", true );
                    $route_destination = get_post_meta( get_the_ID(), "ruta_{$i}_destination", true );
                    $route_duration = get_post_meta( get_the_ID(), "ruta_{$i}_duration", true );
                    $route_price = get_post_meta( get_the_ID(), "ruta_{$i}_price_from", true );
                    $route_description = get_post_meta( get_the_ID(), "ruta_{$i}_description", true );
                    $route_image = get_post_meta( get_the_ID(), "ruta_{$i}_image_1", true );
                    $route_booking_link = get_post_meta( get_the_ID(), "ruta_{$i}_booking_link", true );
                    $route_booking_text = get_post_meta( get_the_ID(), "ruta_{$i}_booking_text", true );
                    $route_features = get_post_meta( get_the_ID(), "ruta_{$i}_features", true );
                    ?>
                    
                    <?php if (!empty($route_name)): ?>
                    <!-- Route Card -->
                    <div class="route-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:scale-105 flex flex-col h-full"
                         data-origin="<?php echo esc_attr($route_origin); ?>"
                         data-destination="<?php echo esc_attr($route_destination); ?>"
                         data-duration="<?php echo esc_attr($route_duration); ?>"
                         data-price="<?php echo esc_attr($route_price); ?>"
                         data-name="<?php echo esc_attr($route_name); ?>">
                        <div class="relative h-64">
                            <?php if (!empty($route_image)): ?>
                                <img src="<?php echo esc_url($route_image); ?>" 
                                     alt="<?php echo esc_attr($route_name); ?>" 
                                     class="route-image w-full h-full object-cover">
                            <?php endif; ?>
                            <!-- Duration Badge with Glassmorphism - Moved from content section -->
                            <div class="absolute top-4 right-4 bg-white/20 backdrop-blur-md border border-white/30 px-3 py-1.5 rounded-full flex items-center" style="gap: 3px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12,6 12,12 16,14"/>
                                </svg>
                                <span class="text-white font-medium text-xs">
                                    <?php echo esc_html($route_duration); ?>
                                </span>
                            </div>
                        </div>
                        
                        <div class="p-6 flex flex-col flex-grow">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="route-title text-xl font-bold text-gray-900">
                                    <?php echo esc_html($route_name); ?>
                                </h3>
                                <?php if (!empty($route_price)): ?>
                                    <div class="text-right">
                                        <span class="price-highlight text-2xl font-bold text-blue-600">
                                            <?php echo esc_html($route_price); ?>€
                                        </span>
                                        <div class="text-xs text-gray-500">desde</div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="flex items-center text-gray-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/></svg>
                                <span class="text-sm">
                                    <?php echo esc_html($route_origin); ?> → <?php echo esc_html($route_destination); ?>
                                </span>
                            </div>
                            
                            <?php if (!empty($route_description)): ?>
                                <p class="route-description text-gray-600 text-sm mb-4 leading-relaxed">
                                    <?php echo esc_html($route_description); ?>
                                </p>
                            <?php endif; ?>
                            
                            <?php if (!empty($route_features)): ?>
                                <div class="mb-4">
                                    <div class="flex flex-wrap gap-2">
                                        <?php 
                                        $features = explode("\n", $route_features);
                                        foreach ($features as $feature): 
                                            $feature = trim($feature);
                                            if (!empty($feature)):
                                        ?>
                                            <span class="feature-tag bg-blue-50 text-blue-700 px-2 py-1 rounded-full text-xs">
                                                <?php echo esc_html($feature); ?>
                                            </span>
                                        <?php 
                                            endif;
                                        endforeach; 
                                        ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Spacer to push button to bottom -->
                            <div class="flex-grow"></div>
                            
                            <a href="<?php echo esc_url($route_booking_link ?: '#'); ?>" 
                               class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors mt-auto">
                                Comprar Billetes
                            </a>
                        </div>
                    </div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
            
            <!-- No Results Message -->
            <div id="no-results" class="no-results-container text-center py-12 hidden" style="opacity: 0; transition: opacity 0.3s ease;">
                <div class="max-w-md mx-auto">
                    <svg class="no-results-icon mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.796 0-5.292 1.434-6.75 3.82-1.456 2.38-1.456 5.31 0 7.69A7.958 7.958 0 0112 21a7.958 7.958 0 016.75-3.82c1.456-2.38 1.456-5.31 0-7.69A7.962 7.962 0 0112 15z" />
                    </svg>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No se encontraron rutas</h3>
                    <p class="text-gray-500">No hay rutas que coincidan con tus criterios de búsqueda. Prueba con diferentes filtros.</p>
                    <button onclick="document.getElementById('reset-filters').click()" class="mt-4 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        Ver todas las rutas
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-blue-600 py-16 animate-fade-in-up">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6 animate-fade-in-down">
                ¿No encuentras tu ruta ideal?
            </h2>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto animate-fade-in-up">
                Contáctanos y te ayudaremos a planificar el viaje perfecto en tren por toda Europa.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contacto" 
                   class="btn-primary bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-50 transition-colors animate-slide-in-left">
                    Contactar Ahora
                </a>
                <a href="#todas-rutas" 
                   class="btn-primary border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors animate-slide-in-right">
                    Ver Todas las Rutas
                </a>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>