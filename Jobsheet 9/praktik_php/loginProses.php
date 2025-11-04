<?php
    include "koneksi.php"; // pastikan file koneksi.php ada di folder yang sama

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connect, $query);
    $cek = mysqli_num_rows($result);

    if ($cek) {
        echo "Anda berhasil login. Silakan menuju ";
        ?>
        <a href="homeAdmin.html">Halaman HOME</a>
        <?php
    } else {
        echo "Anda gagal login. Silakan ";
        ?>
        <a href="loginForm.html">Login kembali</a>
        <?php
        echo "<br>";
        echo mysqli_error($connect);
    }
?>
