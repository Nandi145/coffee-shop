<?php

include_once "../controllers/c_kopi.php";
$coffee = new c_kopi();

if ($_GET["aksi"] == "tambah_kopi") {
    $id = $_POST['id'];
    $kopi = $_POST['kopi'];
    $harga = $_POST['harga'];

    $kopi = strtoupper($kopi);

    $can = array('jpg', 'png', 'jpeg');

    $img = $_FILES['p_kopi']['name'];

    $x = explode('.', $img);

    $ekstensi = strtolower(end($x));

    $tmp = $_FILES['p_kopi']['tmp_name'];

    if (in_array($ekstensi, $can) == true) {
        move_uploaded_file($tmp, '../assets/img/' . $img);

        $coffee->insert($id, $kopi, $harga, $img);

        echo "<script>alert ('Menu Telah Berhasil Di Tambahkan');
        document.location.href = '../views/menu_kopi.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "update_kopi") {
    $id = $_POST['id'];
    $kopi = $_POST['kopi'];
    $harga = $_POST['harga'];

    $kopi = strtoupper($kopi);
    $img = $_FILES['p_kopi']['name'];

    if (!empty($img)) {
        $can = array('jpg', 'png', 'jpeg');
        $x = explode('.', $img);
        $ekstensi = strtolower(end($x));
        $tmp = $_FILES['p_kopi']['tmp_name'];

        if (in_array($ekstensi, $can) == true) {
            move_uploaded_file($tmp, '../assets/img/' . $img);

            $coffee->update($id, $kopi, $harga, $img);

            echo "<script>alert ('Menu Telah Berhasil Di Ubah');
        document.location.href = '../views/menu_kopi.php';
        </script>";
        }
    } else {
        foreach ($coffee->edit($id) as $read) {
            $img = $read->img;
        }
        $coffee->update($id, $kopi, $harga, $img);
        echo "<script>alert ('Menu Telah Berhasil Di Ubah');
        document.location.href = '../views/menu_kopi.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "delete_kopi") {
    $id = $_GET['id'];
    $coffee->delete($id);
    header("Location: ../views/menu_kopi.php");
}
