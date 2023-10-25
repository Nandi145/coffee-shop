<?php

include_once "../controllers/c_cair.php";
$cuak = new c_cair();

if ($_GET["aksi"] == "tambah") {
    $id = $_POST["id"];
    $cair = $_POST["cair"];
    $nama = $_POST["nama"];
    $harga_satuan = $_POST["harga_satuan"];
    $tambah = $_POST["tambah"];
    $status = $_POST["status"];
    $date = $_POST["date"];
    $jenis = $_POST["jenis"];

    $harga = $harga_satuan * $tambah;

    $cuak->insert($id=0, $cair, $nama, $harga, $tambah, $status, $date, $harga_satuan, $jenis);

    echo "<script> alert('Menu telah berhasil ditambahkan');
    document.location.href = '../views/menu.php';
    </script>";
} elseif ($_GET['aksi'] == 'cetak_cair') {
    $id = $_GET['id'];
    $jenis = $_GET['jenis'];
    $status = 'Dicetak';

    $cuak->cetak_cair($id, $status);

    if ($jenis == 'KOPI') {
        echo "<script> alert('Status telah diubah menjadi Dicetak');
            document.location.href = '../views/konfirmasi.php';
            </script>";
    } elseif ($jenis == 'MINUMAN') {
        echo "<script> alert('Status telah diubah menjadi Dicetak');
            document.location.href = '../views/konfirmasi_minuman.php';
            </script>";
    }
} elseif ($_GET['aksi'] == 'selesai_cair') {
    $id = $_GET['id'];
    $pesanan = $_GET['pesanan'];
    $nama = $_GET['nama'];
    $harga = $_GET['harga'];
    $jumlah = $_GET['jumlah'];
    $date = $_GET['date'];
    $jenis = $_GET['jenis'];


    $cuak->selesai_cair('', $pesanan, $nama, $harga, $jumlah, $date, $jenis);
    if ($cuak) {
        $cuak->hapus($id);
        echo "<script> alert('Status telah diubah menjadi Selesai');
    document.location.href = '../views/print_pesanan.php';
    </script>";
    }
}
