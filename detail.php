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

            <?php
                include "myconnection.php";

                $query = "SELECT * FROM buku";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>

            <h4>Detail Buku</h4>
            Kode buku :
            <?php echo $row["id_buku"]; ?>
            <br><br>
            Judul :
            <?php echo $row["judul"]; ?>
            <br><br>
            Pengarang :
            <?php echo $row["pengarang"]; ?>
            <br><br>
            Penerbit :
            <?php echo $row["penerbit"]; ?>
            <br><br>
            Deskripsi :
            <?php echo $row["deskripsi"]; ?>
            <br><br><br><br> 
            <a href="home.php">Kembali ke Home</a>
            <br><br>
            <?php
                    }
                }
                else{
                    echo "0 results";
                }
            ?>
            <footer>
                MITRA STOREBOOK
            </footer>  
    </body>
</html>