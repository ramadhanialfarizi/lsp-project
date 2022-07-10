<?php 
// require '../connect.php';

$location = "localhost";
$username = "root";
$password = "";
$database = "lsp";

$conn = mysqli_connect($location, $username, $password, $database);

function register($data){
    global $conn;

    $email = strtolower(stripslashes($data["email"]));
    $name = strtolower(stripslashes($data["name"]));
    $contact = strtolower(stripslashes($data["contact"]));
    $alamat = strtolower(stripslashes($data["alamat"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $confirm_password = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

    if (mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert ('Email sudah terdaftar');
             </script>";
        return false;
    }

    if ( $password !== $confirm_password ) {
        echo "<script>
            alert ('konfirmasi password tidak sesuai');
        </script>";

        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES('', '$name', '$email', '$contact', '$alamat', '$password')");

    return mysqli_affected_rows($conn);

}

?>