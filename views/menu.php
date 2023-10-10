<?php include "../controllers/c_login.php";

$halaman = "menu";

$data = $_SESSION['data'];
$nama = $_SESSION['username'] = $data['username'];
$role = $_SESSION['role'] = $data['role'];
$photo = $_SESSION['photo'] = $data['photo'];

include_once "../controllers/c_menu.php";
$baca = new c_menu();

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
                <h6 class="m-1 font-weight-bold text-secondary">Menu Kopi</h6>
            </div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <?php foreach($baca->redi() as $read) : ?>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="input_kasir.php?id=<?= $read->id ?>">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                <?= $read->menu ?></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= 'Rp ' . number_format($read->harga, 0, '', '.'); ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="../assets/img/<?= $read->img ?>" width="60px" height="60px" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                    <!-- <div class="col-xl-3 col-md-6 mb-4">
                        <a href="input_kasir.php?id=2">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                Americano</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 5.000</div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="../assets/img/Iced Americano.jpg" width="60px" height="60px" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="input_kasir.php?id=3">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                Latte</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 7.000</div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="../assets/img/Holiday Spiced Café Au Lait - The Local Palate.jpg" width="60px" height="60px" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="input_kasir.php?id=4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                Cappucino</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 10.000</div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="../assets/img/Cappuccino.jpg" width="60px" height="60px" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div> -->
                </div>
            </div>
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