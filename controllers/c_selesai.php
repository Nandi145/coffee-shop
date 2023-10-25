<?php

include_once "c_conn.php";

class c_selesai {
    public function read() {
        $conn = new c_conn();
        $data = mysqli_query($conn->conn(), "SELECT * FROM selesai ORDER BY id DESC");
        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }
}