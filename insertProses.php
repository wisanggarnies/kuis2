
<?php
    include "myconnection.php";

    $id_buku = $_GET["myidbuku"];
    $judul = $_GET["myjudul"];
    $pengarang = $_GET["mypengarang"];
    $penerbit = $_GET["mypenerbit"];
    $deskripsi = $_GET["mydeskripsi"];

    $query = "INSERT INTO buku(id_buku, judul, pengarang, penerbit, deskripsi)
            VALUE('$id_buku', '$judul', '$pengarang', '$penerbit', '$deskripsi')";

    if(mysqli_query($connect, $query)){
        echo "Data baru berhasil ditambahkan";
    }
    else{
        echo "Data baru gagal ditambahkan <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>