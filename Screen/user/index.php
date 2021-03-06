<?php

require '../../controller/admin/product-crud.php';

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login-penjual.php");
    exit;
}

$product = read("SELECT * FROM produk ORDER BY id DESC");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/body.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../style/user/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../style/user/navbar.css?v=<?php echo time(); ?>">
    <title>Home</title>
</head>

<body>

    <section id="navbar">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                    <p class="navbar-brand">Petshop.com</p>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="checkout.php">Checkout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="account-user.php">Akun Anda</a>
                        </li>
                    </ul>
                    <a class="btn btn-outline-dark login-btn" href="logout.php">Logout</a>
                </div>
            </div>
        </nav>
    </section>

    <section id="main-content">
        <div class="container card-item">
        <?php foreach ($product as $row) : ?>
            <div class="card" style="width: 14rem;">
                <img src="../../assets/produk/<?php echo $row["gambar_produk"]; ?>" class="card-img-top" alt="petshop.com">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row["nama_produk"]; ?></h5>
                    <p class="card-text"><?php echo $row["harga"]; ?></p>
                    <a href="checkout.php" class="btn btn-outline-info">Beli</a>
                </div>
            </div>
        <?php endforeach;?>
        </div>
    </section>

    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>