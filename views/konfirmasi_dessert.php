<?php

include "../controllers/c_login.php";

include_once "../controllers/c_berat.php";
$baca = new c_berat();


$halaman = "konfirmasi_dessert";

$data = $_SESSION['data'];
$id = $_SESSION['id'] = $data['id'];
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
                            <th>Aksi</th>
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
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <?php foreach ($baca->read() as $read) : ?>
                        <?php if ($read->status == 'Dibuat' & $read->jenis == 'DESSERT') : ?>
                            <tbody>
                                <tr>
                                    <?php $i = 1; ?>
                                    <td><?= $i  ?></td>
                                    <td><?= $read->date ?></td>
                                    <td><?= $read->berat ?></td>
                                    <td><?= $read->nama ?></td>
                                    <td><?= 'Rp. ' . number_format($read->harga, 0, '', '.'); ?></td>
                                    <td><?= $read->jumlah ?></td>
                                    <td>
                                        <div class="bg-warning text-white p-2 d-inline-block my-1 bg-icon-split btn-sm">
                                            <span class="text"><?= $read->status ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="../routers/r_berat.php?id=<?= $read->id ?>&jenis=<?= $read->jenis ?>&aksi=cetak_berat" onclick="return confirm('Sudah membuat pesanan ini?')" class="btn btn-warning btn-circle btn-sm">
                                            <i class="fas fa-check"></i>
                                        </a>
                                    </td>
                                    
                                    <?php $i++ ?>
                                </tr>
                            </tbody>
                            <?php endif; ?>
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