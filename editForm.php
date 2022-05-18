<!DOCTYPE HTML>
<html>
    <head>
        <title>EDIT</title>
    </head>
    <body>
        <?php
            include "myconnection.php";
            $id_buku = $_GET['id_buku'];
            $query = "SELECT * FROM buku WHERE id_buku = '$id_buku'";
            $result = mysqli_query($connect, $query);
        ?>
        <form action="editProcess.php" method="post" enctype="multipart/form-data">
            <table>
            <?php
                while($row=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> Kode Buku: </td>
                <td> <input type="text" name="myidbuku" value="<?php echo $row['id_buku'];?>" readonly> </td>
            </tr>
            <tr>
                <td> Judul: </td>
                <td> <input type="text" name="myjudul" value="<?php echo $row['judul'];?>"> </td>
            </tr>
            <tr>
                <td> Pengarang: </td>
                <td>
                    <textarea name="mypengarang" rows="5" cols="20"><?php echo $row['pengarang'];?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td> Penerbit: </td>
                <td>
                    <textarea name="mypenerbit" rows="5" cols="20"><?php echo $row['penerbit'];?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td> Deskripsi: </td>
                <td>
                    <textarea name="mydeskripsi" rows="5" cols="20"><?php echo $row['deskripsi'];?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td> <input type="submit" name="save" value="Simpan"> </td>
            </tr>
            <?php
                }
            ?>
            </table>
        </form>  
    </body>
</html>