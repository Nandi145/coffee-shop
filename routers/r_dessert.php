<?php

include_once "../controllers/c_dessert.php";
$cuci = new c_dessert();

if ($_GET["aksi"] == 'tambah_dessert') {
    $id = $_POST['id'];
    $dessert = $_POST['dessert'];
    $harga = $_POST['harga'];
    $img = $_FILES['p_dessert']['name'];


    $dessert = strtoupper($dessert);

    $can = array('jpg', 'png', 'jpeg');

    $img = $_FILES['p_dessert']['name'];

    $x = explode('.', $img);

    $ekstensi = strtolower(end($x));

    $tmp = $_FILES['p_dessert']['tmp_name'];

    if (in_array($ekstensi, $can) == true) {
        move_uploaded_file($tmp, '../assets/img/' . $img);

        $cuci->insert($id=0, $dessert, $harga, $img);

        echo "<script>alert ('Menu Telah Berhasil Di Tambahkan');
        document.location.href = '../views/menu_dessert.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "update_dessert") {
    $id = $_POST['id'];
    $dessert = $_POST['dessert'];
    $harga = $_POST['harga'];

    $dessert = strtoupper($dessert);
    $img = $_FILES['p_dessert']['name'];

    if (!empty($img)) {
        $can = array('jpg', 'png', 'jpeg');
        $x = explode('.', $img);
        $ekstensi = strtolower(end($x));
        $tmp = $_FILES['p_dessert']['tmp_name'];

        if (in_array($ekstensi, $can) == true) {
            move_uploaded_file($tmp, '../assets/img/' . $img);

            $cuci->update($id, $dessert, $harga, $img);

            echo "<script>alert ('Menu Telah Berhasil Di Ubah');
        document.location.href = '../views/menu_dessert.php';
        </script>";
        }
    } else {
        foreach ($cuci->edit($id) as $read) {
            $img = $read->img;
        }
        $cuci->update($id, $dessert, $harga, $img);
        echo "<script>alert ('Menu Telah Berhasil Di Ubah');
        document.location.href = '../views/menu_dessert.php';
        </script>";
    }
}elseif ($_GET["aksi"] == "delete_dessert") {
    $id = $_GET['id'];
    $cuci->delete($id);
    header("Location: ../views/menu_dessert.php");
}
