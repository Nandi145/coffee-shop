<?php include "../controllers/c_login.php";
include "../controllers/c_menu.php";
$menu = new c_menu();

$halaman = "register";

$data = $_SESSION['data'];
$nama = $_SESSION['username'] = $data['username'];
$role = $_SESSION['role'] = $data['role'];
$photo = $_SESSION['photo'] = $data['photo'];

include_once "template/header.php";
include_once "template/sidebar.php"; ?>

<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-1 font-weight-bold text-dark">Register Pegawai</h6>
            </div>

            <br>
            <form class="user" action="../routers/r_login.php?aksi=register" method="post" enctype="multipart/form-data">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" name="id" id="id" hidden>
                    <div class="form-group ">
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="exampleInputPassword" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                    </div>

                    <div class="form-group col-sm-10 mb-5 mb-sm-3">
                        <select name="role" id="role" class="select-control select-control-user col-sm-2">
                            <option value="kasir">Kasir</option>
                            <option value="barista">Barista</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                <button type="submit" class="btn btn-dark btn-user btn-block">Daftarkan</button>
        </div>
        <hr>
        </form>
    </div>
</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
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