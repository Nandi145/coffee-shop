<?php 

include_once "c_conn.php";

class c_pesanan {
    public function insert($id, $pesanan, $nama, $harga, $jumlah, $status, $date, $price) {
        $conn = new c_conn();
        $query = "INSERT INTO pesanan VALUES ('$id', '$pesanan', '$nama', '$harga', '$jumlah', '$status', '$date', '$price' '')";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function read() {
        $conn = new c_conn();
        $query = "SELECT * FROM pesanan ORDER BY id desc";
        $data = mysqli_query($conn->conn(), $query);
        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function struk($id) {
        $conn = new c_conn();
        $query = "SELECT * FROM pesanan WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function status($id, $status) {
        $conn = new c_conn();
        $query = "UPDATE pesanan SET status='$status' WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
    }
}

?>