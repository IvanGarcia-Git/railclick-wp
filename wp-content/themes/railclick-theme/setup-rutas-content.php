<?php
/**
 * Setup content for Rutas de Tren template
 * Run this file once to populate example content
 */

// Load WordPress if not already loaded
if (!defined('ABSPATH')) {
    // Get the WordPress root directory
    $wp_root = dirname(dirname(dirname(dirname(__FILE__))));
    require_once($wp_root . '/wp-load.php');
}

// Check if user has admin privileges
if (!current_user_can('manage_options')) {
    wp_die('No tienes permisos para acceder a esta página.');
}

function railclick_setup_rutas_example_content() {
    // Create or get the page
    $page_title = 'Rutas de Tren';
    $page_slug = 'rutas-de-tren';
    
    // Check if page already exists
    $existing_page = get_page_by_path($page_slug);
    
    if (!$existing_page) {
        // Create new page
        $page_data = array(
            'post_title'    => $page_title,
            'post_name'     => $page_slug,
            'post_content'  => 'Esta página utiliza el template personalizado "Rutas de Tren" para mostrar todas las rutas disponibles.',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_author'   => 1,
            'page_template' => 'template-rutas-tren.php'
        );
        
        $page_id = wp_insert_post($page_data);
    } else {
        $page_id = $existing_page->ID;
        // Update template
        update_post_meta($page_id, '_wp_page_template', 'template-rutas-tren.php');
    }
    
    if ($page_id) {
        // Hero Section Content
        update_post_meta($page_id, 'rutas_hero_bg_image', get_template_directory_uri() . '/assets/images/hero-train.jpg');
        update_post_meta($page_id, 'rutas_hero_title', 'Descubre las Mejores Rutas de Tren');
        update_post_meta($page_id, 'rutas_hero_subtitle', 'Viajes Únicos por Europa');
        update_post_meta($page_id, 'rutas_hero_description', 'Explora destinos increíbles con nuestras rutas de tren cuidadosamente seleccionadas. Desde ciudades históricas hasta paisajes naturales impresionantes, cada viaje es una aventura única.');
        update_post_meta($page_id, 'rutas_hero_search_placeholder', 'Buscar ciudad de origen...');
        
        // Filters Content
        update_post_meta($page_id, 'rutas_filter_origin_label', 'Ciudad de Origen');
        update_post_meta($page_id, 'rutas_filter_destination_label', 'Ciudad de Destino');
        update_post_meta($page_id, 'rutas_filter_duration_label', 'Duración del Viaje');
        update_post_meta($page_id, 'rutas_filter_search_button', 'Buscar Rutas');
        
        // Route 1: Roma - Florencia
        update_post_meta($page_id, 'ruta_1_name', 'Roma - Florencia');
        update_post_meta($page_id, 'ruta_1_origin', 'Roma Termini');
        update_post_meta($page_id, 'ruta_1_destination', 'Florencia Santa Maria Novella');
        update_post_meta($page_id, 'ruta_1_duration', '1h 32min');
        update_post_meta($page_id, 'ruta_1_price_from', '29');
        update_post_meta($page_id, 'ruta_1_description', 'Viaja desde la Ciudad Eterna hasta la cuna del Renacimiento. Una ruta que conecta dos de las ciudades más importantes de Italia con paisajes toscanos espectaculares.');
        update_post_meta($page_id, 'ruta_1_image_1', get_template_directory_uri() . '/assets/images/florence-duomo.jpg');
        update_post_meta($page_id, 'ruta_1_image_2', get_template_directory_uri() . '/assets/images/colosseum-bg.jpg');
        update_post_meta($page_id, 'ruta_1_image_3', get_template_directory_uri() . '/assets/images/destinations-section.jpg');
        update_post_meta($page_id, 'ruta_1_schedule_morning', '06:35, 07:35, 08:35, 09:35');
        update_post_meta($page_id, 'ruta_1_schedule_afternoon', '14:35, 15:35, 16:35, 17:35');
        update_post_meta($page_id, 'ruta_1_schedule_evening', '19:35, 20:35, 21:35');
        update_post_meta($page_id, 'ruta_1_features', "WiFi gratuito\nAire acondicionado\nAsientos reclinables\nServicio de restauración\nTomas de corriente\nVistas panorámicas");
        update_post_meta($page_id, 'ruta_1_booking_link', '#reservar-roma-florencia');
        update_post_meta($page_id, 'ruta_1_booking_text', 'Reservar Ahora');
        
        // Route 2: Milán - Venecia
        update_post_meta($page_id, 'ruta_2_name', 'Milán - Venecia');
        update_post_meta($page_id, 'ruta_2_origin', 'Milano Centrale');
        update_post_meta($page_id, 'ruta_2_destination', 'Venezia Santa Lucia');
        update_post_meta($page_id, 'ruta_2_duration', '2h 25min');
        update_post_meta($page_id, 'ruta_2_price_from', '35');
        update_post_meta($page_id, 'ruta_2_description', 'Desde la capital de la moda hasta la romántica ciudad de los canales. Disfruta de los paisajes del norte de Italia en este cómodo viaje en tren de alta velocidad.');
        update_post_meta($page_id, 'ruta_2_image_1', get_template_directory_uri() . '/assets/images/venice-canal.jpg');
        update_post_meta($page_id, 'ruta_2_image_2', get_template_directory_uri() . '/assets/images/milan-cathedral.jpg');
        update_post_meta($page_id, 'ruta_2_image_3', get_template_directory_uri() . '/assets/images/venice-grand-canal.jpg');
        update_post_meta($page_id, 'ruta_2_schedule_morning', '06:25, 08:25, 10:25');
        update_post_meta($page_id, 'ruta_2_schedule_afternoon', '12:25, 14:25, 16:25, 18:25');
        update_post_meta($page_id, 'ruta_2_schedule_evening', '20:25, 22:25');
        update_post_meta($page_id, 'ruta_2_features', "Tren de alta velocidad\nWiFi premium\nServicio de catering\nAsientos business\nSilencioso\nPuntualidad garantizada");
        update_post_meta($page_id, 'ruta_2_booking_link', '#reservar-milan-venecia');
        update_post_meta($page_id, 'ruta_2_booking_text', 'Comprar Billetes');
        
        // Route 3: Nápoles - Amalfi
        update_post_meta($page_id, 'ruta_3_name', 'Nápoles - Costa Amalfitana');
        update_post_meta($page_id, 'ruta_3_origin', 'Napoli Centrale');
        update_post_meta($page_id, 'ruta_3_destination', 'Salerno (+ bus a Amalfi)');
        update_post_meta($page_id, 'ruta_3_duration', '3h 15min');
        update_post_meta($page_id, 'ruta_3_price_from', '42');
        update_post_meta($page_id, 'ruta_3_description', 'Experimenta la belleza del sur de Italia con esta ruta que te lleva desde Nápoles hasta la espectacular Costa Amalfitana. Incluye conexión en autobús panorámico.');
        update_post_meta($page_id, 'ruta_3_image_1', get_template_directory_uri() . '/assets/images/positano-amalfi.jpg');
        update_post_meta($page_id, 'ruta_3_image_2', get_template_directory_uri() . '/assets/images/naples-newsletter-bg.webp');
        update_post_meta($page_id, 'ruta_3_image_3', get_template_directory_uri() . '/assets/images/pompeii-vesuvius.jpg');
        update_post_meta($page_id, 'ruta_3_schedule_morning', '07:15, 09:15');
        update_post_meta($page_id, 'ruta_3_schedule_afternoon', '13:15, 15:15, 17:15');
        update_post_meta($page_id, 'ruta_3_schedule_evening', '19:15');
        update_post_meta($page_id, 'ruta_3_features', "Conexión de autobús incluida\nVistas al mar\nGuía turística\nParadas panorámicas\nAire acondicionado\nComida local incluida");
        update_post_meta($page_id, 'ruta_3_booking_link', '#reservar-napoles-amalfi');
        update_post_meta($page_id, 'ruta_3_booking_text', 'Reservar Tour');
        
        // Route 4: Roma - Cinque Terre
        update_post_meta($page_id, 'ruta_4_name', 'Roma - Cinque Terre');
        update_post_meta($page_id, 'ruta_4_origin', 'Roma Termini');
        update_post_meta($page_id, 'ruta_4_destination', 'La Spezia (+ tren local)');
        update_post_meta($page_id, 'ruta_4_duration', '4h 30min');
        update_post_meta($page_id, 'ruta_4_price_from', '55');
        update_post_meta($page_id, 'ruta_4_description', 'Descubre uno de los destinos más pintorescos de Italia. Esta ruta te lleva desde Roma hasta las famosas Cinco Tierras, con sus coloridos pueblos costeros.');
        update_post_meta($page_id, 'ruta_4_image_1', get_template_directory_uri() . '/assets/images/cinque-terre.jpg');
        update_post_meta($page_id, 'ruta_4_image_2', get_template_directory_uri() . '/assets/images/colosseum-hero.jpg');
        update_post_meta($page_id, 'ruta_4_image_3', get_template_directory_uri() . '/assets/images/about-section.jpg');
        update_post_meta($page_id, 'ruta_4_schedule_morning', '06:45, 08:45');
        update_post_meta($page_id, 'ruta_4_schedule_afternoon', '12:45, 14:45');
        update_post_meta($page_id, 'ruta_4_schedule_evening', '18:45');
        update_post_meta($page_id, 'ruta_4_features', "Pase Cinque Terre incluido\nTren regional incluido\nVistas costeras\nSenderos de hiking\nPueblos patrimonio UNESCO\nGastronomía local");
        update_post_meta($page_id, 'ruta_4_booking_link', '#reservar-roma-cinque-terre');
        update_post_meta($page_id, 'ruta_4_booking_text', 'Explorar Ruta');
        
        // Route 5: Florencia - Siena
        update_post_meta($page_id, 'ruta_5_name', 'Florencia - Siena');
        update_post_meta($page_id, 'ruta_5_origin', 'Firenze Santa Maria Novella');
        update_post_meta($page_id, 'ruta_5_destination', 'Siena');
        update_post_meta($page_id, 'ruta_5_duration', '1h 45min');
        update_post_meta($page_id, 'ruta_5_price_from', '18');
        update_post_meta($page_id, 'ruta_5_price_from', '18');
        update_post_meta($page_id, 'ruta_5_description', 'Un viaje corto pero espectacular a través del corazón de la Toscana. Perfecto para una excursión de un día desde Florencia a la medieval ciudad de Siena.');
        update_post_meta($page_id, 'ruta_5_image_1', get_template_directory_uri() . '/assets/images/david-florence.jpg');
        update_post_meta($page_id, 'ruta_5_image_2', get_template_directory_uri() . '/assets/images/florence-duomo.jpg');
        update_post_meta($page_id, 'ruta_5_image_3', get_template_directory_uri() . '/assets/images/destinations-section.jpg');
        update_post_meta($page_id, 'ruta_5_schedule_morning', '07:30, 09:30, 11:30');
        update_post_meta($page_id, 'ruta_5_schedule_afternoon', '13:30, 15:30, 17:30');
        update_post_meta($page_id, 'ruta_5_schedule_evening', '19:30, 21:30');
        update_post_meta($page_id, 'ruta_5_features', "Paisajes toscanos\nViñedos y olivares\nArquitectura medieval\nEconomico\nFrecuencia alta\nBilletes flexibles");
        update_post_meta($page_id, 'ruta_5_booking_link', '#reservar-florencia-siena');
        update_post_meta($page_id, 'ruta_5_booking_text', 'Comprar Ahora');
        
        // Route 6: Milán - Como
        update_post_meta($page_id, 'ruta_6_name', 'Milán - Lago de Como');
        update_post_meta($page_id, 'ruta_6_origin', 'Milano Centrale');
        update_post_meta($page_id, 'ruta_6_destination', 'Como San Giovanni');
        update_post_meta($page_id, 'ruta_6_duration', '1h 15min');
        update_post_meta($page_id, 'ruta_6_price_from', '12');
        update_post_meta($page_id, 'ruta_6_description', 'Escápate de la ciudad a uno de los lagos más hermosos de Italia. Una ruta perfecta para disfrutar de la naturaleza y la elegancia del Lago de Como.');
        update_post_meta($page_id, 'ruta_6_image_1', get_template_directory_uri() . '/assets/images/lake-como.jpg');
        update_post_meta($page_id, 'ruta_6_image_2', get_template_directory_uri() . '/assets/images/milan-cathedral.jpg');
        update_post_meta($page_id, 'ruta_6_image_3', get_template_directory_uri() . '/assets/images/about-section.jpg');
        update_post_meta($page_id, 'ruta_6_schedule_morning', '06:00, 07:00, 08:00, 09:00, 10:00, 11:00');
        update_post_meta($page_id, 'ruta_6_schedule_afternoon', '12:00, 13:00, 14:00, 15:00, 16:00, 17:00, 18:00');
        update_post_meta($page_id, 'ruta_6_schedule_evening', '19:00, 20:00, 21:00, 22:00');
        update_post_meta($page_id, 'ruta_6_features', "Salidas frecuentes\nVistas alpinas\nLago glacial\nVillas históricas\nBarcos incluidos\nActividades acuáticas");
        update_post_meta($page_id, 'ruta_6_booking_link', '#reservar-milan-como');
        update_post_meta($page_id, 'ruta_6_booking_text', 'Ver Horarios');
        
        return $page_id;
    }
    
    return false;
}

