<?php

function railclick_enqueue_styles() {
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/style.css' );
    
    // Enqueue additional styles for Rutas de Tren template
    if (is_page_template('template-rutas-tren.php')) {
        wp_enqueue_style( 
            'rutas-animations-css', 
            get_template_directory_uri() . '/assets/css/rutas-animations.css', 
            array('main-css'), 
            '1.0.0' 
        );
    }
    
    // Enqueue additional styles for Tipos de Tren template
    if (is_page_template('template-tipos-tren.php')) {
        wp_enqueue_style( 
            'tipos-animations-css', 
            get_template_directory_uri() . '/assets/css/rutas-animations.css', 
            array('main-css'), 
            '1.0.0' 
        );
    }
    
    // Enqueue additional styles for Estaciones template
    if (is_page_template('template-estaciones.php')) {
        wp_enqueue_style( 
            'estaciones-animations-css', 
            get_template_directory_uri() . '/assets/css/rutas-animations.css', 
            array('main-css'), 
            '1.0.0' 
        );
    }
}
add_action( 'wp_enqueue_scripts', 'railclick_enqueue_styles' );

function railclick_enqueue_scripts() {
    // Enqueue scripts for Rutas de Tren template
    if (is_page_template('template-rutas-tren.php')) {
        wp_enqueue_script( 
            'rutas-filters', 
            get_template_directory_uri() . '/assets/js/rutas-filters.js', 
            array(), 
            '1.0.0', 
            true 
        );
        
        wp_enqueue_script( 
            'rutas-animations', 
            get_template_directory_uri() . '/assets/js/rutas-animations.js', 
            array('rutas-filters'), 
            '1.0.0', 
            true 
        );
    }
    
    // Enqueue scripts for Tipos de Tren template
    if (is_page_template('template-tipos-tren.php')) {
        wp_enqueue_script( 
            'tipos-animations', 
            get_template_directory_uri() . '/assets/js/rutas-animations.js', 
            array(), 
            '1.0.0', 
            true 
        );
    }
    
    // Enqueue scripts for Estaciones template
    if (is_page_template('template-estaciones.php')) {
        wp_enqueue_script( 
            'estaciones-animations', 
            get_template_directory_uri() . '/assets/js/rutas-animations.js', 
            array(), 
            '1.0.0', 
            true 
        );
    }
}
add_action( 'wp_enqueue_scripts', 'railclick_enqueue_scripts' );

