<?php
/**
 * Configuración de contenido para Template Tipos de Tren
 * Este archivo crea e inserta contenido de ejemplo para el template
 */

// Prevenir acceso directo
if (!defined('ABSPATH')) {
    exit;
}

// Función para crear contenido de ejemplo
function railclick_setup_tipos_content() {
    // Buscar si ya existe una página con el template
    $existing_page = get_posts(array(
        'post_type' => 'page',
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'template-tipos-tren.php'
            )
        ),
        'posts_per_page' => 1
    ));

    if (!empty($existing_page)) {
        $page_id = $existing_page[0]->ID;
    } else {
        // Crear nueva página
        $page_data = array(
            'post_title' => 'Tipos de Tren',
            'post_content' => 'Página generada automáticamente para mostrar los diferentes tipos de trenes disponibles.',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_author' => 1
        );
        
        $page_id = wp_insert_post($page_data);
        
        if ($page_id) {
            // Asignar template
            update_post_meta($page_id, '_wp_page_template', 'template-tipos-tren.php');
        }
    }

    if ($page_id) {
        // Configuración Hero Section
        update_post_meta($page_id, 'tipos_hero_subtitle', 'Descubre nuestras opciones');
        update_post_meta($page_id, 'tipos_hero_title', 'Tipos de Tren para Cada Viaje');
        update_post_meta($page_id, 'tipos_hero_description', 'Desde viajes regionales hasta experiencias de alta velocidad y panorámicas. Encuentra el tipo de tren perfecto para tu aventura por Europa.');
        update_post_meta($page_id, 'tipos_hero_bg_image', get_template_directory_uri() . '/assets/images/tipos-hero-bg.jpg');

        // TREN REGIONAL
        update_post_meta($page_id, 'tipo_regional_name', 'Tren Regional');
        update_post_meta($page_id, 'tipo_regional_description', 'Ideal para trayectos cortos y medios, conectando ciudades y pueblos con frecuencias regulares. Perfecto para explorar la cultura local y paisajes tradicionales.');
        update_post_meta($page_id, 'tipo_regional_capacity', '120-200');
        update_post_meta($page_id, 'tipo_regional_speed', '120 km/h');
        update_post_meta($page_id, 'tipo_regional_services', "Asientos cómodos\nWiFi gratuito\nAire acondicionado\nEspacio para equipaje\nAcceso para discapacitados\nServicio de bebidas");
        update_post_meta($page_id, 'tipo_regional_features', "Salidas frecuentes\nParadas múltiples\nPrecios económicos\nReserva flexible\nVistas del paisaje\nConexiones locales");
        update_post_meta($page_id, 'tipo_regional_price_from', '15');
        update_post_meta($page_id, 'tipo_regional_image_1', get_template_directory_uri() . '/assets/images/regional-exterior.jpg');
        update_post_meta($page_id, 'tipo_regional_image_2', get_template_directory_uri() . '/assets/images/regional-interior.jpg');
        update_post_meta($page_id, 'tipo_regional_image_3', get_template_directory_uri() . '/assets/images/regional-landscape.jpg');

        // TREN DE ALTA VELOCIDAD
        update_post_meta($page_id, 'tipo_alta_velocidad_name', 'Tren de Alta Velocidad');
        update_post_meta($page_id, 'tipo_alta_velocidad_description', 'La forma más rápida de viajar entre grandes ciudades europeas. Tecnología de vanguardia que combina velocidad, comodidad y puntualidad excepcional.');
        update_post_meta($page_id, 'tipo_alta_velocidad_capacity', '300-400');
        update_post_meta($page_id, 'tipo_alta_velocidad_speed', '320 km/h');
        update_post_meta($page_id, 'tipo_alta_velocidad_services', "Primera y segunda clase\nServicio de restauración\nWiFi de alta velocidad\nAsientos reclinables\nEnchufes individuales\nEntretenimiento a bordo\nServicio de conserjería");
        update_post_meta($page_id, 'tipo_alta_velocidad_features', "Máxima velocidad\nPuntualidad garantizada\nConfort premium\nSilencioso\nEcológico\nReserva obligatoria");
        update_post_meta($page_id, 'tipo_alta_velocidad_price_from', '45');
        update_post_meta($page_id, 'tipo_alta_velocidad_image_1', get_template_directory_uri() . '/assets/images/highspeed-exterior.jpg');
        update_post_meta($page_id, 'tipo_alta_velocidad_image_2', get_template_directory_uri() . '/assets/images/highspeed-interior.jpg');
        update_post_meta($page_id, 'tipo_alta_velocidad_image_3', get_template_directory_uri() . '/assets/images/highspeed-dining.jpg');

        // TREN NOCTURNO
        update_post_meta($page_id, 'tipo_nocturno_name', 'Tren Nocturno');
        update_post_meta($page_id, 'tipo_nocturno_description', 'Viaja mientras duermes en cómodas cabinas y literas. Una experiencia única que combina transporte y alojamiento para rutas de larga distancia.');
        update_post_meta($page_id, 'tipo_nocturno_capacity', '150-250');
        update_post_meta($page_id, 'tipo_nocturno_speed', '140 km/h');
        update_post_meta($page_id, 'tipo_nocturno_services', "Cabinas privadas\nLiteras compartidas\nDucha y aseos\nServicio de cena\nDesayuno incluido\nRopa de cama\nServicio de despertar");
        update_post_meta($page_id, 'tipo_nocturno_features', "Ahorro en hotel\nViaje nocturno\nCabinas privadas\nExperiencia única\nRutas largas\nConfort total");
        update_post_meta($page_id, 'tipo_nocturno_price_from', '65');
        update_post_meta($page_id, 'tipo_nocturno_image_1', get_template_directory_uri() . '/assets/images/night-exterior.jpg');
        update_post_meta($page_id, 'tipo_nocturno_image_2', get_template_directory_uri() . '/assets/images/night-cabin.jpg');
        update_post_meta($page_id, 'tipo_nocturno_image_3', get_template_directory_uri() . '/assets/images/night-dining.jpg');

        // TREN PANORÁMICO
        update_post_meta($page_id, 'tipo_panoramico_name', 'Tren Panorámico');
        update_post_meta($page_id, 'tipo_panoramico_description', 'Diseñado especialmente para disfrutar de los paisajes más espectaculares de Europa. Ventanas panorámicas y rutas escénicas únicas.');
        update_post_meta($page_id, 'tipo_panoramico_capacity', '80-120');
        update_post_meta($page_id, 'tipo_panoramico_speed', '100 km/h');
        update_post_meta($page_id, 'tipo_panoramico_services', "Ventanas panorámicas\nGuía turístico\nServicio gastronómico\nBar panorámico\nAudioguía\nFotografía profesional\nTerrazas abiertas");
        update_post_meta($page_id, 'tipo_panoramico_features', "Vistas únicas\nRutas escénicas\nExperiencia turística\nVentanas XXL\nParadas fotográficas\nLimitado");
        update_post_meta($page_id, 'tipo_panoramico_price_from', '85');
        update_post_meta($page_id, 'tipo_panoramico_image_1', get_template_directory_uri() . '/assets/images/panoramic-exterior.jpg');
        update_post_meta($page_id, 'tipo_panoramico_image_2', get_template_directory_uri() . '/assets/images/panoramic-interior.jpg');
        update_post_meta($page_id, 'tipo_panoramico_image_3', get_template_directory_uri() . '/assets/images/panoramic-view.jpg');
        
        return $page_id;
    }
    
    return false;
}

