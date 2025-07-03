<?php
/**
 * Configuración de contenido para Template Estaciones
 * Este archivo crea e inserta contenido de ejemplo para el template
 */

// Prevenir acceso directo
if (!defined('ABSPATH')) {
    exit;
}

// Función para crear contenido de ejemplo
function railclick_setup_estaciones_content() {
    // Buscar si ya existe una página con el template
    $existing_page = get_posts(array(
        'post_type' => 'page',
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'template-estaciones.php'
            )
        ),
        'posts_per_page' => 1
    ));

    if (!empty($existing_page)) {
        $page_id = $existing_page[0]->ID;
    } else {
        // Crear nueva página
        $page_data = array(
            'post_title' => 'Estaciones',
            'post_content' => 'Página generada automáticamente para mostrar información sobre las principales estaciones de tren.',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_author' => 1
        );
        
        $page_id = wp_insert_post($page_data);
        
        if ($page_id) {
            // Asignar template
            update_post_meta($page_id, '_wp_page_template', 'template-estaciones.php');
        }
    }

    if ($page_id) {
        // Configuración Hero Section
        update_post_meta($page_id, 'estaciones_hero_subtitle', 'Conectando destinos');
        update_post_meta($page_id, 'estaciones_hero_title', 'Nuestras Estaciones Principales');
        update_post_meta($page_id, 'estaciones_hero_description', 'Descubre todas las facilidades y servicios disponibles en nuestras estaciones principales. Planifica tu viaje con información completa sobre ubicaciones, horarios y conexiones.');
        update_post_meta($page_id, 'estaciones_hero_bg_image', get_template_directory_uri() . '/assets/images/hero-train.jpg');

        // Estación Central
        update_post_meta($page_id, 'estacion_central_name', 'Estación Central Milano');
        update_post_meta($page_id, 'estacion_central_tipo', 'Principal');
        update_post_meta($page_id, 'estacion_central_direccion', 'Piazza Duca d\'Aosta, 1, 20124 Milano MI, Italia');
        update_post_meta($page_id, 'estacion_central_horarios', 'Abierto 24 horas • Servicios de 05:00 a 23:30');
        update_post_meta($page_id, 'estacion_central_servicios', "Venta de billetes\nInformación turística\nConsigna de equipajes\nServicios de restauración\nTiendas duty-free\nSala VIP\nWiFi gratuito");
        update_post_meta($page_id, 'estacion_central_facilidades', "Ascensores y escaleras mecánicas\nAcceso para discapacitados\nBaños públicos\nCajeros automáticos\nFarmacia\nLibrería\nPunto de recarga móvil\nZona de descanso");
        update_post_meta($page_id, 'estacion_central_conexiones', "Metro Línea 2 y 3\nAutobuses urbanos\nTaxis\nRentacar\nTraslados al aeropuerto");
        update_post_meta($page_id, 'estacion_central_contacto', 'Tel: +39 02 63712000 • Email: info@centrale.milano.it');
        update_post_meta($page_id, 'estacion_central_image_1', get_template_directory_uri() . '/assets/images/milan-cathedral.jpg');
        update_post_meta($page_id, 'estacion_central_image_2', get_template_directory_uri() . '/assets/images/david-florence.jpg');
        update_post_meta($page_id, 'estacion_central_image_3', get_template_directory_uri() . '/assets/images/florence-duomo.jpg');

        // Estación Norte
        update_post_meta($page_id, 'estacion_norte_name', 'Estación Norte Venezia');
        update_post_meta($page_id, 'estacion_norte_tipo', 'Principal');
        update_post_meta($page_id, 'estacion_norte_direccion', 'Cannaregio, 30121 Venezia VE, Italia');
        update_post_meta($page_id, 'estacion_norte_horarios', 'Lunes a Domingo: 06:00 - 22:00');
        update_post_meta($page_id, 'estacion_norte_servicios', "Venta de billetes\nInformación turística\nConsigna de equipajes\nCafetería\nTienda de souvenirs\nWiFi gratuito");
        update_post_meta($page_id, 'estacion_norte_facilidades', "Ascensores\nAcceso para discapacitados\nBaños públicos\nCajeros automáticos\nZona de espera");
        update_post_meta($page_id, 'estacion_norte_conexiones', "Vaporetto\nAutobuses ACTV\nTaxis acuáticos\nConexión aeroporto");
        update_post_meta($page_id, 'estacion_norte_contacto', 'Tel: +39 041 785670 • Email: info@venezia.stazione.it');
        update_post_meta($page_id, 'estacion_norte_image_1', get_template_directory_uri() . '/assets/images/venice-canal.jpg');
        update_post_meta($page_id, 'estacion_norte_image_2', get_template_directory_uri() . '/assets/images/venice-grand-canal.jpg');
        update_post_meta($page_id, 'estacion_norte_image_3', get_template_directory_uri() . '/assets/images/cinque-terre.jpg');

        // Estación Sur
        update_post_meta($page_id, 'estacion_sur_name', 'Estación Sur Napoli');
        update_post_meta($page_id, 'estacion_sur_tipo', 'Principal');
        update_post_meta($page_id, 'estacion_sur_direccion', 'Piazza Garibaldi, 80142 Napoli NA, Italia');
        update_post_meta($page_id, 'estacion_sur_horarios', 'Abierto 24 horas • Servicios principales: 05:30 - 23:00');
        update_post_meta($page_id, 'estacion_sur_servicios', "Venta de billetes\nInformación turística\nConsigna de equipajes\nRestaurante\nBar\nTiendas\nWiFi gratuito\nSala de espera");
        update_post_meta($page_id, 'estacion_sur_facilidades', "Ascensores y escaleras mecánicas\nAcceso para discapacitados\nBaños públicos\nCajeros automáticos\nFarmacia\nPunto de información turística");
        update_post_meta($page_id, 'estacion_sur_conexiones', "Metro Línea 1\nAutobuses ANM\nTaxis\nAlibus al aeroporto\nFerrys a islas");
        update_post_meta($page_id, 'estacion_sur_contacto', 'Tel: +39 081 563188 • Email: info@napoli.centrale.it');
        update_post_meta($page_id, 'estacion_sur_image_1', get_template_directory_uri() . '/assets/images/pompeii-vesuvius.jpg');
        update_post_meta($page_id, 'estacion_sur_image_2', get_template_directory_uri() . '/assets/images/positano-amalfi.jpg');
        update_post_meta($page_id, 'estacion_sur_image_3', get_template_directory_uri() . '/assets/images/colosseum-interior.jpg');

        // Estación Este
        update_post_meta($page_id, 'estacion_este_name', 'Estación Este Firenze');
        update_post_meta($page_id, 'estacion_este_tipo', 'Secundaria');
        update_post_meta($page_id, 'estacion_este_direccion', 'Piazza della Stazione, 50123 Firenze FI, Italia');
        update_post_meta($page_id, 'estacion_este_horarios', 'Lunes a Domingo: 05:00 - 22:30');
        update_post_meta($page_id, 'estacion_este_servicios', "Venta de billetes\nInformación turística\nCafetería\nTienda\nWiFi gratuito");
        update_post_meta($page_id, 'estacion_este_facilidades', "Ascensores\nAcceso para discapacitados\nBaños públicos\nCajeros automáticos");
        update_post_meta($page_id, 'estacion_este_conexiones', "Autobuses ATAF\nTaxis\nRentacar\nTraslados turísticos");
        update_post_meta($page_id, 'estacion_este_contacto', 'Tel: +39 055 235865 • Email: info@firenze.stazione.it');
        update_post_meta($page_id, 'estacion_este_image_1', get_template_directory_uri() . '/assets/images/david-florence.jpg');
        update_post_meta($page_id, 'estacion_este_image_2', get_template_directory_uri() . '/assets/images/florence-duomo.jpg');
        update_post_meta($page_id, 'estacion_este_image_3', get_template_directory_uri() . '/assets/images/cinque-terre.jpg');

        // Estación Oeste
        update_post_meta($page_id, 'estacion_oeste_name', 'Estación Oeste Torino');
        update_post_meta($page_id, 'estacion_oeste_tipo', 'Secundaria');
        update_post_meta($page_id, 'estacion_oeste_direccion', 'Corso Vittorio Emanuele II, 53, 10128 Torino TO, Italia');
        update_post_meta($page_id, 'estacion_oeste_horarios', 'Lunes a Domingo: 06:00 - 21:00');
        update_post_meta($page_id, 'estacion_oeste_servicios', "Venta de billetes\nInformación\nCafetería\nWiFi gratuito");
        update_post_meta($page_id, 'estacion_oeste_facilidades', "Ascensores\nAcceso para discapacitados\nBaños públicos\nCajeros automáticos");
        update_post_meta($page_id, 'estacion_oeste_conexiones', "Metro GTT\nAutobuses urbanos\nTaxis\nConexión aeroporto");
        update_post_meta($page_id, 'estacion_oeste_contacto', 'Tel: +39 011 665432 • Email: info@torino.stazione.it');
        update_post_meta($page_id, 'estacion_oeste_image_1', get_template_directory_uri() . '/assets/images/lake-como.jpg');
        update_post_meta($page_id, 'estacion_oeste_image_2', get_template_directory_uri() . '/assets/images/milan-cathedral.jpg');
        update_post_meta($page_id, 'estacion_oeste_image_3', get_template_directory_uri() . '/assets/images/colosseum-bg.jpg');

        return $page_id;
    }

    return false;
}

// Auto-importar contenido si no existe
function railclick_auto_setup_estaciones_content() {
    if (!get_option('railclick_estaciones_content_imported')) {
        $page_id = railclick_setup_estaciones_content();
        if ($page_id) {
            update_option('railclick_estaciones_content_imported', true);
            update_option('railclick_estaciones_page_id', $page_id);
        }
    }
}

// Ejecutar cuando se activa el tema
add_action('after_switch_theme', 'railclick_auto_setup_estaciones_content');

// También ejecutar en admin_init para asegurar la importación
add_action('admin_init', 'railclick_auto_setup_estaciones_content');

// Reset para desarrollo (remover en producción)
function railclick_reset_estaciones_import() {
    if (isset($_GET['reset_estaciones_import']) && current_user_can('manage_options')) {
        delete_option('railclick_estaciones_content_imported');
        wp_redirect(admin_url());
        exit;
    }
}
add_action('admin_init', 'railclick_reset_estaciones_import');