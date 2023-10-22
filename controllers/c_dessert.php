<?php
include_once "c_conn.php";

class c_dessert {
    public function insert($id, $dessert, $harga, $img) {
        $conn = new c_conn();
        $query = "INSERT INTO dessert VALUES ('$id', '$dessert', '$harga', '$img')";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function read() {
        $conn = new c_conn();
        $query = "SELECT * FROM dessert ORDER BY id DESC";
        $data = mysqli_query($conn->conn(), $query);
        while($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function edit($id) {
        $conn = new c_conn();
        $query = "SELECT * FROM dessert WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
        while($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function update($id, $dessert, $harga, $img) {
        $conn = new c_conn();
        $query = "UPDATE dessert SET dessert='$dessert', harga='$harga', img='$img' WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function delete($id) {
        $conn = new c_conn();
        $query = "DELETE FROM dessert WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
    }
}