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

    public function kopay($id) {
        $conn = new c_conn();
        $query = "SELECT * FROM kopi WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
        while($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }
}


?>