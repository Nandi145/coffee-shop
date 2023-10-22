<?php

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'admin') {
        header('Location: views/home_admin.php');
    }elseif ($_SESSION['role'] == 'barista') {
        header("Location: views/home_barista.php");
    }elseif($_SESSION['role'] == 'kasir') {
        header("Location: views/home_kasir.php");
    }else {
        echo "";
    }
}