 <?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "beasiswa";
    $mysqli = mysqli_connect($host, $user, $pass, $db);

    if (!$conn) {
        die("Koneksi Gagal : " . mysqli_connect_error());
    } else{
        echo "Koneksi Berhasil";
    }

    ?> 