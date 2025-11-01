$(document).ready(function() {
    loadFiles(); 

    $('#uploadForm').submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        var file = $('#file')[0].files[0];

        if (!file) {
            $('#status').html('Silakan pilih file terlebih dahulu.');
            return;
        }

        $.ajax({
            url: 'upload.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response);
                $('#uploadForm')[0].reset();
                loadFiles(); 
            },
            error: function() {
                $('#status').html('Terjadi kesalahan saat upload.');
            }
        });
    });

    function loadFiles() {
        $.ajax({
            url: "list_file.php",
            type: "GET",
            success: function(data) {
                $("#fileList").html(data);
            }
        });
    }
});