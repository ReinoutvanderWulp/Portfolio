<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="manifest" href="/icons/site.webmanifest">
    <link rel="mask-icon" href="/icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Portfolio - OverMij</title>
</head>
<body>
<div class="div">
    <nav class="navbar bg-primary" data-bs-theme="dark" id="top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="overmij.php">Overmij</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mijnprojecten.php">Mijn projecten</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div>
            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Reinout van der Wulp</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary"></a>
                </div>
            </div>
            <div class="card" style="width: 28rem;">
                <img src="" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Over mij</h5>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary"></a>
                </div>
            </div>
        </div>
        <p>Wilt u mijn CV bekijken? Dat kan! Klik op volgende link om mijn CV te bekijken: </p>
        <p>of Download mijn CV hier:</p>
        <p>In PDF: </p><a class="btn btn-info" href="/documents/CV-ReinoutvanderWulp.pdf" download>CV-PDF</a>
        <p>In DOCX: </p><a class="btn btn-info" href="/documents/CV-ReinoutvanderWulp.docx" download>CV-DOCX</a>
    </main>
    <footer>
        <p>Created by Reinout van der Wulp @ TM Geel - <?php echo date("Y"); ?></p>
        <button type="button" class="btn btn-info" href="#top"><i class="fa-solid fa-arrow-up"></i></button>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>