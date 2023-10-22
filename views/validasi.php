<?php

error_reporting(E_ALL ^ E_NOTICE);
include_once "../controllers/c_login.php";

if ($_SESSION['role'] == 'kasir') {
    echo "";
} elseif ($_SESSION['role'] == 'barista') {
    echo "";
} elseif ($_SESSION['role'] == 'admin') {
    echo "";
} else {
    header("Location: ../index.php");
}
