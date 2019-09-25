<?php
session_start();
if ($_SESSION['akseslogin']) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <nav>
            <a href="hal.php">Halaman 1</a>|
            <a href="hal2.php">Halaman 2</a>|
            <a href="hal3.php">Halaman 3</a>|
            <a href="logout.php">Logout</a>|
        </nav>
        Halo <?php echo $_SESSION['akseslogin'];?>
        <form action="" method="post">
        <fieldset>
        <legend><h1>Luas Lingkaran</h1></legend>
        Diameter : <input type="number" name="di" required><br>
        <input type="submit" name="si" >
        </fieldset>
        </form>
    </body>

    </html>
<?php
    if (isset($_POST['si'])) {
        $a = $_POST ['di'];
        $b = $a/2;
        $luas =3.14 * ($b*$b);

        echo "Diameter : $a <br>";
        echo "Jari-jari : $b<br>";
        echo "Luas Lingkaran : $luas";
        echo "<hr>";
    }
}else {
    echo "<script>alert('Silahkan Login Terlebih Dahulu');".
    "window.location.href='login2.php'</script>";

}
?>



