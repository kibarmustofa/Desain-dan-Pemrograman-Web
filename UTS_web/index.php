<!DOCTYPE html>
<html>
<head>
    <title>Portofolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Portofolio Saya</h1>
    <nav>
        <ul>
            <li><a href="#informasi-singkat">Informasi Singkat</a></li>
            <li><a href="#kolase-gambar">Kolase Gambar</a></li>
            <li><a href="#upload-gambar">Upload Gambar</a></li>
            <li><a href="#gambar-diunggah">Gambar yang Diunggah</a></li>
        </ul>
    </nav>
    <div id="slideshow">
        <div class="slide-track">
            <div class="slide"><img src="images/default4.jpeg" alt="Gambar 4"></div>
            <div class="slide"><img src="images/default1.jpeg" alt="Gambar 1"></div>
            <div class="slide"><img src="images/default2.jpg" alt="Gambar 2"></div>
            <div class="slide"><img src="images/default3.jpg" alt="Gambar 3"></div>
            <div class="slide"><img src="images/default4.jpeg" alt="Gambar 4"></div>
            <div class="slide"><img src="images/default1.jpeg" alt="Gambar 1"></div>
            <div class="slide"><img src="images/default5.jpeg" alt="Gambar 1"></div>
            <div class="slide"><img src="images/default2.jpg" alt="Gambar 2"></div>
            <div class="slide"><img src="images/default3.jpg" alt="Gambar 3"></div>
            <div class="slide"><img src="images/default4.jpeg" alt="Gambar 4"></div>
            <div class="slide"><img src="images/default2.jpg" alt="Gambar 2"></div>
            <div class="slide"><img src="images/default3.jpg" alt="Gambar 3"></div>
        </div>
    </div>
</header>

<section id="informasi-singkat" class="dashboard">
    <h2>Informasi Singkat</h2>
    <p>
    Halo, perkenalkan nama saya Kibar Mustofa. Selamat datang di web portofolio saya. Di sini, saya berusaha menampilkan karya terbaik saya. Saat ini, saya sedang menekuni bidang ilustrator digital dan juga game developer. Kalian bisa mengikuti saya di Instagram dan Facebook melalui tautan di bawah ini.
    </p>
</section>
<section class="social-media">
    <h2>Ikuti Saya</h2>
    <div class="social-icons">
        <a href="https://bit.ly/3NybM2W" target="_blank">
            <img src="icons/instagram.png" alt="Instagram" width="40px" />
        </a>
        <a href="https://bit.ly/3UguGPG" target="_blank">
            <img src="icons/facebook.png" alt="Facebook" width="40px" />
        </a>
    </div>
</section>
<section id="kolase-gambar" class="collage" style="background-image: url('images/background.jpg'); background-size: cover; ">
    <h2>Kolase Gambar</h2>
    <div class="collage-grid">
        <div class="grid-item" onclick="popup('images/default8.jpeg')">
            <div class="post-header">Collage Image 1</div>
            <img src="images/default8.jpeg" alt="Collage Image 1">
        </div>
        <div class="grid-item" onclick="popup('images/default5.jpeg')">
            <div class="post-header">Collage Image 2</div>
            <img src="images/default5.jpeg" alt="Collage Image 2">
        </div>
        <div class="grid-item" onclick="popup('images/default7.jpeg')">
            <div class="post-header">Collage Image 3</div>
            <img src="images/default7.jpeg" alt="Collage Image 3">
        </div>
        <div class="grid-item" onclick="popup('images/default6.jpg')">
            <div class="post-header">Collage Image 4</div>
            <img src="images/default6.jpg" alt="Collage Image 4">
        </div>
        <div class="grid-item" onclick="popup('images/default9.jpeg')">
            <div class="post-header">Collage Image 5</div>
            <img src="images/default9.jpeg" alt="Collage Image 5">
        </div>
        <div class="grid-item" onclick="popup('images/default11.jpeg')">
            <div class="post-header">Collage Image 6</div>
            <img src="images/default11.jpeg" alt="Collage Image 6">
        </div>
        <div class="grid-item" onclick="popup('images/default1.jpeg')">
            <div class="post-header">Collage Image 7</div>
            <img src="images/default1.jpeg" alt="Collage Image 7">
        </div>
        <div class="grid-item" onclick="popup('images/default2.jpg')">
            <div class="post-header">Collage Image 8</div>
            <img src="images/default2.jpg" alt="Collage Image 8">
        </div>
        <div class="grid-item" onclick="popup('images/default3.jpg')">
            <div class="post-header">Collage Image 9</div>
            <img src="images/default3.jpg" alt="Collage Image 9">
        </div>
        <div class="grid-item" onclick="popup('images/default4.jpeg')">
            <div class="post-header">Collage Image 10</div>
            <img src="images/default4.jpeg" alt="Collage Image 10">
        </div>
        <div class="grid-item" onclick="popup('images/default12.jpeg')">
            <div class="post-header">Collage Image 10</div>
            <img src="images/default12.jpeg" alt="Collage Image 11">
        </div>
        <div class="grid-item" onclick="popup('images/default13.jpeg')">
            <div class="post-header">Collage Image 10</div>
            <img src="images/default13.jpeg" alt="Collage Image 12">
        </div>
    </div>
</section>

<section id="upload-gambar" class="upload-form">
    <h2>Upload Gambar Ilustrasi</h2>
    <form id="imageUploadForm" action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*" required>
        <button type="submit">Upload</button>
    </form>
    <div id="uploadStatus"></div>
</section>

<section id="gambar-diunggah" class="gallery">
    <h2>Gambar yang Diunggah</h2>
    <div class="collage-grid">
        <?php
        $files = glob('uploads/*.*');
        foreach ($files as $file) {
            echo '<div class="grid-item" onclick="popup(\'' . $file . '\')">';
            echo '<div class="post-header">' . basename($file) . '</div>';
            echo '<img src="' . $file . '" alt="Gambar Unggahan">';
            echo '<button class="delete-btn" data-file="' . basename($file) . '">Hapus</button>';
            echo '</div>';
        }
        ?>
    </div>
</section>

<div id="imageModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="modalImage">
    <div id="caption"></div>
</div>

<script>
function deleteImage(fileName) {
    if (confirm("Apakah Anda yakin ingin menghapus gambar ini?")) {
        fetch('delete.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({ file: fileName }).toString()
        })
        .then(response => response.text())
        .then(result => {
            alert(result);
            location.reload();
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat menghapus gambar.');
        });
    }
}

document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('click', function(event) {
        event.stopPropagation();
        const fileName = this.getAttribute('data-file');
        deleteImage(fileName);
    });
});

function popup(src) {
    document.getElementById('imageModal').style.display = "block";
    document.getElementById('modalImage').src = src;
}

function closeModal() {
    document.getElementById('imageModal').style.display = "none";
}
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>
</body>
</html>
