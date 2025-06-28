jQuery(document).ready(function($){
    var mediaUploader;

    $('.railclick_upload_image_button').click(function(e) {
        e.preventDefault();
        var button = $(this);
        var input_field = button.prev();

        // If the media uploader already exists, reopen it.
        if (mediaUploader) {
            mediaUploader.open();
            return;
        }

        // Create the media uploader.
        mediaUploader = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        // When an image is selected, run a callback.
        mediaUploader.on('select', function() {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            input_field.val(attachment.url);
        });

        // Open the uploader dialog.
        mediaUploader.open();
    });
});