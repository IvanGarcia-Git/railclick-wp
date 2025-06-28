<?php
/**
 * Página de configuración de contenido
 * Acceder desde: /wp-content/themes/railclick-theme/setup-content.php
 */

// Incluir WordPress
$wordpress_root = '../../../';
require_once($wordpress_root . 'wp-load.php');

if (!is_admin() && !current_user_can('manage_options')) {
    wp_die('No tienes permisos para acceder a esta página.');
}

function upload_image_to_media_library($image_filename, $title = '') {
    $upload_dir = wp_upload_dir();
    $image_path = $upload_dir['basedir'] . '/' . $image_filename;
    
    if (!file_exists($image_path)) {
        return false;
    }
    
    // Verificar si ya existe en la media library
    $existing = get_posts(array(
        'post_type' => 'attachment',
        'meta_query' => array(
            array(
                'key' => '_wp_attached_file',
                'value' => $image_filename,
                'compare' => 'LIKE'
            )
        )
    ));
    
    if (!empty($existing)) {
        return wp_get_attachment_url($existing[0]->ID);
    }
    
    // Crear attachment
    $attachment = array(
        'guid' => $upload_dir['url'] . '/' . $image_filename,
        'post_mime_type' => wp_check_filetype($image_filename)['type'],
        'post_title' => $title ?: pathinfo($image_filename, PATHINFO_FILENAME),
        'post_content' => '',
        'post_status' => 'inherit'
    );
    
    $attach_id = wp_insert_attachment($attachment, $image_path);
    
    if ($attach_id) {
        require_once(ABSPATH . 'wp-admin/includes/image.php');
        $attach_data = wp_generate_attachment_metadata($attach_id, $image_path);
        wp_update_attachment_metadata($attach_id, $attach_data);
        return wp_get_attachment_url($attach_id);
    }
    
    return false;
}

