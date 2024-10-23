document.getElementById('imageUploadForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    var formData = new FormData(this);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'upload.php', true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            // Tampilkan status upload
            document.getElementById('uploadStatus').innerHTML = xhr.responseText;
            // Refresh gallery setelah upload
            location.reload();
        } else {
            document.getElementById('uploadStatus').innerHTML = 'Terjadi kesalahan saat mengupload file.';
        }
    };

    xhr.send(formData);
});

