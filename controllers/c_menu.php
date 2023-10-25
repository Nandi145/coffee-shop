<?php 

include_once "c_conn.php";

class c_menu {
    public function kopi() {
        $conn = new c_conn();
        $query = "SELECT * FROM kopi ORDER BY id DESC";
        $data = mysqli_query($conn->conn(), $query);
        while($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function dessert() {
        $conn = new c_conn();
        $query = "SELECT * FROM dessert ORDER BY id DESC";
        $data = mysqli_query($conn->conn(), $query);
        while($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function launch() {
        $conn = new c_conn();
        $query = "SELECT * FROM launch ORDER BY id DESC";
        $data = mysqli_query($conn->conn(), $query);
        while($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function drink() {
        $conn = new c_conn();
        $query = "SELECT * FROM drink ORDER BY id DESC";
        $data = mysqli_query($conn->conn(), $query);
        while($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function kopay($id) {
        $conn = new c_conn();
        $query = "SELECT * FROM kopi WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
        while($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function cuci($id) {
        $conn = new c_conn();
        $query = "SELECT * FROM dessert WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
        while($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function siang($id) {
        $conn = new c_conn();
        $query = "SELECT * FROM launch WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
        while($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function minum($id) {
        $conn = new c_conn();
        $query = "SELECT * FROM drink WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
        while($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function password($id) {
        $conn = new c_conn();
        $data = mysqli_query($conn->conn(), "SELECT * FROM user WHERE id = $id");
        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }
}


?>