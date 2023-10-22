<?php

include_once "../controllers/c_drink.php";
$minuman = new c_drink();

if ($_GET["aksi"] == "tambah_minum") {
    $id = $_POST['id'];
    $minum = $_POST['minum'];
    $harga = $_POST['harga'];

    $minum = strtoupper($minum);

    $can = array('jpg', 'png', 'jpeg');

    $img = $_FILES['p_minum']['name'];

    $x = explode('.', $img);

    $ekstensi = strtolower(end($x));

    $tmp = $_FILES['p_minum']['tmp_name'];

    if (in_array($ekstensi, $can) == true) {
        move_uploaded_file($tmp, '../assets/img/' . $img);

        $minuman->insert($id, $minum, $harga, $img);

        echo "<script>alert ('Menu Telah Berhasil Di Tambahkan');
        document.location.href = '../views/menu_drink.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "update_drink") {
    $id = $_POST['id'];
    $drink = $_POST['drink'];
    $harga = $_POST['harga'];

    $drink = strtoupper($drink);
    $img = $_FILES['p_drink']['name'];

    if (!empty($img)) {
        $can = array('jpg', 'png', 'jpeg');
        $x = explode('.', $img);
        $ekstensi = strtolower(end($x));
        $tmp = $_FILES['p_drink']['tmp_name'];

        if (in_array($ekstensi, $can) == true) {
            move_uploaded_file($tmp, '../assets/img/' . $img);

            $minuman->update($id, $drink, $harga, $img);

            echo "<script>alert ('Menu Telah Berhasil Di Ubah');
        document.location.href = '../views/menu_drink.php';
        </script>";
        }
    } else {
        foreach ($minuman->edit($id) as $read) {
            $img = $read->img;
        }
        $minuman->update($id, $drink, $harga, $img);
        echo "<script>alert ('Menu Telah Berhasil Di Ubah');
        document.location.href = '../views/menu_drink.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "delete_drink") {
    $id = $_GET['id'];
    $minuman->delete($id);
    header("Location: ../views/menu_drink.php");
}