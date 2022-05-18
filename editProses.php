<?php
    include "myconnection.php";

    $id_buku = $_POST["myidbuku"];
    $judul = $_POST["myjudul"];
    $pengarang = $_POST["mypengarang"];
    $penerbit = $_POST["mypenerbit"];
    $deskripsi = $_POST["mydeskripsi"];

    $query ="UPDATE buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit' deskripsi='$deskripsi' WHERE id_buku=$id_buku";

    if(mysqli_query($connect, $query)){
        header('Location:homeCRUD.php');
    }
    else{
        echo "Gagal mengubah data <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>