function railclick_add_custom_meta_boxes() {
    add_meta_box(
        'railclick_hero_section_meta_box',
        __( 'Hero Section Content', 'railclick-theme' ),
        'railclick_render_hero_section_meta_box',
        'page',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'railclick_add_custom_meta_boxes' );

function railclick_add_popular_routes_meta_box() {
    add_meta_box(
        'railclick_popular_routes_meta_box',
        __( 'Popular Routes Section Content', 'railclick-theme' ),
        'railclick_render_popular_routes_meta_box',
        'page',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'railclick_add_popular_routes_meta_box' );

function railclick_render_popular_routes_meta_box( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'railclick_popular_routes_nonce' );

    $routes_subtitle = get_post_meta( $post->ID, 'routes_subtitle', true );
    $routes_title = get_post_meta( $post->ID, 'routes_title', true );
    $routes_description = get_post_meta( $post->ID, 'routes_description', true );

    $route_1_image = get_post_meta( $post->ID, 'route_1_image', true );
    $route_1_title = get_post_meta( $post->ID, 'route_1_title', true );
    $route_1_details = get_post_meta( $post->ID, 'route_1_details', true );
    $route_1_text = get_post_meta( $post->ID, 'route_1_text', true );
    $route_1_link = get_post_meta( $post->ID, 'route_1_link', true );

    $route_2_image = get_post_meta( $post->ID, 'route_2_image', true );
    $route_2_title = get_post_meta( $post->ID, 'route_2_title', true );
    $route_2_details = get_post_meta( $post->ID, 'route_2_details', true );
    $route_2_text = get_post_meta( $post->ID, 'route_2_text', true );
    $route_2_link = get_post_meta( $post->ID, 'route_2_link', true );

    $route_3_image = get_post_meta( $post->ID, 'route_3_image', true );
    $route_3_title = get_post_meta( $post->ID, 'route_3_title', true );
    $route_3_details = get_post_meta( $post->ID, 'route_3_details', true );
    $route_3_text = get_post_meta( $post->ID, 'route_3_text', true );
    $route_3_link = get_post_meta( $post->ID, 'route_3_link', true );

    $routes_more_info_button_text = get_post_meta( $post->ID, 'routes_more_info_button_text', true );
    $routes_more_info_button_link = get_post_meta( $post->ID, 'routes_more_info_button_link', true );

    ?>
    <table class="form-table">
        <tr>
            <th><label for="routes_subtitle">Subtitle</label></th>
            <td><input type="text" name="routes_subtitle" id="routes_subtitle" value="<?php echo esc_attr( $routes_subtitle ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="routes_title">Title</label></th>
            <td><textarea name="routes_title" id="routes_title" class="large-text"><?php echo esc_textarea( $routes_title ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="routes_description">Description</label></th>
            <td><textarea name="routes_description" id="routes_description" class="large-text"><?php echo esc_textarea( $routes_description ); ?></textarea></td>
        </tr>
    </table>

    <h3>Route 1</h3>
    <table class="form-table">
        <tr>
            <th><label for="route_1_image">Image</label></th>
            <td>
                <input type="text" name="route_1_image" id="route_1_image" value="<?php echo esc_attr( $route_1_image ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="route_1_title">Title</label></th>
            <td><input type="text" name="route_1_title" id="route_1_title" value="<?php echo esc_attr( $route_1_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="route_1_details">Details</label></th>
            <td><input type="text" name="route_1_details" id="route_1_details" value="<?php echo esc_attr( $route_1_details ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="route_1_text">Text</label></th>
            <td><textarea name="route_1_text" id="route_1_text" class="large-text"><?php echo esc_textarea( $route_1_text ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="route_1_link">Link</label></th>
            <td><input type="url" name="route_1_link" id="route_1_link" value="<?php echo esc_attr( $route_1_link ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>Route 2</h3>
    <table class="form-table">
        <tr>
            <th><label for="route_2_image">Image</label></th>
            <td>
                <input type="text" name="route_2_image" id="route_2_image" value="<?php echo esc_attr( $route_2_image ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="route_2_title">Title</label></th>
            <td><input type="text" name="route_2_title" id="route_2_title" value="<?php echo esc_attr( $route_2_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="route_2_details">Details</label></th>
            <td><input type="text" name="route_2_details" id="route_2_details" value="<?php echo esc_attr( $route_2_details ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="route_2_text">Text</label></th>
            <td><textarea name="route_2_text" id="route_2_text" class="large-text"><?php echo esc_textarea( $route_2_text ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="route_2_link">Link</label></th>
            <td><input type="url" name="route_2_link" id="route_2_link" value="<?php echo esc_attr( $route_2_link ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>Route 3</h3>
    <table class="form-table">
        <tr>
            <th><label for="route_3_image">Image</label></th>
            <td>
                <input type="text" name="route_3_image" id="route_3_image" value="<?php echo esc_attr( $route_3_image ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="route_3_title">Title</label></th>
            <td><input type="text" name="route_3_title" id="route_3_title" value="<?php echo esc_attr( $route_3_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="route_3_details">Details</label></th>
            <td><input type="text" name="route_3_details" id="route_3_details" value="<?php echo esc_attr( $route_3_details ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="route_3_text">Text</label></th>
            <td><textarea name="route_3_text" id="route_3_text" class="large-text"><?php echo esc_textarea( $route_3_text ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="route_3_link">Link</label></th>
            <td><input type="url" name="route_3_link" id="route_3_link" value="<?php echo esc_attr( $route_3_link ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>More Info Button</h3>
    <table class="form-table">
        <tr>
            <th><label for="routes_more_info_button_text">Button Text</label></th>
            <td><input type="text" name="routes_more_info_button_text" id="routes_more_info_button_text" value="<?php echo esc_attr( $routes_more_info_button_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="routes_more_info_button_link">Button Link</label></th>
            <td><input type="url" name="routes_more_info_button_link" id="routes_more_info_button_link" value="<?php echo esc_attr( $routes_more_info_button_link ); ?>" class="large-text" /></td>
        </tr>
    </table>
    <?php
}

function railclick_save_popular_routes_meta_box_data( $post_id ) {
    if ( !isset( $_POST['railclick_popular_routes_nonce'] ) || !wp_verify_nonce( $_POST['railclick_popular_routes_nonce'], basename( __FILE__ ) ) ) {
        return $post_id;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }

    if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    }

    $fields = [
        'routes_subtitle',
        'routes_title',
        'routes_description',
        'route_1_image',
        'route_1_title',
        'route_1_details',
        'route_1_text',
        'route_1_link',
        'route_2_image',
        'route_2_title',
        'route_2_details',
        'route_2_text',
        'route_2_link',
        'route_3_image',
        'route_3_title',
        'route_3_details',
        'route_3_text',
        'route_3_link',
        'routes_more_info_button_text',
        'routes_more_info_button_link',
    ];

    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'railclick_save_popular_routes_meta_box_data' );

function railclick_add_train_types_meta_box() {
    add_meta_box(
        'railclick_train_types_meta_box',
        __( 'Train Types Section Content', 'railclick-theme' ),
        'railclick_render_train_types_meta_box',
        'page',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'railclick_add_train_types_meta_box' );

function railclick_render_train_types_meta_box( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'railclick_train_types_nonce' );

    $train_types_subtitle = get_post_meta( $post->ID, 'train_types_subtitle', true );
    $train_types_title = get_post_meta( $post->ID, 'train_types_title', true );
    $train_types_description = get_post_meta( $post->ID, 'train_types_description', true );

    $train_type_1_icon = get_post_meta( $post->ID, 'train_type_1_icon', true );
    $train_type_1_title = get_post_meta( $post->ID, 'train_type_1_title', true );
    $train_type_1_speed = get_post_meta( $post->ID, 'train_type_1_speed', true );
    $train_type_1_description = get_post_meta( $post->ID, 'train_type_1_description', true );
    $train_type_1_feature_1 = get_post_meta( $post->ID, 'train_type_1_feature_1', true );
    $train_type_1_feature_2 = get_post_meta( $post->ID, 'train_type_1_feature_2', true );
    $train_type_1_feature_3 = get_post_meta( $post->ID, 'train_type_1_feature_3', true );
    $train_type_1_feature_4 = get_post_meta( $post->ID, 'train_type_1_feature_4', true );

    $train_type_2_icon = get_post_meta( $post->ID, 'train_type_2_icon', true );
    $train_type_2_title = get_post_meta( $post->ID, 'train_type_2_title', true );
    $train_type_2_speed = get_post_meta( $post->ID, 'train_type_2_speed', true );
    $train_type_2_description = get_post_meta( $post->ID, 'train_type_2_description', true );
    $train_type_2_feature_1 = get_post_meta( $post->ID, 'train_type_2_feature_1', true );
    $train_type_2_feature_2 = get_post_meta( $post->ID, 'train_type_2_feature_2', true );
    $train_type_2_feature_3 = get_post_meta( $post->ID, 'train_type_2_feature_3', true );
    $train_type_2_feature_4 = get_post_meta( $post->ID, 'train_type_2_feature_4', true );

    $train_type_3_icon = get_post_meta( $post->ID, 'train_type_3_icon', true );
    $train_type_3_title = get_post_meta( $post->ID, 'train_type_3_title', true );
    $train_type_3_speed = get_post_meta( $post->ID, 'train_type_3_speed', true );
    $train_type_3_description = get_post_meta( $post->ID, 'train_type_3_description', true );
    $train_type_3_feature_1 = get_post_meta( $post->ID, 'train_type_3_feature_1', true );
    $train_type_3_feature_2 = get_post_meta( $post->ID, 'train_type_3_feature_2', true );
    $train_type_3_feature_3 = get_post_meta( $post->ID, 'train_type_3_feature_3', true );
    $train_type_3_feature_4 = get_post_meta( $post->ID, 'train_type_3_feature_4', true );

    $train_types_compare_button_text = get_post_meta( $post->ID, 'train_types_compare_button_text', true );
    $train_types_compare_button_link = get_post_meta( $post->ID, 'train_types_compare_button_link', true );

    ?>
    <table class="form-table">
        <tr>
            <th><label for="train_types_subtitle">Subtitle</label></th>
            <td><input type="text" name="train_types_subtitle" id="train_types_subtitle" value="<?php echo esc_attr( $train_types_subtitle ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_types_title">Title</label></th>
            <td><textarea name="train_types_title" id="train_types_title" class="large-text"><?php echo esc_textarea( $train_types_title ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="train_types_description">Description</label></th>
            <td><textarea name="train_types_description" id="train_types_description" class="large-text"><?php echo esc_textarea( $train_types_description ); ?></textarea></td>
        </tr>
    </table>

    <h3>Train Type 1</h3>
    <table class="form-table">
        <tr>
            <th><label for="train_type_1_icon">Icon (SVG or Class)</label></th>
            <td><input type="text" name="train_type_1_icon" id="train_type_1_icon" value="<?php echo esc_attr( $train_type_1_icon ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_type_1_title">Title</label></th>
            <td><input type="text" name="train_type_1_title" id="train_type_1_title" value="<?php echo esc_attr( $train_type_1_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_type_1_speed">Speed</label></th>
            <td><input type="text" name="train_type_1_speed" id="train_type_1_speed" value="<?php echo esc_attr( $train_type_1_speed ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_type_1_description">Description</label></th>
            <td><textarea name="train_type_1_description" id="train_type_1_description" class="large-text"><?php echo esc_textarea( $train_type_1_description ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="train_type_1_feature_1">Feature 1</label></th>
            <td><input type="text" name="train_type_1_feature_1" id="train_type_1_feature_1" value="<?php echo esc_attr( $train_type_1_feature_1 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_type_1_feature_2">Feature 2</label></th>
            <td><input type="text" name="train_type_1_feature_2" id="train_type_1_feature_2" value="<?php echo esc_attr( $train_type_1_feature_2 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_type_1_feature_3">Feature 3</label></th>
            <td><input type="text" name="train_type_1_feature_3" id="train_type_1_feature_3" value="<?php echo esc_attr( $train_type_1_feature_3 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_type_1_feature_4">Feature 4</label></th>
            <td><input type="text" name="train_type_1_feature_4" id="train_type_1_feature_4" value="<?php echo esc_attr( $train_type_1_feature_4 ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>Train Type 2</h3>
    <table class="form-table">
        <tr>
            <th><label for="train_type_2_icon">Icon (SVG or Class)</label></th>
            <td><input type="text" name="train_type_2_icon" id="train_type_2_icon" value="<?php echo esc_attr( $train_type_2_icon ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_type_2_title">Title</label></th>
            <td><input type="text" name="train_type_2_title" id="train_type_2_title" value="<?php echo esc_attr( $train_type_2_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_type_2_speed">Speed</label></th>
            <td><input type="text" name="train_type_2_speed" id="train_type_2_speed" value="<?php echo esc_attr( $train_type_2_speed ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_type_2_description">Description</label></th>
            <td><textarea name="train_type_2_description" id="train_type_2_description" class="large-text"><?php echo esc_textarea( $train_type_2_description ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="train_type_2_feature_1">Feature 1</label></th>
            <td><input type="text" name="train_type_2_feature_1" id="train_type_2_feature_1" value="<?php echo esc_attr( $train_type_2_feature_1 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_type_2_feature_2">Feature 2</label></th>
            <td><input type="text" name="train_type_2_feature_2" id="train_type_2_feature_2" value="<?php echo esc_attr( $train_type_2_feature_2 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_type_2_feature_3">Feature 3</label></th>
            <td><input type="text" name="train_type_2_feature_3" id="train_type_2_feature_3" value="<?php echo esc_attr( $train_type_2_feature_3 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_type_2_feature_4">Feature 4</label></th>
            <td><input type="text" name="train_type_2_feature_4" id="train_type_2_feature_4" value="<?php echo esc_attr( $train_type_2_feature_4 ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>Train Type 3</h3>
    <table class="form-table">
        <tr>
            <th><label for="train_type_3_icon">Icon (SVG or Class)</label></th>
            <td><input type="text" name="train_type_3_icon" id="train_type_3_icon" value="<?php echo esc_attr( $train_type_3_icon ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_type_3_title">Title</label></th>
            <td><input type="text" name="train_type_3_title" id="train_type_3_title" value="<?php echo esc_attr( $train_type_3_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_type_3_speed">Speed</label></th>
            <td><input type="text" name="train_type_3_speed" id="train_type_3_speed" value="<?php echo esc_attr( $train_type_3_speed ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_type_3_description">Description</label></th>
            <td><textarea name="train_type_3_description" id="train_type_3_description" class="large-text"><?php echo esc_textarea( $train_type_3_description ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="train_type_3_feature_1">Feature 1</label></th>
            <td><input type="text" name="train_type_3_feature_1" id="train_type_3_feature_1" value="<?php echo esc_attr( $train_type_3_feature_1 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_type_3_feature_2">Feature 2</label></th>
            <td><input type="text" name="train_type_3_feature_2" id="train_type_3_feature_2" value="<?php echo esc_attr( $train_type_3_feature_2 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_type_3_feature_3">Feature 3</label></th>
            <td><input type="text" name="train_type_3_feature_3" id="train_type_3_feature_3" value="<?php echo esc_attr( $train_type_3_feature_3 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_type_3_feature_4">Feature 4</label></th>
            <td><input type="text" name="train_type_3_feature_4" id="train_type_3_feature_4" value="<?php echo esc_attr( $train_type_3_feature_4 ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>Compare Button</h3>
    <table class="form-table">
        <tr>
            <th><label for="train_types_compare_button_text">Button Text</label></th>
            <td><input type="text" name="train_types_compare_button_text" id="train_types_compare_button_text" value="<?php echo esc_attr( $train_types_compare_button_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="train_types_compare_button_link">Button Link</label></th>
            <td><input type="url" name="train_types_compare_button_link" id="train_types_compare_button_link" value="<?php echo esc_attr( $train_types_compare_button_link ); ?>" class="large-text" /></td>
        </tr>
    </table>
    <?php
}

function railclick_save_train_types_meta_box_data( $post_id ) {
    if ( !isset( $_POST['railclick_train_types_nonce'] ) || !wp_verify_nonce( $_POST['railclick_train_types_nonce'], basename( __FILE__ ) ) ) {
        return $post_id;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }

    if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    }

    $fields = [
        'train_types_subtitle',
        'train_types_title',
        'train_types_description',
        'train_type_1_icon',
        'train_type_1_title',
        'train_type_1_speed',
        'train_type_1_description',
        'train_type_1_feature_1',
        'train_type_1_feature_2',
        'train_type_1_feature_3',
        'train_type_1_feature_4',
        'train_type_2_icon',
        'train_type_2_title',
        'train_type_2_speed',
        'train_type_2_description',
        'train_type_2_feature_1',
        'train_type_2_feature_2',
        'train_type_2_feature_3',
        'train_type_2_feature_4',
        'train_type_3_icon',
        'train_type_3_title',
        'train_type_3_speed',
        'train_type_3_description',
        'train_type_3_feature_1',
        'train_type_3_feature_2',
        'train_type_3_feature_3',
        'train_type_3_feature_4',
        'train_types_compare_button_text',
        'train_types_compare_button_link',
    ];

    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'railclick_save_train_types_meta_box_data' );

function railclick_add_gallery_meta_box() {
    add_meta_box(
        'railclick_gallery_meta_box',
        __( 'Gallery Section Content', 'railclick-theme' ),
        'railclick_render_gallery_meta_box',
        'page',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'railclick_add_gallery_meta_box' );

function railclick_render_gallery_meta_box( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'railclick_gallery_nonce' );

    $gallery_subtitle = get_post_meta( $post->ID, 'gallery_subtitle', true );
    $gallery_title = get_post_meta( $post->ID, 'gallery_title', true );
    $gallery_description = get_post_meta( $post->ID, 'gallery_description', true );

    $gallery_image_1 = get_post_meta( $post->ID, 'gallery_image_1', true );
    $gallery_image_2 = get_post_meta( $post->ID, 'gallery_image_2', true );
    $gallery_image_3 = get_post_meta( $post->ID, 'gallery_image_3', true );
    $gallery_image_4 = get_post_meta( $post->ID, 'gallery_image_4', true );
    $gallery_image_5 = get_post_meta( $post->ID, 'gallery_image_5', true );
    $gallery_image_6 = get_post_meta( $post->ID, 'gallery_image_6', true );
    $gallery_image_7 = get_post_meta( $post->ID, 'gallery_image_7', true );

    $gallery_explore_button_text = get_post_meta( $post->ID, 'gallery_explore_button_text', true );
    $gallery_explore_button_link = get_post_meta( $post->ID, 'gallery_explore_button_link', true );

    ?>
    <table class="form-table">
        <tr>
            <th><label for="gallery_subtitle">Subtitle</label></th>
            <td><input type="text" name="gallery_subtitle" id="gallery_subtitle" value="<?php echo esc_attr( $gallery_subtitle ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="gallery_title">Title</label></th>
            <td><textarea name="gallery_title" id="gallery_title" class="large-text"><?php echo esc_textarea( $gallery_title ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="gallery_description">Description</label></th>
            <td><textarea name="gallery_description" id="gallery_description" class="large-text"><?php echo esc_textarea( $gallery_description ); ?></textarea></td>
        </tr>
    </table>

    <h3>Gallery Images</h3>
    <table class="form-table">
        <tr>
            <th><label for="gallery_image_1">Image 1</label></th>
            <td>
                <input type="text" name="gallery_image_1" id="gallery_image_1" value="<?php echo esc_attr( $gallery_image_1 ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="gallery_image_2">Image 2</label></th>
            <td>
                <input type="text" name="gallery_image_2" id="gallery_image_2" value="<?php echo esc_attr( $gallery_image_2 ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="gallery_image_3">Image 3</label></th>
            <td>
                <input type="text" name="gallery_image_3" id="gallery_image_3" value="<?php echo esc_attr( $gallery_image_3 ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="gallery_image_4">Image 4</label></th>
            <td>
                <input type="text" name="gallery_image_4" id="gallery_image_4" value="<?php echo esc_attr( $gallery_image_4 ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="gallery_image_5">Image 5</label></th>
            <td>
                <input type="text" name="gallery_image_5" id="gallery_image_5" value="<?php echo esc_attr( $gallery_image_5 ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="gallery_image_6">Image 6</label></th>
            <td>
                <input type="text" name="gallery_image_6" id="gallery_image_6" value="<?php echo esc_attr( $gallery_image_6 ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="gallery_image_7">Image 7</label></th>
            <td>
                <input type="text" name="gallery_image_7" id="gallery_image_7" value="<?php echo esc_attr( $gallery_image_7 ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
    </table>

    <h3>Explore Gallery Button</h3>
    <table class="form-table">
        <tr>
            <th><label for="gallery_explore_button_text">Button Text</label></th>
            <td><input type="text" name="gallery_explore_button_text" id="gallery_explore_button_text" value="<?php echo esc_attr( $gallery_explore_button_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="gallery_explore_button_link">Button Link</label></th>
            <td><input type="url" name="gallery_explore_button_link" id="gallery_explore_button_link" value="<?php echo esc_attr( $gallery_explore_button_link ); ?>" class="large-text" /></td>
        </tr>
    </table>
    <?php
}

function railclick_save_gallery_meta_box_data( $post_id ) {
    if ( !isset( $_POST['railclick_gallery_nonce'] ) || !wp_verify_nonce( $_POST['railclick_gallery_nonce'], basename( __FILE__ ) ) ) {
        return $post_id;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }

    if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    }

    $fields = [
        'gallery_subtitle',
        'gallery_title',
        'gallery_description',
        'gallery_image_1',
        'gallery_image_2',
        'gallery_image_3',
        'gallery_image_4',
        'gallery_image_5',
        'gallery_image_6',
        'gallery_image_7',
        'gallery_explore_button_text',
        'gallery_explore_button_link',
    ];

    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'railclick_save_gallery_meta_box_data' );

function railclick_add_main_train_stations_meta_box() {
    add_meta_box(
        'railclick_main_train_stations_meta_box',
        __( 'Main Train Stations Section Content', 'railclick-theme' ),
        'railclick_render_main_train_stations_meta_box',
        'page',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'railclick_add_main_train_stations_meta_box' );

function railclick_render_main_train_stations_meta_box( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'railclick_main_train_stations_nonce' );

    $stations_subtitle = get_post_meta( $post->ID, 'stations_subtitle', true );
    $stations_title = get_post_meta( $post->ID, 'stations_title', true );
    $stations_description = get_post_meta( $post->ID, 'stations_description', true );

    $station_1_image = get_post_meta( $post->ID, 'station_1_image', true );
    $station_1_title = get_post_meta( $post->ID, 'station_1_title', true );
    $station_1_subtitle = get_post_meta( $post->ID, 'station_1_subtitle', true );
    $station_1_description = get_post_meta( $post->ID, 'station_1_description', true );
    $station_1_service_1 = get_post_meta( $post->ID, 'station_1_service_1', true );
    $station_1_service_2 = get_post_meta( $post->ID, 'station_1_service_2', true );
    $station_1_service_3 = get_post_meta( $post->ID, 'station_1_service_3', true );
    $station_1_connection_1 = get_post_meta( $post->ID, 'station_1_connection_1', true );
    $station_1_connection_2 = get_post_meta( $post->ID, 'station_1_connection_2', true );
    $station_1_connection_3 = get_post_meta( $post->ID, 'station_1_connection_3', true );

    $station_2_image = get_post_meta( $post->ID, 'station_2_image', true );
    $station_2_title = get_post_meta( $post->ID, 'station_2_title', true );
    $station_2_subtitle = get_post_meta( $post->ID, 'station_2_subtitle', true );
    $station_2_description = get_post_meta( $post->ID, 'station_2_description', true );
    $station_2_service_1 = get_post_meta( $post->ID, 'station_2_service_1', true );
    $station_2_service_2 = get_post_meta( $post->ID, 'station_2_service_2', true );
    $station_2_service_3 = get_post_meta( $post->ID, 'station_2_service_3', true );
    $station_2_connection_1 = get_post_meta( $post->ID, 'station_2_connection_1', true );
    $station_2_connection_2 = get_post_meta( $post->ID, 'station_2_connection_2', true );
    $station_2_connection_3 = get_post_meta( $post->ID, 'station_2_connection_3', true );

    $station_3_image = get_post_meta( $post->ID, 'station_3_image', true );
    $station_3_title = get_post_meta( $post->ID, 'station_3_title', true );
    $station_3_subtitle = get_post_meta( $post->ID, 'station_3_subtitle', true );
    $station_3_description = get_post_meta( $post->ID, 'station_3_description', true );
    $station_3_service_1 = get_post_meta( $post->ID, 'station_3_service_1', true );
    $station_3_service_2 = get_post_meta( $post->ID, 'station_3_service_2', true );
    $station_3_service_3 = get_post_meta( $post->ID, 'station_3_service_3', true );
    $station_3_connection_1 = get_post_meta( $post->ID, 'station_3_connection_1', true );
    $station_3_connection_2 = get_post_meta( $post->ID, 'station_3_connection_2', true );
    $station_3_connection_3 = get_post_meta( $post->ID, 'station_3_connection_3', true );

    $station_4_image = get_post_meta( $post->ID, 'station_4_image', true );
    $station_4_title = get_post_meta( $post->ID, 'station_4_title', true );
    $station_4_subtitle = get_post_meta( $post->ID, 'station_4_subtitle', true );
    $station_4_description = get_post_meta( $post->ID, 'station_4_description', true );
    $station_4_service_1 = get_post_meta( $post->ID, 'station_4_service_1', true );
    $station_4_service_2 = get_post_meta( $post->ID, 'station_4_service_2', true );
    $station_4_service_3 = get_post_meta( $post->ID, 'station_4_service_3', true );
    $station_4_connection_1 = get_post_meta( $post->ID, 'station_4_connection_1', true );
    $station_4_connection_2 = get_post_meta( $post->ID, 'station_4_connection_2', true );
    $station_4_connection_3 = get_post_meta( $post->ID, 'station_4_connection_3', true );

    $stations_all_button_text = get_post_meta( $post->ID, 'stations_all_button_text', true );
    $stations_all_button_link = get_post_meta( $post->ID, 'stations_all_button_link', true );

    ?>
    <table class="form-table">
        <tr>
            <th><label for="stations_subtitle">Subtitle</label></th>
            <td><input type="text" name="stations_subtitle" id="stations_subtitle" value="<?php echo esc_attr( $stations_subtitle ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="stations_title">Title</label></th>
            <td><textarea name="stations_title" id="stations_title" class="large-text"><?php echo esc_textarea( $stations_title ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="stations_description">Description</label></th>
            <td><textarea name="stations_description" id="stations_description" class="large-text"><?php echo esc_textarea( $stations_description ); ?></textarea></td>
        </tr>
    </table>

    <h3>Station 1</h3>
    <table class="form-table">
        <tr>
            <th><label for="station_1_image">Image</label></th>
            <td>
                <input type="text" name="station_1_image" id="station_1_image" value="<?php echo esc_attr( $station_1_image ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="station_1_title">Title</label></th>
            <td><input type="text" name="station_1_title" id="station_1_title" value="<?php echo esc_attr( $station_1_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_1_subtitle">Subtitle</label></th>
            <td><input type="text" name="station_1_subtitle" id="station_1_subtitle" value="<?php echo esc_attr( $station_1_subtitle ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_1_description">Description</label></th>
            <td><textarea name="station_1_description" id="station_1_description" class="large-text"><?php echo esc_textarea( $station_1_description ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="station_1_service_1">Service 1</label></th>
            <td><input type="text" name="station_1_service_1" id="station_1_service_1" value="<?php echo esc_attr( $station_1_service_1 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_1_service_2">Service 2</label></th>
            <td><input type="text" name="station_1_service_2" id="station_1_service_2" value="<?php echo esc_attr( $station_1_service_2 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_1_service_3">Service 3</label></th>
            <td><input type="text" name="station_1_service_3" id="station_1_service_3" value="<?php echo esc_attr( $station_1_service_3 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_1_connection_1">Connection 1</label></th>
            <td><input type="text" name="station_1_connection_1" id="station_1_connection_1" value="<?php echo esc_attr( $station_1_connection_1 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_1_connection_2">Connection 2</label></th>
            <td><input type="text" name="station_1_connection_2" id="station_1_connection_2" value="<?php echo esc_attr( $station_1_connection_2 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_1_connection_3">Connection 3</label></th>
            <td><input type="text" name="station_1_connection_3" id="station_1_connection_3" value="<?php echo esc_attr( $station_1_connection_3 ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>Station 2</h3>
    <table class="form-table">
        <tr>
            <th><label for="station_2_image">Image</label></th>
            <td>
                <input type="text" name="station_2_image" id="station_2_image" value="<?php echo esc_attr( $station_2_image ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="station_2_title">Title</label></th>
            <td><input type="text" name="station_2_title" id="station_2_title" value="<?php echo esc_attr( $station_2_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_2_subtitle">Subtitle</label></th>
            <td><input type="text" name="station_2_subtitle" id="station_2_subtitle" value="<?php echo esc_attr( $station_2_subtitle ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_2_description">Description</label></th>
            <td><textarea name="station_2_description" id="station_2_description" class="large-text"><?php echo esc_textarea( $station_2_description ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="station_2_service_1">Service 1</label></th>
            <td><input type="text" name="station_2_service_1" id="station_2_service_1" value="<?php echo esc_attr( $station_2_service_1 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_2_service_2">Service 2</label></th>
            <td><input type="text" name="station_2_service_2" id="station_2_service_2" value="<?php echo esc_attr( $station_2_service_2 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_2_service_3">Service 3</label></th>
            <td><input type="text" name="station_2_service_3" id="station_2_service_3" value="<?php echo esc_attr( $station_2_service_3 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_2_connection_1">Connection 1</label></th>
            <td><input type="text" name="station_2_connection_1" id="station_2_connection_1" value="<?php echo esc_attr( $station_2_connection_1 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_2_connection_2">Connection 2</label></th>
            <td><input type="text" name="station_2_connection_2" id="station_2_connection_2" value="<?php echo esc_attr( $station_2_connection_2 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_2_connection_3">Connection 3</label></th>
            <td><input type="text" name="station_2_connection_3" id="station_2_connection_3" value="<?php echo esc_attr( $station_2_connection_3 ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>Station 3</h3>
    <table class="form-table">
        <tr>
            <th><label for="station_3_image">Image</label></th>
            <td>
                <input type="text" name="station_3_image" id="station_3_image" value="<?php echo esc_attr( $station_3_image ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="station_3_title">Title</label></th>
            <td><input type="text" name="station_3_title" id="station_3_title" value="<?php echo esc_attr( $station_3_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_3_subtitle">Subtitle</label></th>
            <td><input type="text" name="station_3_subtitle" id="station_3_subtitle" value="<?php echo esc_attr( $station_3_subtitle ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_3_description">Description</label></th>
            <td><textarea name="station_3_description" id="station_3_description" class="large-text"><?php echo esc_textarea( $station_3_description ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="station_3_service_1">Service 1</label></th>
            <td><input type="text" name="station_3_service_1" id="station_3_service_1" value="<?php echo esc_attr( $station_3_service_1 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_3_service_2">Service 2</label></th>
            <td><input type="text" name="station_3_service_2" id="station_3_service_2" value="<?php echo esc_attr( $station_3_service_2 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_3_service_3">Service 3</label></th>
            <td><input type="text" name="station_3_service_3" id="station_3_service_3" value="<?php echo esc_attr( $station_3_service_3 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_3_connection_1">Connection 1</label></th>
            <td><input type="text" name="station_3_connection_1" id="station_3_connection_1" value="<?php echo esc_attr( $station_3_connection_1 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_3_connection_2">Connection 2</label></th>
            <td><input type="text" name="station_3_connection_2" id="station_3_connection_2" value="<?php echo esc_attr( $station_3_connection_2 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_3_connection_3">Connection 3</label></th>
            <td><input type="text" name="station_3_connection_3" id="station_3_connection_3" value="<?php echo esc_attr( $station_3_connection_3 ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>Station 4</h3>
    <table class="form-table">
        <tr>
            <th><label for="station_4_image">Image</label></th>
            <td>
                <input type="text" name="station_4_image" id="station_4_image" value="<?php echo esc_attr( $station_4_image ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="station_4_title">Title</label></th>
            <td><input type="text" name="station_4_title" id="station_4_title" value="<?php echo esc_attr( $station_4_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_4_subtitle">Subtitle</label></th>
            <td><input type="text" name="station_4_subtitle" id="station_4_subtitle" value="<?php echo esc_attr( $station_4_subtitle ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_4_description">Description</label></th>
            <td><textarea name="station_4_description" id="station_4_description" class="large-text"><?php echo esc_textarea( $station_4_description ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="station_4_service_1">Service 1</label></th>
            <td><input type="text" name="station_4_service_1" id="station_4_service_1" value="<?php echo esc_attr( $station_4_service_1 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_4_service_2">Service 2</label></th>
            <td><input type="text" name="station_4_service_2" id="station_4_service_2" value="<?php echo esc_attr( $station_4_service_2 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_4_service_3">Service 3</label></th>
            <td><input type="text" name="station_4_service_3" id="station_4_service_3" value="<?php echo esc_attr( $station_4_service_3 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_4_connection_1">Connection 1</label></th>
            <td><input type="text" name="station_4_connection_1" id="station_4_connection_1" value="<?php echo esc_attr( $station_4_connection_1 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_4_connection_2">Connection 2</label></th>
            <td><input type="text" name="station_4_connection_2" id="station_4_connection_2" value="<?php echo esc_attr( $station_4_connection_2 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="station_4_connection_3">Connection 3</label></th>
            <td><input type="text" name="station_4_connection_3" id="station_4_connection_3" value="<?php echo esc_attr( $station_4_connection_3 ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>All Stations Button</h3>
    <table class="form-table">
        <tr>
            <th><label for="stations_all_button_text">Button Text</label></th>
            <td><input type="text" name="stations_all_button_text" id="stations_all_button_text" value="<?php echo esc_attr( $stations_all_button_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="stations_all_button_link">Button Link</label></th>
            <td><input type="url" name="stations_all_button_link" id="stations_all_button_link" value="<?php echo esc_attr( $stations_all_button_link ); ?>" class="large-text" /></td>
        </tr>
    </table>
    <?php
}

function railclick_save_main_train_stations_meta_box_data( $post_id ) {
    if ( !isset( $_POST['railclick_main_train_stations_nonce'] ) || !wp_verify_nonce( $_POST['railclick_main_train_stations_nonce'], basename( __FILE__ ) ) ) {
        return $post_id;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }

    if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    }

    $fields = [
        'stations_subtitle',
        'stations_title',
        'stations_description',
        'station_1_image',
        'station_1_title',
        'station_1_subtitle',
        'station_1_description',
        'station_1_service_1',
        'station_1_service_2',
        'station_1_service_3',
        'station_1_connection_1',
        'station_1_connection_2',
        'station_1_connection_3',
        'station_2_image',
        'station_2_title',
        'station_2_subtitle',
        'station_2_description',
        'station_2_service_1',
        'station_2_service_2',
        'station_2_service_3',
        'station_2_connection_1',
        'station_2_connection_2',
        'station_2_connection_3',
        'station_3_image',
        'station_3_title',
        'station_3_subtitle',
        'station_3_description',
        'station_3_service_1',
        'station_3_service_2',
        'station_3_service_3',
        'station_3_connection_1',
        'station_3_connection_2',
        'station_3_connection_3',
        'station_4_image',
        'station_4_title',
        'station_4_subtitle',
        'station_4_description',
        'station_4_service_1',
        'station_4_service_2',
        'station_4_service_3',
        'station_4_connection_1',
        'station_4_connection_2',
        'station_4_connection_3',
        'stations_all_button_text',
        'stations_all_button_link',
    ];

    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'railclick_save_main_train_stations_meta_box_data' );

function railclick_add_blog_meta_box() {
    add_meta_box(
        'railclick_blog_meta_box',
        __( 'Blog Section Content', 'railclick-theme' ),
        'railclick_render_blog_meta_box',
        'page',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'railclick_add_blog_meta_box' );

function railclick_render_blog_meta_box( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'railclick_blog_nonce' );

    $blog_subtitle = get_post_meta( $post->ID, 'blog_subtitle', true );
    $blog_title = get_post_meta( $post->ID, 'blog_title', true );
    $blog_description = get_post_meta( $post->ID, 'blog_description', true );

    $blog_post_1_image = get_post_meta( $post->ID, 'blog_post_1_image', true );
    $blog_post_1_date = get_post_meta( $post->ID, 'blog_post_1_date', true );
    $blog_post_1_title = get_post_meta( $post->ID, 'blog_post_1_title', true );
    $blog_post_1_category = get_post_meta( $post->ID, 'blog_post_1_category', true );
    $blog_post_1_excerpt = get_post_meta( $post->ID, 'blog_post_1_excerpt', true );
    $blog_post_1_link = get_post_meta( $post->ID, 'blog_post_1_link', true );

    $blog_post_2_image = get_post_meta( $post->ID, 'blog_post_2_image', true );
    $blog_post_2_date = get_post_meta( $post->ID, 'blog_post_2_date', true );
    $blog_post_2_title = get_post_meta( $post->ID, 'blog_post_2_title', true );
    $blog_post_2_category = get_post_meta( $post->ID, 'blog_post_2_category', true );
    $blog_post_2_excerpt = get_post_meta( $post->ID, 'blog_post_2_excerpt', true );
    $blog_post_2_link = get_post_meta( $post->ID, 'blog_post_2_link', true );

    $blog_post_3_image = get_post_meta( $post->ID, 'blog_post_3_image', true );
    $blog_post_3_date = get_post_meta( $post->ID, 'blog_post_3_date', true );
    $blog_post_3_title = get_post_meta( $post->ID, 'blog_post_3_title', true );
    $blog_post_3_category = get_post_meta( $post->ID, 'blog_post_3_category', true );
    $blog_post_3_excerpt = get_post_meta( $post->ID, 'blog_post_3_excerpt', true );
    $blog_post_3_link = get_post_meta( $post->ID, 'blog_post_3_link', true );

    $blog_all_articles_button_text = get_post_meta( $post->ID, 'blog_all_articles_button_text', true );
    $blog_all_articles_button_link = get_post_meta( $post->ID, 'blog_all_articles_button_link', true );

    ?>
    <table class="form-table">
        <tr>
            <th><label for="blog_subtitle">Subtitle</label></th>
            <td><input type="text" name="blog_subtitle" id="blog_subtitle" value="<?php echo esc_attr( $blog_subtitle ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="blog_title">Title</label></th>
            <td><textarea name="blog_title" id="blog_title" class="large-text"><?php echo esc_textarea( $blog_title ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="blog_description">Description</label></th>
            <td><textarea name="blog_description" id="blog_description" class="large-text"><?php echo esc_textarea( $blog_description ); ?></textarea></td>
        </tr>
    </table>

    <h3>Blog Post 1</h3>
    <table class="form-table">
        <tr>
            <th><label for="blog_post_1_image">Image</label></th>
            <td>
                <input type="text" name="blog_post_1_image" id="blog_post_1_image" value="<?php echo esc_attr( $blog_post_1_image ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="blog_post_1_date">Date</label></th>
            <td><input type="text" name="blog_post_1_date" id="blog_post_1_date" value="<?php echo esc_attr( $blog_post_1_date ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="blog_post_1_title">Title</label></th>
            <td><textarea name="blog_post_1_title" id="blog_post_1_title" class="large-text"><?php echo esc_textarea( $blog_post_1_title ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="blog_post_1_text">Text</label></th>
            <td><textarea name="blog_post_1_text" id="blog_post_1_text" class="large-text"><?php echo esc_textarea( $blog_post_1_text ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="blog_post_1_link">Link</label></th>
            <td><input type="url" name="blog_post_1_link" id="blog_post_1_link" value="<?php echo esc_attr( $blog_post_1_link ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>Blog Post 2</h3>
    <table class="form-table">
        <tr>
            <th><label for="blog_post_2_image">Image</label></th>
            <td>
                <input type="text" name="blog_post_2_image" id="blog_post_2_image" value="<?php echo esc_attr( $blog_post_2_image ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="blog_post_2_date">Date</label></th>
            <td><input type="text" name="blog_post_2_date" id="blog_post_2_date" value="<?php echo esc_attr( $blog_post_2_date ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="blog_post_2_title">Title</label></th>
            <td><textarea name="blog_post_2_title" id="blog_post_2_title" class="large-text"><?php echo esc_textarea( $blog_post_2_title ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="blog_post_2_text">Text</label></th>
            <td><textarea name="blog_post_2_text" id="blog_post_2_text" class="large-text"><?php echo esc_textarea( $blog_post_2_text ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="blog_post_2_link">Link</label></th>
            <td><input type="url" name="blog_post_2_link" id="blog_post_2_link" value="<?php echo esc_attr( $blog_post_2_link ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>Blog Post 3</h3>
    <table class="form-table">
        <tr>
            <th><label for="blog_post_3_image">Image</label></th>
            <td>
                <input type="text" name="blog_post_3_image" id="blog_post_3_image" value="<?php echo esc_attr( $blog_post_3_image ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="blog_post_3_date">Date</label></th>
            <td><input type="text" name="blog_post_3_date" id="blog_post_3_date" value="<?php echo esc_attr( $blog_post_3_date ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="blog_post_3_title">Title</label></th>
            <td><textarea name="blog_post_3_title" id="blog_post_3_title" class="large-text"><?php echo esc_textarea( $blog_post_3_title ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="blog_post_3_text">Text</label></th>
            <td><textarea name="blog_post_3_text" id="blog_post_3_text" class="large-text"><?php echo esc_textarea( $blog_post_3_text ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="blog_post_3_link">Link</label></th>
            <td><input type="url" name="blog_post_3_link" id="blog_post_3_link" value="<?php echo esc_attr( $blog_post_3_link ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>All Articles Button</h3>
    <table class="form-table">
        <tr>
            <th><label for="blog_all_articles_button_text">Button Text</label></th>
            <td><input type="text" name="blog_all_articles_button_text" id="blog_all_articles_button_text" value="<?php echo esc_attr( $blog_all_articles_button_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="blog_all_articles_button_link">Button Link</label></th>
            <td><input type="url" name="blog_all_articles_button_link" id="blog_all_articles_button_link" value="<?php echo esc_attr( $blog_all_articles_button_link ); ?>" class="large-text" /></td>
        </tr>
    </table>
    <?php
}

function railclick_save_blog_meta_box_data( $post_id ) {
    if ( !isset( $_POST['railclick_blog_nonce'] ) || !wp_verify_nonce( $_POST['railclick_blog_nonce'], basename( __FILE__ ) ) ) {
        return $post_id;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }

    if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    }

    $fields = [
        'blog_subtitle',
        'blog_title',
        'blog_description',
        'blog_post_1_image',
        'blog_post_1_date',
        'blog_post_1_title',
        'blog_post_1_category',
        'blog_post_1_excerpt',
        'blog_post_1_link',
        'blog_post_2_image',
        'blog_post_2_date',
        'blog_post_2_title',
        'blog_post_2_category',
        'blog_post_2_excerpt',
        'blog_post_2_link',
        'blog_post_3_image',
        'blog_post_3_date',
        'blog_post_3_title',
        'blog_post_3_category',
        'blog_post_3_excerpt',
        'blog_all_articles_button_text',
        'blog_all_articles_button_link',
    ];

    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'railclick_save_blog_meta_box_data' );

function railclick_add_why_travel_with_us_meta_box() {
    add_meta_box(
        'railclick_why_travel_with_us_meta_box',
        __( 'Why Travel With Us Section Content', 'railclick-theme' ),
        'railclick_render_why_travel_with_us_meta_box',
        'page',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'railclick_add_why_travel_with_us_meta_box' );

function railclick_render_why_travel_with_us_meta_box( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'railclick_why_travel_with_us_nonce' );

    $why_us_subtitle = get_post_meta( $post->ID, 'why_us_subtitle', true );
    $why_us_title = get_post_meta( $post->ID, 'why_us_title', true );

    $why_us_feature_1_icon = get_post_meta( $post->ID, 'why_us_feature_1_icon', true );
    $why_us_feature_1_title = get_post_meta( $post->ID, 'why_us_feature_1_title', true );
    $why_us_feature_1_description = get_post_meta( $post->ID, 'why_us_feature_1_description', true );

    $why_us_feature_2_icon = get_post_meta( $post->ID, 'why_us_feature_2_icon', true );
    $why_us_feature_2_title = get_post_meta( $post->ID, 'why_us_feature_2_title', true );
    $why_us_feature_2_description = get_post_meta( $post->ID, 'why_us_feature_2_description', true );

    $why_us_feature_3_icon = get_post_meta( $post->ID, 'why_us_feature_3_icon', true );
    $why_us_feature_3_title = get_post_meta( $post->ID, 'why_us_feature_3_title', true );
    $why_us_feature_3_description = get_post_meta( $post->ID, 'why_us_feature_3_description', true );

    $why_us_feature_4_icon = get_post_meta( $post->ID, 'why_us_feature_4_icon', true );
    $why_us_feature_4_title = get_post_meta( $post->ID, 'why_us_feature_4_title', true );
    $why_us_feature_4_description = get_post_meta( $post->ID, 'why_us_feature_4_description', true );

    ?>
    <table class="form-table">
        <tr>
            <th><label for="why_us_subtitle">Subtitle</label></th>
            <td><input type="text" name="why_us_subtitle" id="why_us_subtitle" value="<?php echo esc_attr( $why_us_subtitle ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="why_us_title">Title</label></th>
            <td><textarea name="why_us_title" id="why_us_title" class="large-text"><?php echo esc_textarea( $why_us_title ); ?></textarea></td>
        </tr>
    </table>

    <h3>Feature 1</h3>
    <table class="form-table">
        <tr>
            <th><label for="why_us_feature_1_icon">Icon (SVG or Class)</label></th>
            <td><input type="text" name="why_us_feature_1_icon" id="why_us_feature_1_icon" value="<?php echo esc_attr( $why_us_feature_1_icon ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="why_us_feature_1_title">Title</label></th>
            <td><input type="text" name="why_us_feature_1_title" id="why_us_feature_1_title" value="<?php echo esc_attr( $why_us_feature_1_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="why_us_feature_1_description">Description</label></th>
            <td><textarea name="why_us_feature_1_description" id="why_us_feature_1_description" class="large-text"><?php echo esc_textarea( $why_us_feature_1_description ); ?></textarea></td>
        </tr>
    </table>

    <h3>Feature 2</h3>
    <table class="form-table">
        <tr>
            <th><label for="why_us_feature_2_icon">Icon (SVG or Class)</label></th>
            <td><input type="text" name="why_us_feature_2_icon" id="why_us_feature_2_icon" value="<?php echo esc_attr( $why_us_feature_2_icon ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="why_us_feature_2_title">Title</label></th>
            <td><input type="text" name="why_us_feature_2_title" id="why_us_feature_2_title" value="<?php echo esc_attr( $why_us_feature_2_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="why_us_feature_2_description">Description</label></th>
            <td><textarea name="why_us_feature_2_description" id="why_us_feature_2_description" class="large-text"><?php echo esc_textarea( $why_us_feature_2_description ); ?></textarea></td>
        </tr>
    </table>

    <h3>Feature 3</h3>
    <table class="form-table">
        <tr>
            <th><label for="why_us_feature_3_icon">Icon (SVG or Class)</label></th>
            <td><input type="text" name="why_us_feature_3_icon" id="why_us_feature_3_icon" value="<?php echo esc_attr( $why_us_feature_3_icon ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="why_us_feature_3_title">Title</label></th>
            <td><input type="text" name="why_us_feature_3_title" id="why_us_feature_3_title" value="<?php echo esc_attr( $why_us_feature_3_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="why_us_feature_3_description">Description</label></th>
            <td><textarea name="why_us_feature_3_description" id="why_us_feature_3_description" class="large-text"><?php echo esc_textarea( $why_us_feature_3_description ); ?></textarea></td>
        </tr>
    </table>

    <h3>Feature 4</h3>
    <table class="form-table">
        <tr>
            <th><label for="why_us_feature_4_icon">Icon (SVG or Class)</label></th>
            <td><input type="text" name="why_us_feature_4_icon" id="why_us_feature_4_icon" value="<?php echo esc_attr( $why_us_feature_4_icon ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="why_us_feature_4_title">Title</label></th>
            <td><input type="text" name="why_us_feature_4_title" id="why_us_feature_4_title" value="<?php echo esc_attr( $why_us_feature_4_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="why_us_feature_4_description">Description</label></th>
            <td><textarea name="why_us_feature_4_description" id="why_us_feature_4_description" class="large-text"><?php echo esc_textarea( $why_us_feature_4_description ); ?></textarea></td>
        </tr>
    </table>
    <?php
}

function railclick_save_why_travel_with_us_meta_box_data( $post_id ) {
    if ( !isset( $_POST['railclick_why_travel_with_us_nonce'] ) || !wp_verify_nonce( $_POST['railclick_why_travel_with_us_nonce'], basename( __FILE__ ) ) ) {
        return $post_id;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }

    if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    }

    $fields = [
        'why_us_subtitle',
        'why_us_title',
        'why_us_feature_1_icon',
        'why_us_feature_1_title',
        'why_us_feature_1_description',
        'why_us_feature_2_icon',
        'why_us_feature_2_title',
        'why_us_feature_2_description',
        'why_us_feature_3_icon',
        'why_us_feature_3_title',
        'why_us_feature_3_description',
        'why_us_feature_4_icon',
        'why_us_feature_4_title',
        'why_us_feature_4_description',
    ];

    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'railclick_save_why_travel_with_us_meta_box_data' );

function railclick_add_reviews_meta_box() {
    add_meta_box(
        'railclick_reviews_meta_box',
        __( 'Reviews Section Content', 'railclick-theme' ),
        'railclick_render_reviews_meta_box',
        'page',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'railclick_add_reviews_meta_box' );

function railclick_render_reviews_meta_box( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'railclick_reviews_nonce' );

    $reviews_subtitle = get_post_meta( $post->ID, 'reviews_subtitle', true );
    $reviews_title = get_post_meta( $post->ID, 'reviews_title', true );

    $review_1_text = get_post_meta( $post->ID, 'review_1_text', true );
    $review_1_initials = get_post_meta( $post->ID, 'review_1_initials', true );
    $review_1_name = get_post_meta( $post->ID, 'review_1_name', true );

    $review_2_text = get_post_meta( $post->ID, 'review_2_text', true );
    $review_2_initials = get_post_meta( $post->ID, 'review_2_initials', true );
    $review_2_name = get_post_meta( $post->ID, 'review_2_name', true );

    $review_3_text = get_post_meta( $post->ID, 'review_3_text', true );
    $review_3_initials = get_post_meta( $post->ID, 'review_3_initials', true );
    $review_3_name = get_post_meta( $post->ID, 'review_3_name', true );

    $reviews_overall_rating = get_post_meta( $post->ID, 'reviews_overall_rating', true );
    $reviews_total_reviews = get_post_meta( $post->ID, 'reviews_total_reviews', true );

    ?>
    <table class="form-table">
        <tr>
            <th><label for="reviews_subtitle">Subtitle</label></th>
            <td><input type="text" name="reviews_subtitle" id="reviews_subtitle" value="<?php echo esc_attr( $reviews_subtitle ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="reviews_title">Title</label></th>
            <td><textarea name="reviews_title" id="reviews_title" class="large-text"><?php echo esc_textarea( $reviews_title ); ?></textarea></td>
        </tr>
    </table>

    <h3>Review 1</h3>
    <table class="form-table">
        <tr>
            <th><label for="review_1_text">Review Text</label></th>
            <td><textarea name="review_1_text" id="review_1_text" class="large-text"><?php echo esc_textarea( $review_1_text ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="review_1_initials">Author Initials</label></th>
            <td><input type="text" name="review_1_initials" id="review_1_initials" value="<?php echo esc_attr( $review_1_initials ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="review_1_name">Author Name</label></th>
            <td><input type="text" name="review_1_name" id="review_1_name" value="<?php echo esc_attr( $review_1_name ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>Review 2</h3>
    <table class="form-table">
        <tr>
            <th><label for="review_2_text">Review Text</label></th>
            <td><textarea name="review_2_text" id="review_2_text" class="large-text"><?php echo esc_textarea( $review_2_text ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="review_2_initials">Author Initials</label></th>
            <td><input type="text" name="review_2_initials" id="review_2_initials" value="<?php echo esc_attr( $review_2_initials ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="review_2_name">Author Name</label></th>
            <td><input type="text" name="review_2_name" id="review_2_name" value="<?php echo esc_attr( $review_2_name ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>Review 3</h3>
    <table class="form-table">
        <tr>
            <th><label for="review_3_text">Review Text</label></th>
            <td><textarea name="review_3_text" id="review_3_text" class="large-text"><?php echo esc_textarea( $review_3_text ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="review_3_initials">Author Initials</label></th>
            <td><input type="text" name="review_3_initials" id="review_3_initials" value="<?php echo esc_attr( $review_3_initials ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="review_3_name">Author Name</label></th>
            <td><input type="text" name="review_3_name" id="review_3_name" value="<?php echo esc_attr( $review_3_name ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>Overall Rating</h3>
    <table class="form-table">
        <tr>
            <th><label for="reviews_overall_rating">Overall Rating (e.g., 4.9/5)</label></th>
            <td><input type="text" name="reviews_overall_rating" id="reviews_overall_rating" value="<?php echo esc_attr( $reviews_overall_rating ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="reviews_total_reviews">Total Reviews (e.g., Based on 500+ reviews)</label></th>
            <td><input type="text" name="reviews_total_reviews" id="reviews_total_reviews" value="<?php echo esc_attr( $reviews_total_reviews ); ?>" class="large-text" /></td>
        </tr>
    </table>
    <?php
}

function railclick_save_reviews_meta_box_data( $post_id ) {
    if ( !isset( $_POST['railclick_reviews_nonce'] ) || !wp_verify_nonce( $_POST['railclick_reviews_nonce'], basename( __FILE__ ) ) ) {
        return $post_id;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }

    if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    }

    $fields = [
        'reviews_subtitle',
        'reviews_title',
        'review_1_text',
        'review_1_initials',
        'review_1_name',
        'review_1_location',
        'review_2_text',
        'review_2_initials',
        'review_2_name',
        'review_2_location',
        'review_3_text',
        'review_3_initials',
        'review_3_name',
        'reviews_overall_rating',
        'reviews_total_reviews',
    ];

    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'railclick_save_reviews_meta_box_data' );

function railclick_add_faq_meta_box() {
    add_meta_box(
        'railclick_faq_meta_box',
        __( 'FAQ Section Content', 'railclick-theme' ),
        'railclick_render_faq_meta_box',
        'page',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'railclick_add_faq_meta_box' );

function railclick_render_faq_meta_box( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'railclick_faq_nonce' );

    $faq_subtitle = get_post_meta( $post->ID, 'faq_subtitle', true );
    $faq_title = get_post_meta( $post->ID, 'faq_title', true );

    $faq_question_1 = get_post_meta( $post->ID, 'faq_question_1', true );
    $faq_answer_1 = get_post_meta( $post->ID, 'faq_answer_1', true );

    $faq_question_2 = get_post_meta( $post->ID, 'faq_question_2', true );
    $faq_answer_2 = get_post_meta( $post->ID, 'faq_answer_2', true );

    $faq_question_3 = get_post_meta( $post->ID, 'faq_question_3', true );
    $faq_answer_3 = get_post_meta( $post->ID, 'faq_answer_3', true );

    $faq_question_4 = get_post_meta( $post->ID, 'faq_question_4', true );
    $faq_answer_4 = get_post_meta( $post->ID, 'faq_answer_4', true );

    $faq_question_5 = get_post_meta( $post->ID, 'faq_question_5', true );
    $faq_answer_5 = get_post_meta( $post->ID, 'faq_answer_5', true );

    $faq_contact_title = get_post_meta( $post->ID, 'faq_contact_title', true );
    $faq_contact_description = get_post_meta( $post->ID, 'faq_contact_description', true );
    $faq_contact_button_text = get_post_meta( $post->ID, 'faq_contact_button_text', true );
    $faq_contact_button_link = get_post_meta( $post->ID, 'faq_contact_button_link', true );

    ?>
    <table class="form-table">
        <tr>
            <th><label for="faq_subtitle">Subtitle</label></th>
            <td><input type="text" name="faq_subtitle" id="faq_subtitle" value="<?php echo esc_attr( $faq_subtitle ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="faq_title">Title</label></th>
            <td><textarea name="faq_title" id="faq_title" class="large-text"><?php echo esc_textarea( $faq_title ); ?></textarea></td>
        </tr>
    </table>

    <h3>FAQ 1</h3>
    <table class="form-table">
        <tr>
            <th><label for="faq_question_1">Question</label></th>
            <td><input type="text" name="faq_question_1" id="faq_question_1" value="<?php echo esc_attr( $faq_question_1 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="faq_answer_1">Answer</label></th>
            <td><textarea name="faq_answer_1" id="faq_answer_1" class="large-text"><?php echo esc_textarea( $faq_answer_1 ); ?></textarea></td>
        </tr>
    </table>

    <h3>FAQ 2</h3>
    <table class="form-table">
        <tr>
            <th><label for="faq_question_2">Question</label></th>
            <td><input type="text" name="faq_question_2" id="faq_question_2" value="<?php echo esc_attr( $faq_question_2 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="faq_answer_2">Answer</label></th>
            <td><textarea name="faq_answer_2" id="faq_answer_2" class="large-text"><?php echo esc_textarea( $faq_answer_2 ); ?></textarea></td>
        </tr>
    </table>

    <h3>FAQ 3</h3>
    <table class="form-table">
        <tr>
            <th><label for="faq_question_3">Question</label></th>
            <td><input type="text" name="faq_question_3" id="faq_question_3" value="<?php echo esc_attr( $faq_question_3 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="faq_answer_3">Answer</label></th>
            <td><textarea name="faq_answer_3" id="faq_answer_3" class="large-text"><?php echo esc_textarea( $faq_answer_3 ); ?></textarea></td>
        </tr>
    </table>

    <h3>FAQ 4</h3>
    <table class="form-table">
        <tr>
            <th><label for="faq_question_4">Question</label></th>
            <td><input type="text" name="faq_question_4" id="faq_question_4" value="<?php echo esc_attr( $faq_question_4 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="faq_answer_4">Answer</label></th>
            <td><textarea name="faq_answer_4" id="faq_answer_4" class="large-text"><?php echo esc_textarea( $faq_answer_4 ); ?></textarea></td>
        </tr>
    </table>

    <h3>FAQ 5</h3>
    <table class="form-table">
        <tr>
            <th><label for="faq_question_5">Question</label></th>
            <td><input type="text" name="faq_question_5" id="faq_question_5" value="<?php echo esc_attr( $faq_question_5 ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="faq_answer_5">Answer</label></th>
            <td><textarea name="faq_answer_5" id="faq_answer_5" class="large-text"><?php echo esc_textarea( $faq_answer_5 ); ?></textarea></td>
        </tr>
    </table>

    <h3>Contact Card</h3>
    <table class="form-table">
        <tr>
            <th><label for="faq_contact_title">Title</label></th>
            <td><input type="text" name="faq_contact_title" id="faq_contact_title" value="<?php echo esc_attr( $faq_contact_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="faq_contact_description">Description</label></th>
            <td><textarea name="faq_contact_description" id="faq_contact_description" class="large-text"><?php echo esc_textarea( $faq_contact_description ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="faq_contact_button_text">Button Text</label></th>
            <td><input type="text" name="faq_contact_button_text" id="faq_contact_button_text" value="<?php echo esc_attr( $faq_contact_button_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="faq_contact_button_link">Button Link</label></th>
            <td><input type="url" name="faq_contact_button_link" id="faq_contact_button_link" value="<?php echo esc_attr( $faq_contact_button_link ); ?>" class="large-text" /></td>
        </tr>
    </table>
    <?php
}

function railclick_save_faq_meta_box_data( $post_id ) {
    if ( !isset( $_POST['railclick_faq_nonce'] ) || !wp_verify_nonce( $_POST['railclick_faq_nonce'], basename( __FILE__ ) ) ) {
        return $post_id;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }

    if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    }

    $fields = [
        'faq_subtitle',
        'faq_title',
        'faq_question_1',
        'faq_answer_1',
        'faq_question_2',
        'faq_answer_2',
        'faq_question_3',
        'faq_answer_3',
        'faq_question_4',
        'faq_answer_4',
        'faq_question_5',
        'faq_answer_5',
        'faq_contact_title',
        'faq_contact_description',
        'faq_contact_button_text',
        'faq_contact_button_link',
    ];

    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'railclick_save_faq_meta_box_data' );

function railclick_add_newsletter_meta_box() {
    add_meta_box(
        'railclick_newsletter_meta_box',
        __( 'Newsletter Section Content', 'railclick-theme' ),
        'railclick_render_newsletter_meta_box',
        'page',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'railclick_add_newsletter_meta_box' );

function railclick_render_newsletter_meta_box( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'railclick_newsletter_nonce' );

    $newsletter_bg_image = get_post_meta( $post->ID, 'newsletter_bg_image', true );
    $newsletter_subtitle = get_post_meta( $post->ID, 'newsletter_subtitle', true );
    $newsletter_title = get_post_meta( $post->ID, 'newsletter_title', true );
    $newsletter_button_text = get_post_meta( $post->ID, 'newsletter_button_text', true );

    ?>
    <table class="form-table">
        <tr>
            <th><label for="newsletter_bg_image">Background Image</label></th>
            <td>
                <input type="text" name="newsletter_bg_image" id="newsletter_bg_image" value="<?php echo esc_attr( $newsletter_bg_image ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="newsletter_subtitle">Subtitle</label></th>
            <td><input type="text" name="newsletter_subtitle" id="newsletter_subtitle" value="<?php echo esc_attr( $newsletter_subtitle ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="newsletter_title">Title</label></th>
            <td><textarea name="newsletter_title" id="newsletter_title" class="large-text"><?php echo esc_textarea( $newsletter_title ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="newsletter_button_text">Button Text</label></th>
            <td><input type="text" name="newsletter_button_text" id="newsletter_button_text" value="<?php echo esc_attr( $newsletter_button_text ); ?>" class="large-text" /></td>
        </tr>
    </table>
    <?php
}

function railclick_save_newsletter_meta_box_data( $post_id ) {
    if ( !isset( $_POST['railclick_newsletter_nonce'] ) || !wp_verify_nonce( $_POST['railclick_newsletter_nonce'], basename( __FILE__ ) ) ) {
        return $post_id;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }

    if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    }

    $fields = [
        'newsletter_bg_image',
        'newsletter_subtitle',
        'newsletter_title',
        'newsletter_button_text',
    ];

    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'railclick_save_newsletter_meta_box_data' );

function railclick_add_footer_meta_box() {
    add_meta_box(
        'railclick_footer_meta_box',
        __( 'Footer Content', 'railclick-theme' ),
        'railclick_render_footer_meta_box',
        'page',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'railclick_add_footer_meta_box' );

function railclick_render_footer_meta_box( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'railclick_footer_nonce' );

    $footer_logo_text = get_post_meta( $post->ID, 'footer_logo_text', true );
    $footer_description = get_post_meta( $post->ID, 'footer_description', true );

    $footer_routes_title = get_post_meta( $post->ID, 'footer_routes_title', true );
    $footer_route_1_text = get_post_meta( $post->ID, 'footer_route_1_text', true );
    $footer_route_1_link = get_post_meta( $post->ID, 'footer_route_1_link', true );
    $footer_route_2_text = get_post_meta( $post->ID, 'footer_route_2_text', true );
    $footer_route_2_link = get_post_meta( $post->ID, 'footer_route_2_link', true );
    $footer_route_3_text = get_post_meta( $post->ID, 'footer_route_3_text', true );
    $footer_route_3_link = get_post_meta( $post->ID, 'footer_route_3_link', true );
    $footer_all_routes_text = get_post_meta( $post->ID, 'footer_all_routes_text', true );
    $footer_all_routes_link = get_post_meta( $post->ID, 'footer_all_routes_link', true );

    $footer_train_types_title = get_post_meta( $post->ID, 'footer_train_types_title', true );
    $footer_train_type_1_text = get_post_meta( $post->ID, 'footer_train_type_1_text', true );
    $footer_train_type_1_link = get_post_meta( $post->ID, 'footer_train_type_1_link', true );
    $footer_train_type_2_text = get_post_meta( $post->ID, 'footer_train_type_2_text', true );
    $footer_train_type_2_link = get_post_meta( $post->ID, 'footer_train_type_2_link', true );
    $footer_train_type_3_text = get_post_meta( $post->ID, 'footer_train_type_3_text', true );
    $footer_train_type_3_link = get_post_meta( $post->ID, 'footer_train_type_3_link', true );
    $footer_regional_trains_text = get_post_meta( $post->ID, 'footer_regional_trains_text', true );
    $footer_regional_trains_link = get_post_meta( $post->ID, 'footer_regional_trains_link', true );

    $footer_support_title = get_post_meta( $post->ID, 'footer_support_title', true );
    $footer_support_contact_text = get_post_meta( $post->ID, 'footer_support_contact_text', true );
    $footer_support_contact_link = get_post_meta( $post->ID, 'footer_support_contact_link', true );
    $footer_support_faqs_text = get_post_meta( $post->ID, 'footer_support_faqs_text', true );
    $footer_support_faqs_link = get_post_meta( $post->ID, 'footer_support_faqs_link', true );
    $footer_support_travel_guide_text = get_post_meta( $post->ID, 'footer_support_travel_guide_text', true );
    $footer_support_travel_guide_link = get_post_meta( $post->ID, 'footer_support_travel_guide_link', true );
    $footer_support_booking_help_text = get_post_meta( $post->ID, 'footer_support_booking_help_text', true );
    $footer_support_booking_help_link = get_post_meta( $post->ID, 'footer_support_booking_help_link', true );

    $footer_legal_title = get_post_meta( $post->ID, 'footer_legal_title', true );
    $footer_legal_notice_text = get_post_meta( $post->ID, 'footer_legal_notice_text', true );
    $footer_legal_notice_link = get_post_meta( $post->ID, 'footer_legal_notice_link', true );
    $footer_privacy_policy_text = get_post_meta( $post->ID, 'footer_privacy_policy_text', true );
    $footer_privacy_policy_link = get_post_meta( $post->ID, 'footer_privacy_policy_link', true );
    $footer_terms_conditions_text = get_post_meta( $post->ID, 'footer_terms_conditions_text', true );
    $footer_terms_conditions_link = get_post_meta( $post->ID, 'footer_terms_conditions_link', true );

    $footer_email = get_post_meta( $post->ID, 'footer_email', true );
    $footer_copyright = get_post_meta( $post->ID, 'footer_copyright', true );

    ?>
    <table class="form-table">
        <tr>
            <th><label for="footer_logo_text">Logo Text</label></th>
            <td><input type="text" name="footer_logo_text" id="footer_logo_text" value="<?php echo esc_attr( $footer_logo_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_description">Description</label></th>
            <td><textarea name="footer_description" id="footer_description" class="large-text"><?php echo esc_textarea( $footer_description ); ?></textarea></td>
        </tr>
    </table>

    <h3>Popular Routes</h3>
    <table class="form-table">
        <tr>
            <th><label for="footer_routes_title">Title</label></th>
            <td><input type="text" name="footer_routes_title" id="footer_routes_title" value="<?php echo esc_attr( $footer_routes_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_route_1_text">Route 1 Text</label></th>
            <td><input type="text" name="footer_route_1_text" id="footer_route_1_text" value="<?php echo esc_attr( $footer_route_1_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_route_1_link">Route 1 Link</label></th>
            <td><input type="url" name="footer_route_1_link" id="footer_route_1_link" value="<?php echo esc_attr( $footer_route_1_link ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_route_2_text">Route 2 Text</label></th>
            <td><input type="text" name="footer_route_2_text" id="footer_route_2_text" value="<?php echo esc_attr( $footer_route_2_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_route_2_link">Route 2 Link</label></th>
            <td><input type="url" name="footer_route_2_link" id="footer_route_2_link" value="<?php echo esc_attr( $footer_route_2_link ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_route_3_text">Route 3 Text</label></th>
            <td><input type="text" name="footer_route_3_text" id="footer_route_3_text" value="<?php echo esc_attr( $footer_route_3_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_route_3_link">Route 3 Link</label></th>
            <td><input type="url" name="footer_route_3_link" id="footer_route_3_link" value="<?php echo esc_attr( $footer_route_3_link ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_all_routes_text">All Routes Text</label></th>
            <td><input type="text" name="footer_all_routes_text" id="footer_all_routes_text" value="<?php echo esc_attr( $footer_all_routes_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_all_routes_link">All Routes Link</label></th>
            <td><input type="url" name="footer_all_routes_link" id="footer_all_routes_link" value="<?php echo esc_attr( $footer_all_routes_link ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>Train Types</h3>
    <table class="form-table">
        <tr>
            <th><label for="footer_train_types_title">Title</label></th>
            <td><input type="text" name="footer_train_types_title" id="footer_train_types_title" value="<?php echo esc_attr( $footer_train_types_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_train_type_1_text">Train Type 1 Text</label></th>
            <td><input type="text" name="footer_train_type_1_text" id="footer_train_type_1_text" value="<?php echo esc_attr( $footer_train_type_1_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_train_type_1_link">Train Type 1 Link</label></th>
            <td><input type="url" name="footer_train_type_1_link" id="footer_train_type_1_link" value="<?php echo esc_attr( $footer_train_type_1_link ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_train_type_2_text">Train Type 2 Text</label></th>
            <td><input type="text" name="footer_train_type_2_text" id="footer_train_type_2_text" value="<?php echo esc_attr( $footer_train_type_2_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_train_type_2_link">Train Type 2 Link</label></th>
            <td><input type="url" name="footer_train_type_2_link" id="footer_train_type_2_link" value="<?php echo esc_attr( $footer_train_type_2_link ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_train_type_3_text">Train Type 3 Text</label></th>
            <td><input type="text" name="footer_train_type_3_text" id="footer_train_type_3_text" value="<?php echo esc_attr( $footer_train_type_3_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_train_type_3_link">Train Type 3 Link</label></th>
            <td><input type="url" name="footer_train_type_3_link" id="footer_train_type_3_link" value="<?php echo esc_attr( $footer_train_type_3_link ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_regional_trains_text">Regional Trains Text</label></th>
            <td><input type="text" name="footer_regional_trains_text" id="footer_regional_trains_text" value="<?php echo esc_attr( $footer_regional_trains_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_regional_trains_link">Regional Trains Link</label></th>
            <td><input type="url" name="footer_regional_trains_link" id="footer_regional_trains_link" value="<?php echo esc_attr( $footer_regional_trains_link ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>Support</h3>
    <table class="form-table">
        <tr>
            <th><label for="footer_support_title">Title</label></th>
            <td><input type="text" name="footer_support_title" id="footer_support_title" value="<?php echo esc_attr( $footer_support_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_support_contact_text">Contact Text</label></th>
            <td><input type="text" name="footer_support_contact_text" id="footer_support_contact_text" value="<?php echo esc_attr( $footer_support_contact_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_support_contact_link">Contact Link</label></th>
            <td><input type="url" name="footer_support_contact_link" id="footer_support_contact_link" value="<?php echo esc_attr( $footer_support_contact_link ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_support_faqs_text">FAQs Text</label></th>
            <td><input type="text" name="footer_support_faqs_text" id="footer_support_faqs_text" value="<?php echo esc_attr( $footer_support_faqs_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_support_faqs_link">FAQs Link</label></th>
            <td><input type="url" name="footer_support_faqs_link" id="footer_support_faqs_link" value="<?php echo esc_attr( $footer_support_faqs_link ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_support_travel_guide_text">Travel Guide Text</label></th>
            <td><input type="text" name="footer_support_travel_guide_text" id="footer_support_travel_guide_text" value="<?php echo esc_attr( $footer_support_travel_guide_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_support_travel_guide_link">Travel Guide Link</label></th>
            <td><input type="url" name="footer_support_travel_guide_link" id="footer_support_travel_guide_link" value="<?php echo esc_attr( $footer_support_travel_guide_link ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_support_booking_help_text">Booking Help Text</label></th>
            <td><input type="text" name="footer_support_booking_help_text" id="footer_support_booking_help_text" value="<?php echo esc_attr( $footer_support_booking_help_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_support_booking_help_link">Booking Help Link</label></th>
            <td><input type="url" name="footer_support_booking_help_link" id="footer_support_booking_help_link" value="<?php echo esc_attr( $footer_support_booking_help_link ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>Legal</h3>
    <table class="form-table">
        <tr>
            <th><label for="footer_legal_title">Title</label></th>
            <td><input type="text" name="footer_legal_title" id="footer_legal_title" value="<?php echo esc_attr( $footer_legal_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_legal_notice_text">Legal Notice Text</label></th>
            <td><input type="text" name="footer_legal_notice_text" id="footer_legal_notice_text" value="<?php echo esc_attr( $footer_legal_notice_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_legal_notice_link">Legal Notice Link</label></th>
            <td><input type="url" name="footer_legal_notice_link" id="footer_legal_notice_link" value="<?php echo esc_attr( $footer_legal_notice_link ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_privacy_policy_text">Privacy Policy Text</label></th>
            <td><input type="text" name="footer_privacy_policy_text" id="footer_privacy_policy_text" value="<?php echo esc_attr( $footer_privacy_policy_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_privacy_policy_link">Privacy Policy Link</label></th>
            <td><input type="url" name="footer_privacy_policy_link" id="footer_privacy_policy_link" value="<?php echo esc_attr( $footer_privacy_policy_link ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_terms_conditions_text">Terms & Conditions Text</label></th>
            <td><input type="text" name="footer_terms_conditions_text" id="footer_terms_conditions_text" value="<?php echo esc_attr( $footer_terms_conditions_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_terms_conditions_link">Terms & Conditions Link</label></th>
            <td><input type="url" name="footer_terms_conditions_link" id="footer_terms_conditions_link" value="<?php echo esc_attr( $footer_terms_conditions_link ); ?>" class="large-text" /></td>
        </tr>
    </table>

    <h3>Contact Info</h3>
    <table class="form-table">
        <tr>
            <th><label for="footer_email">Email</label></th>
            <td><input type="email" name="footer_email" id="footer_email" value="<?php echo esc_attr( $footer_email ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="footer_copyright">Copyright Text</label></th>
            <td><input type="text" name="footer_copyright" id="footer_copyright" value="<?php echo esc_attr( $footer_copyright ); ?>" class="large-text" /></td>
        </tr>
    </table>
    <?php
}

function railclick_save_footer_meta_box_data( $post_id ) {
    if ( !isset( $_POST['railclick_footer_nonce'] ) || !wp_verify_nonce( $_POST['railclick_footer_nonce'], basename( __FILE__ ) ) ) {
        return $post_id;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }

    if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    }

    $fields = [
        'footer_logo_text',
        'footer_description',
        'footer_routes_title',
        'footer_route_1_text',
        'footer_route_1_link',
        'footer_route_2_text',
        'footer_route_2_link',
        'footer_route_3_text',
        'footer_route_3_link',
        'footer_all_routes_text',
        'footer_all_routes_link',
        'footer_train_types_title',
        'footer_train_type_1_text',
        'footer_train_type_1_link',
        'footer_train_type_2_text',
        'footer_train_type_2_link',
        'footer_train_type_3_text',
        'footer_train_type_3_link',
        'footer_regional_trains_text',
        'footer_regional_trains_link',
        'footer_support_title',
        'footer_support_contact_text',
        'footer_support_contact_link',
        'footer_support_faqs_text',
        'footer_support_faqs_link',
        'footer_support_travel_guide_text',
        'footer_support_travel_guide_link',
        'footer_support_booking_help_text',
        'footer_support_booking_help_link',
        'footer_legal_title',
        'footer_legal_notice_text',
        'footer_legal_notice_link',
        'footer_privacy_policy_text',
        'footer_privacy_policy_link',
        'footer_terms_conditions_text',
        'footer_terms_conditions_link',
        'footer_email',
        'footer_copyright',
    ];

    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'railclick_save_footer_meta_box_data' );

function railclick_render_hero_section_meta_box( $post ) {
    // Nonce field to validate on save
    wp_nonce_field( basename( __FILE__ ), 'railclick_hero_section_nonce' );

    // Get current values
    $hero_bg_image = get_post_meta( $post->ID, 'hero_bg_image', true );
    $hero_subtitle = get_post_meta( $post->ID, 'hero_subtitle', true );
    $hero_title = get_post_meta( $post->ID, 'hero_title', true );
    $hero_description = get_post_meta( $post->ID, 'hero_description', true );
    $hero_award_image = get_post_meta( $post->ID, 'hero_award_image', true );
    $hero_award_text = get_post_meta( $post->ID, 'hero_award_text', true );
    $hero_rating_text = get_post_meta( $post->ID, 'hero_rating_text', true );

    ?>
    <table class="form-table">
        <tr>
            <th><label for="hero_bg_image">Hero Background Image</label></th>
            <td>
                <input type="text" name="hero_bg_image" id="hero_bg_image" value="<?php echo esc_attr( $hero_bg_image ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="hero_subtitle">Hero Subtitle</label></th>
            <td><input type="text" name="hero_subtitle" id="hero_subtitle" value="<?php echo esc_attr( $hero_subtitle ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="hero_title">Hero Title</label></th>
            <td><textarea name="hero_title" id="hero_title" class="large-text"><?php echo esc_textarea( $hero_title ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="hero_description">Hero Description</label></th>
            <td><textarea name="hero_description" id="hero_description" class="large-text"><?php echo esc_textarea( $hero_description ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="hero_award_image">Hero Award Image</label></th>
            <td>
                <input type="text" name="hero_award_image" id="hero_award_image" value="<?php echo esc_attr( $hero_award_image ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="hero_award_text">Hero Award Text</label></th>
            <td><input type="text" name="hero_award_text" id="hero_award_text" value="<?php echo esc_attr( $hero_award_text ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="hero_rating_text">Hero Rating Text</label></th>
            <td><input type="text" name="hero_rating_text" id="hero_rating_text" value="<?php echo esc_attr( $hero_rating_text ); ?>" class="large-text" /></td>
        </tr>
    </table>
    <?php
}

function railclick_save_hero_section_meta_box_data( $post_id ) {
    // Verify nonce
    if ( !isset( $_POST['railclick_hero_section_nonce'] ) || !wp_verify_nonce( $_POST['railclick_hero_section_nonce'], basename( __FILE__ ) ) ) {
        return $post_id;
    }

    // Check autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }

    // Check the user's permissions
    if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    }

    // Save fields
    $fields = [
        'hero_bg_image',
        'hero_subtitle',
        'hero_title',
        'hero_description',
        'hero_award_image',
        'hero_award_text',
        'hero_rating_text',
    ];

    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'railclick_save_hero_section_meta_box_data' );

// Enqueue media uploader script
function railclick_enqueue_media_uploader( $hook ) {
    // Only load on post edit screens
    if ( 'post.php' != $hook && 'post-new.php' != $hook ) {
        return;
    }
    
    // Only load for pages (not posts)
    global $post;
    if ( $post && $post->post_type !== 'page' ) {
        return;
    }
    
    // Enqueue WordPress media library
    if ( ! did_action( 'wp_enqueue_media' ) ) {
        wp_enqueue_media();
    }
    
    // Enqueue our custom media uploader script
    wp_enqueue_script( 
        'railclick-media-uploader', 
        get_template_directory_uri() . '/assets/js/media-uploader.js', 
        array( 'jquery', 'media-upload', 'thickbox' ), 
        '1.0.0', 
        true 
    );
    
    // Enqueue thickbox styles for media uploader
    wp_enqueue_style( 'thickbox' );
}
add_action( 'admin_enqueue_scripts', 'railclick_enqueue_media_uploader' );

// ===================================
// RUTAS DE TREN TEMPLATE METABOXES
// ===================================

// Metabox 1: Rutas - Hero Section
function railclick_add_rutas_hero_meta_box() {
    add_meta_box(
        'railclick_rutas_hero_meta_box',
        __( 'Rutas - Hero Section', 'railclick-theme' ),
        'railclick_render_rutas_hero_meta_box',
        'page',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'railclick_add_rutas_hero_meta_box' );

function railclick_render_rutas_hero_meta_box( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'railclick_rutas_hero_nonce' );

    $rutas_hero_bg_image = get_post_meta( $post->ID, 'rutas_hero_bg_image', true );
    $rutas_hero_title = get_post_meta( $post->ID, 'rutas_hero_title', true );
    $rutas_hero_subtitle = get_post_meta( $post->ID, 'rutas_hero_subtitle', true );
    $rutas_hero_description = get_post_meta( $post->ID, 'rutas_hero_description', true );
    $rutas_hero_search_placeholder = get_post_meta( $post->ID, 'rutas_hero_search_placeholder', true );

    ?>
    <table class="form-table">
        <tr>
            <th><label for="rutas_hero_bg_image">Imagen de Fondo</label></th>
            <td>
                <input type="text" name="rutas_hero_bg_image" id="rutas_hero_bg_image" value="<?php echo esc_attr( $rutas_hero_bg_image ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="rutas_hero_title">Título Principal</label></th>
            <td><input type="text" name="rutas_hero_title" id="rutas_hero_title" value="<?php echo esc_attr( $rutas_hero_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="rutas_hero_subtitle">Subtítulo</label></th>
            <td><input type="text" name="rutas_hero_subtitle" id="rutas_hero_subtitle" value="<?php echo esc_attr( $rutas_hero_subtitle ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="rutas_hero_description">Descripción</label></th>
            <td><textarea name="rutas_hero_description" id="rutas_hero_description" class="large-text"><?php echo esc_textarea( $rutas_hero_description ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="rutas_hero_search_placeholder">Placeholder Búsqueda</label></th>
            <td><input type="text" name="rutas_hero_search_placeholder" id="rutas_hero_search_placeholder" value="<?php echo esc_attr( $rutas_hero_search_placeholder ); ?>" class="large-text" /></td>
        </tr>
    </table>
    <?php
}

function railclick_save_rutas_hero_meta_box_data( $post_id ) {
    if ( !isset( $_POST['railclick_rutas_hero_nonce'] ) || !wp_verify_nonce( $_POST['railclick_rutas_hero_nonce'], basename( __FILE__ ) ) ) {
        return $post_id;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }

    if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    }

    $fields = [
        'rutas_hero_bg_image',
        'rutas_hero_title',
        'rutas_hero_subtitle',
        'rutas_hero_description',
        'rutas_hero_search_placeholder',
    ];

    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'railclick_save_rutas_hero_meta_box_data' );

// Metabox 2: Rutas - Filtros
function railclick_add_rutas_filters_meta_box() {
    add_meta_box(
        'railclick_rutas_filters_meta_box',
        __( 'Rutas - Filtros y Búsqueda', 'railclick-theme' ),
        'railclick_render_rutas_filters_meta_box',
        'page',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'railclick_add_rutas_filters_meta_box' );

function railclick_render_rutas_filters_meta_box( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'railclick_rutas_filters_nonce' );

    $rutas_filter_origin_label = get_post_meta( $post->ID, 'rutas_filter_origin_label', true );
    $rutas_filter_destination_label = get_post_meta( $post->ID, 'rutas_filter_destination_label', true );
    $rutas_filter_duration_label = get_post_meta( $post->ID, 'rutas_filter_duration_label', true );
    $rutas_filter_search_button = get_post_meta( $post->ID, 'rutas_filter_search_button', true );

    ?>
    <table class="form-table">
        <tr>
            <th><label for="rutas_filter_origin_label">Etiqueta Origen</label></th>
            <td><input type="text" name="rutas_filter_origin_label" id="rutas_filter_origin_label" value="<?php echo esc_attr( $rutas_filter_origin_label ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="rutas_filter_destination_label">Etiqueta Destino</label></th>
            <td><input type="text" name="rutas_filter_destination_label" id="rutas_filter_destination_label" value="<?php echo esc_attr( $rutas_filter_destination_label ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="rutas_filter_duration_label">Etiqueta Duración</label></th>
            <td><input type="text" name="rutas_filter_duration_label" id="rutas_filter_duration_label" value="<?php echo esc_attr( $rutas_filter_duration_label ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="rutas_filter_search_button">Texto Botón Buscar</label></th>
            <td><input type="text" name="rutas_filter_search_button" id="rutas_filter_search_button" value="<?php echo esc_attr( $rutas_filter_search_button ); ?>" class="large-text" /></td>
        </tr>
    </table>
    <?php
}

function railclick_save_rutas_filters_meta_box_data( $post_id ) {
    if ( !isset( $_POST['railclick_rutas_filters_nonce'] ) || !wp_verify_nonce( $_POST['railclick_rutas_filters_nonce'], basename( __FILE__ ) ) ) {
        return $post_id;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }

    if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    }

    $fields = [
        'rutas_filter_origin_label',
        'rutas_filter_destination_label',
        'rutas_filter_duration_label',
        'rutas_filter_search_button',
    ];

    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }
}
add_action( 'save_post', 'railclick_save_rutas_filters_meta_box_data' );

// Metaboxes para las 6 rutas individuales
function railclick_add_rutas_routes_meta_boxes() {
    for ($i = 1; $i <= 6; $i++) {
        add_meta_box(
            "railclick_rutas_route_{$i}_meta_box",
            __( "Rutas - Ruta {$i}", 'railclick-theme' ),
            'railclick_render_rutas_route_meta_box',
            'page',
            'normal',
            'high',
            array( 'route_number' => $i )
        );
    }
}
add_action( 'add_meta_boxes', 'railclick_add_rutas_routes_meta_boxes' );

function railclick_render_rutas_route_meta_box( $post, $args ) {
    $route_number = $args['args']['route_number'];
    wp_nonce_field( basename( __FILE__ ), "railclick_rutas_route_{$route_number}_nonce" );

    // Get meta values
    $name = get_post_meta( $post->ID, "ruta_{$route_number}_name", true );
    $origin = get_post_meta( $post->ID, "ruta_{$route_number}_origin", true );
    $destination = get_post_meta( $post->ID, "ruta_{$route_number}_destination", true );
    $duration = get_post_meta( $post->ID, "ruta_{$route_number}_duration", true );
    $price_from = get_post_meta( $post->ID, "ruta_{$route_number}_price_from", true );
    $description = get_post_meta( $post->ID, "ruta_{$route_number}_description", true );
    $image_1 = get_post_meta( $post->ID, "ruta_{$route_number}_image_1", true );
    $image_2 = get_post_meta( $post->ID, "ruta_{$route_number}_image_2", true );
    $image_3 = get_post_meta( $post->ID, "ruta_{$route_number}_image_3", true );
    $schedule_morning = get_post_meta( $post->ID, "ruta_{$route_number}_schedule_morning", true );
    $schedule_afternoon = get_post_meta( $post->ID, "ruta_{$route_number}_schedule_afternoon", true );
    $schedule_evening = get_post_meta( $post->ID, "ruta_{$route_number}_schedule_evening", true );
    $features = get_post_meta( $post->ID, "ruta_{$route_number}_features", true );
    $booking_link = get_post_meta( $post->ID, "ruta_{$route_number}_booking_link", true );
    $booking_text = get_post_meta( $post->ID, "ruta_{$route_number}_booking_text", true );

    ?>
    <table class="form-table">
        <tr>
            <th><label for="ruta_<?php echo $route_number; ?>_name">Nombre de la Ruta</label></th>
            <td><input type="text" name="ruta_<?php echo $route_number; ?>_name" id="ruta_<?php echo $route_number; ?>_name" value="<?php echo esc_attr( $name ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="ruta_<?php echo $route_number; ?>_origin">Origen</label></th>
            <td><input type="text" name="ruta_<?php echo $route_number; ?>_origin" id="ruta_<?php echo $route_number; ?>_origin" value="<?php echo esc_attr( $origin ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="ruta_<?php echo $route_number; ?>_destination">Destino</label></th>
            <td><input type="text" name="ruta_<?php echo $route_number; ?>_destination" id="ruta_<?php echo $route_number; ?>_destination" value="<?php echo esc_attr( $destination ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="ruta_<?php echo $route_number; ?>_duration">Duración</label></th>
            <td><input type="text" name="ruta_<?php echo $route_number; ?>_duration" id="ruta_<?php echo $route_number; ?>_duration" value="<?php echo esc_attr( $duration ); ?>" class="large-text" placeholder="Ej: 2h 30min" /></td>
        </tr>
        <tr>
            <th><label for="ruta_<?php echo $route_number; ?>_price_from">Precio Desde (€)</label></th>
            <td><input type="text" name="ruta_<?php echo $route_number; ?>_price_from" id="ruta_<?php echo $route_number; ?>_price_from" value="<?php echo esc_attr( $price_from ); ?>" class="large-text" placeholder="Ej: 29" /></td>
        </tr>
        <tr>
            <th><label for="ruta_<?php echo $route_number; ?>_description">Descripción</label></th>
            <td><textarea name="ruta_<?php echo $route_number; ?>_description" id="ruta_<?php echo $route_number; ?>_description" class="large-text" rows="3"><?php echo esc_textarea( $description ); ?></textarea></td>
        </tr>
    </table>

    <h4>Imágenes</h4>
    <table class="form-table">
        <tr>
            <th><label for="ruta_<?php echo $route_number; ?>_image_1">Imagen Principal</label></th>
            <td>
                <input type="text" name="ruta_<?php echo $route_number; ?>_image_1" id="ruta_<?php echo $route_number; ?>_image_1" value="<?php echo esc_attr( $image_1 ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="ruta_<?php echo $route_number; ?>_image_2">Imagen Secundaria</label></th>
            <td>
                <input type="text" name="ruta_<?php echo $route_number; ?>_image_2" id="ruta_<?php echo $route_number; ?>_image_2" value="<?php echo esc_attr( $image_2 ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
        <tr>
            <th><label for="ruta_<?php echo $route_number; ?>_image_3">Imagen Terciaria</label></th>
            <td>
                <input type="text" name="ruta_<?php echo $route_number; ?>_image_3" id="ruta_<?php echo $route_number; ?>_image_3" value="<?php echo esc_attr( $image_3 ); ?>" class="large-text" /><br>
                <input type="button" class="button railclick_upload_image_button" value="Upload Image" />
            </td>
        </tr>
    </table>

    <h4>Horarios</h4>
    <table class="form-table">
        <tr>
            <th><label for="ruta_<?php echo $route_number; ?>_schedule_morning">Horario Mañana</label></th>
            <td><input type="text" name="ruta_<?php echo $route_number; ?>_schedule_morning" id="ruta_<?php echo $route_number; ?>_schedule_morning" value="<?php echo esc_attr( $schedule_morning ); ?>" class="large-text" placeholder="Ej: 06:30, 08:15, 10:00" /></td>
        </tr>
        <tr>
            <th><label for="ruta_<?php echo $route_number; ?>_schedule_afternoon">Horario Tarde</label></th>
            <td><input type="text" name="ruta_<?php echo $route_number; ?>_schedule_afternoon" id="ruta_<?php echo $route_number; ?>_schedule_afternoon" value="<?php echo esc_attr( $schedule_afternoon ); ?>" class="large-text" placeholder="Ej: 14:30, 16:15, 18:00" /></td>
        </tr>
        <tr>
            <th><label for="ruta_<?php echo $route_number; ?>_schedule_evening">Horario Noche</label></th>
            <td><input type="text" name="ruta_<?php echo $route_number; ?>_schedule_evening" id="ruta_<?php echo $route_number; ?>_schedule_evening" value="<?php echo esc_attr( $schedule_evening ); ?>" class="large-text" placeholder="Ej: 20:30, 22:15" /></td>
        </tr>
    </table>

    <h4>Características y Reserva</h4>
    <table class="form-table">
        <tr>
            <th><label for="ruta_<?php echo $route_number; ?>_features">Características</label></th>
            <td>
                <textarea name="ruta_<?php echo $route_number; ?>_features" id="ruta_<?php echo $route_number; ?>_features" class="large-text" rows="4" placeholder="Una característica por línea"><?php echo esc_textarea( $features ); ?></textarea>
                <p class="description">Escriba una característica por línea (Ej: WiFi gratuito, Aire acondicionado, Asientos reclinables)</p>
            </td>
        </tr>
        <tr>
            <th><label for="ruta_<?php echo $route_number; ?>_booking_link">Enlace de Reserva</label></th>
            <td>
                <input type="text" name="ruta_<?php echo $route_number; ?>_booking_link" id="ruta_<?php echo $route_number; ?>_booking_link" value="<?php echo esc_attr( $booking_link ); ?>" class="large-text" placeholder="https://ejemplo.com o #seccion-pagina" />
                <p class="description">Acepta URLs completas (https://...) o enlaces internos (#seccion)</p>
            </td>
        </tr>
        <tr>
            <th><label for="ruta_<?php echo $route_number; ?>_booking_text">Texto Botón Reserva</label></th>
            <td><input type="text" name="ruta_<?php echo $route_number; ?>_booking_text" id="ruta_<?php echo $route_number; ?>_booking_text" value="<?php echo esc_attr( $booking_text ); ?>" class="large-text" placeholder="Ej: Reservar Ahora" /></td>
        </tr>
    </table>
    <?php
}

function railclick_save_rutas_routes_meta_box_data( $post_id ) {
    // Verificar nonces para todas las rutas
    $nonce_verified = false;
    for ($i = 1; $i <= 6; $i++) {
        if ( isset( $_POST["railclick_rutas_route_{$i}_nonce"] ) && wp_verify_nonce( $_POST["railclick_rutas_route_{$i}_nonce"], basename( __FILE__ ) ) ) {
            $nonce_verified = true;
            break;
        }
    }
    
    if ( !$nonce_verified ) {
        return $post_id;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }

    if ( !current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    }

    // Guardar datos para todas las rutas
    for ($i = 1; $i <= 6; $i++) {
        $fields = [
            "ruta_{$i}_name",
            "ruta_{$i}_origin",
            "ruta_{$i}_destination",
            "ruta_{$i}_duration",
            "ruta_{$i}_price_from",
            "ruta_{$i}_description",
            "ruta_{$i}_image_1",
            "ruta_{$i}_image_2",
            "ruta_{$i}_image_3",
            "ruta_{$i}_schedule_morning",
            "ruta_{$i}_schedule_afternoon",
            "ruta_{$i}_schedule_evening",
            "ruta_{$i}_features",
            "ruta_{$i}_booking_link",
            "ruta_{$i}_booking_text",
        ];

        foreach ( $fields as $field ) {
            if ( array_key_exists( $field, $_POST ) ) {
                update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
            }
        }
    }
}
add_action( 'save_post', 'railclick_save_rutas_routes_meta_box_data' );

// Admin menu for setup content
function railclick_add_admin_menu() {
    add_theme_page(
        'Setup Contenido Rutas',
        'Setup Rutas de Tren',
        'manage_options',
        'railclick-setup-rutas',
        'railclick_setup_rutas_admin_page'
    );
}
add_action( 'admin_menu', 'railclick_add_admin_menu' );

function railclick_setup_rutas_admin_page() {
    if (isset($_POST['create_rutas_content']) && wp_verify_nonce($_POST['_wpnonce'], 'create_rutas_content')) {
        $page_id = railclick_create_rutas_example_content();
        if ($page_id) {
            echo '<div class="notice notice-success"><p><strong>✅ Contenido creado exitosamente!</strong> <a href="' . get_permalink($page_id) . '" target="_blank">Ver página</a> | <a href="' . admin_url("post.php?post={$page_id}&action=edit") . '">Editar</a></p></div>';
        } else {
            echo '<div class="notice notice-error"><p><strong>❌ Error:</strong> No se pudo crear el contenido.</p></div>';
        }
    }
    ?>
    <div class="wrap">
        <h1>🚄 Setup Contenido - Template Rutas de Tren</h1>
        
        <div class="card" style="max-width: 800px;">
            <h2>📋 Contenido que se creará:</h2>
            
            <h3>🎨 Hero Section</h3>
            <ul>
                <li>Imagen de fondo con tren</li>
                <li>Título: "Descubre las Mejores Rutas de Tren"</li>
                <li>Subtítulo: "Viajes Únicos por Europa"</li>
                <li>Descripción promocional</li>
            </ul>
            
            <h3>🚆 6 Rutas Completas</h3>
            <ul>
                <li><strong>Roma - Florencia:</strong> 1h 32min, desde €29</li>
                <li><strong>Milán - Venecia:</strong> 2h 25min, desde €35</li>
                <li><strong>Nápoles - Costa Amalfitana:</strong> 3h 15min, desde €42</li>
                <li><strong>Roma - Cinque Terre:</strong> 4h 30min, desde €55</li>
                <li><strong>Florencia - Siena:</strong> 1h 45min, desde €18</li>
                <li><strong>Milán - Lago de Como:</strong> 1h 15min, desde €12</li>
            </ul>
            
            <p><strong>Cada ruta incluye:</strong> Horarios detallados, precios, descripciones, características, enlaces de reserva y 3 imágenes.</p>
            
            <form method="post" action="">
                <?php wp_nonce_field('create_rutas_content'); ?>
                <input type="hidden" name="create_rutas_content" value="1">
                <?php submit_button('✨ Crear Contenido de Ejemplo', 'primary', 'submit', false, array('style' => 'font-size: 16px; padding: 10px 20px;')); ?>
            </form>
        </div>
    </div>
    <?php
}

function railclick_create_rutas_example_content() {
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
            'post_author'   => get_current_user_id(),
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
        update_post_meta($page_id, 'ruta_1_booking_link', 'https://www.trenitalia.com/roma-florencia');
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
        update_post_meta($page_id, 'ruta_2_booking_link', '#reservas');
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
        update_post_meta($page_id, 'ruta_3_booking_link', 'https://viator.com/tours/amalfi');
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
        update_post_meta($page_id, 'ruta_4_booking_link', '#contacto');
        update_post_meta($page_id, 'ruta_4_booking_text', 'Explorar Ruta');
        
        // Route 5: Florencia - Siena
        update_post_meta($page_id, 'ruta_5_name', 'Florencia - Siena');
        update_post_meta($page_id, 'ruta_5_origin', 'Firenze Santa Maria Novella');
        update_post_meta($page_id, 'ruta_5_destination', 'Siena');
        update_post_meta($page_id, 'ruta_5_duration', '1h 45min');
        update_post_meta($page_id, 'ruta_5_price_from', '18');
        update_post_meta($page_id, 'ruta_5_description', 'Un viaje corto pero espectacular a través del corazón de la Toscana. Perfecto para una excursión de un día desde Florencia a la medieval ciudad de Siena.');
        update_post_meta($page_id, 'ruta_5_image_1', get_template_directory_uri() . '/assets/images/david-florence.jpg');
        update_post_meta($page_id, 'ruta_5_image_2', get_template_directory_uri() . '/assets/images/florence-duomo.jpg');
        update_post_meta($page_id, 'ruta_5_image_3', get_template_directory_uri() . '/assets/images/destinations-section.jpg');
        update_post_meta($page_id, 'ruta_5_schedule_morning', '07:30, 09:30, 11:30');
        update_post_meta($page_id, 'ruta_5_schedule_afternoon', '13:30, 15:30, 17:30');
        update_post_meta($page_id, 'ruta_5_schedule_evening', '19:30, 21:30');
        update_post_meta($page_id, 'ruta_5_features', "Paisajes toscanos\nViñedos y olivares\nArquitectura medieval\nEconómico\nFrecuencia alta\nBilletes flexibles");
        update_post_meta($page_id, 'ruta_5_booking_link', 'https://booking.com/trains/florence-siena');
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
        update_post_meta($page_id, 'ruta_6_booking_link', '#horarios');
        update_post_meta($page_id, 'ruta_6_booking_text', 'Ver Horarios');
        
        return $page_id;
    }
    
    return false;
}

// === METABOXES PARA TEMPLATE TIPOS DE TREN ===

// Registrar metaboxes para Tipos de Tren
function railclick_add_tipos_meta_boxes() {
    add_meta_box(
        'tipos_hero_meta_box',
        __( 'Tipos - Configuración Hero', 'railclick-theme' ),
        'railclick_render_tipos_hero_meta_box',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'tipos_regional_meta_box',
        __( 'Tipos - Tren Regional', 'railclick-theme' ),
        'railclick_render_tipos_regional_meta_box',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'tipos_alta_velocidad_meta_box',
        __( 'Tipos - Tren de Alta Velocidad', 'railclick-theme' ),
        'railclick_render_tipos_alta_velocidad_meta_box',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'tipos_nocturno_meta_box',
        __( 'Tipos - Tren Nocturno', 'railclick-theme' ),
        'railclick_render_tipos_nocturno_meta_box',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'tipos_panoramico_meta_box',
        __( 'Tipos - Tren Panorámico', 'railclick-theme' ),
        'railclick_render_tipos_panoramico_meta_box',
        'page',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'railclick_add_tipos_meta_boxes' );

// Renderizar metabox Hero para Tipos
function railclick_render_tipos_hero_meta_box( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'tipos_hero_nonce' );

    $hero_subtitle = get_post_meta( $post->ID, 'tipos_hero_subtitle', true );
    $hero_title = get_post_meta( $post->ID, 'tipos_hero_title', true );
    $hero_description = get_post_meta( $post->ID, 'tipos_hero_description', true );
    $hero_bg_image = get_post_meta( $post->ID, 'tipos_hero_bg_image', true );

    ?>
    <table class="form-table">
        <tr>
            <th><label for="tipos_hero_subtitle">Subtítulo Hero</label></th>
            <td><input type="text" name="tipos_hero_subtitle" id="tipos_hero_subtitle" value="<?php echo esc_attr( $hero_subtitle ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="tipos_hero_title">Título Principal</label></th>
            <td><input type="text" name="tipos_hero_title" id="tipos_hero_title" value="<?php echo esc_attr( $hero_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="tipos_hero_description">Descripción</label></th>
            <td><textarea name="tipos_hero_description" id="tipos_hero_description" class="large-text" rows="3"><?php echo esc_textarea( $hero_description ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="tipos_hero_bg_image">Imagen de Fondo</label></th>
            <td>
                <input type="text" name="tipos_hero_bg_image" id="tipos_hero_bg_image" value="<?php echo esc_attr( $hero_bg_image ); ?>" class="large-text" />
                <button type="button" class="button" id="tipos_hero_bg_image_button">Seleccionar Imagen</button>
            </td>
        </tr>
    </table>
    
    <script>
    jQuery(document).ready(function($) {
        $('#tipos_hero_bg_image_button').click(function(e) {
            e.preventDefault();
            var image = wp.media({
                title: 'Seleccionar Imagen',
                multiple: false
            }).open().on('select', function() {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                $('#tipos_hero_bg_image').val(image_url);
            });
        });
    });
    </script>
    <?php
}

// Función genérica para renderizar metaboxes de tipos de tren
function railclick_render_tipo_meta_box( $post, $tipo_prefix, $tipo_name ) {
    wp_nonce_field( basename( __FILE__ ), $tipo_prefix . '_nonce' );

    $fields = [
        'name' => 'Nombre del Tipo',
        'description' => 'Descripción',
        'capacity' => 'Capacidad (pasajeros)',
        'speed' => 'Velocidad Máxima',
        'services' => 'Servicios Incluidos (uno por línea)',
        'features' => 'Características (una por línea)',
        'price_from' => 'Precio desde (€)',
        'image_1' => 'Imagen Principal',
        'image_2' => 'Imagen Secundaria',
        'image_3' => 'Imagen Adicional'
    ];

    ?>
    <table class="form-table">
        <?php foreach ($fields as $field_key => $field_label): ?>
            <?php
            $field_name = $tipo_prefix . '_' . $field_key;
            $field_value = get_post_meta( $post->ID, $field_name, true );
            ?>
            <tr>
                <th><label for="<?php echo esc_attr($field_name); ?>"><?php echo esc_html($field_label); ?></label></th>
                <td>
                    <?php if (in_array($field_key, ['description', 'services', 'features'])): ?>
                        <textarea name="<?php echo esc_attr($field_name); ?>" id="<?php echo esc_attr($field_name); ?>" class="large-text" rows="4"><?php echo esc_textarea( $field_value ); ?></textarea>
                    <?php elseif (strpos($field_key, 'image') !== false): ?>
                        <input type="text" name="<?php echo esc_attr($field_name); ?>" id="<?php echo esc_attr($field_name); ?>" value="<?php echo esc_attr( $field_value ); ?>" class="large-text" />
                        <button type="button" class="button image-upload-button" data-target="<?php echo esc_attr($field_name); ?>">Seleccionar Imagen</button>
                    <?php else: ?>
                        <input type="text" name="<?php echo esc_attr($field_name); ?>" id="<?php echo esc_attr($field_name); ?>" value="<?php echo esc_attr( $field_value ); ?>" class="large-text" />
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    
    <script>
    jQuery(document).ready(function($) {
        $('.image-upload-button').click(function(e) {
            e.preventDefault();
            var button = $(this);
            var target = button.data('target');
            var image = wp.media({
                title: 'Seleccionar Imagen',
                multiple: false
            }).open().on('select', function() {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                $('#' + target).val(image_url);
            });
        });
    });
    </script>
    <?php
}

// Renderizar metaboxes específicos para cada tipo
function railclick_render_tipos_regional_meta_box( $post ) {
    railclick_render_tipo_meta_box( $post, 'tipo_regional', 'Tren Regional' );
}

function railclick_render_tipos_alta_velocidad_meta_box( $post ) {
    railclick_render_tipo_meta_box( $post, 'tipo_alta_velocidad', 'Tren de Alta Velocidad' );
}

function railclick_render_tipos_nocturno_meta_box( $post ) {
    railclick_render_tipo_meta_box( $post, 'tipo_nocturno', 'Tren Nocturno' );
}

function railclick_render_tipos_panoramico_meta_box( $post ) {
    railclick_render_tipo_meta_box( $post, 'tipo_panoramico', 'Tren Panorámico' );
}

// Guardar datos de metaboxes de tipos
function railclick_save_tipos_meta_boxes( $post_id ) {
    // Verificar nonce y permisos
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    // Lista de todos los campos a guardar
    $hero_fields = [
        'tipos_hero_subtitle',
        'tipos_hero_title', 
        'tipos_hero_description',
        'tipos_hero_bg_image'
    ];

    $tipo_fields = [
        'name', 'description', 'capacity', 'speed', 'services', 
        'features', 'price_from', 'image_1', 'image_2', 'image_3'
    ];

    $tipos = ['regional', 'alta_velocidad', 'nocturno', 'panoramico'];

    // Guardar campos hero
    foreach ($hero_fields as $field) {
        if ( isset( $_POST[$field] ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }

    // Guardar campos de tipos
    foreach ($tipos as $tipo) {
        foreach ($tipo_fields as $field) {
            $field_name = 'tipo_' . $tipo . '_' . $field;
            if ( isset( $_POST[$field_name] ) ) {
                if (in_array($field, ['description', 'services', 'features'])) {
                    update_post_meta( $post_id, $field_name, sanitize_textarea_field( $_POST[$field_name] ) );
                } else {
                    update_post_meta( $post_id, $field_name, sanitize_text_field( $_POST[$field_name] ) );
                }
            }
        }
    }
}
add_action( 'save_post', 'railclick_save_tipos_meta_boxes' );

// Incluir archivo de setup para tipos de tren
require_once get_template_directory() . '/setup-tipos-content.php';
require_once get_template_directory() . '/setup-estaciones-content.php';

// Auto-importar contenido de tipos de tren al activar el tema
function railclick_auto_setup_tipos_content() {
    // Verificar si ya se ejecutó esta función
    if (get_option('railclick_tipos_content_imported')) {
        return;
    }
    
    // Ejecutar setup automático
    $page_id = railclick_setup_tipos_content();
    
    if ($page_id) {
        // Marcar como importado
        update_option('railclick_tipos_content_imported', true);
        
        // Log para debugging (opcional)
        error_log('RailClick: Contenido de tipos de tren importado automáticamente. Página ID: ' . $page_id);
    }
}

// Ejecutar auto-import al cargar el tema
add_action('after_setup_theme', 'railclick_auto_setup_tipos_content');

// También ejecutar en admin_init para asegurar la importación
add_action('admin_init', 'railclick_auto_setup_tipos_content');

// Reset para desarrollo (remover en producción)
function railclick_reset_tipos_import() {
    if (isset($_GET['reset_tipos_import']) && current_user_can('manage_options')) {
        delete_option('railclick_tipos_content_imported');
        wp_redirect(admin_url());
        exit;
    }
}
add_action('admin_init', 'railclick_reset_tipos_import');

// ESTACIONES META BOXES
function railclick_add_estaciones_meta_boxes() {
    add_meta_box(
        'estaciones_hero_meta_box',
        __( 'Estaciones - Configuración Hero', 'railclick-theme' ),
        'railclick_render_estaciones_hero_meta_box',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'estaciones_central_meta_box',
        __( 'Estaciones - Estación Central', 'railclick-theme' ),
        'railclick_render_estaciones_central_meta_box',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'estaciones_norte_meta_box',
        __( 'Estaciones - Estación Norte', 'railclick-theme' ),
        'railclick_render_estaciones_norte_meta_box',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'estaciones_sur_meta_box',
        __( 'Estaciones - Estación Sur', 'railclick-theme' ),
        'railclick_render_estaciones_sur_meta_box',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'estaciones_este_meta_box',
        __( 'Estaciones - Estación Este', 'railclick-theme' ),
        'railclick_render_estaciones_este_meta_box',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'estaciones_oeste_meta_box',
        __( 'Estaciones - Estación Oeste', 'railclick-theme' ),
        'railclick_render_estaciones_oeste_meta_box',
        'page',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'railclick_add_estaciones_meta_boxes' );

// Renderizar metabox Hero para Estaciones
function railclick_render_estaciones_hero_meta_box( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'estaciones_hero_nonce' );

    $hero_subtitle = get_post_meta( $post->ID, 'estaciones_hero_subtitle', true );
    $hero_title = get_post_meta( $post->ID, 'estaciones_hero_title', true );
    $hero_description = get_post_meta( $post->ID, 'estaciones_hero_description', true );
    $hero_bg_image = get_post_meta( $post->ID, 'estaciones_hero_bg_image', true );

    ?>
    <table class="form-table">
        <tr>
            <th><label for="estaciones_hero_subtitle">Subtítulo Hero</label></th>
            <td><input type="text" name="estaciones_hero_subtitle" id="estaciones_hero_subtitle" value="<?php echo esc_attr( $hero_subtitle ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="estaciones_hero_title">Título Principal</label></th>
            <td><input type="text" name="estaciones_hero_title" id="estaciones_hero_title" value="<?php echo esc_attr( $hero_title ); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="estaciones_hero_description">Descripción</label></th>
            <td><textarea name="estaciones_hero_description" id="estaciones_hero_description" class="large-text" rows="3"><?php echo esc_textarea( $hero_description ); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="estaciones_hero_bg_image">Imagen de Fondo</label></th>
            <td>
                <input type="text" name="estaciones_hero_bg_image" id="estaciones_hero_bg_image" value="<?php echo esc_attr( $hero_bg_image ); ?>" class="large-text" />
                <button type="button" class="button" id="estaciones_hero_bg_image_button">Seleccionar Imagen</button>
            </td>
        </tr>
    </table>
    
    <script>
    jQuery(document).ready(function($) {
        $('#estaciones_hero_bg_image_button').click(function(e) {
            e.preventDefault();
            var image = wp.media({
                title: 'Seleccionar Imagen',
                multiple: false
            }).open().on('select', function() {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                $('#estaciones_hero_bg_image').val(image_url);
            });
        });
    });
    </script>
    <?php
}

// Función genérica para renderizar metaboxes de estaciones
function railclick_render_estacion_meta_box( $post, $estacion_prefix, $estacion_name ) {
    wp_nonce_field( basename( __FILE__ ), $estacion_prefix . '_nonce' );

    $fields = [
        'name' => 'Nombre de la Estación',
        'tipo' => 'Tipo (Principal/Secundaria)',
        'direccion' => 'Dirección Completa',
        'horarios' => 'Horarios de Operación',
        'servicios' => 'Servicios Disponibles (uno por línea)',
        'facilidades' => 'Facilidades (una por línea)',
        'conexiones' => 'Conexiones de Transporte (una por línea)',
        'contacto' => 'Información de Contacto',
        'image_1' => 'Imagen Principal',
        'image_2' => 'Imagen Secundaria',
        'image_3' => 'Imagen Adicional'
    ];

    ?>
    <table class="form-table">
        <?php foreach ($fields as $field_key => $field_label): ?>
            <?php
            $field_name = $estacion_prefix . '_' . $field_key;
            $field_value = get_post_meta( $post->ID, $field_name, true );
            ?>
            <tr>
                <th><label for="<?php echo esc_attr($field_name); ?>"><?php echo esc_html($field_label); ?></label></th>
                <td>
                    <?php if (in_array($field_key, ['horarios', 'servicios', 'facilidades', 'conexiones', 'contacto'])): ?>
                        <textarea name="<?php echo esc_attr($field_name); ?>" id="<?php echo esc_attr($field_name); ?>" class="large-text" rows="4"><?php echo esc_textarea( $field_value ); ?></textarea>
                    <?php elseif (strpos($field_key, 'image') !== false): ?>
                        <input type="text" name="<?php echo esc_attr($field_name); ?>" id="<?php echo esc_attr($field_name); ?>" value="<?php echo esc_attr( $field_value ); ?>" class="large-text" />
                        <button type="button" class="button image-upload-button" data-target="<?php echo esc_attr($field_name); ?>">Seleccionar Imagen</button>
                    <?php else: ?>
                        <input type="text" name="<?php echo esc_attr($field_name); ?>" id="<?php echo esc_attr($field_name); ?>" value="<?php echo esc_attr( $field_value ); ?>" class="large-text" />
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    
    <script>
    jQuery(document).ready(function($) {
        $('.image-upload-button').click(function(e) {
            e.preventDefault();
            var button = $(this);
            var target = button.data('target');
            var image = wp.media({
                title: 'Seleccionar Imagen',
                multiple: false
            }).open().on('select', function() {
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                $('#' + target).val(image_url);
            });
        });
    });
    </script>
    <?php
}

// Renderizar metaboxes específicos para cada estación
function railclick_render_estaciones_central_meta_box( $post ) {
    railclick_render_estacion_meta_box( $post, 'estacion_central', 'Estación Central' );
}

function railclick_render_estaciones_norte_meta_box( $post ) {
    railclick_render_estacion_meta_box( $post, 'estacion_norte', 'Estación Norte' );
}

function railclick_render_estaciones_sur_meta_box( $post ) {
    railclick_render_estacion_meta_box( $post, 'estacion_sur', 'Estación Sur' );
}

function railclick_render_estaciones_este_meta_box( $post ) {
    railclick_render_estacion_meta_box( $post, 'estacion_este', 'Estación Este' );
}

function railclick_render_estaciones_oeste_meta_box( $post ) {
    railclick_render_estacion_meta_box( $post, 'estacion_oeste', 'Estación Oeste' );
}

// Guardar metaboxes de estaciones
function railclick_save_estaciones_meta_boxes( $post_id ) {
    // Verificar nonce
    if ( ! isset( $_POST['estaciones_hero_nonce'] ) || ! wp_verify_nonce( $_POST['estaciones_hero_nonce'], basename( __FILE__ ) ) ) {
        return;
    }

    // Verificar autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Verificar permisos
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    // Campos Hero
    $hero_fields = [
        'estaciones_hero_subtitle',
        'estaciones_hero_title', 
        'estaciones_hero_description',
        'estaciones_hero_bg_image'
    ];

    foreach ( $hero_fields as $field ) {
        if ( isset( $_POST[$field] ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
    }

    // Campos de estaciones
    $estaciones = ['central', 'norte', 'sur', 'este', 'oeste'];
    $estacion_fields = [
        'name', 'tipo', 'direccion', 'horarios', 'servicios', 
        'facilidades', 'conexiones', 'contacto', 'image_1', 'image_2', 'image_3'
    ];

    foreach ( $estaciones as $estacion ) {
        foreach ( $estacion_fields as $field ) {
            $field_name = 'estacion_' . $estacion . '_' . $field;
            if ( isset( $_POST[$field_name] ) ) {
                if ( in_array( $field, ['horarios', 'servicios', 'facilidades', 'conexiones', 'contacto'] ) ) {
                    update_post_meta( $post_id, $field_name, sanitize_textarea_field( $_POST[$field_name] ) );
                } else {
                    update_post_meta( $post_id, $field_name, sanitize_text_field( $_POST[$field_name] ) );
                }
            }
        }
    }
}
add_action( 'save_post', 'railclick_save_estaciones_meta_boxes' );