// Crear página de setup en el admin
function railclick_tipos_setup_admin_page() {
    add_theme_page(
        'Setup Tipos de Tren',
        'Setup Tipos de Tren',
        'manage_options',
        'setup-tipos-content',
        'railclick_tipos_setup_page_content'
    );
}
add_action('admin_menu', 'railclick_tipos_setup_admin_page');

function railclick_tipos_setup_page_content() {
    // Auto-ejecutar la importación al cargar esta página
    if (!get_option('railclick_tipos_content_imported')) {
        $page_id = railclick_setup_tipos_content();
        if ($page_id) {
            update_option('railclick_tipos_content_imported', true);
            echo '<div class="notice notice-success is-dismissible"><p>🎉 <strong>Contenido importado automáticamente!</strong> La página "Tipos de Tren" ha sido creada con contenido de ejemplo. <a href="' . get_edit_post_link($page_id) . '" class="button button-primary">Editar página</a> <a href="' . get_permalink($page_id) . '" class="button">Ver página</a></p></div>';
        }
    }
    
    if (isset($_POST['setup_tipos_content']) && wp_verify_nonce($_POST['setup_nonce'], 'setup_tipos_action')) {
        $page_id = railclick_setup_tipos_content();
        if ($page_id) {
            echo '<div class="notice notice-success"><p>✅ Contenido de tipos de tren actualizado exitosamente. <a href="' . get_edit_post_link($page_id) . '">Editar página</a> | <a href="' . get_permalink($page_id) . '">Ver página</a></p></div>';
        } else {
            echo '<div class="notice notice-error"><p>❌ Error al crear el contenido.</p></div>';
        }
    }
    ?>
    <div class="wrap">
        <h1>🚆 Setup - Template Tipos de Tren</h1>
        <p>Esta herramienta creará una página con contenido de ejemplo para el template "Tipos de Tren".</p>
        
        <?php 
        $imported = get_option('railclick_tipos_content_imported');
        if ($imported): 
            $existing_page = get_posts(array(
                'post_type' => 'page',
                'meta_query' => array(
                    array(
                        'key' => '_wp_page_template',
                        'value' => 'template-tipos-tren.php'
                    )
                ),
                'posts_per_page' => 1
            ));
            
            if (!empty($existing_page)):
                $page_id = $existing_page[0]->ID;
        ?>
        <div class="notice notice-info">
            <p>📄 <strong>Estado:</strong> El contenido ya ha sido importado. 
            <a href="<?php echo get_edit_post_link($page_id); ?>" class="button">Editar página</a> 
            <a href="<?php echo get_permalink($page_id); ?>" class="button">Ver página</a></p>
        </div>
        <?php 
            endif;
        endif; 
        ?>
        
        <div class="card">
            <h2>📋 Contenido que se creará:</h2>
            <ul>
                <li><strong>Hero Section:</strong> Título, subtítulo, descripción e imagen de fondo</li>
                <li><strong>Tren Regional:</strong> Información completa con imágenes y características</li>
                <li><strong>Tren de Alta Velocidad:</strong> Datos técnicos y servicios premium</li>
                <li><strong>Tren Nocturno:</strong> Detalles de cabinas y servicios nocturnos</li>
                <li><strong>Tren Panorámico:</strong> Información sobre experiencias escénicas</li>
            </ul>
        </div>

        <form method="post" action="">
            <?php wp_nonce_field('setup_tipos_action', 'setup_nonce'); ?>
            <table class="form-table">
                <tr>
                    <th scope="row"><?php echo $imported ? 'Actualizar contenido' : 'Crear contenido de ejemplo'; ?></th>
                    <td>
                        <input type="submit" name="setup_tipos_content" class="button button-primary button-large" value="<?php echo $imported ? '🔄 Actualizar Contenido' : '🚀 Crear Página con Contenido de Ejemplo'; ?>" />
                        <p class="description"><?php echo $imported ? 'Esto actualizará la página existente con los últimos datos de ejemplo.' : 'Esto creará una nueva página con datos de ejemplo.'; ?></p>
                    </td>
                </tr>
            </table>
        </form>

        <div class="card">
            <h3>📝 Instrucciones:</h3>
            <ol>
                <li>Haz clic en "Crear Página con Contenido de Ejemplo"</li>
                <li>Ve a <strong>Páginas → Todas las páginas</strong></li>
                <li>Busca "Tipos de Tren" y edítala</li>
                <li>Personaliza el contenido en los metaboxes correspondientes</li>
                <li>Sube imágenes propias para cada tipo de tren</li>
            </ol>
        </div>
    </div>
    <?php
}
?>