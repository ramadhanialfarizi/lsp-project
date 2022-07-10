<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login-penjual.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/body.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../style/user/navbar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../style/user/checkout.css?v=<?php echo time(); ?>">
    <title>checkout</title>
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
        <div class="container">
            <h2 class="page-title">Checkout</h2>
            <div class="item-card">
                <div class="item">
                    <div class="row">
                        <div class="col">
                            <img src="../../assets/images/makanan_kucing.jpg" alt="petshop.com">
                        </div>
                        <div class="col">
                            <div class="detail">
                                <h1 class="title" name="nama-produk">cat choice</h1>
                                <h4 class="price" name="harga-produk">Rp. 12.000</h4>
                                <h6 class="description" name="deskripsi-produk">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
                                anim id est laborum.
                                </h6>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="item-card">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Pemesan</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jumlah Pesanan</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                    </div>
                </form>
            </div>
            <div class="item-card">
                <div class="button-section">
                    <button type="submit" class="btn btn-info button-pressed">Beli</button>
                    <a type="button" class="btn btn-danger button-pressed" href="index.php">Batal</a>
                </div>
            </div>
        </div>
    </section>

    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>