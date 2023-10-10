<?php

include "../controllers/c_login.php";

include_once "../controllers/c_pesanan.php";
$baca = new c_pesanan();

include_once "template/header.php";


?>

<div class="container-fluid">

    <!-- Page Heading -->

    <center>
        <div style="width: 40%;" class="card shadow mb-4 mt-4">
            <div class="card-body">
                <div class="table-responsive">
                    <?php foreach ($baca->struk($_GET["id"]) as $read) : ?>
                        <div class="card-body">
                            <h1 class="mb-3"><?= $read->pesanan ?></h1>
                            <h5 style="text-align: left;"><?= $read->date ?></h5>
                            <h5 style="text-align: left;"><?= number_format($read->harga_satuan, 0, '', '.') . ' IDR'; ?></h5>
                            <h5 style="text-align: left;"><?= $read->nama ?></h5>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </center>
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