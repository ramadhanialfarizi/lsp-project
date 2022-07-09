<?php 

require '../../controller/admin/product-crud.php';

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login-penjual.php");
    exit;
}

$id = $_GET['id'];

if ( delete($id) > 0 ){
    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'product.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal dihapus');
            document.location.href = 'product.php';
        </script>
    ";
}


?>