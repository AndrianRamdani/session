<?php
    session_start();
        if (isset ($_POST['Login'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
        //periksa login
            if ($user == "andrian" && $pass = "123") {
        //menciptakan session
                $_SESSION['login'] = $user;
        //menuju ke halaman pemeriksaan session
                echo "<h1>Anda berhasil LOGIN</h1>";
                echo "<h2>Klik <a href='session2.php'>di sini
                     (session2.php)</a>
                     untuk menuju ke halaman pemeriksaan session";
            }
        else {
            die("username atau password anda salah
            silahkan kembali login <a href=session1.php> Login </a>");
        }
     }
    elseif ($_SESSION['login']) {
        echo "<script>";
        echo "alert('Anda Sudah Login');
             window.location.href='session2.php'";
        echo "</script>";
    }
        else {
            
?>
<html>
    <head>
        <title>Login here...</title>
    </head>
    <body>
        <form action="" method="post">
            <h2>Login Here...</h2>
                Username : <input type="text" name="user"><br>
                Password : <input type="password" name="pass"><br>
                <input type="submit" name="Login" value="Log In">
        </form>
    </body>
</html>
<?php } ?>