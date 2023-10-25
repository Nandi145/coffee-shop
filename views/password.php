<?php include "../controllers/c_login.php";
include "../controllers/c_menu.php";
$adid = new c_menu();

$halaman = "input_kasir";

$data = $_SESSION['data'];
$nama = $_SESSION['username'] = $data['username'];
$role = $_SESSION['role'] = $data['role'];
$photo = $_SESSION['photo'] = $data['photo'];

include_once "template/header.php";
?>

<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <center>
            <br>
            <br>
            <div class="card shadow mb-4 mt-5" style="width: 20%;" style="height: 20%;">
                <div class="card-header py-3">
                    <h6 class="m-1 font-weight-bold text-dark">Ubah Password</h6>
                </div>

                <br>
                <form class="user" action="../routers/r_login.php?aksi=ganti_pass" method="post" enctype="multipart/form-data">
                    <?php foreach($adid->password($_GET['id']) as $edit) : ?>
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <input type="text" name="id" id="id" hidden value="<?= $edit->id ?>">
                        <div class="form-group ">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email" name="email" value="<?= $edit->email ?>" readonly>
                        </div>
                        <div class="form-group ">
                            <input type="password" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Password Lama" name="passwordold">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password Baru" name="password">
                        </div>
                        <button type="submit" name="ganti" class="btn btn-secondary btn-user btn-block">Ubah</button>
                    </div>
                    <?php endforeach; ?>
                    <hr>
                </form>
            </div>
        </center>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

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

<?php include_once "template/footer.php" ?>