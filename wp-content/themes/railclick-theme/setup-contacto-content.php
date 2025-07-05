<?php
/**
 * Setup Content for Contacto Page
 * 
 * This file contains the content setup for the Contacto page template.
 * It includes metabox field definitions and sample content.
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Contacto Page Content Setup
 */
function setup_contacto_page_content() {
    
    // Check if page already exists
    $existing_page = get_page_by_title('Contacto');
    if ($existing_page) {
        return $existing_page->ID;
    }
    
    // Create the page
    $page_data = array(
        'post_title'    => 'Contacto',
        'post_content'  => '',
        'post_status'   => 'publish',
        'post_type'     => 'page',
        'post_name'     => 'contacto',
        'meta_input'    => array(
            '_wp_page_template' => 'template-contacto.php'
        )
    );
    
    $page_id = wp_insert_post($page_data);
    
    if ($page_id) {
        // Add meta fields with sample content
        $meta_fields = array(
            // Hero Section
            'contacto_hero_bg_image' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
            'contacto_hero_subtitle' => 'Estamos aquí para ayudarte',
            'contacto_hero_title' => 'Contacta con Nosotros',
            'contacto_hero_description' => 'Nuestro equipo está disponible para resolver tus dudas y brindarte la mejor experiencia de viaje en tren.',
            
            // Contact Information
            'contacto_phone' => '+34 900 123 456',
            'contacto_email' => 'info@railclick.com',
            'contacto_address' => 'Calle Mayor 123, 28001 Madrid, España',
            
            // Contact Form Section
            'contacto_form_title' => 'Envíanos un Mensaje',
            'contacto_form_description' => 'Completa el formulario y nos pondremos en contacto contigo lo antes posible.',
            
            // Additional Information
            'contacto_hours' => 'Lunes a Viernes: 9:00 - 18:00<br>Sábados: 10:00 - 14:00<br>Domingos: Cerrado',
            'contacto_response_time' => 'Respondemos en menos de 24 horas',
            'contacto_support_info' => 'Soporte especializado en reservas y viajes en tren por toda España',
            
            // FAQs
            'contacto_faqs' => "¿Cómo puedo modificar mi reserva?|Puedes modificar tu reserva hasta 2 horas antes de la salida del tren a través de nuestra web o llamando al teléfono de atención al cliente.
¿Qué documentos necesito para viajar?|Es necesario presentar el DNI o pasaporte junto con tu billete de tren al subir al vagón.
¿Puedo cancelar mi billete?|Sí, las cancelaciones están permitidas hasta 1 hora antes de la salida, aplicándose las condiciones de cancelación según la tarifa contratada.
¿Hay descuentos para grupos?|Ofrecemos descuentos especiales para grupos de 10 o más personas. Contacta con nosotros para más información.",
            
            // CTA Section
            'contacto_cta_title' => '¿Necesitas Ayuda Inmediata?',
            'contacto_cta_description' => 'Nuestro equipo de atención al cliente está disponible para ayudarte con cualquier consulta.',
            'contacto_cta_button_1_text' => 'Llamar Ahora',
            'contacto_cta_button_1_link' => 'tel:+34900123456',
            'contacto_cta_button_2_text' => 'Chat en Vivo',
            'contacto_cta_button_2_link' => '#chat',
        );
        
        foreach ($meta_fields as $key => $value) {
            update_post_meta($page_id, $key, $value);
        }
        
        return $page_id;
    }
    
    return false;
}

/**
 * Register Contacto Page Metaboxes
 */
function register_contacto_page_metaboxes() {
    // Only show metaboxes for pages using the Contacto template
    global $post;
    if (!$post) return;
    
    $template = get_post_meta($post->ID, '_wp_page_template', true);
    if ($template !== 'template-contacto.php') return;
    
    add_meta_box(
        'contacto_hero_meta',
        'Contacto - Sección Hero',
        'contacto_hero_meta_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'contacto_contact_info_meta',
        'Contacto - Información de Contacto',
        'contacto_contact_info_meta_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'contacto_form_meta',
        'Contacto - Sección Formulario',
        'contacto_form_meta_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'contacto_additional_info_meta',
        'Contacto - Información Adicional',
        'contacto_additional_info_meta_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'contacto_cta_meta',
        'Contacto - Sección CTA',
        'contacto_cta_meta_callback',
        'page',
        'normal',
        'high'
    );
}

/**
 * Hero Section Metabox Callback
 */
