<?php
/*
Template Name: Landing Page
*/
get_header();
?>

<div class="min-h-screen bg-white">
      
      
      <section class="relative min-h-screen flex items-center justify-center px-4 sm:px-6 py-4 sm:py-auto">
        
        <div class="relative w-full sm:w-[90vw] max-w-none sm:max-w-none h-[calc(100vh-2rem)] sm:h-[90vh] mx-auto rounded-3xl overflow-hidden border-2 sm:border-4 border-white shadow-lg sm:shadow-2xl">
          
          <div class="absolute inset-0">
            <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'hero_bg_image', true ) ); ?>" alt="Roman Colosseum" class="object-cover w-full h-full" />
            <div class="absolute inset-0 bg-gradient-to-b from-black/20 via-transparent to-black/40"></div>
          </div>

          
          <div class="relative z-10 h-[calc(100vh-2rem)] sm:h-[90vh] flex flex-col">
            
            <header class="p-4 sm:p-6 lg:p-8 flex-shrink-0">
              <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2">
                  <div class="w-6 h-6 sm:w-8 sm:h-8 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 sm:w-6 sm:h-6 text-white"><path d="M10 9.5 14 5.5"/><path d="m14 14-4 4"/><path d="M10 18.5 14 14.5"/><path d="m14 9.5-4-4"/><path d="M5 12h14"/><path d="M5 12h14"/><path d="M8 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2"/><path d="M18 3h-2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2"/></svg>
                  </div>
                  <span class="text-white font-semibold text-lg sm:text-xl">ItalyTren</span>
                </div>

                
                <nav class="hidden lg:flex items-center space-x-6 xl:space-x-8">
                  <a href="#inicio" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">
                    Inicio
                  </a>
                  <a href="#rutas" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">
                    Rutas de Tren
                  </a>
                  <a href="#tipos" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">
                    Tipos de Tren
                  </a>
                  <a href="#estaciones" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">
                    Estaciones
                  </a>
                  <a href="#billetes" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">
                    Comprar Billetes
                  </a>
                  <a href="#blog" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">
                    Blog
                  </a>
                  <a href="#faqs" class="text-white/80 hover:text-white transition-colors text-sm xl:text-base">
                    FAQs
                  </a>
                </nav>

                
                <div class="lg:hidden">
                  <button class="text-white hover:bg-white/10 p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                  </button>
                </div>

                
                <div class="hidden lg:flex items-center space-x-3 xl:space-x-4">
                  <div class="flex items-center space-x-2">
                    <select class="bg-white/20 backdrop-blur-md text-white border border-white/30 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-white/40 hover:bg-white/25 transition-all duration-300">
                      <option value="es" class="text-gray-900">ES</option>
                      <option value="en" class="text-gray-900">EN</option>
                    </select>
                  </div>
                  <a href="/login">
                    <button class="text-white hover:bg-white/10 text-sm">
                      Login
                    </button>
                  </a>
                  <button class="bg-gradient-to-r from-blue-500 to-teal-500 hover:from-blue-600 hover:to-teal-600 text-white text-sm px-4 py-2 flex items-center justify-center rounded-full">
                    Buscar Trenes
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 h-3 w-3"><path d="m9 18 6-6-6-6"/></svg>
                  </button>
                </div>
              </div>
            </header>

            
            <div class="flex-1 flex flex-col items-center justify-center text-center px-4 sm:px-6 lg:px-8 min-h-0">
              <div class="mb-4 sm:mb-6">
                <span class="text-white/90 text-base sm:text-lg font-medium italic"><?php echo esc_html( get_post_meta( get_the_ID(), 'hero_subtitle', true ) ); ?></span>
              </div>

              <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold text-white mb-6 sm:mb-8 leading-tight max-w-6xl">
                <?php echo esc_html( get_post_meta( get_the_ID(), 'hero_title', true ) ); ?>
              </h1>

              
              <div class="relative bg-white/20 backdrop-blur-md border border-white/30 rounded-2xl sm:rounded-full p-3 sm:p-2 mb-6 sm:mb-8 w-full max-w-5xl shadow-2xl">
                
                <div class="flex flex-col sm:hidden space-y-3">
                  <select class="w-full bg-transparent text-white placeholder-white/70 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-white/40 border border-white/30">
                    <option value="" class="text-gray-900">Origen</option>
                    <option value="roma" class="text-gray-900">Roma</option>
                    <option value="milan" class="text-gray-900">Milán</option>
                    <option value="florencia" class="text-gray-900">Florencia</option>
                    <option value="venecia" class="text-gray-900">Venecia</option>
                    <option value="napoles" class="text-gray-900">Nápoles</option>
                  </select>
                  <select class="w-full bg-transparent text-white placeholder-white/70 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-white/40 border border-white/30">
                    <option value="" class="text-gray-900">Destino</option>
                    <option value="roma" class="text-gray-900">Roma</option>
                    <option value="milan" class="text-gray-900">Milán</option>
                    <option value="florencia" class="text-gray-900">Florencia</option>
                    <option value="venecia" class="text-gray-900">Venecia</option>
                    <option value="napoles" class="text-gray-900">Nápoles</option>
                  </select>
                  <input type="date" class="w-full bg-transparent text-white placeholder-white/70 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-white/40 border border-white/30 [color-scheme:dark]" placeholder="Fecha">
                  <button class="w-full bg-gradient-to-r from-blue-500 to-teal-500 hover:from-blue-600 hover:to-teal-600 text-white py-3 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    Buscar Trenes
                  </button>
                </div>

                
                <div class="hidden sm:flex items-center gap-1">
                  <div class="flex-1">
                    <select class="w-full bg-transparent text-white placeholder-white/70 px-3 lg:px-4 py-3 rounded-full focus:outline-none focus:ring-2 focus:ring-white/30 border-0 text-sm lg:text-base">
                      <option value="" class="text-gray-900">Origen</option>
                      <option value="roma" class="text-gray-900">Roma</option>
                      <option value="milan" class="text-gray-900">Milán</option>
                      <option value="florencia" class="text-gray-900">Florencia</option>
                      <option value="venecia" class="text-gray-900">Venecia</option>
                      <option value="napoles" class="text-gray-900">Nápoles</option>
                    </select>
                  </div>
                  <div class="w-px h-8 bg-white/40"></div>
                  <div class="flex-1">
                    <select class="w-full bg-transparent text-white placeholder-white/70 px-3 lg:px-4 py-3 rounded-full focus:outline-none focus:ring-2 focus:ring-white/30 border-0 text-sm lg:text-base">
                      <option value="" class="text-gray-900">Destino</option>
                      <option value="roma" class="text-gray-900">Roma</option>
                      <option value="milan" class="text-gray-900">Milán</option>
                      <option value="florencia" class="text-gray-900">Florencia</option>
                      <option value="venecia" class="text-gray-900">Venecia</option>
                      <option value="napoles" class="text-gray-900">Nápoles</option>
                    </select>
                  </div>
                  <div class="w-px h-8 bg-white/40"></div>
                  <div class="flex-1">
                    <input type="date" class="w-full bg-transparent text-white placeholder-white/70 px-3 lg:px-4 py-3 rounded-full focus:outline-none focus:ring-2 focus:ring-white/30 border-0 [color-scheme:dark] text-sm lg:text-base" placeholder="Fecha">
                  </div>
                  <button class="bg-gradient-to-r from-blue-500 to-teal-500 hover:from-blue-600 hover:to-teal-600 text-white px-6 lg:px-8 py-3 rounded-full transition-all duration-300 hover:scale-105 shadow-lg text-sm lg:text-base flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    Buscar
                  </button>
                </div>
              </div>

              <p class="text-white/80 text-base sm:text-lg max-w-3xl px-4">
                <?php echo esc_html( get_post_meta( get_the_ID(), 'hero_description', true ) ); ?>
              </p>
            </div>

            
            <div class="flex flex-col lg:flex-row items-center lg:items-end justify-center lg:justify-between p-4 sm:p-6 lg:p-8 space-y-4 lg:space-y-0 flex-shrink-0">
              
              <div class="flex items-center space-x-2 text-white">
                <div class="w-8 h-8 lg:w-12 lg:h-12 bg-orange-600 rounded-full flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 lg:h-6 lg:w-6 text-white"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <div class="text-xs lg:text-sm">
                  <div class="font-semibold"><?php echo esc_html( get_post_meta( get_the_ID(), 'hero_award_text', true ) ); ?></div>
                </div>
              </div>

              
              <div class="text-center text-white/90 max-w-2xl px-4">
                <p class="text-xs sm:text-sm lg:text-sm xl:text-base">
                  Descubre el corazón de Italia con experiencias de viaje únicas que muestran sus ciudades eternas,
                  paisajes impresionantes y rica cultura ferroviaria.
                </p>
              </div>

              
              <div class="flex items-center space-x-2 text-white">
                <div class="w-6 h-6 lg:w-8 lg:h-8 bg-green-600 rounded-full flex items-center justify-center">
                  <span class="text-xs font-bold">★</span>
                </div>
                <div class="text-xs lg:text-sm">
                  <div class="font-semibold"><?php echo esc_html( get_post_meta( get_the_ID(), 'hero_rating_text', true ) ); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      
      <section class="py-12 bg-white" id="rutas">
        <div class="container mx-auto px-6">
          <div class="relative max-w-6xl mx-auto bg-white p-8 md:p-12">
            <div class="text-center mb-8 flex items-center justify-center space-x-4">
              <div class="w-12 h-px bg-gray-300"></div>
              <span class="text-gray-600 font-medium italic"><?php echo esc_html( get_post_meta( get_the_ID(), 'routes_subtitle', true ) ); ?></span>
              <div class="w-12 h-px bg-gray-300"></div>
            </div>

            <div class="mb-12 text-center">
              <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 max-w-4xl mx-auto">
                <?php echo esc_html( get_post_meta( get_the_ID(), 'routes_title', true ) ); ?>
              </h2>
              <p class="text-lg text-gray-500 max-w-3xl mx-auto">
                <?php echo esc_html( get_post_meta( get_the_ID(), 'routes_description', true ) ); ?>
              </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
              
              <div class="group bg-white rounded-2xl border border-gray-200 hover:shadow-lg transition-shadow overflow-hidden">
                <div class="relative h-48">
                  <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'route_1_image', true ) ); ?>" alt="Roma - Nápoles" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-300">
                  <div class="absolute top-4 left-4">
                    <div class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                      Alta Velocidad
                    </div>
                  </div>
                </div>
                <div class="p-6">
                  <h3 class="text-xl font-bold text-gray-900 mb-2"><?php echo esc_html( get_post_meta( get_the_ID(), 'route_1_title', true ) ); ?></h3>
                  <p class="text-gray-600 mb-4"><?php echo esc_html( get_post_meta( get_the_ID(), 'route_1_details', true ) ); ?></p>
                  <p class="text-sm text-gray-500 mb-4">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'route_1_text', true ) ); ?>
                  </p>
                  <a href="<?php echo esc_url( get_post_meta( get_the_ID(), 'route_1_link', true ) ); ?>" class="w-full bg-gray-900 hover:bg-gray-800 text-white text-center py-2 rounded-md inline-block">Ver Horarios</a>
                </div>
              </div>

              
              <div class="group bg-white rounded-2xl border border-gray-200 hover:shadow-lg transition-shadow overflow-hidden">
                <div class="relative h-48">
                  <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'route_2_image', true ) ); ?>" alt="Roma - Florencia" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-300">
                  <div class="absolute top-4 left-4">
                    <div class="bg-red-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                      Frecciarossa
                    </div>
                  </div>
                </div>
                <div class="p-6">
                  <h3 class="text-xl font-bold text-gray-900 mb-2"><?php echo esc_html( get_post_meta( get_the_ID(), 'route_2_title', true ) ); ?></h3>
                  <p class="text-gray-600 mb-4"><?php echo esc_html( get_post_meta( get_the_ID(), 'route_2_details', true ) ); ?></p>
                  <p class="text-sm text-gray-500 mb-4">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'route_2_text', true ) ); ?>
                  </p>
                  <a href="<?php echo esc_url( get_post_meta( get_the_ID(), 'route_2_link', true ) ); ?>" class="w-full bg-gray-900 hover:bg-gray-800 text-white text-center py-2 rounded-md inline-block">Ver Horarios</a>
                </div>
              </div>

              <div class="group bg-white rounded-2xl border border-gray-200 hover:shadow-lg transition-shadow overflow-hidden">
                <div class="relative h-48">
                  <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'route_3_image', true ) ); ?>" alt="Milán - Venecia" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-300">
                  <div class="absolute top-4 left-4">
                    <div class="bg-yellow-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                      Intercity
                    </div>
                  </div>
                </div>
                <div class="p-6">
                  <h3 class="text-xl font-bold text-gray-900 mb-2"><?php echo esc_html( get_post_meta( get_the_ID(), 'route_3_title', true ) ); ?></h3>
                  <p class="text-gray-600 mb-4"><?php echo esc_html( get_post_meta( get_the_ID(), 'route_3_details', true ) ); ?></p>
                  <p class="text-sm text-gray-500 mb-4">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'route_3_text', true ) ); ?>
                  </p>
                  <a href="<?php echo esc_url( get_post_meta( get_the_ID(), 'route_3_link', true ) ); ?>" class="w-full bg-gray-900 hover:bg-gray-800 text-white text-center py-2 rounded-md inline-block">Ver Horarios</a>
                </div>
              </div>
            </div>

            <div class="text-center">
              <a href="#tipos">
                <button class="bg-gradient-to-r from-blue-500 to-teal-500 hover:from-blue-600 hover:to-teal-600 text-white px-8 py-3 rounded-full flex items-center justify-center mx-auto">
                  Ver Más Información
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 h-4 w-4"><path d="m9 18 6-6-6-6"/></svg>
                </button>
              </a>
            </div>
          </div>
        </div>
      </section>

      
      <section class="py-12 bg-gray-50" id="tipos">
        <div class="container mx-auto px-6">
          <div class="relative max-w-6xl mx-auto bg-white rounded-3xl p-8 md:p-12">
            <div class="text-center mb-8 flex items-center justify-center space-x-4">
              <div class="w-12 h-px bg-gray-300"></div>
              <span class="text-gray-600 font-medium italic"><?php echo esc_html( get_post_meta( get_the_ID(), 'train_types_subtitle', true ) ); ?></span>
              <div class="w-12 h-px bg-gray-300"></div>
            </div>

            <div class="mb-12 text-center">
              <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                <?php echo esc_html( get_post_meta( get_the_ID(), 'train_types_title', true ) ); ?>
              </h2>
              <p class="text-lg text-gray-500 max-w-3xl mx-auto">
                <?php echo esc_html( get_post_meta( get_the_ID(), 'train_types_description', true ) ); ?>
              </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
              
              <div class="bg-white rounded-2xl p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mb-6">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 text-red-600"><path d="M10 9.5 14 5.5"/><path d="m14 14-4 4"/><path d="M10 18.5 14 14.5"/><path d="m14 9.5-4-4"/><path d="M5 12h14"/><path d="M5 12h14"/><path d="M8 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2"/><path d="M18 3h-2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900"><?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_1_title', true ) ); ?></h3>
                <div class="mb-4">
                  <span class="bg-red-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_1_speed', true ) ); ?>
                  </span>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4">
                  <?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_1_description', true ) ); ?>
                </p>
                <ul class="text-sm text-gray-500 space-y-2">
                  <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_1_feature_1', true ) ); ?></li>
                  <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_1_feature_2', true ) ); ?></li>
                  <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_1_feature_3', true ) ); ?></li>
                  <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_1_feature_4', true ) ); ?></li>
                </ul>
              </div>

              
              <div class="bg-white rounded-2xl p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 text-purple-600"><path d="M10 9.5 14 5.5"/><path d="m14 14-4 4"/><path d="M10 18.5 14 14.5"/><path d="m14 9.5-4-4"/><path d="M5 12h14"/><path d="M5 12h14"/><path d="M8 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2"/><path d="M18 3h-2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900"><?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_2_title', true ) ); ?></h3>
                <div class="mb-4">
                  <span class="bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_2_speed', true ) ); ?>
                  </span>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4">
                  <?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_2_description', true ) ); ?>
                </p>
                <ul class="text-sm text-gray-500 space-y-2">
                  <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_2_feature_1', true ) ); ?></li>
                  <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_2_feature_2', true ) ); ?></li>
                  <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_2_feature_3', true ) ); ?></li>
                  <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_2_feature_4', true ) ); ?></li>
                </ul>
              </div>

              
              <div class="bg-white rounded-2xl p-6 border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center mb-6">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 text-gray-600"><path d="M10 9.5 14 5.5"/><path d="m14 14-4 4"/><path d="M10 18.5 14 14.5"/><path d="m14 9.5-4-4"/><path d="M5 12h14"/><path d="M5 12h14"/><path d="M8 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2"/><path d="M18 3h-2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900"><?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_3_title', true ) ); ?></h3>
                <div class="mb-4">
                  <span class="bg-gray-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_3_speed', true ) ); ?>
                  </span>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4">
                  <?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_3_description', true ) ); ?>
                </p>
                <ul class="text-sm text-gray-500 space-y-2">
                  <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_3_feature_1', true ) ); ?></li>
                  <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_3_feature_2', true ) ); ?></li>
                  <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_3_feature_3', true ) ); ?></li>
                  <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'train_type_3_feature_4', true ) ); ?></li>
                </ul>
              </div>
            </div>

            <div class="text-center mt-12">
              <button class="bg-gradient-to-r from-blue-500 to-teal-500 hover:from-blue-600 hover:to-teal-600 text-white px-8 py-3 rounded-full flex items-center justify-center mx-auto">
                Comparar Trenes
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 h-4 w-4"><path d="m9 18 6-6-6-6"/></svg>
              </button>
            </div>
          </div>
        </div>
      </section>

      
      <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
          <!-- Rounded Container -->
          <div class="relative max-w-6xl mx-auto bg-white rounded-3xl p-8 md:p-12">
            
            <div class="text-center mb-8 flex items-center justify-center space-x-4">
              <div class="w-12 h-px bg-gray-300"></div>
              <span class="text-gray-600 font-medium italic"><?php echo esc_html( get_post_meta( get_the_ID(), 'gallery_subtitle', true ) ); ?></span>
              <div class="w-12 h-px bg-gray-300"></div>
            </div>

            
            <div class="text-center mb-12">
              <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                <?php echo esc_html( get_post_meta( get_the_ID(), 'gallery_title', true ) ); ?>
              </h2>
              <p class="text-lg text-gray-500 max-w-3xl mx-auto">
                <?php echo esc_html( get_post_meta( get_the_ID(), 'gallery_description', true ) ); ?>
              </p>
            </div>

            
            <div class="relative mb-8">
              
              <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
                
                <div class="relative rounded-2xl overflow-hidden group cursor-pointer h-64 md:h-80">
                  <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'gallery_image_1', true ) ); ?>" alt="<?php echo esc_attr( get_post_meta( get_the_ID(), 'gallery_image_1_alt', true ) ); ?>" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-300">
                </div>

                
                <div class="relative rounded-2xl overflow-hidden group cursor-pointer h-64 md:h-80">
                  <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'gallery_image_2', true ) ); ?>" alt="<?php echo esc_attr( get_post_meta( get_the_ID(), 'gallery_image_2_alt', true ) ); ?>" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-300">
                </div>

                
                <div class="relative rounded-2xl overflow-hidden group cursor-pointer h-64 md:h-80">
                  <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'gallery_image_3', true ) ); ?>" alt="<?php echo esc_attr( get_post_meta( get_the_ID(), 'gallery_image_3_alt', true ) ); ?>" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-300">
                </div>

                
                <div class="relative rounded-2xl overflow-hidden group cursor-pointer h-64 md:h-80">
                  <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'gallery_image_4', true ) ); ?>" alt="<?php echo esc_attr( get_post_meta( get_the_ID(), 'gallery_image_4_alt', true ) ); ?>" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-300">
                </div>
              </div>

              
              <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                
                <div class="relative rounded-2xl overflow-hidden group cursor-pointer h-48 md:h-64">
                  <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'gallery_image_5', true ) ); ?>" alt="<?php echo esc_attr( get_post_meta( get_the_ID(), 'gallery_image_5_alt', true ) ); ?>" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-300">
                </div>

                
                <div class="relative rounded-2xl overflow-hidden group cursor-pointer h-48 md:h-64">
                  <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'gallery_image_6', true ) ); ?>" alt="<?php echo esc_attr( get_post_meta( get_the_ID(), 'gallery_image_6_alt', true ) ); ?>" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-300">
                </div>

                
                <div class="relative rounded-2xl overflow-hidden group cursor-pointer h-48 md:h-64">
                  <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'gallery_image_7', true ) ); ?>" alt="<?php echo esc_attr( get_post_meta( get_the_ID(), 'gallery_image_7_alt', true ) ); ?>" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-300">
                </div>
              </div>

              
              <div class="absolute inset-0 flex items-center justify-center z-10 pointer-events-none">
                <div class="pointer-events-auto">
                  <button class="bg-white text-gray-900 hover:bg-gray-100 px-8 py-4 rounded-full text-lg font-medium shadow-lg border border-gray-200 mt-16 mx-auto">
                    Explorar Galería
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Main Train Stations Section -->
      <section class="py-12 bg-white" id="estaciones">
        <div class="container mx-auto px-6">
          <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
              <div class="flex items-center justify-center space-x-4 mb-6">
                <div class="w-12 h-px bg-gray-300"></div>
                <span class="text-gray-600 font-medium italic"><?php echo esc_html( get_post_meta( get_the_ID(), 'stations_subtitle', true ) ); ?></span>
                <div class="w-12 h-px bg-gray-300"></div>
              </div>
              <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                <?php echo esc_html( get_post_meta( get_the_ID(), 'stations_title', true ) ); ?>
              </h2>
              <p class="text-lg text-gray-500 max-w-3xl mx-auto">
                <?php echo esc_html( get_post_meta( get_the_ID(), 'stations_description', true ) ); ?>
              </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
              <!-- Roma Termini -->
              <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
                <div class="relative h-48">
                  <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'station_1_image', true ) ); ?>" alt="<?php echo esc_attr( get_post_meta( get_the_ID(), 'station_1_title', true ) ); ?>" class="object-cover w-full h-full">
                  <div class="absolute inset-0 bg-black/30"></div>
                  <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="text-xl font-bold"><?php echo esc_html( get_post_meta( get_the_ID(), 'station_1_title', true ) ); ?></h3>
                    <p class="text-sm opacity-90"><?php echo esc_html( get_post_meta( get_the_ID(), 'station_1_subtitle', true ) ); ?></p>
                  </div>
                </div>
                <div class="p-6">
                  <p class="text-gray-600 mb-4">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'station_1_description', true ) ); ?>
                  </p>
                  <div class="grid grid-cols-2 gap-4 text-sm">
                    <div>
                      <strong class="text-gray-900">Servicios:</strong>
                      <ul class="text-gray-600 mt-1">
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_1_service_1', true ) ); ?></li>
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_1_service_2', true ) ); ?></li>
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_1_service_3', true ) ); ?></li>
                      </ul>
                    </div>
                    <div>
                      <strong class="text-gray-900">Conexiones:</strong>
                      <ul class="text-gray-600 mt-1">
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_1_connection_1', true ) ); ?></li>
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_1_connection_2', true ) ); ?></li>
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_1_connection_3', true ) ); ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Milano Centrale -->
              <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
                <div class="relative h-48">
                  <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'station_2_image', true ) ); ?>" alt="<?php echo esc_attr( get_post_meta( get_the_ID(), 'station_2_title', true ) ); ?>" class="object-cover w-full h-full">
                  <div class="absolute inset-0 bg-black/30"></div>
                  <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="text-xl font-bold"><?php echo esc_html( get_post_meta( get_the_ID(), 'station_2_title', true ) ); ?></h3>
                    <p class="text-sm opacity-90"><?php echo esc_html( get_post_meta( get_the_ID(), 'station_2_subtitle', true ) ); ?></p>
                  </div>
                </div>
                <div class="p-6">
                  <p class="text-gray-600 mb-4">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'station_2_description', true ) ); ?>
                  </p>
                  <div class="grid grid-cols-2 gap-4 text-sm">
                    <div>
                      <strong class="text-gray-900">Servicios:</strong>
                      <ul class="text-gray-600 mt-1">
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_2_service_1', true ) ); ?></li>
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_2_service_2', true ) ); ?></li>
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_2_service_3', true ) ); ?></li>
                      </ul>
                    </div>
                    <div>
                      <strong class="text-gray-900">Conexiones:</strong>
                      <ul class="text-gray-600 mt-1">
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_2_connection_1', true ) ); ?></li>
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_2_connection_2', true ) ); ?></li>
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_2_connection_3', true ) ); ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Firenze Santa Maria Novella -->
              <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
                <div class="relative h-48">
                  <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'station_3_image', true ) ); ?>" alt="<?php echo esc_attr( get_post_meta( get_the_ID(), 'station_3_title', true ) ); ?>" class="object-cover w-full h-full">
                  <div class="absolute inset-0 bg-black/30"></div>
                  <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="text-xl font-bold"><?php echo esc_html( get_post_meta( get_the_ID(), 'station_3_title', true ) ); ?></h3>
                    <p class="text-sm opacity-90"><?php echo esc_html( get_post_meta( get_the_ID(), 'station_3_subtitle', true ) ); ?></p>
                  </div>
                </div>
                <div class="p-6">
                  <p class="text-gray-600 mb-4">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'station_3_description', true ) ); ?>
                  </p>
                  <div class="grid grid-cols-2 gap-4 text-sm">
                    <div>
                      <strong class="text-gray-900">Servicios:</strong>
                      <ul class="text-gray-600 mt-1">
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_3_service_1', true ) ); ?></li>
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_3_service_2', true ) ); ?></li>
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_3_service_3', true ) ); ?></li>
                      </ul>
                    </div>
                    <div>
                      <strong class="text-gray-900">Conexiones:</strong>
                      <ul class="text-gray-600 mt-1">
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_3_connection_1', true ) ); ?></li>
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_3_connection_2', true ) ); ?></li>
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_3_connection_3', true ) ); ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Venezia Santa Lucia -->
              <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
                <div class="relative h-48">
                  <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'station_4_image', true ) ); ?>" alt="<?php echo esc_attr( get_post_meta( get_the_ID(), 'station_4_title', true ) ); ?>" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-300">
                  <div class="absolute inset-0 bg-black/30"></div>
                  <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="text-xl font-bold"><?php echo esc_html( get_post_meta( get_the_ID(), 'station_4_title', true ) ); ?></h3>
                    <p class="text-sm opacity-90"><?php echo esc_html( get_post_meta( get_the_ID(), 'station_4_subtitle', true ) ); ?></p>
                  </div>
                </div>
                <div class="p-6">
                  <p class="text-gray-600 mb-4">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'station_4_description', true ) ); ?>
                  </p>
                  <div class="grid grid-cols-2 gap-4 text-sm">
                    <div>
                      <strong class="text-gray-900">Servicios:</strong>
                      <ul class="text-gray-600 mt-1">
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_4_service_1', true ) ); ?></li>
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_4_service_2', true ) ); ?></li>
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_4_service_3', true ) ); ?></li>
                      </ul>
                    </div>
                    <div>
                      <strong class="text-gray-900">Conexiones:</strong>
                      <ul class="text-gray-600 mt-1">
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_4_connection_1', true ) ); ?></li>
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_4_connection_2', true ) ); ?></li>
                        <li>• <?php echo esc_html( get_post_meta( get_the_ID(), 'station_4_connection_3', true ) ); ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="text-center">
              <button class="bg-gradient-to-r from-blue-500 to-teal-500 hover:from-blue-600 hover:to-teal-600 text-white px-8 py-3 rounded-full flex items-center justify-center mx-auto">
                Ver Todas las Estaciones
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 h-4 w-4"><path d="m9 18 6-6-6-6"/></svg>
              </button>
            </div>
          </div>
        </div>
      </section>

      <!-- Blog Section -->
      <section class="py-12 bg-gray-50" id="blog">
        <div class="container mx-auto px-6">
          <div class="relative max-w-6xl mx-auto bg-white rounded-3xl p-8 md:p-12">
            <div class="text-center mb-8 flex items-center justify-center space-x-4">
              <div class="w-12 h-px bg-gray-300"></div>
              <span class="text-gray-600 font-medium italic"><?php echo esc_html( get_post_meta( get_the_ID(), 'blog_subtitle', true ) ); ?></span>
              <div class="w-12 h-px bg-gray-300"></div>
            </div>

            <div class="text-center mb-12">
              <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                <?php echo esc_html( get_post_meta( get_the_ID(), 'blog_title', true ) ); ?>
              </h2>
              <p class="text-lg text-gray-500 max-w-3xl mx-auto">
                <?php echo esc_html( get_post_meta( get_the_ID(), 'blog_description', true ) ); ?>
              </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
              <!-- Blog Post 1 -->
              <article class="bg-white rounded-2xl border border-gray-200 hover:shadow-lg transition-shadow overflow-hidden group">
                <div class="relative h-48">
                  <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'blog_post_1_image', true ) ); ?>" alt="<?php echo esc_attr( get_post_meta( get_the_ID(), 'blog_post_1_title', true ) ); ?>" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-300">
                  <div class="absolute top-4 left-4">
                    <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                      <?php echo esc_html( get_post_meta( get_the_ID(), 'blog_post_1_category', true ) ); ?>
                    </span>
                  </div>
                </div>
                <div class="p-6">
                  <div class="text-sm text-gray-500 mb-3"><?php echo esc_html( get_post_meta( get_the_ID(), 'blog_post_1_date', true ) ); ?></div>
                  <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'blog_post_1_title', true ) ); ?>
                  </h3>
                  <p class="text-gray-600 text-sm mb-4">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'blog_post_1_excerpt', true ) ); ?>
                  </p>
                  <a href="<?php echo esc_url( get_post_meta( get_the_ID(), 'blog_post_1_link', true ) ); ?>" class="text-blue-600 hover:text-blue-700 p-0">
                    Leer más →
                  </a>
                </div>
              </article>

              <!-- Blog Post 2 -->
              <article class="bg-white rounded-2xl border border-gray-200 hover:shadow-lg transition-shadow overflow-hidden group">
                <div class="relative h-48">
                  <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'blog_post_2_image', true ) ); ?>" alt="<?php echo esc_attr( get_post_meta( get_the_ID(), 'blog_post_2_title', true ) ); ?>" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-300">
                  <div class="absolute top-4 left-4">
                    <span class="bg-green-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                      <?php echo esc_html( get_post_meta( get_the_ID(), 'blog_post_2_category', true ) ); ?>
                    </span>
                  </div>
                </div>
                <div class="p-6">
                  <div class="text-sm text-gray-500 mb-3"><?php echo esc_html( get_post_meta( get_the_ID(), 'blog_post_2_date', true ) ); ?></div>
                  <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'blog_post_2_title', true ) ); ?>
                  </h3>
                  <p class="text-gray-600 text-sm mb-4">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'blog_post_2_excerpt', true ) ); ?>
                  </p>
                  <a href="<?php echo esc_url( get_post_meta( get_the_ID(), 'blog_post_2_link', true ) ); ?>" class="text-blue-600 hover:text-blue-700 p-0">
                    Leer más →
                  </a>
                </div>
              </article>

              <!-- Blog Post 3 -->
              <article class="bg-white rounded-2xl border border-gray-200 hover:shadow-lg transition-shadow overflow-hidden group">
                <div class="relative h-48">
                  <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'blog_post_3_image', true ) ); ?>" alt="<?php echo esc_attr( get_post_meta( get_the_ID(), 'blog_post_3_title', true ) ); ?>" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-300">
                  <div class="absolute top-4 left-4">
                    <span class="bg-orange-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                      <?php echo esc_html( get_post_meta( get_the_ID(), 'blog_post_3_category', true ) ); ?>
                    </span>
                  </div>
                </div>
                <div class="p-6">
                  <div class="text-sm text-gray-500 mb-3"><?php echo esc_html( get_post_meta( get_the_ID(), 'blog_post_3_date', true ) ); ?></div>
                  <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'blog_post_3_title', true ) ); ?>
                  </h3>
                  <p class="text-gray-600 text-sm mb-4">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'blog_post_3_excerpt', true ) ); ?>
                  </p>
                  <a href="<?php echo esc_url( get_post_meta( get_the_ID(), 'blog_post_3_link', true ) ); ?>" class="text-blue-600 hover:text-blue-700 p-0">
                    Leer más →
                  </a>
                </div>
              </article>
            </div>

            <div class="text-center">
              <button class="bg-gradient-to-r from-blue-500 to-teal-500 hover:from-blue-600 hover:to-teal-600 text-white px-8 py-3 rounded-full flex items-center justify-center mx-auto">
                Ver Todos los Artículos
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 h-4 w-4"><path d="m9 18 6-6-6-6"/></svg>
              </button>
            </div>
          </div>
        </div>
      </section>

      <!-- Why Travel With Us Section -->
      <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
          <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-12">
              <div class="flex items-center justify-center space-x-4 mb-6">
                <div class="w-12 h-px bg-gray-300"></div>
                <span class="text-gray-600 font-medium italic"><?php echo esc_html( get_post_meta( get_the_ID(), 'why_us_subtitle', true ) ); ?></span>
                <div class="w-12 h-px bg-gray-300"></div>
              </div>
              <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                <?php echo esc_html( get_post_meta( get_the_ID(), 'why_us_title', true ) ); ?>
              </h2>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <!-- Reliability -->
              <div class="bg-white rounded-2xl p-8 border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 text-blue-600"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900"><?php echo esc_html( get_post_meta( get_the_ID(), 'why_us_feature_1_title', true ) ); ?></h3>
                <p class="text-gray-600 leading-relaxed">
                  <?php echo esc_html( get_post_meta( get_the_ID(), 'why_us_feature_1_description', true ) ); ?>
                </p>
              </div>

              <!-- Best Prices -->
              <div class="bg-white rounded-2xl p-8 border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 text-blue-600"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900"><?php echo esc_html( get_post_meta( get_the_ID(), 'why_us_feature_2_title', true ) ); ?></h3>
                <p class="text-gray-600 leading-relaxed">
                  <?php echo esc_html( get_post_meta( get_the_ID(), 'why_us_feature_2_description', true ) ); ?>
                </p>
              </div>

              <!-- Easy Booking -->
              <div class="bg-white rounded-2xl p-8 border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 text-blue-600"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900"><?php echo esc_html( get_post_meta( get_the_ID(), 'why_us_feature_3_title', true ) ); ?></h3>
                <p class="text-gray-600 leading-relaxed">
                  <?php echo esc_html( get_post_meta( get_the_ID(), 'why_us_feature_3_description', true ) ); ?>
                </p>
              </div>

              <!-- Customer Support -->
              <div class="bg-white rounded-2xl p-8 border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 text-blue-600"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900"><?php echo esc_html( get_post_meta( get_the_ID(), 'why_us_feature_4_title', true ) ); ?></h3>
                <p class="text-gray-600 leading-relaxed">
                  <?php echo esc_html( get_post_meta( get_the_ID(), 'why_us_feature_4_description', true ) ); ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Reviews Section -->
      <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
          <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-12">
              <div class="flex items-center justify-center space-x-4 mb-6">
                <div class="w-12 h-px bg-gray-300"></div>
                <span class="text-gray-600 font-medium italic"><?php echo esc_html( get_post_meta( get_the_ID(), 'reviews_subtitle', true ) ); ?></span>
                <div class="w-12 h-px bg-gray-300"></div>
              </div>
              <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2"><?php echo esc_html( get_post_meta( get_the_ID(), 'reviews_title', true ) ); ?></h2>
            </div>

            <!-- Reviews Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
              <!-- Review 1 -->
              <div class="bg-white rounded-2xl p-8 border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="flex items-center mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="text-gray-600 leading-relaxed mb-6">
                  <?php echo esc_html( get_post_meta( get_the_ID(), 'review_1_text', true ) ); ?>
                </p>
                <div class="flex items-center">
                  <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center mr-4">
                    <span class="text-gray-600 font-semibold"><?php echo esc_html( get_post_meta( get_the_ID(), 'review_1_initials', true ) ); ?></span>
                  </div>
                  <div>
                    <div class="font-semibold text-gray-900"><?php echo esc_html( get_post_meta( get_the_ID(), 'review_1_name', true ) ); ?></div>
                    <div class="text-sm text-gray-500"><?php echo esc_html( get_post_meta( get_the_ID(), 'review_1_location', true ) ); ?></div>
                  </div>
                </div>
              </div>

              <!-- Review 2 -->
              <div class="bg-white rounded-2xl p-8 border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="flex items-center mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="text-gray-600 leading-relaxed mb-6">
                  <?php echo esc_html( get_post_meta( get_the_ID(), 'review_2_text', true ) ); ?>
                </p>
                <div class="flex items-center">
                  <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center mr-4">
                    <span class="text-gray-600 font-semibold"><?php echo esc_html( get_post_meta( get_the_ID(), 'review_2_initials', true ) ); ?></span>
                  </div>
                  <div>
                    <div class="font-semibold text-gray-900"><?php echo esc_html( get_post_meta( get_the_ID(), 'review_2_name', true ) ); ?></div>
                    <div class="text-sm text-gray-500"><?php echo esc_html( get_post_meta( get_the_ID(), 'review_2_location', true ) ); ?></div>
                  </div>
                </div>
              </div>

              <!-- Review 3 -->
              <div class="bg-white rounded-2xl p-8 border border-gray-200 hover:shadow-lg transition-shadow">
                <div class="flex items-center mb-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="text-gray-600 leading-relaxed mb-6">
                  <?php echo esc_html( get_post_meta( get_the_ID(), 'review_3_text', true ) ); ?>
                </p>
                <div class="flex items-center">
                  <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center mr-4">
                    <span class="text-gray-600 font-semibold"><?php echo esc_html( get_post_meta( get_the_ID(), 'review_3_initials', true ) ); ?></span>
                  </div>
                  <div>
                    <div class="font-semibold text-gray-900"><?php echo esc_html( get_post_meta( get_the_ID(), 'review_3_name', true ) ); ?></div>
                    <div class="text-sm text-gray-500"><?php echo esc_html( get_post_meta( get_the_ID(), 'review_3_location', true ) ); ?></div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Overall Rating -->
            <div class="text-center mt-12">
              <div class="inline-flex items-center space-x-2 bg-gray-50 rounded-full px-6 py-3">
                <div class="flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-yellow-400 fill-current"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <span class="text-gray-900 font-semibold">4.9/5</span>
                <span class="text-gray-500">•</span>
                <span class="text-gray-600">Basado en más de 500 opiniones</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FAQ Section -->
      <section class="py-12 pb-20 bg-white" id="faqs">
        <div class="container mx-auto px-6">
          <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-12">
              <div class="flex items-center justify-center space-x-4 mb-6">
                <div class="w-12 h-px bg-gray-300"></div>
                <span class="text-gray-600 font-medium italic"><?php echo esc_html( get_post_meta( get_the_ID(), 'faq_subtitle', true ) ); ?></span>
                <div class="w-12 h-px bg-gray-300"></div>
              </div>
              <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2"><?php echo esc_html( get_post_meta( get_the_ID(), 'faq_title', true ) ); ?></h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
              <!-- FAQ Questions -->
              <div class="lg:col-span-2">
                <div class="space-y-4">
                  <div class="bg-white border border-gray-200 rounded-2xl p-6 cursor-pointer hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between">
                      <span class="font-medium text-gray-900"><?php echo esc_html( get_post_meta( get_the_ID(), 'faq_question_1', true ) ); ?></span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-gray-400"><path d="m6 9 6 6 6-6"/></svg>
                    </div>
                  </div>
                  <div class="bg-white border border-gray-200 rounded-2xl p-6 cursor-pointer hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between">
                      <span class="font-medium text-gray-900"><?php echo esc_html( get_post_meta( get_the_ID(), 'faq_question_2', true ) ); ?></span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-gray-400"><path d="m6 9 6 6 6-6"/></svg>
                    </div>
                  </div>
                  <div class="bg-white border border-gray-200 rounded-2xl p-6 cursor-pointer hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between">
                      <span class="font-medium text-gray-900"><?php echo esc_html( get_post_meta( get_the_ID(), 'faq_question_3', true ) ); ?></span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-gray-400"><path d="m6 9 6 6 6-6"/></svg>
                    </div>
                  </div>
                  <div class="bg-white border border-gray-200 rounded-2xl p-6 cursor-pointer hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between">
                      <span class="font-medium text-gray-900"><?php echo esc_html( get_post_meta( get_the_ID(), 'faq_question_4', true ) ); ?></span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-gray-400"><path d="m6 9 6 6 6-6"/></svg>
                    </div>
                  </div>
                  <div class="bg-white border border-gray-200 rounded-2xl p-6 cursor-pointer hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between">
                      <span class="font-medium text-gray-900"><?php echo esc_html( get_post_meta( get_the_ID(), 'faq_question_5', true ) ); ?></span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-gray-400"><path d="m6 9 6 6 6-6"/></svg>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Still Have Questions Card -->
              <div class="lg:col-span-1">
                <div class="bg-gray-900 rounded-2xl p-8 text-white relative overflow-hidden">
                  <!-- Decorative Pattern -->
                  <div class="absolute top-0 right-0 w-32 h-32 opacity-10">
                    <div class="grid grid-cols-8 gap-1 h-full">
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                      <div class="bg-white rounded-sm"></div>
                    </div>
                  </div>

                  <div class="relative z-10">
                    <h4 class="text-xl font-bold mb-4">¿Más Preguntas?</h4>
                    <p class="text-gray-300 mb-6 leading-relaxed">
                      Nuestros expertos en viajes están aquí para ayudarte a planificar tu aventura italiana perfecta.
                    </p>
                    <button class="bg-white text-gray-900 hover:bg-gray-100 w-full transition-all duration-300 hover:scale-105 shadow-lg rounded-full">Contáctanos</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Newsletter Section -->
      <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
          <div class="relative max-w-6xl mx-auto rounded-3xl overflow-hidden">
            <!-- Background Image -->
            <div class="absolute inset-0">
              <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'newsletter_bg_image', true ) ); ?>" alt="<?php echo esc_attr( get_post_meta( get_the_ID(), 'newsletter_bg_image_alt', true ) ); ?>" class="object-cover w-full h-full">
              <div class="absolute inset-0 bg-black/60"></div>
            </div>

            <!-- Content -->
            <div class="relative z-10 p-8 md:p-12 text-white">
              <!-- Section Header -->
              <div class="text-center mb-12">
                <div class="flex items-center justify-center space-x-4 mb-6">
                  <div class="w-12 h-px bg-white/40"></div>
                  <span class="text-white/80 font-medium italic"><?php echo esc_html( get_post_meta( get_the_ID(), 'newsletter_subtitle', true ) ); ?></span>
                  <div class="w-12 h-px bg-white/40"></div>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-2"><?php echo esc_html( get_post_meta( get_the_ID(), 'newsletter_title', true ) ); ?></h2>
              </div>

              <!-- Newsletter Form -->
              <div class="max-w-md mx-auto">
                <div class="flex gap-4">
                  <input type="email" placeholder="Ingresa tu email" class="flex-1 px-4 py-3 rounded-full border border-gray-300 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                  <button class="bg-gradient-to-r from-blue-500 to-teal-500 hover:from-blue-600 hover:to-teal-600 text-white px-6 py-3 rounded-full flex items-center justify-center">Suscribirse</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
          <div class="text-center mb-8">
            <div class="flex items-center justify-center space-x-2 mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-blue-400"><path d="M10 9.5 14 5.5"/><path d="m14 14-4 4"/><path d="M10 18.5 14 14.5"/><path d="m14 9.5-4-4"/><path d="M5 12h14"/><path d="M5 12h14"/><path d="M8 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2"/><path d="M18 3h-2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2"/></svg>
              <h2 class="text-2xl font-bold">ItalyTren</h2>
            </div>
            <p class="text-gray-400 max-w-2xl mx-auto">
              Tu compañero de confianza para viajar en tren por Italia. Descubre la comodidad, velocidad y belleza 
              de los ferrocarriles italianos con nosotros.
            </p>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
              <h4 class="font-semibold mb-4">Rutas Populares</h4>
              <ul class="space-y-2 text-gray-400">
                <li>
                  <a href="#" class="hover:text-white transition-colors">
                    Roma - Nápoles
                  </a>
                </li>
                <li>
                  <a href="#" class="hover:text-white transition-colors">
                    Roma - Florencia
                  </a>
                </li>
                <li>
                  <a href="#" class="hover:text-white transition-colors">
                    Milán - Venecia
                  </a>
                </li>
                <li>
                  <a href="#" class="hover:text-white transition-colors">
                    Ver todas las rutas
                  </a>
                </li>
              </ul>
            </div>

            <div>
              <h4 class="font-semibold mb-4">Tipos de Tren</h4>
              <ul class="space-y-2 text-gray-400">
                <li>
                  <a href="#" class="hover:text-white transition-colors">
                    Frecciarossa
                  </a>
                </li>
                <li>
                  <a href="#" class="hover:text-white transition-colors">
                    Italo
                  </a>
                </li>
                <li>
                  <a href="#" class="hover:text-white transition-colors">
                    Frecciargento
                  </a>
                </li>
                <li>
                  <a href="#" class="hover:text-white transition-colors">
                    Trenes Regionales
                  </a>
                </li>
              </ul>
            </div>

            <div>
              <h4 class="font-semibold mb-4">Soporte</h4>
              <ul class="space-y-2 text-gray-400">
                <li>
                  <a href="#" class="hover:text-white transition-colors">
                    Contacto
                  </a>
                </li>
                <li>
                  <a href="#faqs" class="hover:text-white transition-colors">
                    FAQs
                  </a>
                </li>
                <li>
                  <a href="#" class="hover:text-white transition-colors">
                    Guía de Viaje
                  </a>
                </li>
                <li>
                  <a href="#" class="hover:text-white transition-colors">
                    Ayuda con Reservas
                  </a>
                </li>
              </ul>
            </div>

            <div>
              <h4 class="font-semibold mb-4">Legal</h4>
              <ul class="space-y-2 text-gray-400">
                <li>
                  <a href="#" class="hover:text-white transition-colors">
                    Aviso Legal
                  </a>
                </li>
                <li>
                  <a href="#" class="hover:text-white transition-colors">
                    Política de Privacidad
                  </a>
                </li>
                <li>
                  <a href="#" class="hover:text-white transition-colors">
                    Términos y Condiciones
                  </a>
                </li>
                <li class="flex items-center space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                  <span>info@italytren.com</span>
                </li>
              </ul>
            </div>
          </div>

          <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
            <p>&copy; 2024 ItalyTren. Todos los derechos reservados.</p>
          </div>
        </div>
      </footer>
    </div>

<?php
get_footer();
?>