// Execute the setup if called directly
if (isset($_GET['setup_rutas_content']) && $_GET['setup_rutas_content'] == 'true') {
    $page_id = railclick_setup_rutas_example_content();
    if ($page_id) {
        echo "<div style='padding: 20px; background: #d4edda; border: 1px solid #c3e6cb; color: #155724; margin: 20px;'>";
        echo "<h3>✅ Contenido de ejemplo creado exitosamente!</h3>";
        echo "<p><strong>Página creada:</strong> Rutas de Tren (ID: {$page_id})</p>";
        echo "<p><strong>Template asignado:</strong> template-rutas-tren.php</p>";
        echo "<p><strong>Contenido añadido:</strong></p>";
        echo "<ul>";
        echo "<li>✅ Hero Section con imagen de fondo y textos</li>";
        echo "<li>✅ Sección de filtros configurada</li>";
        echo "<li>✅ 6 rutas completas con:</li>";
        echo "<ul>";
        echo "<li>• Nombres y descripciones detalladas</li>";
        echo "<li>• Horarios por franjas temporales</li>";
        echo "<li>• Precios y características</li>";
        echo "<li>• Enlaces de reserva</li>";
        echo "<li>• 3 imágenes por ruta (usando imágenes existentes)</li>";
        echo "</ul>";
        echo "</ul>";
        echo "<p><a href='" . get_permalink($page_id) . "' target='_blank' style='background: #007cba; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>👁️ Ver Página</a></p>";
        echo "<p><a href='" . admin_url("post.php?post={$page_id}&action=edit") . "' target='_blank' style='background: #50575e; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-left: 10px;'>✏️ Editar Contenido</a></p>";
        echo "</div>";
    } else {
        echo "<div style='padding: 20px; background: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; margin: 20px;'>";
        echo "<h3>❌ Error al crear el contenido</h3>";
        echo "<p>No se pudo crear la página de ejemplo.</p>";
        echo "</div>";
    }
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Setup Contenido Rutas de Tren</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f1f1f1; }
        .container { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); max-width: 800px; margin: 0 auto; }
        .button { background: #0073aa; color: white; padding: 15px 30px; text-decoration: none; border-radius: 5px; font-size: 16px; display: inline-block; margin: 10px 0; }
        .button:hover { background: #005a87; }
        .warning { background: #fff3cd; border: 1px solid #ffeaa7; color: #856404; padding: 15px; border-radius: 5px; margin: 20px 0; }
        .feature { background: #f8f9fa; padding: 15px; margin: 10px 0; border-left: 4px solid #0073aa; }
        h1 { color: #23282d; border-bottom: 2px solid #0073aa; padding-bottom: 10px; }
        h2 { color: #0073aa; }
        ul { line-height: 1.6; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚄 Setup Contenido - Template Rutas de Tren</h1>
        
        <p>Esta herramienta creará contenido de ejemplo para el template "Rutas de Tren" que acabamos de implementar.</p>
        
        <div class="warning">
            <strong>⚠️ Importante:</strong> Este script creará una nueva página llamada "Rutas de Tren" con contenido de ejemplo. Si la página ya existe, actualizará su contenido.
        </div>
        
        <h2>📋 Contenido que se creará:</h2>
        
        <div class="feature">
            <h3>🎨 Hero Section</h3>
            <ul>
                <li>Imagen de fondo con tren</li>
                <li>Título: "Descubre las Mejores Rutas de Tren"</li>
                <li>Subtítulo: "Viajes Únicos por Europa"</li>
                <li>Descripción promocional</li>
            </ul>
        </div>
        
        <div class="feature">
            <h3>🔍 Sección de Filtros</h3>
            <ul>
                <li>Etiquetas para origen, destino y duración</li>
                <li>Texto del botón de búsqueda</li>
            </ul>
        </div>
        
        <div class="feature">
            <h3>🚆 6 Rutas Completas</h3>
            <ul>
                <li><strong>Roma - Florencia:</strong> Ruta clásica del centro de Italia</li>
                <li><strong>Milán - Venecia:</strong> Del norte industrial a la ciudad romántica</li>
                <li><strong>Nápoles - Costa Amalfitana:</strong> Belleza del sur con conexión de autobús</li>
                <li><strong>Roma - Cinque Terre:</strong> Hacia los pueblos costeros más pintorescos</li>
                <li><strong>Florencia - Siena:</strong> Excursión toscana de un día</li>
                <li><strong>Milán - Lago de Como:</strong> Escape natural desde la ciudad</li>
            </ul>
        </div>
        
        <div class="feature">
            <h3>📊 Datos por Ruta</h3>
            <ul>
                <li>Nombres descriptivos y atractivos</li>
                <li>Horarios organizados por mañana, tarde y noche</li>
                <li>Precios realistas (€12 - €55)</li>
                <li>Descripciones detalladas y promocionales</li>
                <li>Características específicas (6 por ruta)</li>
                <li>Enlaces de reserva personalizados</li>
                <li>3 imágenes por ruta (usando imágenes existentes del tema)</li>
            </ul>
        </div>
        
        <h2>🚀 Crear Contenido de Ejemplo</h2>
        <p>Haz clic en el botón para crear automáticamente todo el contenido de ejemplo:</p>
        
        <a href="?setup_rutas_content=true" class="button">✨ Crear Contenido de Ejemplo</a>
        
        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #ddd; color: #666; font-size: 14px;">
            <p><strong>Nota:</strong> Después de crear el contenido, podrás editar todos los campos desde el panel de WordPress → Páginas → Rutas de Tren → Editar.</p>
        </div>
    </div>
</body>
</html>