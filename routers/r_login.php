<?php

include_once "../controllers/c_login.php";
$login = new c_login();

if($_GET["aksi"] == "register") {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $password = password_hash($password, PASSWORD_DEFAULT); 

    $login->register($id=0, $username, $email, $password, $role);
    if($login) {
        echo "<script> alert('Akun berhasil di registrasi');
        document.location.href = '../views/register.php';
        </script>";
    }
}elseif ($_GET["aksi"] == "login") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $login->login($email, $password);
}elseif ($_GET["aksi"] == "logout") {
    $login->logout();
}elseif ($_GET['aksi'] == 'ganti_pass') {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $passwordold = $_POST['passwordold'];
    $password = $_POST['password'];

    $password = password_hash($password, PASSWORD_DEFAULT);

    $login->ganti($id, $email, $passwordold, $password);
}


