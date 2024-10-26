<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tersimpan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
    .card {
        margin: 10px;
    }
    </style>
</head>

<body>
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
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="save.php">Tersimpan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-4">
        <h2>Rekomendasi yang Tersimpan</h2>

        <div class="row">
            <div class="col-md-12">
                <div id="saved-recommendations">
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
</body>

</html>