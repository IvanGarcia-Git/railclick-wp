<?php
/*
Template Name: Estaciones
*/
get_header();
?>

<div class="min-h-screen bg-white estaciones-template">
      
    <!-- Hero Section -->
    <section class="relative h-[50vh] flex items-center justify-center px-4 sm:px-6 py-4">
        
        <div class="relative w-full sm:w-[90vw] max-w-none sm:max-w-none h-[50vh] mx-auto rounded-3xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-2xl">
          
            <div class="absolute inset-0">
                <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'estaciones_hero_bg_image', true ) ); ?>" alt="Estaciones" class="object-cover w-full h-full" />
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
                            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Rutas de Tren' ) ) ); ?>" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">Rutas de Tren</a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Tipos de Tren' ) ) ); ?>" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">Tipos de Tren</a>
                            <a href="#estaciones" class="text-white hover:text-white transition-colors text-sm xl:text-base font-semibold">Estaciones</a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contacto' ) ) ); ?>" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">
                                Contacto
                            </a>
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
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'estaciones_hero_subtitle', true ) ); ?>
                        </p>
                        <h1 class="text-white text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-4 sm:mb-6">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'estaciones_hero_title', true ) ); ?>
                        </h1>
                        <p class="text-white/90 text-base sm:text-lg lg:text-xl max-w-2xl mx-auto mb-6 sm:mb-8 leading-relaxed">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'estaciones_hero_description', true ) ); ?>
                        </p>
                    </div>

                    <!-- Quick Navigation with Glassmorphism -->
                    <div class="relative bg-white/20 backdrop-blur-md border border-white/30 rounded-2xl sm:rounded-full p-3 sm:p-2 mb-6 sm:mb-8 w-full max-w-4xl shadow-2xl">
                        
                        <!-- Mobile Layout -->
                        <div class="flex flex-col sm:hidden space-y-3">
                            <a href="#central" class="w-full bg-transparent text-white text-center py-3 rounded-xl border border-white/30 hover:bg-white/20 transition-all duration-300">
                                Estación Central
                            </a>
                            <a href="#norte" class="w-full bg-transparent text-white text-center py-3 rounded-xl border border-white/30 hover:bg-white/20 transition-all duration-300">
                                Estación Norte
                            </a>
                            <a href="#sur" class="w-full bg-transparent text-white text-center py-3 rounded-xl border border-white/30 hover:bg-white/20 transition-all duration-300">
                                Estación Sur
                            </a>
                            <a href="#este" class="w-full bg-transparent text-white text-center py-3 rounded-xl border border-white/30 hover:bg-white/20 transition-all duration-300">
                                Estación Este
                            </a>
                            <a href="#oeste" class="w-full bg-transparent text-white text-center py-3 rounded-xl border border-white/30 hover:bg-white/20 transition-all duration-300">
                                Estación Oeste
                            </a>
                        </div>

                        <!-- Desktop Layout -->
                        <div class="hidden sm:flex items-center gap-1">
                            <a href="#central" class="flex-1 text-center text-white py-3 px-4 rounded-full hover:bg-white/20 transition-all duration-300 text-sm lg:text-base">
                                Central
                            </a>
                            <div class="w-px h-8 bg-white/40"></div>
                            <a href="#norte" class="flex-1 text-center text-white py-3 px-4 rounded-full hover:bg-white/20 transition-all duration-300 text-sm lg:text-base">
                                Norte
                            </a>
                            <div class="w-px h-8 bg-white/40"></div>
                            <a href="#sur" class="flex-1 text-center text-white py-3 px-4 rounded-full hover:bg-white/20 transition-all duration-300 text-sm lg:text-base">
                                Sur
                            </a>
                            <div class="w-px h-8 bg-white/40"></div>
                            <a href="#este" class="flex-1 text-center text-white py-3 px-4 rounded-full hover:bg-white/20 transition-all duration-300 text-sm lg:text-base">
                                Este
                            </a>
                            <div class="w-px h-8 bg-white/40"></div>
                            <a href="#oeste" class="flex-1 text-center text-white py-3 px-4 rounded-full hover:bg-white/20 transition-all duration-300 text-sm lg:text-base">
                                Oeste
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Estaciones Grid Section -->
    <section class="py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                
                <?php 
                $estaciones = ['central', 'norte', 'sur', 'este', 'oeste'];
                foreach ($estaciones as $estacion): 
                    $estacion_name = get_post_meta( get_the_ID(), "estacion_{$estacion}_name", true );
                    $estacion_tipo = get_post_meta( get_the_ID(), "estacion_{$estacion}_tipo", true );
                    $estacion_direccion = get_post_meta( get_the_ID(), "estacion_{$estacion}_direccion", true );
                    $estacion_horarios = get_post_meta( get_the_ID(), "estacion_{$estacion}_horarios", true );
                    $estacion_servicios = get_post_meta( get_the_ID(), "estacion_{$estacion}_servicios", true );
                    $estacion_facilidades = get_post_meta( get_the_ID(), "estacion_{$estacion}_facilidades", true );
                    $estacion_conexiones = get_post_meta( get_the_ID(), "estacion_{$estacion}_conexiones", true );
                    $estacion_contacto = get_post_meta( get_the_ID(), "estacion_{$estacion}_contacto", true );
                    $estacion_image_1 = get_post_meta( get_the_ID(), "estacion_{$estacion}_image_1", true );
                    $estacion_image_2 = get_post_meta( get_the_ID(), "estacion_{$estacion}_image_2", true );
                    $estacion_image_3 = get_post_meta( get_the_ID(), "estacion_{$estacion}_image_3", true );
                ?>
                    
                    <?php if (!empty($estacion_name)): ?>
                    <!-- Estación Card -->
                    <div id="<?php echo esc_attr($estacion); ?>" class="estacion-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:scale-105">
                        <div class="relative h-64">
                            <?php if (!empty($estacion_image_1)): ?>
                                <img src="<?php echo esc_url($estacion_image_1); ?>" 
                                     alt="<?php echo esc_attr($estacion_name); ?>" 
                                     class="w-full h-full object-cover">
                            <?php endif; ?>
                            
                            <!-- Tipo indicator with glassmorphism -->
                            <?php if (!empty($estacion_tipo)): ?>
                            <div class="absolute top-4 left-4 bg-white/20 backdrop-blur-md border border-white/30 px-3 py-1.5 rounded-full flex items-center">
                                <span class="text-white font-medium text-sm">
                                    <?php echo esc_html($estacion_tipo); ?>
                                </span>
                            </div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-2xl font-bold text-gray-900">
                                    <?php echo esc_html($estacion_name); ?>
                                </h3>
                                <div class="flex items-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-500">
                                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                        <circle cx="12" cy="10" r="3"/>
                                    </svg>
                                    <span class="text-sm text-gray-600">Ubicación</span>
                                </div>
                            </div>
                            
                            <!-- Dirección -->
                            <?php if (!empty($estacion_direccion)): ?>
                                <div class="mb-4">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600">
                                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                            <circle cx="12" cy="10" r="3"/>
                                        </svg>
                                        <span class="font-semibold text-gray-900">Dirección</span>
                                    </div>
                                    <p class="text-sm text-gray-600 ml-6">
                                        <?php echo esc_html($estacion_direccion); ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Horarios -->
                            <?php if (!empty($estacion_horarios)): ?>
                                <div class="mb-4">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600">
                                            <circle cx="12" cy="12" r="10"/>
                                            <polyline points="12,6 12,12 16,14"/>
                                        </svg>
                                        <span class="font-semibold text-gray-900">Horarios</span>
                                    </div>
                                    <p class="text-sm text-gray-600 ml-6">
                                        <?php echo esc_html($estacion_horarios); ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Servicios -->
                            <?php if (!empty($estacion_servicios)): ?>
                                <div class="mb-4">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600">
                                            <circle cx="12" cy="12" r="3"/>
                                            <path d="M12 1v6m0 6v6"/>
                                            <path d="m15.5 2 1.73 1"/>
                                            <path d="M21 8.5l-1-1.73"/>
                                            <path d="m15.5 22 1.73-1"/>
                                            <path d="M21 15.5l-1 1.73"/>
                                            <path d="m8.5 2-1.73 1"/>
                                            <path d="M3 8.5l1-1.73"/>
                                            <path d="m8.5 22-1.73-1"/>
                                            <path d="M3 15.5l1 1.73"/>
                                        </svg>
                                        <span class="font-semibold text-gray-900">Servicios</span>
                                    </div>
                                    <div class="flex flex-wrap gap-2 ml-6">
                                        <?php 
                                        $services = explode("\n", $estacion_servicios);
                                        foreach ($services as $service): 
                                            $service = trim($service);
                                            if (!empty($service)):
                                        ?>
                                            <span class="bg-green-50 text-green-700 px-2 py-1 rounded-full text-xs">
                                                <?php echo esc_html($service); ?>
                                            </span>
                                        <?php 
                                            endif;
                                        endforeach; 
                                        ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Facilidades -->
                            <?php if (!empty($estacion_facilidades)): ?>
                                <div class="mb-4">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600">
                                            <path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z"/>
                                            <path d="m3 9 2.45-4.9A2 2 0 0 1 7.24 3h9.52a2 2 0 0 1 1.8 1.1L21 9"/>
                                            <path d="M12 3v6"/>
                                        </svg>
                                        <span class="font-semibold text-gray-900">Facilidades</span>
                                    </div>
                                    <div class="flex flex-wrap gap-2 ml-6">
                                        <?php 
                                        $facilities = explode("\n", $estacion_facilidades);
                                        foreach ($facilities as $facility): 
                                            $facility = trim($facility);
                                            if (!empty($facility)):
                                        ?>
                                            <span class="bg-blue-50 text-blue-700 px-2 py-1 rounded-full text-xs">
                                                <?php echo esc_html($facility); ?>
                                            </span>
                                        <?php 
                                            endif;
                                        endforeach; 
                                        ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Conexiones -->
                            <?php if (!empty($estacion_conexiones)): ?>
                                <div class="mb-4">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600">
                                            <path d="M16 3a5 5 0 1 0 5 5v6a5 5 0 1 1-5-5H8a5 5 0 1 1 5-5V8a5 5 0 1 0-5 5h8"/>
                                        </svg>
                                        <span class="font-semibold text-gray-900">Conexiones</span>
                                    </div>
                                    <div class="flex flex-wrap gap-2 ml-6">
                                        <?php 
                                        $connections = explode("\n", $estacion_conexiones);
                                        foreach ($connections as $connection): 
                                            $connection = trim($connection);
                                            if (!empty($connection)):
                                        ?>
                                            <span class="bg-orange-50 text-orange-700 px-2 py-1 rounded-full text-xs">
                                                <?php echo esc_html($connection); ?>
                                            </span>
                                        <?php 
                                            endif;
                                        endforeach; 
                                        ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Contacto -->
                            <?php if (!empty($estacion_contacto)): ?>
                                <div class="mb-4">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                        </svg>
                                        <span class="font-semibold text-gray-900">Contacto</span>
                                    </div>
                                    <p class="text-sm text-gray-600 ml-6">
                                        <?php echo esc_html($estacion_contacto); ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Additional Images -->
                            <?php if (!empty($estacion_image_2) || !empty($estacion_image_3)): ?>
                                <div class="grid grid-cols-2 gap-2 mb-6">
                                    <?php if (!empty($estacion_image_2)): ?>
                                        <img src="<?php echo esc_url($estacion_image_2); ?>" 
                                             alt="<?php echo esc_attr($estacion_name); ?> - Interior" 
                                             class="w-full h-24 object-cover rounded-lg">
                                    <?php endif; ?>
                                    <?php if (!empty($estacion_image_3)): ?>
                                        <img src="<?php echo esc_url($estacion_image_3); ?>" 
                                             alt="<?php echo esc_attr($estacion_name); ?> - Servicios" 
                                             class="w-full h-24 object-cover rounded-lg">
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            
                            <div class="flex gap-2">
                                <a href="#mapa" 
                                   class="flex-1 bg-blue-600 text-white text-center py-2 px-4 rounded-lg text-sm font-semibold hover:bg-blue-700 transition-colors">
                                    Ver en Mapa
                                </a>
                                <a href="#rutas" 
                                   class="flex-1 bg-gray-100 text-gray-700 text-center py-2 px-4 rounded-lg text-sm font-semibold hover:bg-gray-200 transition-colors">
                                    Ver Rutas
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-blue-600 py-16 animate-fade-in-up">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6 animate-fade-in-down">
                Todas las estaciones a tu alcance
            </h2>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto animate-fade-in-up">
                Descubre toda la información necesaria para planificar tu viaje desde cualquier estación.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#mapa" 
                   class="btn-primary bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-50 transition-colors animate-slide-in-left">
                    Ver Mapa Interactivo
                </a>
                <a href="#planificador" 
                   class="btn-primary border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors animate-slide-in-right">
                    Planifica tu Viaje
                </a>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>