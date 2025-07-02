<?php
/*
Template Name: Rutas de Tren
*/
get_header();
?>

<div class="min-h-screen bg-white">
      
    <!-- Hero Section -->
    <section class="relative h-[50vh] flex items-center justify-center px-4 sm:px-6 py-4">
        
        <div class="relative w-full sm:w-[90vw] max-w-none sm:max-w-none h-[50vh] mx-auto rounded-3xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-2xl">
          
            <div class="absolute inset-0">
                <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'rutas_hero_bg_image', true ) ); ?>" alt="Rutas de Tren" class="object-cover w-full h-full" />
                <div class="absolute inset-0 bg-black/40"></div>
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
                            <a href="#inicio" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">Inicio</a>
                            <a href="#rutas" class="text-white hover:text-white transition-colors text-sm xl:text-base font-semibold">Rutas de Tren</a>
                            <a href="#tipos" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">Tipos de Tren</a>
                            <a href="#estaciones" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">Estaciones</a>
                        </nav>

                        <!-- Mobile menu button -->
                        <button class="lg:hidden p-2 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                        </button>
                    </div>
                </header>

                <!-- Hero Content -->
                <div class="flex-1 flex items-center justify-center px-4 sm:px-6 lg:px-8">
                    <div class="text-center max-w-4xl mx-auto">
                        <p class="text-white/90 text-sm sm:text-base lg:text-lg mb-2 sm:mb-4 font-medium">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'rutas_hero_subtitle', true ) ); ?>
                        </p>
                        <h1 class="text-white text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight mb-4 sm:mb-6">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'rutas_hero_title', true ) ); ?>
                        </h1>
                        <p class="text-white/90 text-base sm:text-lg lg:text-xl max-w-2xl mx-auto mb-8 sm:mb-12 leading-relaxed">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'rutas_hero_description', true ) ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search and Filters Section -->
    <section class="bg-gray-50 py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-lg p-6 lg:p-8">
                <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-6 text-center">
                    Buscar Rutas de Tren
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 lg:gap-6">
                    <!-- Search -->
                    <div class="md:col-span-1">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'rutas_filter_origin_label', true ) ?: 'Origen' ); ?>
                        </label>
                        <input type="text" 
                               placeholder="<?php echo esc_attr( get_post_meta( get_the_ID(), 'rutas_hero_search_placeholder', true ) ?: 'Seleccionar origen' ); ?>" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <!-- Destination -->
                    <div class="md:col-span-1">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'rutas_filter_destination_label', true ) ?: 'Destino' ); ?>
                        </label>
                        <input type="text" 
                               placeholder="Seleccionar destino" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <!-- Duration -->
                    <div class="md:col-span-1">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'rutas_filter_duration_label', true ) ?: 'Duración' ); ?>
                        </label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option>Cualquier duración</option>
                            <option>Menos de 2 horas</option>
                            <option>2-4 horas</option>
                            <option>4-6 horas</option>
                            <option>Más de 6 horas</option>
                        </select>
                    </div>
                    
                    <!-- Search Button -->
                    <div class="md:col-span-1 flex items-end">
                        <button class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'rutas_filter_search_button', true ) ?: 'Buscar Rutas' ); ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Routes Grid Section -->
    <section class="py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                
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
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <div class="relative h-64">
                            <?php if (!empty($route_image)): ?>
                                <img src="<?php echo esc_url($route_image); ?>" 
                                     alt="<?php echo esc_attr($route_name); ?>" 
                                     class="w-full h-full object-cover">
                            <?php endif; ?>
                            <div class="absolute top-4 right-4 bg-white/90 px-3 py-1 rounded-full">
                                <span class="text-blue-600 font-semibold text-sm">
                                    <?php echo esc_html($route_duration); ?>
                                </span>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-xl font-bold text-gray-900">
                                    <?php echo esc_html($route_name); ?>
                                </h3>
                                <?php if (!empty($route_price)): ?>
                                    <div class="text-right">
                                        <span class="text-2xl font-bold text-blue-600">
                                            €<?php echo esc_html($route_price); ?>
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
                                <p class="text-gray-600 text-sm mb-4 leading-relaxed">
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
                            
                            <?php if (!empty($route_booking_link)): ?>
                                <a href="<?php echo esc_url($route_booking_link); ?>" 
                                   class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                                    <?php echo esc_html($route_booking_text ?: 'Reservar Ahora'); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-blue-600 py-16">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                ¿No encuentras tu ruta ideal?
            </h2>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
                Contáctanos y te ayudaremos a planificar el viaje perfecto en tren por toda Europa.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contacto" 
                   class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-50 transition-colors">
                    Contactar Ahora
                </a>
                <a href="#todas-rutas" 
                   class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                    Ver Todas las Rutas
                </a>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>