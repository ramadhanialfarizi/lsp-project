<?php 
require '../../controller/admin/auth-crud.php';

session_start();

if (isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

if (isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    // cek apakah yg diketikan oleh user ada di database
    $result = mysqli_query($conn, "SELECT * FROM seller WHERE email = '$email'");

    // cek username
    if (mysqli_num_rows($result) === 1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"]) ) {

            // set session
            // bikin sebuah variabel session yg key nya adalah login yang diisi dengan bolean true
            $_SESSION["login"] = true;

            // header = untuk redirrect ke halaman selanjutnya
            header("Location: index.php");
            exit;
        }

        // password_verify = untuk cek string sama dengan hash
        // password_verify(string yg blm diacak, string yg sudah diacak)

    } 

    $error = true;
    echo "<script>
        alert ('akun tidak ditemukan');
    </script>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/login.css?v=<?php echo time(); ?>">
    <title>login</title>
</head>
<body>
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="../../assets/images/seller.jpg" alt="">
                </div>
                <div class="col">
                    <form action="" method="post">
                        <h1 class="title">Login Penjual</h1>
                        <p class="subtitle">Masukan Akun Anda</p>
                        <div class="input-section">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" name="email">
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" name="password">
                                <label for="floatingPassword">Password</label>
                            </div>
                        </div>
                        <div class="button-section">
                            <button type="submit" class="btn btn-outline-dark" name="login">Login</button>
                            <button type="button" class="btn btn-outline-info" onclick="location.href='register-penjual.php';">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>