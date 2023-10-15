<?php

include_once "../controllers/c_pesanan.php";
$pesan = new c_pesanan();

if($_GET["aksi"] == "tambah") {
    $id = $_POST['id'];
    $pesanan = $_POST['menu'];
    $nama = $_POST['nama'];
    $price = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $status = $_POST['status'];
    $date = $_POST['date'];

    $harga = $jumlah * $price;

    $pesan->insert($id, $pesanan, $nama, $harga, $jumlah, $status, $date, $price, '');

    if($pesan) {
        echo "<script> alert('Pesanan telah di tambahkan!');
        document.location.href = '../views/home_kasir.php';
        </script>";
    }
}elseif ($_GET["aksi"] == "status") {
    $id = $_GET["id"];
    $status = "Dicetak";
    $pesan->status($id, $status);
    if ($pesan) {
        echo "<script> alert('Status telah di ubah menjadi Dicetak');
        document.location.href = '../views/home_barista.php';
        </script>";
    }
}elseif ($_GET["aksi"] == "selesai") {
    $id = $_GET["id"];
    $status = "Selesai";
    $pesan->status($id, $status);
    if ($pesan) {
        echo "<script> alert('Status telah di ubah menjadi Selesai');
        document.location.href = '../views/print_pesanan.php';
        </script>";
    }
}