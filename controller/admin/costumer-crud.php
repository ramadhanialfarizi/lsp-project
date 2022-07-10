<?php 

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

function delete($id){
    global $conn;

    $delete = "DELETE FROM user WHERE id = $id";

    mysqli_query($conn, $delete);

    return mysqli_affected_rows($conn);
}

?>