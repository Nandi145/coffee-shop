<?php 

include_once "c_conn.php";

class c_kopi {
    public function insert($id, $kopi, $harga, $img) {
        $conn = new c_conn();
        $query = "INSERT INTO kopi VALUES ('$id', '$kopi', '$harga', '$img')";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function read() {
        $conn = new c_conn();
        $query = "SELECT * FROM kopi ORDER BY id DESC";
        $data = mysqli_query($conn->conn(), $query);
        while($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function edit($id) {
        $conn = new c_conn();
        $query = "SELECT * FROM kopi WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
        while($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function update($id, $kopi, $harga, $img) {
        $conn = new c_conn();
        $query = "UPDATE kopi SET kopi='$kopi', harga='$harga', img='$img' WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function delete($id) {
        $conn = new c_conn();
        $query = "DELETE FROM kopi WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);  
    }
}


?>