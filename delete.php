<?php
    include "myconnection.php";

    $id = $_GET["id_buku"];

    $query = "DELETE FROM buku WHERE id_buku=$id_buku";

    if(mysqli_query($connect, $query)){
        header('Location:homeCRUD.php');
    }
    else{
        echo "Data gagal dihapus <br>". mysqli_error($connect);
    }

    mysqli_close();
?>