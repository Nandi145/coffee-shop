<?php

session_start();
include_once "c_conn.php";

class c_login
{
    public function register($id = 0, $username, $email, $password, $role)
    {
        $conn = new c_conn();
        $query = "INSERT INTO user VALUES ('$id', '$username', '$email', '$password', '$role', '')";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function login($email, $password)
    {
        $conn = new c_conn();
        if (isset($_POST["login"])) {
            $query = "SELECT * FROM user WHERE email='$email'";
            $sql = mysqli_query($conn->conn(), $query);
            $data = mysqli_fetch_assoc($sql);
            if ($data) {
                if (password_verify($password, $data["password"])) {
                    if ($data["role"] == "admin") {
                        $_SESSION['data'] = $data;
                        $_SESSION['role'] = $data['role'];

                        header("Location: ../views/home_admin.php");
                        exit;
                    } elseif ($data['role'] == 'kasir') {
                        $_SESSION['data'] = $data;
                        $_SESSION['role'] = $data['role'];

                        header("Location: ../views/home_kasir.php");
                        exit;
                    } elseif ($data['role'] == 'barista') {
                        $_SESSION['data'] = $data;
                        $_SESSION['role'] = $data['role'];

                        header("Location: ../views/home_barista.php");
                        exit;
                    } elseif ($data['role'] == 'user') {
                        $_SESSION['data'] = $data;
                        $_SESSION['role'] = $data['role'];

                        header("Location: ../views/home_user.php");
                        exit;
                    }
                } else {
                    echo "<script> alert('Email/Password Anda SALAH!!');
                    document.location.href= '../index.php';
                    </script>";
                }
            } else {
                echo "<script> alert('Email/Password Anda SALAH!!');
                    document.location.href= '../index.php';
                    </script>";
            }
        }
    }

    public function logout() {
        session_destroy();

        header("Location: ../index.php");
        exit;
    }

    public function ganti($id, $email, $passwordold, $password) {
        $conn = new c_conn();
        if(isset($_POST['ganti'])) {
            $query = "SELECT * FROM user WHERE email = '$email'";
            $sql = mysqli_query($conn->conn(), $query);
            $data = mysqli_fetch_assoc($sql);
            if($data) {
                if (password_verify($passwordold, $data['password'])) {
                    $datas = mysqli_query($conn->conn(), "UPDATE user SET password = '$password' WHERE id = $id");
                    session_destroy();
                    echo "<script> alert('Password Telah Di Ubah');
                    document.location.href = '../index.php';
                    </script>";
                    exit;
                }else {
                    echo "<script> alert('Password lama anda salah');
                    document.location.href = '../views/home_kasir.php';
                    </>";
                }
            }
        }
    }

    
}
