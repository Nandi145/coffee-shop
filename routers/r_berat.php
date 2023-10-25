<?php

include_once "../controllers/c_berat.php";
$cuak = new c_berat();

if ($_GET["aksi"] == "tambah") {
    $id = $_POST["id"];
    $berat = $_POST["berat"];
    $nama = $_POST["nama"];
    $harga_satuan = $_POST["harga_satuan"];
    $tambah = $_POST["tambah"];
    $status = $_POST["status"];
    $date = $_POST["date"];
    $jenis = $_POST["jenis"];

    $harga = $harga_satuan * $tambah;

    $cuak->insert($id, $berat, $nama, $harga, $tambah, $status, $date, $harga_satuan, $jenis);

    echo "<script> alert('Menu telah berhasil ditambahkan');
    document.location.href = '../views/menu.php';
    </script>";
} elseif ($_GET['aksi'] == 'cetak_berat') {
    $id = $_GET['id'];
    $jenis = $_GET['jenis'];
    $status = 'Dicetak';

    $cuak->cetak_berat($status, $id);

    if ($jenis == 'DESSERT') {
        echo "<script> alert('Status telah diubah menjadi Dicetak');
            document.location.href = '../views/konfirmasi_dessert.php';
            </script>";
    } elseif ($jenis == 'LAUNCH') {
        echo "<script> alert('Status telah diubah menjadi Dicetak');
            document.location.href = '../views/konfirmasi_launch.php';
            </script>";
    }
}
