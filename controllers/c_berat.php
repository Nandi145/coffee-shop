<?php

include_once "../controllers/c_conn.php";

class c_berat {
    public function insert($id, $berat, $nama, $harga, $jumlah, $status, $date, $harga_satuan, $jenis) {
        $conn = new c_conn();
        $query = "INSERT INTO berat VALUES ('$id', '$berat', '$nama', '$harga', '$jumlah', '$status', '$date', '$harga_satuan', '$jenis')";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function read(){
        $conn = new c_conn();
        $query = "SELECT * FROM berat";
        $data = mysqli_query($conn->conn(), $query);
        while($row = mysqli_fetch_object($data)){
            $rows[] = $row;
        }return $rows;
    }

    public function struk($id){
        $conn = new c_conn();
        $query = "SELECT * FROM berat WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
        while($row = mysqli_fetch_object($data)){
            $rows[] = $row;
        }return $rows;
    }

    public function cetak_berat($status, $id){
        $conn = new c_conn();
        $data = mysqli_query($conn->conn(), "UPDATE berat SET status='$status' WHERE id = $id");
    }
}