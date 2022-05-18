<!DOCTYPE HTML>
<html>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styleBaru.css">
<head>
    <body>
        <?php
            if(isset($_GET["error"])){
                $error = $_GET["error"];
            }
            else{
                $error = "";
            }

            $message = "";
            if($error=="gagal"){
                $message = "Gagal login, silahkan coba kembali";
            }
        ?>
        <p style="color:red"><?php echo $message;?></p>

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
            <h4>Silahkan login terlebih dahulu</h4>

        <form action="multiProcess.php" method="post">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" size="20"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" size="20"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="login" value="Login"></td>
                </tr>
            </table>
        </form>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <footer>
                MITRA BOOK STORE
        </footer>  
    </body>
</html>