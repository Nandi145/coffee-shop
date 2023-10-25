<?php

include "../controllers/c_login.php";


$halaman = "admin";

$data = $_SESSION['data'];
$id = $_SESSION['id'] = $data['id'];
$nama = $_SESSION['username'] = $data['username'];
$role = $_SESSION['role'] = $data['role'];
$photo = $_SESSION['photo'] = $data['photo'];

include_once "template/header.php";
include_once "template/sidebar.php";

?>

<div class="container-fluid">

    <center>
        <div class="card shadow mb-4" style="width: 50%;" style="height: 50%;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Profil</h6>
            </div>
            <div class="card-body">
                <div class="row">
                        <img style="margin-left: 35%;" class="img-profile rounded-circle" src="../assets/img/<?= $photo; ?>" alt="" srcset="" width="25%" height="25%">
                        <div style="text-align: left;" class="ml-2">
                            <h1 class="m-0 font-weight-bold text-dark">Selamat Datang <?= $nama; ?></h1>
                            <div class="mt-1">
                                <h3 class="m-0 font-weight-bold text-dark">Role Anda Sebagai <?= $role; ?></h3>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </center>

</div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->

<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper --

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<?php include_once "template/footer.php"; ?>

</html>