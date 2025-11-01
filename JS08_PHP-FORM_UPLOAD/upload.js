$(document).ready(function(){
    $('#file').on('change', function(){
        if (this.files && this.files.length > 0) {
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    $('#upload-form').on('submit', function(e){
        e.preventDefault();

        var formData = new FormData(this);
        $('#status').html('Mengunggah...');

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response){
                $('#status').html(response);
                $('#upload-form')[0].reset();
                $('#upload-button').prop('disabled', true).css('opacity', 0.5);
            },
            error: function(){
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});