function contacto_hero_meta_callback($post) {
    wp_nonce_field(basename(__FILE__), 'contacto_hero_nonce');
    
    $hero_bg_image = get_post_meta($post->ID, 'contacto_hero_bg_image', true);
    $hero_subtitle = get_post_meta($post->ID, 'contacto_hero_subtitle', true);
    $hero_title = get_post_meta($post->ID, 'contacto_hero_title', true);
    $hero_description = get_post_meta($post->ID, 'contacto_hero_description', true);
    
    ?>
    <table class="form-table">
        <tr>
            <th><label for="contacto_hero_bg_image">Imagen de Fondo del Hero</label></th>
            <td>
                <input type="url" id="contacto_hero_bg_image" name="contacto_hero_bg_image" value="<?php echo esc_url($hero_bg_image); ?>" class="regular-text" />
                <input type="button" id="contacto_hero_bg_image_button" class="button" value="Seleccionar Imagen" />
                <br><small>Introduce una URL o selecciona una imagen de la biblioteca de medios.</small>
            </td>
        </tr>
        <tr>
            <th><label for="contacto_hero_subtitle">Subtítulo del Hero</label></th>
            <td><input type="text" id="contacto_hero_subtitle" name="contacto_hero_subtitle" value="<?php echo esc_attr($hero_subtitle); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="contacto_hero_title">Título del Hero</label></th>
            <td><input type="text" id="contacto_hero_title" name="contacto_hero_title" value="<?php echo esc_attr($hero_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="contacto_hero_description">Descripción del Hero</label></th>
            <td><textarea id="contacto_hero_description" name="contacto_hero_description" rows="3" class="large-text"><?php echo esc_textarea($hero_description); ?></textarea></td>
        </tr>
    </table>
    <?php
}

/**
 * Contact Information Metabox Callback
 */
function contacto_contact_info_meta_callback($post) {
    wp_nonce_field(basename(__FILE__), 'contacto_contact_info_nonce');
    
    $phone = get_post_meta($post->ID, 'contacto_phone', true);
    $email = get_post_meta($post->ID, 'contacto_email', true);
    $address = get_post_meta($post->ID, 'contacto_address', true);
    
    ?>
    <table class="form-table">
        <tr>
            <th><label for="contacto_phone">Teléfono</label></th>
            <td><input type="text" id="contacto_phone" name="contacto_phone" value="<?php echo esc_attr($phone); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="contacto_email">Email</label></th>
            <td><input type="email" id="contacto_email" name="contacto_email" value="<?php echo esc_attr($email); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="contacto_address">Dirección</label></th>
            <td><textarea id="contacto_address" name="contacto_address" rows="3" class="large-text"><?php echo esc_textarea($address); ?></textarea></td>
        </tr>
    </table>
    <?php
}

/**
 * Form Section Metabox Callback
 */
function contacto_form_meta_callback($post) {
    wp_nonce_field(basename(__FILE__), 'contacto_form_nonce');
    
    $form_title = get_post_meta($post->ID, 'contacto_form_title', true);
    $form_description = get_post_meta($post->ID, 'contacto_form_description', true);
    
    ?>
    <table class="form-table">
        <tr>
            <th><label for="contacto_form_title">Título del Formulario</label></th>
            <td><input type="text" id="contacto_form_title" name="contacto_form_title" value="<?php echo esc_attr($form_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="contacto_form_description">Descripción del Formulario</label></th>
            <td><textarea id="contacto_form_description" name="contacto_form_description" rows="3" class="large-text"><?php echo esc_textarea($form_description); ?></textarea></td>
        </tr>
    </table>
    <?php
}

/**
 * Additional Information Metabox Callback
 */
function contacto_additional_info_meta_callback($post) {
    wp_nonce_field(basename(__FILE__), 'contacto_additional_info_nonce');
    
    $hours = get_post_meta($post->ID, 'contacto_hours', true);
    $response_time = get_post_meta($post->ID, 'contacto_response_time', true);
    $support_info = get_post_meta($post->ID, 'contacto_support_info', true);
    $faqs = get_post_meta($post->ID, 'contacto_faqs', true);
    
    ?>
    <table class="form-table">
        <tr>
            <th><label for="contacto_hours">Horario de Atención</label></th>
            <td><textarea id="contacto_hours" name="contacto_hours" rows="3" class="large-text"><?php echo esc_textarea($hours); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="contacto_response_time">Tiempo de Respuesta</label></th>
            <td><input type="text" id="contacto_response_time" name="contacto_response_time" value="<?php echo esc_attr($response_time); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="contacto_support_info">Información de Soporte</label></th>
            <td><textarea id="contacto_support_info" name="contacto_support_info" rows="3" class="large-text"><?php echo esc_textarea($support_info); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="contacto_faqs">FAQs (Pregunta|Respuesta, una por línea)</label></th>
            <td><textarea id="contacto_faqs" name="contacto_faqs" rows="8" class="large-text"><?php echo esc_textarea($faqs); ?></textarea></td>
        </tr>
    </table>
    <?php
}

