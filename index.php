<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style/body.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="style/index.css?v=<?php echo time(); ?>">
    <title>Petshop.com</title>
</head>
<body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg bg-transparant">
            <div class="container">
                    <a class="navbar-brand" href="index.php">Petshop.com</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                    </ul>
                    <a href="screen/admin/login-penjual.php" class="nav-link active menjadi-penjual-btn">Login Menjadi Penjual?</a>
                    <button class="btn btn-outline-dark login-btn" type="button" onclick="location.href='login.php';">Login</button>
                </div>
            </div>
        </nav>
    </section>
    <section id="jumbotron">
        <div class="container jumbotron-body">
            <div class="row">
                <div class="col">
                    <img src="assets/images/shopping.jpg" alt="petshop.com">
                </div>
                <div class="col">
                    <h1 class="title-jumbotron">Selamat Datang di Petshop.com</h1>
                    <p class="subtitle-jumbotron">
                    Menyediakan brand lokal dan internasional yang terus bertambah untuk PetLovers di seluruh Indonesia.
                    Kami memiliki lebih dari 5.000 produk yg dapat memenuhi kebutuhan hewan peliharaan kesayangan Anda dengan menawarkan 
                    berbagai produk pilihan dari berbagai kategori, mulai dari makanan, vitamin dan obat-obatan, mainan, aksesoris, baju, kandang, dan masih banyak lagi.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>