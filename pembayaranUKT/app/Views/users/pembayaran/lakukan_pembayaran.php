<?= $this->extend('users/layouts/master.php') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <?php
    $validation = \config\Services::validation();
    ?>
    <!-- <div class="position-absolute fixed-top ms-auto w-50 h-100 rounded-3 z-index-0 d-none d-sm-none d-md-block me-n4" style="background-image: url(assets/img/ivancik.jpg); background-size: cover;">
    </div> -->
    <div class="container py-5" style="margin-top:100px">
        <div class="row">
            <div class="card card-body d-flex justify-content-center shadow-lg p-5 blur align-items-center">
                <h3 class="text-center">Tagihan anda</h3>
                <form enctype="multipart/form-data" role="form" id="contact-form" method="post" action='<?= base_url('pembayaran-ukt/pembayaran/konfirmasi-pembayaran'); ?>'>
                    <div class="card-body">
                        <div class="mb-4">
                            <label>Total Tagihan</label>
                            <div class="input-group">
                                <input name="nominal" disabled value='<?= $pembayaran['nominal_pembayaran'] ?>' type="number" class="form-control" placeholder="">
                                <input type="hidden" name="tagihan_id" value="<?= $data1['tagihan_id']; ?>">
                                <input type="hidden" name="nominal" value="<?= $pembayaran['nominal_pembayaran']; ?>">
                                <input type="hidden" name="metode_pembayaran" value="<?= $pembayaran['metode_pembayaran']; ?>">
                            </div>
                        </div>

                        <label>Alamat Pembayaran</label>
                        <hr>
                        <?php
                        if ($pembayaran['metode_pembayaran'] == 'BRI') {
                            echo "
                            <div class='card'>
                                <p>No Rekening BRI</p>
                                <h3>12345678</h3>
                                <p>Atas Nama Kemendikti</p>
                            </div>
                            ";
                        } elseif ($pembayaran['metode_pembayaran'] == 'BSI') {
                            echo "
                            <div class='card'>
                                <p>No Rekening BSI</p>
                                <h3>87654321</h3>
                                <p>Atas Nama Kemendikti</p>
                            </div>
                            ";
                        }
                        ?>
                        <hr class="mt-0 pt-0">

                        <div class="custom-file">
                            <label class="custom-file-label" for="foto">Bukti Pembayaran</label><br>
                            <input name="bukti_pembayaran" type="file" class='btn btn-light' <?php echo ($validation->hasError('foto')) ? 'is-invalid' : '' ?>" id="foto" onChange="previewImg()">
                            <div class="invalid-feedback mt-2">
                                <?php echo $validation->getError('foto'); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button type='submit' class='btn bg-gradient-primary w-100'>Konfirmasi Pembayaran</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>