/**
 * CTA Section Metabox Callback
 */
function contacto_cta_meta_callback($post) {
    wp_nonce_field(basename(__FILE__), 'contacto_cta_nonce');
    
    $cta_title = get_post_meta($post->ID, 'contacto_cta_title', true);
    $cta_description = get_post_meta($post->ID, 'contacto_cta_description', true);
    $cta_button_1_text = get_post_meta($post->ID, 'contacto_cta_button_1_text', true);
    $cta_button_1_link = get_post_meta($post->ID, 'contacto_cta_button_1_link', true);
    $cta_button_2_text = get_post_meta($post->ID, 'contacto_cta_button_2_text', true);
    $cta_button_2_link = get_post_meta($post->ID, 'contacto_cta_button_2_link', true);
    
    ?>
    <table class="form-table">
        <tr>
            <th><label for="contacto_cta_title">Título CTA</label></th>
            <td><input type="text" id="contacto_cta_title" name="contacto_cta_title" value="<?php echo esc_attr($cta_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="contacto_cta_description">Descripción CTA</label></th>
            <td><textarea id="contacto_cta_description" name="contacto_cta_description" rows="3" class="large-text"><?php echo esc_textarea($cta_description); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="contacto_cta_button_1_text">Texto Botón 1</label></th>
            <td><input type="text" id="contacto_cta_button_1_text" name="contacto_cta_button_1_text" value="<?php echo esc_attr($cta_button_1_text); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="contacto_cta_button_1_link">Enlace Botón 1</label></th>
            <td><input type="text" id="contacto_cta_button_1_link" name="contacto_cta_button_1_link" value="<?php echo esc_attr($cta_button_1_link); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="contacto_cta_button_2_text">Texto Botón 2</label></th>
            <td><input type="text" id="contacto_cta_button_2_text" name="contacto_cta_button_2_text" value="<?php echo esc_attr($cta_button_2_text); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="contacto_cta_button_2_link">Enlace Botón 2</label></th>
            <td><input type="text" id="contacto_cta_button_2_link" name="contacto_cta_button_2_link" value="<?php echo esc_attr($cta_button_2_link); ?>" class="regular-text" /></td>
        </tr>
    </table>
    <?php
}

/**
 * Save Contacto Page Meta
 */
function save_contacto_page_meta($post_id) {
    // Verify nonce
    if (!isset($_POST['contacto_hero_nonce']) || !wp_verify_nonce($_POST['contacto_hero_nonce'], basename(__FILE__))) {
        return $post_id;
    }
    
    // Check if it's an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    
    // Check user permissions
    if (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }
    
    // Save all meta fields
    $meta_fields = array(
        'contacto_hero_bg_image',
        'contacto_hero_subtitle',
        'contacto_hero_title',
        'contacto_hero_description',
        'contacto_phone',
        'contacto_email',
        'contacto_address',
        'contacto_form_title',
        'contacto_form_description',
        'contacto_hours',
        'contacto_response_time',
        'contacto_support_info',
        'contacto_faqs',
        'contacto_cta_title',
        'contacto_cta_description',
        'contacto_cta_button_1_text',
        'contacto_cta_button_1_link',
        'contacto_cta_button_2_text',
        'contacto_cta_button_2_link'
    );
    
    foreach ($meta_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}

// Hook into WordPress
add_action('add_meta_boxes', 'register_contacto_page_metaboxes');
add_action('save_post', 'save_contacto_page_meta');

// Enqueue media uploader script for Contact page
function contacto_enqueue_media_uploader() {
    global $post;
    
    if ($post && get_post_meta($post->ID, '_wp_page_template', true) === 'template-contacto.php') {
        wp_enqueue_media();
        wp_enqueue_script('contacto-media-uploader', get_template_directory_uri() . '/assets/js/contacto-media-uploader.js', array('jquery'), '1.0.0', true);
    }
}
add_action('admin_enqueue_scripts', 'contacto_enqueue_media_uploader');

// Run setup if this file is accessed directly
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    // Include WordPress
    require_once(dirname(__FILE__) . '/../../../../wp-load.php');
    
    $page_id = setup_contacto_page_content();
    
    if ($page_id) {
        echo "Contacto page created successfully with ID: " . $page_id . "\n";
        echo "You can now assign the 'Contacto' template to this page.\n";
    } else {
        echo "Failed to create Contacto page or page already exists.\n";
    }
}
?>