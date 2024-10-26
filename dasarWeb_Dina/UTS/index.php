<?php
session_start();

// Cek apakah tombol simpan ditekan
if (isset($_POST['save'])) {
    // Ambil data dari form
    $contentId = $_POST['content_id'];

    // Ambil konten yang disimpan dari cookie
    $savedContents = [];
    if (isset($_COOKIE['saved_contents'])) {
        $savedContents = explode(",", $_COOKIE['saved_contents']);
    }

    // nambah konten baru ke array jika belum ada
    if (!in_array($contentId, $savedContents)) {
        $savedContents[] = $contentId;
        // Simpan kembali ke cookie
        setcookie('saved_contents', implode(",", $savedContents), time() + (86400 * 30), "/"); 
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Style Fashion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    .hero {
        background-color: #007bff;
        color: blue;
    }

    .custom-alert {
        position: relative;
    }

    .footer-bg {
        background-color: rgba(0, 0, 0, 0.1);
    }

    /* Mengatur ukuran card dan gambar */
    .card {
        width: 25vw;
        margin: 24px;
    }

    .card img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="bg-light shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Fashion Style</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="save.php">Tersimpan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero  -->
    <div class="hero text-center py-5">
        <h1>Temukan Gaya Fashion Terbaik</h1>
        <p>Rekomendasi gaya fashion untuk semua kesempatan</p>
    </div>

    <!-- Alert login di atas halaman -->
    <div id="login-alert" class="alert alert-warning text-center d-none custom-alert" role="alert">
        <p>Anda belum login. Silakan login terlebih dahulu.</p>
        <button class="btn btn-primary" id="login-button">Login</button>
    </div>

    <!-- Konten -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Rekomendasi untuk Cewe</h2>
                <div class="card mb-3 saveable-content" id="cewe1">
                    <div class="card-body">
                        <img src="img/cewe1.jpg" class="card-img-top" alt="Dress Merah">
                        <h5 class="card-title">Style soft</h5>
                        <p class="card-text">Perpaduan warna soft yang pasti banyak disukai</p>
                        <form method="post">
                            <input type="hidden" name="content_id" value="dress-merah">
                            <input type="hidden" name="content_title" value="Dress Merah">
                            <button type="submit" class="btn btn-primary" name="save">Simpan</button>
                        </form>
                    </div>
                </div>

                <div class="card mb-3 saveable-content" id="cewe2">
                    <div class="card-body">
                        <img src="img/cewe2.jpg" class="card-img-top" alt="Dress Merah">
                        <div class="card-body">
                            <h5 class="card-title ">Style menarik</h5>
                            <p class="card-text">Style menarik yang nyaman untuk sehari-hari.</p>
                            <form method="post">
                                <input type="hidden" name="content_id" value="blouse-putih">
                                <input type="hidden" name="content_title" value="Blouse Putih">
                                <button type="submit" class="btn btn-primary" name="save">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h2>Rekomendasi untuk Cowo</h2>
                    <div class="card mb-3 saveable-content" id="cowo1">
                        <div class="card-body">
                            <img src="img/cowo5.jpg" class="card-img-top" alt="warnasoft">
                            <h5 class="card-title">Setelan soft</h5>
                            <p class="card-text">Baju dengan warna soft membuat tampilan lebih menawan</p>
                            <form method="post">
                                <input type="hidden" name="content_id" value="kemeja-biru">
                                <input type="hidden" name="content_title" value="Kemeja Biru">
                                <button type="submit" class="btn btn-primary" name="save">Simpan</button>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-3 saveable-content" id="cowo2">
                        <div class="card-body">
                            <img src="img/cowo1.jpg" class="card-img-top" alt="kaos hitam">
                            <h5 class="card-title">Kaos Hitam</h5>
                            <p class="card-text">Kaos hitam yang stylish untuk santai.</p>
                            <form method="post">
                                <input type="hidden" name="content_id" value="kaos-hitam">
                                <input type="hidden" name="content_title" value="Kaos Hitam">
                                <button type="submit" class="btn btn-primary" name="save">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form inputan mix and match -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <h2>Mix and Match Rekomendasi</h2>
                    <form id="mixMatchForm">
                        <div class="form-group mb-3">
                            <label for="gender">Jenis Kelamin</label>
                            <select id="gender" name="gender" class="form-control">
                                <option value="cewe">Cewe</option>
                                <option value="cowo">Cowo</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="warna">Warna</label>
                            <select id="warna" name="warna" class="form-control">
                                <option value="merah">Merah</option>
                                <option value="biru">Biru</option>
                                <option value="hitam">Hitam</option>
                                <option value="putih">Putih</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenis_fashion">Jenis Fashion</label>
                            <select id="jenis_fashion" name="jenis_fashion" class="form-control">
                                <option value="busana">Busana</option>
                                <option value="lengan_pendek">Lengan Pendek</option>
                                <option value="formal">Formal</option>
                                <option value="kasual">Kasual</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <!-- Konten rekomendasi style fashion yang dipilih -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <h2>Rekomendasi yang Dipilih</h2>
                    <div id="recommendations">
                        <?php
                    if (isset($_COOKIE['saved_contents'])) {
                        $savedContents = explode(",", $_COOKIE['saved_contents']);
                        foreach ($savedContents as $contentId) {
                            switch ($contentId) {
                                case 'cewe1':
                                    echo "<div class='card'><div class='card-body'>Style soft - Perpaduan warna soft yang pasti banyak disukai.</div></div>";
                                    break;
                                case 'cewe2':
                                    echo "<div class='card'><div class='card-body'>Style menarik - Style menarik yang nyaman untuk sehari-hari.</div></div>";
                                    break;
                                case 'cewe3':
                                    echo "<div class='card'><div class='card-body'>Setelan soft - Baju dengan warna soft membuat tampilan lebih menawan</div></div>";
                                    break;
                                case 'cewe4':
                                    echo "<div class='card'><div class='card-body'>Kaos Hitam - Kaos hitam yang stylish untuk santai.</div></div>";
                                    break;
                            }
                        }
                    } else {
                        echo "<p>Tidak ada rekomendasi tersimpan.</p>";
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer-bg text-center text-lg-start">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Tentang Kami</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae nulla ut nulla
                            facilisis
                            tempus.</p>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Kontak Kami</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante
                            venenatis
                            dapibus.</p>
                    </div>
                </div>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2024 Copyright:
                <a class="text-dark" href="#">Fashion Style</a>
            </div>
        </footer>

</body>

</html>