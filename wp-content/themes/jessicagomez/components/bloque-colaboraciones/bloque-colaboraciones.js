jQuery(document).ready(function($) {
    $('.upload_image_button').click(function(e) {
        e.preventDefault();
        
        var button = $(this);
        var idField = button.prev('.image-url');
        
        var mediaUploader = wp.media({
            title: 'Seleccionar Imagen',
            button: {
                text: 'Usar esta imagen'
            },
            multiple: false // Permitir solo una imagen
        }).on('select', function() {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            idField.val(attachment.id); // Guardar el ID de la imagen
            button.text('Imagen seleccionada'); // Cambiar el texto del botón
            // También puedes mostrar una miniatura si deseas
            button.after('<img src="' + attachment.url + '" style="max-width: 100px; margin-top: 10px;" />');
        }).open();
    });
});
