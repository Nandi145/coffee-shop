<?php

include "../controllers/c_login.php";

include_once "../controllers/c_pesanan.php";
$baca = new c_pesanan();

$halaman = "semua";

$data = $_SESSION['data'];
$nama = $_SESSION['username'] = $data['username'];
$role = $_SESSION['role'] = $data['role'];
$photo = $_SESSION['photo'] = $data['photo'];

include_once "template/header.php";
include_once "template/sidebar.php";


?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-dark">Tabel Data</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Pesanan</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Pesanan</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Jumlahr</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <?php $i = 1; ?>
                    <?php foreach ($baca->read() as $read) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $read->date; ?></td>
                                    <td><?= $read->pesanan ?></td>
                                    <td><?= $read->nama ?></td>
                                    <td><?= 'Rp. ' . number_format($read->harga, 0, '', '.'); ?></td>
                                    <td><?= $read->jumlah ?></td>
                                    <td>
                                    <div class="<?php if ($read->status == "Dibuat") {
                                        echo "bg-warning text-white p-2 d-inline-block my-1 bg-icon-split btn-sm";
                                    }elseif($read->status == "Dicetak") {
                                        echo "bg-info text-white p-2 d-inline-block my-1 bg-icon-split btn-sm";
                                    }elseif($read->status == "Selesai") {
                                        echo "bg-success text-white p-2 d-inline-block my-1 bg-icon-split btn-sm";
                                    } ?>"
                                        <span class="text"><?= $read->status ?></span>
                                    </div>
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

<?php include_once "template/footer.php"; ?>

</html>