<?php

include "../controllers/c_login.php";

include_once "../controllers/c_launch.php";
$baca = new c_launch();

$data = $_SESSION['data'];
$nama = $_SESSION['username'] = $data['username'];
$role = $_SESSION['role'] = $data['role'];
$photo = $_SESSION['photo'] = $data['photo'];

include_once "template/header.php";
include_once "template/sidebar.php";


?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div style="text-align: right;" class="mb-4">
        <a href="menu_admin.php" class="btn btn-dark btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-minus"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 m-0 font-weight-bold text-dark">Menu launch</h1>
                <a href="tambah_launch.php" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Menu</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Menu</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Menu</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <?php $i = 1; ?>
                    <?php foreach ($baca->read() as $read) : ?>
                        <tbody>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $read->launch ?></td>
                                <td><?= 'Rp. ' . number_format($read->harga, 0, '', '.'); ?></td>
                                <td>
                                    <img src="../assets/img/<?= $read->img ?>" width="60px" height="60px" alt="" srcset="">
                                </td>
                                <td>
                                    <a href="edit_launch.php?id=<?= $read->id ?>">EDIT</a> |
                                    <a href="../routers/r_launch.php?id=<?= $read->id ?>&aksi=delete_launch" onclick="return confirm('Yakin ingin menghapus menu ini?')">DELETE</a>
                                </td>
                                <?php $i++; ?>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
    <!-- DataTales Example -->
</div>

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

<?php include_once "template/footer.php"; ?>

</html>