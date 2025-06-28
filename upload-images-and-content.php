<?php
/**
 * Script para subir imágenes a WordPress Media Library e implementar contenido
 * Ejecutar desde: wp-admin/admin.php?page=upload-content
 */

// Cargar WordPress
require_once 'wp-config.php';
require_once ABSPATH . 'wp-admin/includes/file.php';
require_once ABSPATH . 'wp-admin/includes/image.php';
require_once ABSPATH . 'wp-admin/includes/media.php';

function upload_image_to_media_library($image_path, $title = '') {
    if (!file_exists($image_path)) {
        return false;
    }
    
    $filename = basename($image_path);
    $upload_dir = wp_upload_dir();
    
    // Copiar archivo al directorio de uploads
    $target_path = $upload_dir['path'] . '/' . $filename;
    if (!copy($image_path, $target_path)) {
        return false;
    }
    
    // Crear attachment
    $attachment = array(
        'guid' => $upload_dir['url'] . '/' . $filename,
        'post_mime_type' => wp_check_filetype($filename)['type'],
        'post_title' => $title ?: pathinfo($filename, PATHINFO_FILENAME),
        'post_content' => '',
        'post_status' => 'inherit'
    );
    
    $attach_id = wp_insert_attachment($attachment, $target_path);
    
    if ($attach_id) {
        $attach_data = wp_generate_attachment_metadata($attach_id, $target_path);
        wp_update_attachment_metadata($attach_id, $attach_data);
        return wp_get_attachment_url($attach_id);
    }
    
    return false;
}

