jQuery(document).ready(function($) {
    // Media uploader for Contact hero background image
    var contacto_hero_bg_image_uploader;
    
    $('#contacto_hero_bg_image_button').click(function(e) {
        e.preventDefault();
        
        // If the uploader object has already been created, reopen the dialog
        if (contacto_hero_bg_image_uploader) {
            contacto_hero_bg_image_uploader.open();
            return;
        }
        
        // Create the media uploader object
        contacto_hero_bg_image_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Seleccionar Imagen de Fondo del Hero',
            button: {
                text: 'Usar esta imagen'
            },
            multiple: false
        });
        
        // When an image is selected in the media uploader
        contacto_hero_bg_image_uploader.on('select', function() {
            var attachment = contacto_hero_bg_image_uploader.state().get('selection').first().toJSON();
            $('#contacto_hero_bg_image').val(attachment.url);
        });
        
        // Open the uploader dialog
        contacto_hero_bg_image_uploader.open();
    });
});