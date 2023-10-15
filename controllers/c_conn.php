<?php

class c_conn
{
    public function conn()
    {
        $conn = mysqli_connect("localhost", "root", "", "ngopi");
        return $conn;
        if (!$conn) {
            die('koneksi databse gagal: ' . mysqli_connect_error());
        } else {
            echo "<script> alert('koneksi database berhasil');</script>";
        }
    }
}
