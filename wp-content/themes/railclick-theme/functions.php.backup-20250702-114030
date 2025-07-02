<?php

function railclick_enqueue_styles() {
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'railclick_enqueue_styles' );


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