if (isset($_POST['create_demo'])) {
    // Subir imágenes
    $images = array(
        'hero_bg_image' => upload_image_to_media_library('colosseum-bg.jpg', 'Colosseum Background'),
        'hero_award_image' => upload_image_to_media_library('hero-train.jpg', 'Award Image'),
        'route_1_image' => upload_image_to_media_library('colosseum-interior.jpg', 'Roma Napoles'),
        'route_2_image' => upload_image_to_media_library('florence-duomo.jpg', 'Roma Florencia'),
        'route_3_image' => upload_image_to_media_library('venice-grand-canal.jpg', 'Milan Venecia'),
        'gallery_image_1' => upload_image_to_media_library('venice-canal.jpg', 'Venice Canal'),
        'gallery_image_2' => upload_image_to_media_library('milan-cathedral.jpg', 'Milan Cathedral'),
        'gallery_image_3' => upload_image_to_media_library('david-florence.jpg', 'David Florence'),
        'gallery_image_4' => upload_image_to_media_library('positano-amalfi.jpg', 'Positano Amalfi'),
        'gallery_image_5' => upload_image_to_media_library('pompeii-vesuvius.jpg', 'Pompeii Vesuvius'),
        'gallery_image_6' => upload_image_to_media_library('cinque-terre.jpg', 'Cinque Terre'),
        'gallery_image_7' => upload_image_to_media_library('lake-como.jpg', 'Lake Como'),
        'station_1_image' => upload_image_to_media_library('colosseum-interior.jpg', 'Roma Termini'),
        'station_2_image' => upload_image_to_media_library('milan-cathedral.jpg', 'Milano Centrale'),
        'station_3_image' => upload_image_to_media_library('florence-duomo.jpg', 'Firenze SMN'),
        'station_4_image' => upload_image_to_media_library('venice-grand-canal.jpg', 'Venezia Santa Lucia'),
        'blog_post_1_image' => upload_image_to_media_library('florence-duomo.jpg', 'Blog Post 1'),
        'blog_post_2_image' => upload_image_to_media_library('venice-grand-canal.jpg', 'Blog Post 2'),
        'blog_post_3_image' => upload_image_to_media_library('colosseum-interior.jpg', 'Blog Post 3'),
        'newsletter_bg_image' => upload_image_to_media_library('naples-newsletter-bg.webp', 'Newsletter Background')
    );
    
    // Crear página
    $page_data = array(
        'post_title' => 'Italia Tren - Landing Demo',
        'post_content' => 'Esta es la página de demostración con todo el contenido implementado desde base_project.',
        'post_status' => 'publish',
        'post_type' => 'page',
        'meta_input' => array(
            '_wp_page_template' => 'template-landing.php'
        )
    );
    
    $page_id = wp_insert_post($page_data);
    
    if ($page_id) {
        // Implementar todo el contenido (versión simplificada)
        $meta_fields = array(
            // Hero Section
            'hero_bg_image' => $images['hero_bg_image'],
            'hero_subtitle' => 'Viaja por Italia',
            'hero_title' => 'Explora las mejores rutas de tren en Italia',
            'hero_description' => 'Descubre la manera más cómoda y rápida de viajar por Italia con nuestros trenes de alta velocidad',
            'hero_award_text' => 'WORLD TRAVEL AWARDS',
            'hero_rating_text' => '4.9/5 Rating',
            
            // Routes Section
            'routes_subtitle' => 'Rutas Populares',
            'routes_title' => 'Descubre las rutas de tren más populares de Italia',
            'routes_description' => 'Viaja cómodamente entre las principales ciudades italianas con nuestros trenes de alta velocidad',
            'route_1_image' => $images['route_1_image'],
            'route_1_title' => 'Roma - Nápoles',
            'route_1_details' => 'Desde 1h 10min | Desde €29',
            'route_1_text' => 'Conecta la capital con la hermosa ciudad del sur de Italia. Disfruta de vistas espectaculares del paisaje italiano.',
            'route_2_image' => $images['route_2_image'],
            'route_2_title' => 'Roma - Florencia',
            'route_2_details' => 'Desde 1h 32min | Desde €45',
            'route_2_text' => 'Viaja al corazón del Renacimiento italiano. La ruta más popular para los amantes del arte y la cultura.',
            'route_3_image' => $images['route_3_image'],
            'route_3_title' => 'Milán - Venecia',
            'route_3_details' => 'Desde 2h 25min | Desde €35',
            'route_3_text' => 'Desde la capital de la moda hasta la ciudad flotante. Una experiencia única atravesando el norte de Italia.',
            
            // Train Types
            'train_types_subtitle' => 'Tipos de Tren',
            'train_types_title' => 'Conoce nuestros trenes de alta velocidad',
            'train_types_description' => 'Viaja con los trenes más modernos y rápidos de Europa.',
            'train_type_1_title' => 'Frecciarossa',
            'train_type_1_speed' => 'Hasta 300 km/h',
            'train_type_1_description' => 'El tren de alta velocidad más avanzado de Italia.',
            'train_type_2_title' => 'Italo',
            'train_type_2_speed' => 'Hasta 300 km/h',
            'train_type_2_description' => 'Trenes modernos con diseño italiano distintivo.',
            'train_type_3_title' => 'Frecciargento',
            'train_type_3_speed' => 'Hasta 250 km/h',
            'train_type_3_description' => 'Conecta el norte y sur de Italia pasando por Roma.',
            
            // Gallery
            'gallery_subtitle' => 'Galería',
            'gallery_title' => 'Descubre los paisajes, la cultura y momentos únicos de Italia',
            'gallery_description' => 'Explora nuestra galería curada que captura la belleza de Italia',
            'gallery_image_1' => $images['gallery_image_1'],
            'gallery_image_2' => $images['gallery_image_2'],
            'gallery_image_3' => $images['gallery_image_3'],
            'gallery_image_4' => $images['gallery_image_4'],
            'gallery_image_5' => $images['gallery_image_5'],
            'gallery_image_6' => $images['gallery_image_6'],
            'gallery_image_7' => $images['gallery_image_7'],
            'gallery_explore_button_text' => 'Explorar Galería',
            'gallery_explore_button_link' => '/galeria',
            
            // Train Stations Section
            'stations_subtitle' => 'Estaciones Principales',
            'stations_title' => 'Las estaciones de tren más importantes de Italia',
            'stations_description' => 'Modernas, cómodas y perfectamente conectadas. Nuestras estaciones ofrecen todos los servicios necesarios para tu viaje.',
            
            // Roma Termini
            'station_1_image' => $images['station_1_image'],
            'station_1_title' => 'Roma Termini',
            'station_1_subtitle' => 'Estación Central de Roma',
            'station_1_description' => 'La estación más grande de Italia y principal hub ferroviario del país. Conecta con todas las principales ciudades italianas y europeas.',
            'station_1_services' => '32 andenes, WiFi gratuito, Restaurantes',
            'station_1_connections' => 'Metro líneas A y B, Autobuses urbanos, Taxi y transporte',
            
            // Milano Centrale
            'station_2_image' => $images['station_2_image'],
            'station_2_title' => 'Milano Centrale',
            'station_2_subtitle' => 'Estación Central de Milán',
            'station_2_description' => 'Una de las estaciones más hermosas de Europa con arquitectura Art Déco. Punto de partida hacia el norte de Italia y Europa.',
            'station_2_services' => '24 andenes, Centros comerciales, Salas VIP',
            'station_2_connections' => 'Metro líneas 2 y 3, Aeropuerto Malpensa, Transporte público',
            
            // Firenze Santa Maria Novella
            'station_3_image' => $images['station_3_image'],
            'station_3_title' => 'Firenze S.M.N.',
            'station_3_subtitle' => 'Estación Central de Florencia',
            'station_3_description' => 'Puerta de entrada al corazón del Renacimiento italiano. Ubicada a pocos minutos del centro histórico de Florencia.',
            'station_3_services' => '19 andenes, Farmacia 24h, Tiendas y cafés',
            'station_3_connections' => 'Autobuses urbanos, 10 min a pie al Duomo, Taxi disponibles',
            
            // Venezia Santa Lucia
            'station_4_image' => $images['station_4_image'],
            'station_4_title' => 'Venezia S. Lucia',
            'station_4_subtitle' => 'Estación Central de Venecia',
            'station_4_description' => 'La única estación ferroviaria en el centro histórico de Venecia, con acceso directo al Gran Canal y los principales sitios turísticos.',
            'station_4_services' => '14 andenes, Consigna equipaje, Información turística',
            'station_4_connections' => 'Vaporetti (barcos), Puente de Calatrava, Plaza San Marco',
            
            'stations_all_button_text' => 'Ver Todas las Estaciones',
            'stations_all_button_link' => '/estaciones',
            
            // Blog Section
            'blog_subtitle' => 'Blog',
            'blog_title' => 'Consejos y guías para viajar en tren por Italia',
            'blog_description' => 'Descubre los mejores consejos, rutas recomendadas y secretos para aprovechar al máximo tu viaje en tren por Italia',
            
            // Blog Post 1
            'blog_post_1_image' => $images['blog_post_1_image'],
            'blog_post_1_date' => '15 Diciembre 2024',
            'blog_post_1_title' => 'Guía completa para viajar en tren por Italia: Todo lo que necesitas saber',
            'blog_post_1_text' => 'Descubre cómo planificar tu viaje perfecto en tren por Italia, desde la compra de billetes hasta los mejores asientos y servicios a bordo.',
            'blog_post_1_link' => '/blog/guia-completa-viajar-tren-italia',
            
            // Blog Post 2
            'blog_post_2_image' => $images['blog_post_2_image'],
            'blog_post_2_date' => '12 Diciembre 2024',
            'blog_post_2_title' => 'Las 10 rutas de tren más bonitas de Italia que debes conocer',
            'blog_post_2_text' => 'Explora las rutas ferroviarias más espectaculares de Italia, desde los Alpes hasta la costa mediterránea, con paisajes inolvidables.',
            'blog_post_2_link' => '/blog/10-rutas-mas-bonitas-italia',
            
            // Blog Post 3
            'blog_post_3_image' => $images['blog_post_3_image'],
            'blog_post_3_date' => '10 Diciembre 2024',
            'blog_post_3_title' => 'Cómo ahorrar dinero en billetes de tren: Trucos y ofertas especiales',
            'blog_post_3_text' => 'Aprende los mejores trucos para conseguir billetes de tren baratos en Italia y aprovecha las ofertas especiales disponibles.',
            'blog_post_3_link' => '/blog/ahorrar-dinero-billetes-tren',
            
            'blog_all_articles_button_text' => 'Ver Todos los Artículos',
            'blog_all_articles_button_link' => '/blog',
            
            // Why Travel With Us Section
            'why_us_subtitle' => 'Por qué elegir ItalyTren',
            'why_us_title' => 'La mejor experiencia de viaje en tren por toda Italia te espera',
            
            // Feature 1: Confiabilidad
            'why_us_feature_1_icon' => 'shield',
            'why_us_feature_1_title' => 'Confiabilidad',
            'why_us_feature_1_description' => 'Trenes puntuales y seguros con tecnología de última generación para garantizar tu comodidad y tranquilidad en cada viaje.',
            
            // Feature 2: Mejores Precios
            'why_us_feature_2_icon' => 'award',
            'why_us_feature_2_title' => 'Mejores Precios',
            'why_us_feature_2_description' => 'Ofertas exclusivas y precios competitivos para que puedas viajar más por menos, con opciones para todos los presupuestos.',
            
            // Feature 3: Reserva Fácil
            'why_us_feature_3_icon' => 'users',
            'why_us_feature_3_title' => 'Reserva Fácil',
            'why_us_feature_3_description' => 'Plataforma intuitiva y proceso de reserva simplificado. Compra tus billetes en minutos desde cualquier dispositivo.',
            
            // Feature 4: Soporte 24/7
            'why_us_feature_4_icon' => 'globe',
            'why_us_feature_4_title' => 'Soporte 24/7',
            'why_us_feature_4_description' => 'Atención al cliente en español disponible las 24 horas para ayudarte con cualquier consulta o cambio en tu viaje.',
            
            // Reviews Section
            'reviews_subtitle' => 'Opiniones',
            'reviews_title' => 'Lo que dicen nuestros viajeros sobre sus experiencias en tren',
            
            // Review 1
            'review_1_text' => 'Mi viaje en tren por Italia con ItalyTren fue absolutamente perfecto. Desde Roma hasta Venecia, todo estuvo impecablemente organizado. Los trenes son cómodos, puntuales y el personal muy atento.',
            'review_1_author' => 'Carlos Mendez',
            'review_1_location' => 'Madrid, España',
            
            // Review 2
            'review_2_text' => 'La atención al detalle y los precios fueron excepcionales. Pude conocer la Toscana de manera cómoda y rápida. Definitivamente la mejor forma de viajar por Italia.',
            'review_2_author' => 'Laura Pérez',
            'review_2_location' => 'Barcelona, España',
            
            // Review 3
            'review_3_text' => 'Desde la Costa Amalfitana hasta las galerías de arte de Florencia, cada momento fue perfectamente planificado. Los trenes de alta velocidad son una maravilla de la ingeniería.',
            'review_3_author' => 'Ana Rodríguez',
            'review_3_location' => 'Valencia, España',
            
            'reviews_overall_rating' => '4.9/5',
            'reviews_total_reviews' => 'Basado en más de 500 opiniones',
            
            // FAQ Section
            'faq_subtitle' => 'Preguntas Frecuentes',
            'faq_title' => 'Resuelve tus dudas sobre viajar en tren por Italia',
            
            'faq_question_1' => '¿Cómo puedo comprar billetes de tren online?',
            'faq_answer_1' => 'Puedes comprar billetes directamente desde nuestra plataforma web o aplicación móvil. El proceso es simple: selecciona origen, destino, fecha y pasajeros, elige tu tren preferido y completa el pago de forma segura.',
            
            'faq_question_2' => '¿Cuál es la mejor época para viajar en tren por Italia?',
            'faq_answer_2' => 'Italia es hermosa todo el año. La primavera (abril-mayo) y el otoño (septiembre-octubre) ofrecen clima agradable y menos multitudes. El verano es ideal para la costa, mientras que el invierno es perfecto para ciudades como Roma y Florencia.',
            
            'faq_question_3' => '¿Necesito reserva previa para los trenes?',
            'faq_answer_3' => 'Para trenes de alta velocidad como Frecciarossa e Italo, la reserva es obligatoria. Para trenes regionales, generalmente no es necesaria, pero recomendamos reservar durante temporadas altas o fines de semana.',
            
            'faq_question_4' => '¿Puedo cambiar o cancelar mi billete?',
            'faq_answer_4' => 'Sí, la mayoría de billetes permiten cambios y cancelaciones con diferentes condiciones según la tarifa. Los billetes flexibles ofrecen mayor libertad de cambios, mientras que las tarifas económicas pueden tener restricciones.',
            
            'faq_question_5' => '¿Qué documentos necesito para viajar?',
            'faq_answer_5' => 'Para ciudadanos de la UE, solo necesitas DNI o pasaporte válido. Para otros países, consulta los requisitos de visa. Siempre lleva tu billete (digital o impreso) y documento de identidad durante el viaje.',
            
            'faq_contact_title' => '¿Más Preguntas?',
            'faq_contact_description' => 'Nuestros expertos en viajes están aquí para ayudarte a planificar tu aventura italiana perfecta.',
            'faq_contact_button_text' => 'Contáctanos',
            'faq_contact_button_link' => '/contacto',
            
            // Newsletter
            'newsletter_bg_image' => $images['newsletter_bg_image'],
            'newsletter_subtitle' => 'Newsletter',
            'newsletter_title' => 'Suscríbete a nuestro Newsletter y recibe ofertas exclusivas y consejos de viaje',
            'newsletter_button_text' => 'Suscribirse',
            
            // Footer Complete
            'footer_logo_text' => 'ItalyTren',
            'footer_description' => 'Tu compañero de confianza para viajar en tren por Italia. Descubre la comodidad, velocidad y belleza de los ferrocarriles italianos con nosotros.',
            
            // Footer Routes
            'footer_routes_title' => 'Rutas Populares',
            'footer_route_1_text' => 'Roma - Nápoles',
            'footer_route_1_link' => '/rutas/roma-napoles',
            'footer_route_2_text' => 'Roma - Florencia',
            'footer_route_2_link' => '/rutas/roma-florencia',
            'footer_route_3_text' => 'Milán - Venecia',
            'footer_route_3_link' => '/rutas/milan-venecia',
            'footer_all_routes_text' => 'Ver todas las rutas',
            'footer_all_routes_link' => '/rutas',
            
            // Footer Train Types
            'footer_train_types_title' => 'Tipos de Tren',
            'footer_train_type_1_text' => 'Frecciarossa',
            'footer_train_type_1_link' => '/trenes/frecciarossa',
            'footer_train_type_2_text' => 'Italo',
            'footer_train_type_2_link' => '/trenes/italo',
            'footer_train_type_3_text' => 'Frecciargento',
            'footer_train_type_3_link' => '/trenes/frecciargento',
            'footer_regional_trains_text' => 'Trenes Regionales',
            'footer_regional_trains_link' => '/trenes/regionales',
            
            // Footer Support
            'footer_support_title' => 'Soporte',
            'footer_support_contact_text' => 'Contacto',
            'footer_support_contact_link' => '/contacto',
            'footer_support_faqs_text' => 'FAQs',
            'footer_support_faqs_link' => '/faqs',
            'footer_support_travel_guide_text' => 'Guía de Viaje',
            'footer_support_travel_guide_link' => '/guia-viaje',
            'footer_support_booking_help_text' => 'Ayuda con Reservas',
            'footer_support_booking_help_link' => '/ayuda-reservas',
            
            // Footer Legal
            'footer_legal_title' => 'Legal',
            'footer_legal_notice_text' => 'Aviso Legal',
            'footer_legal_notice_link' => '/aviso-legal',
            'footer_privacy_policy_text' => 'Política de Privacidad',
            'footer_privacy_policy_link' => '/politica-privacidad',
            'footer_terms_conditions_text' => 'Términos y Condiciones',
            'footer_terms_conditions_link' => '/terminos-condiciones',
            'footer_email' => 'info@italytren.com',
            'footer_copyright' => '© 2024 ItalyTren. Todos los derechos reservados.'
        );
        
        foreach ($meta_fields as $key => $value) {
            update_post_meta($page_id, $key, $value);
        }
        
        $success_message = "¡Página creada exitosamente con ID: $page_id!";
        $page_url = get_permalink($page_id);
        $edit_url = admin_url("post.php?post=$page_id&action=edit");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Configuración de Contenido - ItalyTren</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 600px; margin: 0 auto; }
        .button { background: #0073aa; color: white; padding: 10px 20px; border: none; border-radius: 3px; cursor: pointer; }
        .success { background: #d4edda; color: #155724; padding: 15px; border-radius: 3px; margin: 20px 0; }
        .info { background: #d1ecf1; color: #0c5460; padding: 15px; border-radius: 3px; margin: 20px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Configuración de Contenido - ItalyTren</h1>
        
        <?php if (isset($success_message)): ?>
            <div class="success">
                <?php echo $success_message; ?>
                <br><br>
                <a href="<?php echo $page_url; ?>" target="_blank">Ver página →</a> | 
                <a href="<?php echo $edit_url; ?>" target="_blank">Editar página →</a>
            </div>
        <?php endif; ?>
        
        <div class="info">
            Este script creará una página de demostración con todo el contenido de la landing de base_project implementado en WordPress.
            <br><br>
            <strong>Incluye TODAS las secciones:</strong>
            <ul>
                <li>✅ <strong>Subida automática de 20+ imágenes</strong></li>
                <li>✅ <strong>Hero Section</strong> - Imagen Coliseo, título, subtítulo, awards</li>
                <li>✅ <strong>Popular Routes (3 rutas)</strong> - Roma-Nápoles, Roma-Florencia, Milán-Venecia</li>
                <li>✅ <strong>Train Types (3 tipos)</strong> - Frecciarossa, Italo, Frecciargento</li>
                <li>✅ <strong>Gallery Section</strong> - 7 imágenes curadas de Italia</li>
                <li>✅ <strong>Train Stations (4 estaciones)</strong> - Roma, Milán, Florencia, Venecia</li>
                <li>✅ <strong>Blog Section (3 artículos)</strong> - Guías y consejos de viaje</li>
                <li>✅ <strong>Why Travel With Us (4 características)</strong> - Confiabilidad, Precios, Reserva, Soporte</li>
                <li>✅ <strong>Reviews Section (3 reseñas)</strong> - Opiniones reales de usuarios</li>
                <li>✅ <strong>FAQ Section (5 preguntas)</strong> - Preguntas frecuentes completas</li>
                <li>✅ <strong>Newsletter Section</strong> - Con imagen de fondo de Nápoles</li>
                <li>✅ <strong>Footer completo</strong> - 4 columnas, enlaces, contacto</li>
            </ul>
            <br>
            <strong>🎯 Total: ~200 campos configurados con contenido real y profesional</strong>
        </div>
        
        <form method="post">
            <button type="submit" name="create_demo" class="button">
                Crear Página de Demostración
            </button>
        </form>
        
        <p><small>Nota: Asegúrate de que las imágenes están en /wp-content/uploads/</small></p>
    </div>
</body>
</html>