<?php
// Script de verificación del sistema de metaboxes
require_once('wp-load.php');

if (!current_user_can('manage_options')) {
    die('No tienes permisos para ejecutar este script.');
}

echo '<h1>🔍 Verificación del Sistema de Metaboxes</h1>';

// Buscar páginas con templates específicos
$templates_info = [
    'template-rutas-tren.php' => ['nombre' => 'Rutas de Tren', 'metaboxes' => 8],
    'template-tipos-tren.php' => ['nombre' => 'Tipos de Tren', 'metaboxes' => 5],
    'template-estaciones.php' => ['nombre' => 'Estaciones', 'metaboxes' => 6]
];

echo '<h2>📄 Páginas con Templates Específicos:</h2>';

foreach ($templates_info as $template => $info) {
    $pages = get_posts([
        'post_type' => 'page',
        'meta_query' => [
            [
                'key' => '_wp_page_template',
                'value' => $template
            ]
        ],
        'posts_per_page' => 1
    ]);
    
    if (!empty($pages)) {
        $page = $pages[0];
        echo '<div style="border: 1px solid #ccc; padding: 15px; margin: 10px 0; border-radius: 5px;">';
        echo '<h3 style="color: green;">✅ ' . $info['nombre'] . '</h3>';
        echo '<p><strong>Página:</strong> ' . $page->post_title . ' (ID: ' . $page->ID . ')</p>';
        echo '<p><strong>Template:</strong> ' . $template . '</p>';
        echo '<p><strong>Metaboxes que debería mostrar:</strong> ' . $info['metaboxes'] . '</p>';
        echo '<p><strong>📝 <a href="' . admin_url('post.php?post=' . $page->ID . '&action=edit') . '" target="_blank">Editar esta página</a></strong> - Solo deberías ver ' . $info['metaboxes'] . ' metaboxes</p>';
        echo '</div>';
    } else {
        echo '<div style="border: 1px solid #ffcc00; padding: 15px; margin: 10px 0; border-radius: 5px; background: #fff9e6;">';
        echo '<h3 style="color: orange;">⚠️ ' . $info['nombre'] . '</h3>';
        echo '<p>No se encontró ninguna página con este template.</p>';
        echo '</div>';
    }
}

echo '<h2>🧪 Test Manual:</h2>';
echo '<ol>';
echo '<li><strong>Ve a una página con template de Rutas:</strong> Solo deberías ver 8 metaboxes relacionados con rutas</li>';
echo '<li><strong>Ve a una página con template de Tipos:</strong> Solo deberías ver 5 metaboxes relacionados con tipos de tren</li>';
echo '<li><strong>Ve a una página con template de Estaciones:</strong> Solo deberías ver 6 metaboxes relacionados con estaciones</li>';
echo '<li><strong>Ve a una página normal (landing):</strong> Deberías ver 11 metaboxes del landing page</li>';
echo '</ol>';

echo '<h2>⚙️ Cómo Funciona el Sistema:</h2>';
echo '<ul>';
echo '<li>📋 <strong>Detección automática:</strong> El sistema detecta el template de cada página</li>';
echo '<li>🎯 <strong>Registro específico:</strong> Solo registra los metaboxes necesarios para ese template</li>';
echo '<li>🔄 <strong>Actualización:</strong> Si cambias el template, guarda la página para ver los nuevos metaboxes</li>';
echo '</ul>';

echo '<hr>';
echo '<p><a href="' . admin_url() . '">← Volver al admin de WordPress</a></p>';
?>