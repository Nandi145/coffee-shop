<?php

include_once "../controllers/c_conn.php";

class c_cair {
    public function insert($id, $cair, $nama, $harga, $jumlah, $status, $date, $harga_satuan, $jenis) {
        $conn = new c_conn();
        $query = "INSERT INTO cair VALUES ('$id', '$cair', '$nama', '$harga', '$jumlah', '$status', '$date', '$harga_satuan', '$jenis')";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function read(){
        $conn = new c_conn();
        $query = "SELECT * FROM cair";
        $data = mysqli_query($conn->conn(), $query);
        while($row = mysqli_fetch_object($data)){
            $rows[] = $row;
        }return $rows;
    }

    public function struk($id){
        $conn = new c_conn();
        $query = "SELECT * FROM cair WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
        while($row = mysqli_fetch_object($data)){
            $rows[] = $row;
        }return $rows;
    }

    public function cetak_cair($id, $status) {
        $conn = new c_conn();
        $data = mysqli_query($conn->conn(), "UPDATE cair SET status='$status' WHERE id = $id");
    }

    public function selesai_cair($id, $pesanan, $nama, $harga, $jumlah, $date, $jenis) {
        $conn = new c_conn();
        $query = "INSERT INTO selesai VALUES ('$id', '$pesanan', '$nama', '$harga', '$jumlah', '$date', '$jenis')";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function hapus($id) {
        $conn = new c_conn();
        $data = mysqli_query($conn->conn(), "DELETE FROM cair WHERE id = $id");
    }
}