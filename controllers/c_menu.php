<?php

include_once "c_conn.php";

class c_menu
{
    public function read($id)
    {
        $conn = new c_conn();
        $query = "SELECT * FROM menu WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function redi()
    {
        $conn = new c_conn();
        $query = "SELECT * FROM menu";
        $data = mysqli_query($conn->conn(), $query);
        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }
}
