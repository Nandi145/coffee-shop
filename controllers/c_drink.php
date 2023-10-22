<?php

include_once "c_conn.php";

class c_drink {
    public function insert($id, $minum, $harga, $img) {
        $conn = new c_conn();
        $query = "INSERT INTO drink VALUES ('$id', '$minum', '$harga', '$img')";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function read() {
        $conn = new c_conn();
        $query = "SELECT * FROM drink ORDER BY id DESC";
        $data = mysqli_query($conn->conn(), $query);
        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function update($id, $drink, $harga, $img) {
        $conn = new c_conn();
        $query = "UPDATE drink SET minum='$drink', harga='$harga', img='$img' WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function edit($id) {
        $conn = new c_conn();
        $query = "SELECT * FROM drink WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function delete($id) {
        $conn = new c_conn();
        $query = "DELETE FROM drink WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);

        header("Location: ../index.php");
    }
}