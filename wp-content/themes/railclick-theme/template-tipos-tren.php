<?php
/*
Template Name: Tipos de Tren
*/
get_header();
?>

<div class="min-h-screen bg-white tipos-template">
      
    <!-- Hero Section -->
    <section class="relative h-[50vh] flex items-center justify-center px-4 sm:px-6 py-4">
        
        <div class="relative w-full sm:w-[90vw] max-w-none sm:max-w-none h-[50vh] mx-auto rounded-3xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-2xl">
          
            <div class="absolute inset-0">
                <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'tipos_hero_bg_image', true ) ); ?>" alt="Tipos de Tren" class="object-cover w-full h-full" />
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
                            <a href="#tipos" class="text-white hover:text-white transition-colors text-sm xl:text-base font-semibold">Tipos de Tren</a>
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
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'tipos_hero_subtitle', true ) ); ?>
                        </p>
                        <h1 class="text-white text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-4 sm:mb-6">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'tipos_hero_title', true ) ); ?>
                        </h1>
                        <p class="text-white/90 text-base sm:text-lg lg:text-xl max-w-2xl mx-auto mb-6 sm:mb-8 leading-relaxed">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'tipos_hero_description', true ) ); ?>
                        </p>
                    </div>

                    <!-- Quick Navigation with Glassmorphism -->
                    <div class="relative bg-white/20 backdrop-blur-md border border-white/30 rounded-2xl sm:rounded-full p-3 sm:p-2 mb-6 sm:mb-8 w-full max-w-4xl shadow-2xl">
                        
                        <!-- Mobile Layout -->
                        <div class="flex flex-col sm:hidden space-y-3">
                            <a href="#regional" class="w-full bg-transparent text-white text-center py-3 rounded-xl border border-white/30 hover:bg-white/20 transition-all duration-300">
                                Tren Regional
                            </a>
                            <a href="#alta-velocidad" class="w-full bg-transparent text-white text-center py-3 rounded-xl border border-white/30 hover:bg-white/20 transition-all duration-300">
                                Alta Velocidad
                            </a>
                            <a href="#nocturno" class="w-full bg-transparent text-white text-center py-3 rounded-xl border border-white/30 hover:bg-white/20 transition-all duration-300">
                                Tren Nocturno
                            </a>
                            <a href="#panoramico" class="w-full bg-transparent text-white text-center py-3 rounded-xl border border-white/30 hover:bg-white/20 transition-all duration-300">
                                Tren Panorámico
                            </a>
                        </div>

                        <!-- Desktop Layout -->
                        <div class="hidden sm:flex items-center gap-1">
                            <a href="#regional" class="flex-1 text-center text-white py-3 px-4 rounded-full hover:bg-white/20 transition-all duration-300 text-sm lg:text-base">
                                Tren Regional
                            </a>
                            <div class="w-px h-8 bg-white/40"></div>
                            <a href="#alta-velocidad" class="flex-1 text-center text-white py-3 px-4 rounded-full hover:bg-white/20 transition-all duration-300 text-sm lg:text-base">
                                Alta Velocidad
                            </a>
                            <div class="w-px h-8 bg-white/40"></div>
                            <a href="#nocturno" class="flex-1 text-center text-white py-3 px-4 rounded-full hover:bg-white/20 transition-all duration-300 text-sm lg:text-base">
                                Tren Nocturno
                            </a>
                            <div class="w-px h-8 bg-white/40"></div>
                            <a href="#panoramico" class="flex-1 text-center text-white py-3 px-4 rounded-full hover:bg-white/20 transition-all duration-300 text-sm lg:text-base">
                                Tren Panorámico
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tipos Grid Section -->
    <section class="py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                
                <?php 
                $tipos = ['regional', 'alta_velocidad', 'nocturno', 'panoramico'];
                foreach ($tipos as $tipo): 
                    $tipo_name = get_post_meta( get_the_ID(), "tipo_{$tipo}_name", true );
                    $tipo_description = get_post_meta( get_the_ID(), "tipo_{$tipo}_description", true );
                    $tipo_capacity = get_post_meta( get_the_ID(), "tipo_{$tipo}_capacity", true );
                    $tipo_speed = get_post_meta( get_the_ID(), "tipo_{$tipo}_speed", true );
                    $tipo_services = get_post_meta( get_the_ID(), "tipo_{$tipo}_services", true );
                    $tipo_features = get_post_meta( get_the_ID(), "tipo_{$tipo}_features", true );
                    $tipo_price = get_post_meta( get_the_ID(), "tipo_{$tipo}_price_from", true );
                    $tipo_image_1 = get_post_meta( get_the_ID(), "tipo_{$tipo}_image_1", true );
                    $tipo_image_2 = get_post_meta( get_the_ID(), "tipo_{$tipo}_image_2", true );
                    $tipo_image_3 = get_post_meta( get_the_ID(), "tipo_{$tipo}_image_3", true );
                ?>
                    
                    <?php if (!empty($tipo_name)): ?>
                    <!-- Tipo Card -->
                    <div id="<?php echo esc_attr(str_replace('_', '-', $tipo)); ?>" class="tipo-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:scale-105">
                        <div class="relative h-80">
                            <?php if (!empty($tipo_image_1)): ?>
                                <img src="<?php echo esc_url($tipo_image_1); ?>" 
                                     alt="<?php echo esc_attr($tipo_name); ?>" 
                                     class="w-full h-full object-cover">
                            <?php endif; ?>
                            
                            <!-- Speed indicator with glassmorphism -->
                            <?php if (!empty($tipo_speed)): ?>
                            <div class="absolute top-4 right-4 bg-white/20 backdrop-blur-md border border-white/30 px-3 py-1.5 rounded-full flex items-center" style="gap: 3px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                    <path d="m8 3 4 8 5-5v11H6V6l5 5"/>
                                </svg>
                                <span class="text-white font-medium text-xs">
                                    <?php echo esc_html($tipo_speed); ?>
                                </span>
                            </div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-2xl font-bold text-gray-900">
                                    <?php echo esc_html($tipo_name); ?>
                                </h3>
                                <?php if (!empty($tipo_price)): ?>
                                    <div class="text-right">
                                        <span class="text-2xl font-bold text-blue-600">
                                            €<?php echo esc_html($tipo_price); ?>
                                        </span>
                                        <div class="text-xs text-gray-500">desde</div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <?php if (!empty($tipo_description)): ?>
                                <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                                    <?php echo esc_html($tipo_description); ?>
                                </p>
                            <?php endif; ?>
                            
                            <!-- Specifications -->
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <?php if (!empty($tipo_capacity)): ?>
                                <div class="flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                        <circle cx="9" cy="7" r="4"/>
                                        <path d="m22 21-2-2"/>
                                        <path d="m18 19-2-2"/>
                                    </svg>
                                    <span class="text-sm text-gray-600"><?php echo esc_html($tipo_capacity); ?> pasajeros</span>
                                </div>
                                <?php endif; ?>
                                
                                <?php if (!empty($tipo_speed)): ?>
                                <div class="flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-600">
                                        <path d="m8 3 4 8 5-5v11H6V6l5 5"/>
                                    </svg>
                                    <span class="text-sm text-gray-600"><?php echo esc_html($tipo_speed); ?></span>
                                </div>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Services -->
                            <?php if (!empty($tipo_services)): ?>
                                <div class="mb-4">
                                    <h4 class="font-semibold text-gray-900 mb-2">Servicios incluidos:</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <?php 
                                        $services = explode("\n", $tipo_services);
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
                            
                            <!-- Features -->
                            <?php if (!empty($tipo_features)): ?>
                                <div class="mb-6">
                                    <h4 class="font-semibold text-gray-900 mb-2">Características:</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <?php 
                                        $features = explode("\n", $tipo_features);
                                        foreach ($features as $feature): 
                                            $feature = trim($feature);
                                            if (!empty($feature)):
                                        ?>
                                            <span class="bg-blue-50 text-blue-700 px-2 py-1 rounded-full text-xs">
                                                <?php echo esc_html($feature); ?>
                                            </span>
                                        <?php 
                                            endif;
                                        endforeach; 
                                        ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Additional Images -->
                            <?php if (!empty($tipo_image_2) || !empty($tipo_image_3)): ?>
                                <div class="grid grid-cols-2 gap-2 mb-6">
                                    <?php if (!empty($tipo_image_2)): ?>
                                        <img src="<?php echo esc_url($tipo_image_2); ?>" 
                                             alt="<?php echo esc_attr($tipo_name); ?> - Interior" 
                                             class="w-full h-24 object-cover rounded-lg">
                                    <?php endif; ?>
                                    <?php if (!empty($tipo_image_3)): ?>
                                        <img src="<?php echo esc_url($tipo_image_3); ?>" 
                                             alt="<?php echo esc_attr($tipo_name); ?> - Detalles" 
                                             class="w-full h-24 object-cover rounded-lg">
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            
                            <a href="#reservar" 
                               class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                                Ver Rutas Disponibles
                            </a>
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
                ¿Necesitas ayuda para elegir?
            </h2>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto animate-fade-in-up">
                Nuestros expertos te ayudarán a encontrar el tipo de tren perfecto para tu viaje.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contacto" 
                   class="btn-primary bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-50 transition-colors animate-slide-in-left">
                    Contactar Experto
                </a>
                <a href="#comparativa" 
                   class="btn-primary border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors animate-slide-in-right">
                    Ver Comparativa
                </a>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>