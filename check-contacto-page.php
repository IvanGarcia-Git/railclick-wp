<?php
require_once('wp-load.php');

$page = get_page_by_title('Contacto');
if ($page) {
    echo "✅ Página 'Contacto' encontrada:\n";
    echo "ID: " . $page->ID . "\n";
    echo "Título: " . $page->post_title . "\n";
    echo "Slug: " . $page->post_name . "\n";
    echo "Estado: " . $page->post_status . "\n";
    echo "Template: " . get_post_meta($page->ID, '_wp_page_template', true) . "\n";
    echo "URL: " . get_permalink($page->ID) . "\n";
} else {
    echo "❌ Página 'Contacto' no encontrada\n";
}
?>