<?php

include_once "../controllers/c_launch.php";
$berat = new c_launch();

if ($_GET["aksi"] == "tambah_launch") {
    $id = $_POST['id'];
    $launch = $_POST['launch'];
    $harga = $_POST['harga'];

    $launch = strtoupper($launch);

    $can = array('jpg', 'png', 'jpeg');

    $img = $_FILES['p_launch']['name'];

    $x = explode('.', $img);

    $ekstensi = strtolower(end($x));

    $tmp = $_FILES['p_launch']['tmp_name'];

    if (in_array($ekstensi, $can) == true) {
        move_uploaded_file($tmp, '../assets/img/' . $img);

        $berat->insert($id=0, $launch, $harga, $img);

        echo "<script>alert ('Menu Telah Berhasil Di Tambahkan');
        document.location.href = '../views/menu_launch.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "update_launch") {
    $id = $_POST['id'];
    $launch = $_POST['launch'];
    $harga = $_POST['harga'];

    $launch = strtoupper($launch);
    $img = $_FILES['p_launch']['name'];

    if (!empty($img)) {
        $can = array('jpg', 'png', 'jpeg');
        $x = explode('.', $img);
        $ekstensi = strtolower(end($x));
        $tmp = $_FILES['p_launch']['tmp_name'];

        if (in_array($ekstensi, $can) == true) {
            move_uploaded_file($tmp, '../assets/img/' . $img);

            $berat->update($id, $launch, $harga, $img);

            echo "<script>alert ('Menu Telah Berhasil Di Ubah');
        document.location.href = '../views/menu_launch.php';
        </script>";
        }
    } else {
        foreach ($berat->edit($id) as $read) {
            $img = $read->img;
        }
        $berat->update($id, $launch, $harga, $img);
        echo "<script>alert ('Menu Telah Berhasil Di Ubah');
        document.location.href = '../views/menu_launch.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "delete_launch") {
    $id = $_GET['id'];
    $berat->delete($id);
    header("Location: ../views/menu_launch.php");
}
