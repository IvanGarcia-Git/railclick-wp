<?php
/*
Template Name: Contacto
*/
get_header();
?>

<div class="min-h-screen bg-white contacto-template">
    
    <!-- Hero Section -->
    <section class="relative h-[50vh] flex items-center justify-center px-4 sm:px-6 py-4 m-[25px]">
        
        <div class="relative w-full sm:w-[90vw] max-w-none sm:max-w-none h-[50vh] mx-auto rounded-3xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-2xl">
            
            <div class="absolute inset-0">
                <?php 
                $hero_bg = get_post_meta( get_the_ID(), 'contacto_hero_bg_image', true );
                if (empty($hero_bg)) {
                    $hero_bg = 'https://images.unsplash.com/photo-1597872202439-4b9391a23633?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80';
                }
                ?>
                <img src="<?php echo esc_url( $hero_bg ); ?>" alt="Contacto - Paisaje Natural" class="object-cover w-full h-full" />
                <div class="absolute inset-0 bg-black/60"></div>
            </div>

            <!-- Header -->
            <div class="relative z-10 h-full flex flex-col">
                <header class="p-4 sm:p-6 lg:p-8 flex-shrink-0">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-6 h-6 sm:w-8 sm:h-8 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 sm:w-6 sm:h-6 text-white">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                    <path d="M2 17l10 5 10-5"/>
                                    <path d="M2 12l10 5 10-5"/>
                                </svg>
                            </div>
                            <span class="text-white font-semibold text-lg sm:text-xl">RailClick</span>
                        </div>

                        <!-- Navigation -->
                        <nav class="hidden lg:flex items-center space-x-6 xl:space-x-8">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">
                                Inicio
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Rutas de Tren' ) ) ); ?>" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">
                                Rutas de Tren
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Tipos de Tren' ) ) ); ?>" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">
                                Tipos de Tren
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Estaciones' ) ) ); ?>" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">
                                Estaciones
                            </a>
                            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contacto' ) ) ); ?>" class="text-white font-semibold transition-colors text-sm xl:text-base">
                                Contacto
                            </a>
                        </nav>

                        <!-- Mobile Menu Button -->
                        <div class="lg:hidden">
                            <button class="p-2 text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </header>

                <!-- Hero Content -->
                <div class="flex-1 flex items-center justify-center px-4 sm:px-6 lg:px-8">
                    <div class="text-center text-white max-w-4xl mx-auto">
                        <p class="text-sm sm:text-base lg:text-lg text-white/80 mb-4 animate-fade-in-up">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'contacto_hero_subtitle', true ) ); ?>
                        </p>
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold mb-6 animate-slide-in-left">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'contacto_hero_title', true ) ); ?>
                        </h1>
                        <p class="text-lg sm:text-xl lg:text-2xl text-white/90 mb-8 animate-fade-in-up">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'contacto_hero_description', true ) ); ?>
                        </p>
                        
                        <!-- Contact Info Cards -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 mb-8">
                            <div class="bg-white/20 backdrop-blur-md border border-white/30 rounded-2xl p-6 hover:bg-white/25 transition-all duration-300 pb-8">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mx-auto mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Teléfono</h3>
                                <p class="text-white/80"><?php echo esc_html( get_post_meta( get_the_ID(), 'contacto_phone', true ) ); ?></p>
                            </div>
                            
                            <div class="bg-white/20 backdrop-blur-md border border-white/30 rounded-2xl p-6 hover:bg-white/25 transition-all duration-300 pb-8">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mx-auto mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                        <polyline points="22,6 12,13 2,6"/>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Email</h3>
                                <p class="text-white/80"><?php echo esc_html( get_post_meta( get_the_ID(), 'contacto_email', true ) ); ?></p>
                            </div>
                            
                            <div class="bg-white/20 backdrop-blur-md border border-white/30 rounded-2xl p-6 hover:bg-white/25 transition-all duration-300 pb-8">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mx-auto mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                        <circle cx="12" cy="10" r="3"/>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold mb-2">Dirección</h3>
                                <p class="text-white/80"><?php echo esc_html( get_post_meta( get_the_ID(), 'contacto_address', true ) ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 bg-white my-12 m-[25px]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'contacto_form_title', true ) ); ?>
                </h2>
                <p class="text-gray-600 max-w-xl mx-auto">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'contacto_form_description', true ) ); ?>
                </p>
            </div>
            
            <!-- Contact Form -->
            <div class="max-w-2xl mx-auto">
                <form class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-2">Nombre</label>
                            <input type="text" id="nombre" name="nombre" required class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                        </div>
                    </div>
                    
                    <div>
                        <label for="asunto" class="block text-sm font-medium text-gray-700 mb-2">Asunto</label>
                        <input type="text" id="asunto" name="asunto" required class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                    </div>
                    
                    <div>
                        <label for="mensaje" class="block text-sm font-medium text-gray-700 mb-2">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" rows="5" required class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors resize-none"></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition-colors font-medium">
                        Enviar Mensaje
                    </button>
                </form>
            </div>
            
            <!-- Contact Info -->
            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <h4 class="font-semibold text-gray-900 mb-2">Horario de Atención</h4>
                    <p class="text-gray-600 text-sm"><?php echo esc_html( get_post_meta( get_the_ID(), 'contacto_hours', true ) ); ?></p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 mb-2">Tiempo de Respuesta</h4>
                    <p class="text-gray-600 text-sm"><?php echo esc_html( get_post_meta( get_the_ID(), 'contacto_response_time', true ) ); ?></p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 mb-2">Soporte Especializado</h4>
                    <p class="text-gray-600 text-sm"><?php echo esc_html( get_post_meta( get_the_ID(), 'contacto_support_info', true ) ); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-blue-600 py-20 lg:py-24 my-16 m-[25px]">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                <?php echo esc_html( get_post_meta( get_the_ID(), 'contacto_cta_title', true ) ); ?>
            </h2>
            <p class="text-xl text-white/90 mb-8">
                <?php echo esc_html( get_post_meta( get_the_ID(), 'contacto_cta_description', true ) ); ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url( get_post_meta( get_the_ID(), 'contacto_cta_button_1_link', true ) ); ?>" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'contacto_cta_button_1_text', true ) ); ?>
                </a>
                <a href="<?php echo esc_url( get_post_meta( get_the_ID(), 'contacto_cta_button_2_link', true ) ); ?>" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'contacto_cta_button_2_text', true ) ); ?>
                </a>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>