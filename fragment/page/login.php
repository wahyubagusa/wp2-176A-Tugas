<?php
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users where username='$username' and pass='$password'";
$baca = mysqli_query($conn, $sql);
$chek = ($baca);
if($chek>0) {
    echo "<script>
    alert('Login Berhasil');
    window.location='index.php';
    </script>";
}
else {
    echo "<script>
    alert('Login Gagal');
    window.location='menu_login.php';
    </script>";
}

?>
