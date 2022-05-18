<!DOCTYPE HTML>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="styleBaru.css">
</head>
<body>
<div class="container">
        <header>
            <h1>TOKO BUKU MEDIA</h1>
        </header>
        <nav>
            <ul>
                <li><a href="multiLogin.php">Login</a></li>
                <li><a href="home.php">Home</a></li>
                </ul>
            </nav>
    <h4>Hasil pencarian DATA BUKU</h4>
    <table>
            <tr>
                <th> Kode Buku </th>
                <th> Judul </th>
                <th> Pengarang </th>
                <th> Aksi </th>
            </tr>
        <?php
            $judul = $_GET["carijudul"];
            include "myconnection.php";

            $query = "SELECT * FROM buku WHERE judul LIKE '%$judul%'";
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
    <a href="home.php">Kembali ke Home</a>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <footer>
                Website Footer
            </footer>  
</body>
</html>