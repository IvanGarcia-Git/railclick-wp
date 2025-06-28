jQuery(document).ready(function($){
    var mediaUploader;

    // Handle upload button clicks
    $(document).on('click', '.railclick_upload_image_button', function(e) {
        e.preventDefault();
        var button = $(this);
        
        // Find the input field - use prevAll to skip the <br> tag between input and button
        var input_field = button.prevAll('input[type="text"]').first();
        
        // Fallback: try to find input field within the same parent container
        if (input_field.length === 0) {
            input_field = button.parent().find('input[type="text"]');
        }

        // Ensure we found the input field
        if (input_field.length === 0) {
            console.error('Could not find input field for image upload');
            console.log('Button parent HTML:', button.parent().html());
            return;
        }

        // Create a new media uploader instance for each button
        mediaUploader = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false,
            library: {
                type: 'image'
            }
        });

        // When an image is selected, run a callback.
        mediaUploader.on('select', function() {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            if (attachment && attachment.url) {
                input_field.val(attachment.url);
                // Trigger change event to notify any listeners
                input_field.trigger('change');
            }
        });

        // Open the uploader dialog.
        mediaUploader.open();
    });
});