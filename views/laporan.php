<?php

include "../controllers/c_login.php";

include_once "../controllers/c_pesanan.php";
$baca = new c_pesanan();

include_once "template/header.php";


?>

<div class="container-fluid">

    <!-- Page Heading -->

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pesanan</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Pesanan</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                        </tr>
                    </tfoot>
                    <?php $i = 1; ?>
                    <?php foreach ($baca->read() as $read) : ?>
                        <?php if ($read->status == 'Selesai') : ?>
                            <tbody>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $read->pesanan ?></td>
                                    <td><?= $read->nama ?></td>
                                    <td><?= 'Rp. ' . number_format($read->harga, 0, '', '.'); ?></td>
                                    <td><?= $read->jumlah ?></td>
                                    
                                    <?php $i++; ?>
                                </tr>
                            <?php endif; ?>
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

<script>
    window.print();
</script>
<?php include_once "template/footer.php"; ?>

</html>