function create_demo_page_with_content() {
    // Crear página de demostración
    $page_data = array(
        'post_title' => 'Italia Tren - Landing Demo',
        'post_content' => 'Esta es la página de demostración con todo el contenido implementado.',
        'post_status' => 'publish',
        'post_type' => 'page',
        'meta_input' => array(
            '_wp_page_template' => 'template-landing.php'
        )
    );
    
    $page_id = wp_insert_post($page_data);
    
    if ($page_id) {
        // Subir imágenes y obtener URLs
        $upload_dir = wp_upload_dir();
        $images_dir = $upload_dir['basedir'] . '/';
        
        $images = array(
            'hero_bg_image' => upload_image_to_media_library($images_dir . 'colosseum-bg.jpg', 'Colosseum Background'),
            'hero_award_image' => upload_image_to_media_library($images_dir . 'hero-train.jpg', 'Award Image'),
            'route_1_image' => upload_image_to_media_library($images_dir . 'colosseum-interior.jpg', 'Roma Napoles'),
            'route_2_image' => upload_image_to_media_library($images_dir . 'florence-duomo.jpg', 'Roma Florencia'),
            'route_3_image' => upload_image_to_media_library($images_dir . 'venice-grand-canal.jpg', 'Milan Venecia'),
            'gallery_image_1' => upload_image_to_media_library($images_dir . 'venice-canal.jpg', 'Venice Canal'),
            'gallery_image_2' => upload_image_to_media_library($images_dir . 'milan-cathedral.jpg', 'Milan Cathedral'),
            'gallery_image_3' => upload_image_to_media_library($images_dir . 'david-florence.jpg', 'David Florence'),
            'gallery_image_4' => upload_image_to_media_library($images_dir . 'positano-amalfi.jpg', 'Positano Amalfi'),
            'gallery_image_5' => upload_image_to_media_library($images_dir . 'pompeii-vesuvius.jpg', 'Pompeii Vesuvius'),
            'gallery_image_6' => upload_image_to_media_library($images_dir . 'cinque-terre.jpg', 'Cinque Terre'),
            'gallery_image_7' => upload_image_to_media_library($images_dir . 'lake-como.jpg', 'Lake Como'),
            'station_1_image' => upload_image_to_media_library($images_dir . 'colosseum-interior.jpg', 'Roma Termini'),
            'station_2_image' => upload_image_to_media_library($images_dir . 'milan-cathedral.jpg', 'Milano Centrale'),
            'station_3_image' => upload_image_to_media_library($images_dir . 'florence-duomo.jpg', 'Firenze SMN'),
            'station_4_image' => upload_image_to_media_library($images_dir . 'venice-grand-canal.jpg', 'Venezia Santa Lucia'),
            'blog_post_1_image' => upload_image_to_media_library($images_dir . 'florence-duomo.jpg', 'Blog Post 1'),
            'blog_post_2_image' => upload_image_to_media_library($images_dir . 'venice-grand-canal.jpg', 'Blog Post 2'),
            'blog_post_3_image' => upload_image_to_media_library($images_dir . 'colosseum-interior.jpg', 'Blog Post 3'),
            'newsletter_bg_image' => upload_image_to_media_library($images_dir . 'naples-newsletter-bg.webp', 'Newsletter Background')
        );
        
        // Implementar contenido de Hero Section
        update_post_meta($page_id, 'hero_bg_image', $images['hero_bg_image']);
        update_post_meta($page_id, 'hero_subtitle', 'Viaja por Italia');
        update_post_meta($page_id, 'hero_title', 'Explora las mejores rutas de tren en Italia');
        update_post_meta($page_id, 'hero_description', 'Descubre la manera más cómoda y rápida de viajar por Italia con nuestros trenes de alta velocidad');
        update_post_meta($page_id, 'hero_award_image', $images['hero_award_image']);
        update_post_meta($page_id, 'hero_award_text', 'WORLD TRAVEL AWARDS');
        update_post_meta($page_id, 'hero_rating_text', '4.9/5 Rating');
        
        // Implementar contenido Popular Routes Section
        update_post_meta($page_id, 'routes_subtitle', 'Rutas Populares');
        update_post_meta($page_id, 'routes_title', 'Descubre las rutas de tren más populares de Italia');
        update_post_meta($page_id, 'routes_description', 'Viaja cómodamente entre las principales ciudades italianas con nuestros trenes de alta velocidad');
        
        // Ruta 1: Roma - Nápoles
        update_post_meta($page_id, 'route_1_image', $images['route_1_image']);
        update_post_meta($page_id, 'route_1_title', 'Roma - Nápoles');
        update_post_meta($page_id, 'route_1_details', 'Desde 1h 10min | Desde €29');
        update_post_meta($page_id, 'route_1_text', 'Conecta la capital con la hermosa ciudad del sur de Italia. Disfruta de vistas espectaculares del paisaje italiano.');
        update_post_meta($page_id, 'route_1_link', '/rutas/roma-napoles');
        
        // Ruta 2: Roma - Florencia
        update_post_meta($page_id, 'route_2_image', $images['route_2_image']);
        update_post_meta($page_id, 'route_2_title', 'Roma - Florencia');
        update_post_meta($page_id, 'route_2_details', 'Desde 1h 32min | Desde €45');
        update_post_meta($page_id, 'route_2_text', 'Viaja al corazón del Renacimiento italiano. La ruta más popular para los amantes del arte y la cultura.');
        update_post_meta($page_id, 'route_2_link', '/rutas/roma-florencia');
        
        // Ruta 3: Milán - Venecia
        update_post_meta($page_id, 'route_3_image', $images['route_3_image']);
        update_post_meta($page_id, 'route_3_title', 'Milán - Venecia');
        update_post_meta($page_id, 'route_3_details', 'Desde 2h 25min | Desde €35');
        update_post_meta($page_id, 'route_3_text', 'Desde la capital de la moda hasta la ciudad flotante. Una experiencia única atravesando el norte de Italia.');
        update_post_meta($page_id, 'route_3_link', '/rutas/milan-venecia');
        
        update_post_meta($page_id, 'routes_more_info_button_text', 'Ver Más Información');
        update_post_meta($page_id, 'routes_more_info_button_link', '#tipos');
        
        // Implementar contenido Train Types Section
        update_post_meta($page_id, 'train_types_subtitle', 'Tipos de Tren');
        update_post_meta($page_id, 'train_types_title', 'Conoce nuestros trenes de alta velocidad');
        update_post_meta($page_id, 'train_types_description', 'Viaja con los trenes más modernos y rápidos de Europa. Comodidad, velocidad y puntualidad garantizada.');
        
        // Frecciarossa
        update_post_meta($page_id, 'train_type_1_title', 'Frecciarossa');
        update_post_meta($page_id, 'train_type_1_speed', 'Hasta 300 km/h');
        update_post_meta($page_id, 'train_type_1_description', 'El tren de alta velocidad más avanzado de Italia. Conecta las principales ciudades con máximo confort y velocidad.');
        update_post_meta($page_id, 'train_type_1_features', 'WiFi gratuito, Asientos reclinables, Servicio de restauración, Enchufes en cada asiento');
        
        // Italo
        update_post_meta($page_id, 'train_type_2_title', 'Italo');
        update_post_meta($page_id, 'train_type_2_speed', 'Hasta 300 km/h');
        update_post_meta($page_id, 'train_type_2_description', 'Trenes modernos con diseño italiano distintivo. Ofrece una experiencia de viaje premium y sostenible.');
        update_post_meta($page_id, 'train_type_2_features', 'Entretenimiento a bordo, Asientos ergonómicos, Bar a bordo, Ambiente silencioso');
        
        // Frecciargento
        update_post_meta($page_id, 'train_type_3_title', 'Frecciargento');
        update_post_meta($page_id, 'train_type_3_speed', 'Hasta 250 km/h');
        update_post_meta($page_id, 'train_type_3_description', 'Conecta el norte y sur de Italia pasando por Roma. Ideal para rutas panorámicas y ciudades medianas.');
        update_post_meta($page_id, 'train_type_3_features', 'Vistas panorámicas, Conexiones regionales, Precios competitivos, Horarios frecuentes');
        
        update_post_meta($page_id, 'train_types_compare_button_text', 'Comparar Trenes');
        update_post_meta($page_id, 'train_types_compare_button_link', '/comparar-trenes');
        
        // Implementar contenido Gallery Section
        update_post_meta($page_id, 'gallery_subtitle', 'Galería');
        update_post_meta($page_id, 'gallery_title', 'Descubre los paisajes, la cultura y momentos únicos de Italia');
        update_post_meta($page_id, 'gallery_description', 'Explora nuestra galería curada que captura la belleza, cultura y momentos inolvidables de nuestros viajes por Italia');
        
        for ($i = 1; $i <= 7; $i++) {
            update_post_meta($page_id, "gallery_image_$i", $images["gallery_image_$i"]);
        }
        
        update_post_meta($page_id, 'gallery_explore_button_text', 'Explorar Galería');
        update_post_meta($page_id, 'gallery_explore_button_link', '/galeria');
        
        // Implementar contenido Train Stations Section
        update_post_meta($page_id, 'stations_subtitle', 'Estaciones Principales');
        update_post_meta($page_id, 'stations_title', 'Las estaciones de tren más importantes de Italia');
        update_post_meta($page_id, 'stations_description', 'Modernas, cómodas y perfectamente conectadas. Nuestras estaciones ofrecen todos los servicios necesarios para tu viaje.');
        
        // Roma Termini
        update_post_meta($page_id, 'station_1_image', $images['station_1_image']);
        update_post_meta($page_id, 'station_1_title', 'Roma Termini');
        update_post_meta($page_id, 'station_1_subtitle', 'Estación Central de Roma');
        update_post_meta($page_id, 'station_1_description', 'La estación más grande de Italia y principal hub ferroviario del país. Conecta con todas las principales ciudades italianas y europeas.');
        update_post_meta($page_id, 'station_1_services', '32 andenes, WiFi gratuito, Restaurantes');
        update_post_meta($page_id, 'station_1_connections', 'Metro líneas A y B, Autobuses urbanos, Taxi y transporte');
        
        // Milano Centrale
        update_post_meta($page_id, 'station_2_image', $images['station_2_image']);
        update_post_meta($page_id, 'station_2_title', 'Milano Centrale');
        update_post_meta($page_id, 'station_2_subtitle', 'Estación Central de Milán');
        update_post_meta($page_id, 'station_2_description', 'Una de las estaciones más hermosas de Europa con arquitectura Art Déco. Punto de partida hacia el norte de Italia y Europa.');
        update_post_meta($page_id, 'station_2_services', '24 andenes, Centros comerciales, Salas VIP');
        update_post_meta($page_id, 'station_2_connections', 'Metro líneas 2 y 3, Aeropuerto Malpensa, Transporte público');
        
        // Firenze Santa Maria Novella
        update_post_meta($page_id, 'station_3_image', $images['station_3_image']);
        update_post_meta($page_id, 'station_3_title', 'Firenze S.M.N.');
        update_post_meta($page_id, 'station_3_subtitle', 'Estación Central de Florencia');
        update_post_meta($page_id, 'station_3_description', 'Puerta de entrada al corazón del Renacimiento italiano. Ubicada a pocos minutos del centro histórico de Florencia.');
        update_post_meta($page_id, 'station_3_services', '19 andenes, Farmacia 24h, Tiendas y cafés');
        update_post_meta($page_id, 'station_3_connections', 'Autobuses urbanos, 10 min a pie al Duomo, Taxi disponibles');
        
        // Venezia Santa Lucia
        update_post_meta($page_id, 'station_4_image', $images['station_4_image']);
        update_post_meta($page_id, 'station_4_title', 'Venezia S. Lucia');
        update_post_meta($page_id, 'station_4_subtitle', 'Estación Central de Venecia');
        update_post_meta($page_id, 'station_4_description', 'La única estación ferroviaria en el centro histórico de Venecia, con acceso directo al Gran Canal y los principales sitios turísticos.');
        update_post_meta($page_id, 'station_4_services', '14 andenes, Consigna equipaje, Información turística');
        update_post_meta($page_id, 'station_4_connections', 'Vaporetti (barcos), Puente de Calatrava, Plaza San Marco');
        
        update_post_meta($page_id, 'stations_all_button_text', 'Ver Todas las Estaciones');
        update_post_meta($page_id, 'stations_all_button_link', '/estaciones');
        
        // Implementar contenido Blog Section
        update_post_meta($page_id, 'blog_subtitle', 'Blog');
        update_post_meta($page_id, 'blog_title', 'Consejos y guías para viajar en tren por Italia');
        update_post_meta($page_id, 'blog_description', 'Descubre los mejores consejos, rutas recomendadas y secretos para aprovechar al máximo tu viaje en tren por Italia');
        
        // Blog Post 1
        update_post_meta($page_id, 'blog_post_1_image', $images['blog_post_1_image']);
        update_post_meta($page_id, 'blog_post_1_date', '15 Diciembre 2024');
        update_post_meta($page_id, 'blog_post_1_title', 'Guía completa para viajar en tren por Italia: Todo lo que necesitas saber');
        update_post_meta($page_id, 'blog_post_1_text', 'Descubre cómo planificar tu viaje perfecto en tren por Italia, desde la compra de billetes hasta los mejores asientos y servicios a bordo.');
        update_post_meta($page_id, 'blog_post_1_link', '/blog/guia-completa-viajar-tren-italia');
        
        // Blog Post 2
        update_post_meta($page_id, 'blog_post_2_image', $images['blog_post_2_image']);
        update_post_meta($page_id, 'blog_post_2_date', '12 Diciembre 2024');
        update_post_meta($page_id, 'blog_post_2_title', 'Las 10 rutas de tren más bonitas de Italia que debes conocer');
        update_post_meta($page_id, 'blog_post_2_text', 'Explora las rutas ferroviarias más espectaculares de Italia, desde los Alpes hasta la costa mediterránea, con paisajes inolvidables.');
        update_post_meta($page_id, 'blog_post_2_link', '/blog/10-rutas-mas-bonitas-italia');
        
        // Blog Post 3
        update_post_meta($page_id, 'blog_post_3_image', $images['blog_post_3_image']);
        update_post_meta($page_id, 'blog_post_3_date', '10 Diciembre 2024');
        update_post_meta($page_id, 'blog_post_3_title', 'Cómo ahorrar dinero en billetes de tren: Trucos y ofertas especiales');
        update_post_meta($page_id, 'blog_post_3_text', 'Aprende los mejores trucos para conseguir billetes de tren baratos en Italia y aprovecha las ofertas especiales disponibles.');
        update_post_meta($page_id, 'blog_post_3_link', '/blog/ahorrar-dinero-billetes-tren');
        
        update_post_meta($page_id, 'blog_all_articles_button_text', 'Ver Todos los Artículos');
        update_post_meta($page_id, 'blog_all_articles_button_link', '/blog');
        
        // Implementar contenido Why Travel With Us Section
        update_post_meta($page_id, 'why_us_subtitle', 'Por qué elegir ItalyTren');
        update_post_meta($page_id, 'why_us_title', 'La mejor experiencia de viaje en tren por toda Italia te espera');
        
        // Feature 1: Confiabilidad
        update_post_meta($page_id, 'why_us_feature_1_title', 'Confiabilidad');
        update_post_meta($page_id, 'why_us_feature_1_description', 'Trenes puntuales y seguros con tecnología de última generación para garantizar tu comodidad y tranquilidad en cada viaje.');
        
        // Feature 2: Mejores Precios
        update_post_meta($page_id, 'why_us_feature_2_title', 'Mejores Precios');
        update_post_meta($page_id, 'why_us_feature_2_description', 'Ofertas exclusivas y precios competitivos para que puedas viajar más por menos, con opciones para todos los presupuestos.');
        
        // Feature 3: Reserva Fácil
        update_post_meta($page_id, 'why_us_feature_3_title', 'Reserva Fácil');
        update_post_meta($page_id, 'why_us_feature_3_description', 'Plataforma intuitiva y proceso de reserva simplificado. Compra tus billetes en minutos desde cualquier dispositivo.');
        
        // Feature 4: Soporte 24/7
        update_post_meta($page_id, 'why_us_feature_4_title', 'Soporte 24/7');
        update_post_meta($page_id, 'why_us_feature_4_description', 'Atención al cliente en español disponible las 24 horas para ayudarte con cualquier consulta o cambio en tu viaje.');
        
        // Implementar contenido Reviews Section
        update_post_meta($page_id, 'reviews_subtitle', 'Opiniones');
        update_post_meta($page_id, 'reviews_title', 'Lo que dicen nuestros viajeros sobre sus experiencias en tren');
        
        // Review 1
        update_post_meta($page_id, 'review_1_text', 'Mi viaje en tren por Italia con ItalyTren fue absolutamente perfecto. Desde Roma hasta Venecia, todo estuvo impecablemente organizado. Los trenes son cómodos, puntuales y el personal muy atento.');
        update_post_meta($page_id, 'review_1_author', 'Carlos Mendez');
        update_post_meta($page_id, 'review_1_location', 'Madrid, España');
        
        // Review 2
        update_post_meta($page_id, 'review_2_text', 'La atención al detalle y los precios fueron excepcionales. Pude conocer la Toscana de manera cómoda y rápida. Definitivamente la mejor forma de viajar por Italia.');
        update_post_meta($page_id, 'review_2_author', 'Laura Pérez');
        update_post_meta($page_id, 'review_2_location', 'Barcelona, España');
        
        // Review 3
        update_post_meta($page_id, 'review_3_text', 'Desde la Costa Amalfitana hasta las galerías de arte de Florencia, cada momento fue perfectamente planificado. Los trenes de alta velocidad son una maravilla de la ingeniería.');
        update_post_meta($page_id, 'review_3_author', 'Ana Rodríguez');
        update_post_meta($page_id, 'review_3_location', 'Valencia, España');
        
        update_post_meta($page_id, 'reviews_overall_rating', '4.9/5');
        update_post_meta($page_id, 'reviews_total_reviews', 'Basado en más de 500 opiniones');
        
        // Implementar contenido FAQ Section
        update_post_meta($page_id, 'faq_subtitle', 'Preguntas Frecuentes');
        update_post_meta($page_id, 'faq_title', 'Resuelve tus dudas sobre viajar en tren por Italia');
        
        update_post_meta($page_id, 'faq_question_1', '¿Cómo puedo comprar billetes de tren online?');
        update_post_meta($page_id, 'faq_answer_1', 'Puedes comprar billetes directamente desde nuestra plataforma web o aplicación móvil. El proceso es simple: selecciona origen, destino, fecha y pasajeros, elige tu tren preferido y completa el pago de forma segura.');
        
        update_post_meta($page_id, 'faq_question_2', '¿Cuál es la mejor época para viajar en tren por Italia?');
        update_post_meta($page_id, 'faq_answer_2', 'Italia es hermosa todo el año. La primavera (abril-mayo) y el otoño (septiembre-octubre) ofrecen clima agradable y menos multitudes. El verano es ideal para la costa, mientras que el invierno es perfecto para ciudades como Roma y Florencia.');
        
        update_post_meta($page_id, 'faq_question_3', '¿Necesito reserva previa para los trenes?');
        update_post_meta($page_id, 'faq_answer_3', 'Para trenes de alta velocidad como Frecciarossa e Italo, la reserva es obligatoria. Para trenes regionales, generalmente no es necesaria, pero recomendamos reservar durante temporadas altas o fines de semana.');
        
        update_post_meta($page_id, 'faq_question_4', '¿Puedo cambiar o cancelar mi billete?');
        update_post_meta($page_id, 'faq_answer_4', 'Sí, la mayoría de billetes permiten cambios y cancelaciones con diferentes condiciones según la tarifa. Los billetes flexibles ofrecen mayor libertad de cambios, mientras que las tarifas económicas pueden tener restricciones.');
        
        update_post_meta($page_id, 'faq_question_5', '¿Qué documentos necesito para viajar?');
        update_post_meta($page_id, 'faq_answer_5', 'Para ciudadanos de la UE, solo necesitas DNI o pasaporte válido. Para otros países, consulta los requisitos de visa. Siempre lleva tu billete (digital o impreso) y documento de identidad durante el viaje.');
        
        update_post_meta($page_id, 'faq_contact_title', '¿Más Preguntas?');
        update_post_meta($page_id, 'faq_contact_description', 'Nuestros expertos en viajes están aquí para ayudarte a planificar tu aventura italiana perfecta.');
        update_post_meta($page_id, 'faq_contact_button_text', 'Contáctanos');
        update_post_meta($page_id, 'faq_contact_button_link', '/contacto');
        
        // Implementar contenido Newsletter Section
        update_post_meta($page_id, 'newsletter_bg_image', $images['newsletter_bg_image']);
        update_post_meta($page_id, 'newsletter_subtitle', 'Newsletter');
        update_post_meta($page_id, 'newsletter_title', 'Suscríbete a nuestro Newsletter y recibe ofertas exclusivas y consejos de viaje');
        update_post_meta($page_id, 'newsletter_button_text', 'Suscribirse');
        
        // Implementar contenido Footer Section
        update_post_meta($page_id, 'footer_logo_text', 'ItalyTren');
        update_post_meta($page_id, 'footer_description', 'Tu compañero de confianza para viajar en tren por Italia. Descubre la comodidad, velocidad y belleza de los ferrocarriles italianos con nosotros.');
        
        // Footer Routes
        update_post_meta($page_id, 'footer_routes_title', 'Rutas Populares');
        update_post_meta($page_id, 'footer_route_1_text', 'Roma - Nápoles');
        update_post_meta($page_id, 'footer_route_1_link', '/rutas/roma-napoles');
        update_post_meta($page_id, 'footer_route_2_text', 'Roma - Florencia');
        update_post_meta($page_id, 'footer_route_2_link', '/rutas/roma-florencia');
        update_post_meta($page_id, 'footer_route_3_text', 'Milán - Venecia');
        update_post_meta($page_id, 'footer_route_3_link', '/rutas/milan-venecia');
        update_post_meta($page_id, 'footer_all_routes_text', 'Ver todas las rutas');
        update_post_meta($page_id, 'footer_all_routes_link', '/rutas');
        
        // Footer Train Types
        update_post_meta($page_id, 'footer_train_types_title', 'Tipos de Tren');
        update_post_meta($page_id, 'footer_train_type_1_text', 'Frecciarossa');
        update_post_meta($page_id, 'footer_train_type_1_link', '/trenes/frecciarossa');
        update_post_meta($page_id, 'footer_train_type_2_text', 'Italo');
        update_post_meta($page_id, 'footer_train_type_2_link', '/trenes/italo');
        update_post_meta($page_id, 'footer_train_type_3_text', 'Frecciargento');
        update_post_meta($page_id, 'footer_train_type_3_link', '/trenes/frecciargento');
        update_post_meta($page_id, 'footer_regional_trains_text', 'Trenes Regionales');
        update_post_meta($page_id, 'footer_regional_trains_link', '/trenes/regionales');
        
        // Footer Support
        update_post_meta($page_id, 'footer_support_title', 'Soporte');
        update_post_meta($page_id, 'footer_support_contact_text', 'Contacto');
        update_post_meta($page_id, 'footer_support_contact_link', '/contacto');
        update_post_meta($page_id, 'footer_support_faqs_text', 'FAQs');
        update_post_meta($page_id, 'footer_support_faqs_link', '/faqs');
        update_post_meta($page_id, 'footer_support_travel_guide_text', 'Guía de Viaje');
        update_post_meta($page_id, 'footer_support_travel_guide_link', '/guia-viaje');
        update_post_meta($page_id, 'footer_support_booking_help_text', 'Ayuda con Reservas');
        update_post_meta($page_id, 'footer_support_booking_help_link', '/ayuda-reservas');
        
        // Footer Legal
        update_post_meta($page_id, 'footer_legal_title', 'Legal');
        update_post_meta($page_id, 'footer_legal_notice_text', 'Aviso Legal');
        update_post_meta($page_id, 'footer_legal_notice_link', '/aviso-legal');
        update_post_meta($page_id, 'footer_privacy_policy_text', 'Política de Privacidad');
        update_post_meta($page_id, 'footer_privacy_policy_link', '/politica-privacidad');
        update_post_meta($page_id, 'footer_terms_conditions_text', 'Términos y Condiciones');
        update_post_meta($page_id, 'footer_terms_conditions_link', '/terminos-condiciones');
        update_post_meta($page_id, 'footer_email', 'info@italytren.com');
        update_post_meta($page_id, 'footer_copyright', '© 2024 ItalyTren. Todos los derechos reservados.');
        
        return $page_id;
    }
    
    return false;
}

// Ejecutar si se accede directamente
if (isset($_GET['action']) && $_GET['action'] === 'upload_content') {
    $page_id = create_demo_page_with_content();
    if ($page_id) {
        echo "¡Contenido implementado exitosamente! Página creada con ID: $page_id";
        echo "<br><a href='" . get_permalink($page_id) . "'>Ver página</a>";
        echo "<br><a href='" . admin_url("post.php?post=$page_id&action=edit") . "'>Editar página</a>";
    } else {
        echo "Error al crear la página de demostración.";
    }
    exit;
}

echo "Script listo. <a href='?action=upload_content'>Ejecutar implementación de contenido</a>";
?>