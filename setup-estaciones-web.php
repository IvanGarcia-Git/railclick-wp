<?php
// Script web para ejecutar setup de estaciones
require_once('wp-load.php');

// Solo permitir a administradores
if (!current_user_can('manage_options')) {
    die('No tienes permisos para ejecutar este script.');
}

// Incluir función de setup
require_once(get_template_directory() . '/setup-estaciones-content.php');

echo '<h1>🚉 Setup de Estaciones</h1>';

// Verificar si ya existe
$existing = get_option('railclick_estaciones_content_imported');
if ($existing) {
    echo '<p style="color: orange;">⚠️ Los datos ya fueron importados anteriormente.</p>';
    
    // Mostrar opción para reimportar
    if (isset($_GET['force'])) {
        delete_option('railclick_estaciones_content_imported');
        echo '<p style="color: blue;">🔄 Forzando reimportación...</p>';
    } else {
        echo '<p><a href="?force=1">🔄 Forzar reimportación</a></p>';
    }
}

if (!$existing || isset($_GET['force'])) {
    // Ejecutar función de setup
    $page_id = railclick_setup_estaciones_content();

    if ($page_id) {
        echo '<p style="color: green;">✅ Página de Estaciones creada exitosamente con ID: ' . $page_id . '</p>';
        echo '<p>📄 URL: <a href="' . get_permalink($page_id) . '" target="_blank">' . get_permalink($page_id) . '</a></p>';
        echo '<p>🔧 Template asignado: template-estaciones.php</p>';
        echo '<p>📊 Datos de ejemplo insertados para 5 estaciones</p>';
        
        // Marcar como importado
        update_option('railclick_estaciones_content_imported', true);
        update_option('railclick_estaciones_page_id', $page_id);
        
        echo '<p style="color: green; font-weight: bold;">✅ Setup completado!</p>';
    } else {
        echo '<p style="color: red;">❌ Error al crear la página de estaciones</p>';
    }
}

// Mostrar información de la página
$posts = get_posts(array(
    'post_type' => 'page',
    'meta_query' => array(
        array(
            'key' => '_wp_page_template',
            'value' => 'template-estaciones.php'
        )
    ),
    'posts_per_page' => 1
));

if (!empty($posts)) {
    $page = $posts[0];
    echo '<h2>📋 Información de la página:</h2>';
    echo '<ul>';
    echo '<li><strong>ID:</strong> ' . $page->ID . '</li>';
    echo '<li><strong>Título:</strong> ' . $page->post_title . '</li>';
    echo '<li><strong>Estado:</strong> ' . $page->post_status . '</li>';
    echo '<li><strong>Template:</strong> ' . get_post_meta($page->ID, '_wp_page_template', true) . '</li>';
    echo '<li><strong>URL:</strong> <a href="' . get_permalink($page->ID) . '" target="_blank">' . get_permalink($page->ID) . '</a></li>';
    echo '</ul>';
    
    // Verificar algunos metafields
    echo '<h3>🎨 Contenido Hero:</h3>';
    echo '<ul>';
    echo '<li><strong>Título:</strong> ' . esc_html(get_post_meta($page->ID, 'estaciones_hero_title', true)) . '</li>';
    echo '<li><strong>Subtítulo:</strong> ' . esc_html(get_post_meta($page->ID, 'estaciones_hero_subtitle', true)) . '</li>';
    echo '<li><strong>Descripción:</strong> ' . esc_html(get_post_meta($page->ID, 'estaciones_hero_description', true)) . '</li>';
    echo '</ul>';
    
    echo '<h3>🚉 Muestra de Estaciones:</h3>';
    $estaciones = ['central', 'norte', 'sur', 'este', 'oeste'];
    foreach ($estaciones as $estacion) {
        $name = get_post_meta($page->ID, "estacion_{$estacion}_name", true);
        $tipo = get_post_meta($page->ID, "estacion_{$estacion}_tipo", true);
        if (!empty($name)) {
            echo '<p><strong>' . ucfirst($estacion) . ':</strong> ' . esc_html($name) . ' (' . esc_html($tipo) . ')</p>';
        }
    }
    
    echo '<h3>🔗 Enlaces útiles:</h3>';
    echo '<ul>';
    echo '<li><a href="' . admin_url('post.php?post=' . $page->ID . '&action=edit') . '" target="_blank">✏️ Editar página en WordPress Admin</a></li>';
    echo '<li><a href="' . get_permalink($page->ID) . '" target="_blank">👁️ Ver página en frontend</a></li>';
    echo '</ul>';
} else {
    echo '<p style="color: red;">❌ No se encontró ninguna página con el template estaciones.</p>';
}

echo '<br><hr><p><a href="' . admin_url() . '">← Volver al admin de WordPress</a></p>';
?>