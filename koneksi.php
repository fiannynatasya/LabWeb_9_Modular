<h1>Latihan Koneksi PHP</h1>
    <?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "latihan1";

    $conn = mysqli_connect($host, $user, $pass, $db);
    if ($conn == false) 
    {
        echo "Koneksi ke server gagal";
        die();
    }
    else {
        echo "Koneksi Berhasil";
    }
    ?>
Footer
© 2022 GitHub, Inc.