<!DOCTYPE HTML>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="styleBaru.css">
    </head>
    <body>
    <div class="container">
            <header>
                <h1>TOKO BUKU MITRA</h1>
            </header>
            <nav>
                <ul>
                    <li><a href="multiLogin.php">Login</a></li>
                    <li><a href="home.php">Home</a></li>
                </ul>
            </nav>
            <h4>Selamat Datang Admin </h4>
            <br align = "right">
            <a href="insertForm.html"><button>Tambah Data Buku</button></a>
            <br><br>        
        <table>
            <tr>
                <th> Kode Buku </th>
                <th> Judul </th>
                <th> Pengarang </th>
                <th> Aksi </th>
            </tr>
            <?php
                include "myconnection.php";

                $query = "SELECT * FROM buku";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> <?php echo $row["id_buku"]; ?> </td>
                <td> <?php echo $row["judul"]; ?> </td>
                <td> <?php echo $row["pengarang"]; ?> </td>
                <td>
                    <a href="editForm.php?id=<?php echo $row["id_buku"];?>">
                    <button>Detail</button> </a>
                    <a href="editForm.php?id=<?php echo $row["id_buku"];?>">
                    <button>Edit</button> </a>
                    <a href="delete.php?id=<?php echo $row["id_buku"]?>">
                    <button>Delete</button> </a>
                </td>
            </tr>
            <?php
                    }
                }
                else{
                    echo "0 results";
                }
            ?>
        </table>
        <br><br><br>
            <footer>
                MITRA BOOK STORE
            </footer>
    </body>
</html>