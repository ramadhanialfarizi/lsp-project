<?php 

// require '../connect.php';

$location = "localhost";
$username = "root";
$password = "";
$database = "lsp";

$conn = mysqli_connect($location, $username, $password, $database);


function read($query){
    global $conn;

    // call query for connection
    $hasil = mysqli_query($conn, $query);

    $rows = [];

    while ( $row = mysqli_fetch_assoc($hasil) ) {
        $rows[] = $row;
    }

    return $rows;
}

function input($data){
    global $conn;

    $nama_produk = htmlspecialchars($data['namaproduk']);
    $deksripsi_produk = htmlspecialchars($data['deksripsiproduk']);
    $harga = htmlspecialchars($data['hargaproduk']);
    
    $gambar = upload();
    if ($gambar === false){
        return false;
    }

    $input = "INSERT INTO produk 
                VALUES
                ('', '$gambar', '$nama_produk', '$deksripsi_produk', '$harga')
              ";

    mysqli_query($conn, $input);

    return mysqli_affected_rows($conn);

}


function upload(){

    // variabel penampung file
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek gambar di upload atau tidak
    if($error === 4){
        echo "
            <script>
                alert('Pilih gambar terlebih dahulu');
            </script>
        ";
        return false;
    }

    // cek apakah yg di upload itu gambar atau bukan
    $ektensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if( !in_array($ekstensiGambar, $ektensiGambarValid) ) {
        echo "
        <script>
            alert('yang anda upload bukan gambar');
        </script>
        ";
    }

    // cek jika ukuran gambar terlalu besar
    if ($ukuranFile > 1000000) {
        echo "
        <script>
            alert('Ukuran gambar terlalu besar');
        </script>
        ";
    }

    // generate gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar; 

    // upload gambar
    move_uploaded_file($tmpName, '../../assets/produk/' . $namaFileBaru);
    return $namaFileBaru;

}


function delete($id){
    global $conn;

    $delete = "DELETE FROM produk WHERE id = $id";

    mysqli_query($conn, $delete);

    return mysqli_affected_rows($conn);
}


function update($data){
    global $conn;

    $id = $data["id"];

    $nama_produk = htmlspecialchars($data['namaproduk']);
    $deksripsi_produk = htmlspecialchars($data['deksripsiproduk']);
    $harga = htmlspecialchars($data['hargaproduk']);
    $gambarProdukLama = htmlspecialchars($data['gambarProdukLama']);

    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarProdukLama;
    } else {
        $gambar = upload();
    }

    $tambah = "UPDATE produk SET
                    gambar_produk = '$gambar',
                    nama_produk = '$nama_produk',
                    deskripsi_produk = '$deksripsi_produk',
                    harga ='$harga',
                WHERE id = $id
              ";

    mysqli_query($conn, $tambah);

    return mysqli_affected_rows($conn);
}


?>