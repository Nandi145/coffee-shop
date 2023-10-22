<?php

include_once "c_conn.php";

class c_launch {
    public function insert($id, $launch, $harga, $img) {
        $conn = new c_conn();
        $query = "INSERT INTO launch VALUES ('$id', '$launch', '$harga', '$img')";
        $data = mysqli_query($conn->conn(),$query );
    }

    public function read() {
        $conn = new c_conn();
        $data = mysqli_query($conn->conn(), "SELECT * FROM launch ORDER BY id DESC");
        while($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function edit($id) {
        $conn = new c_conn();
        $data = mysqli_query($conn->conn(), "SELECT * FROM launch WHERE id = $id");
        while($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function update($id, $launch, $harga, $img) {
        $conn = new c_conn();
        $data = mysqli_query($conn->conn(), "UPDATE launch SET launch='$launch', harga='$harga', img='$img' WHERE id = $id");
    }

    public function delete($id) {
        $conn = new c_conn();
        $data = mysqli_query($conn->conn(), "DELETE FROM launch WHERE id = $id");
    }
}