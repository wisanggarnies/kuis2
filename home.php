<!DOCTYPE html>
<html>
<head></head>
        <title>TOKO BUKU MITRA</title>
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
            <MARQUEE>======SELAMAT DATANG DI TOKO BUKU MITRA======</MARQUEE>
            <form action="search.php" method="get">
                Cari Judul Buku:
                <input type="text" name="carijudul">
                <input type="submit" value="Cari">
            </form>
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
                    $result = mysqli_query($connect);
    
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td> <?php echo $row["id_buku"]; ?> </td>
                    <td> <?php echo $row["judul"]; ?> </td>
                    <td> <?php echo $row["pengarang"]; ?> </td>
                    <td>
                        <a href="detail.php?id=<?php echo $row["id_buku"];?>">
                        <button>Detail</button> </a>
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