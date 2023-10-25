<?php include "../controllers/c_login.php";

$halaman = "input_kasir";

$data = $_SESSION['data'];
$id = $_SESSION['id'] = $data['id'];
$nama = $_SESSION['username'] = $data['username'];
$role = $_SESSION['role'] = $data['role'];
$photo = $_SESSION['photo'] = $data['photo'];

include_once "template/header.php";
include_once "template/sidebar.php"; ?>

<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <div style="text-align: right;">
        <a href="menu_drink.php" class="btn btn-dark btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-minus"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
    <br>
    <!-- Page Heading -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-1 font-weight-bold text-dark">Tambah Minum</h6>
            </div>

            <br>
                <form class="user" action="../routers/r_drink.php?aksi=tambah_minum" method="post" enctype="multipart/form-data">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <input type="text" name="id" id="id" hidden>
                        <div class="form-group ">
                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nama Minum" name="minum">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Harga" name="harga">
                        </div>
                        
                        <div class="form-group ml-2">
                            <input type="file" class="file-control file-control-user" id="exampleInputPassword" name="p_minum">
                        </div>
                        <button type="submit" class="btn btn-secondary btn-user btn-block">Tambah Menu</button>
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