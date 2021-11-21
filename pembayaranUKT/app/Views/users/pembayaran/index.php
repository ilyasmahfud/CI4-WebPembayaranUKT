<?= $this->extend('users/layouts/master.php') ?>

<?= $this->section('content') ?>

<div class="page-header">
    <!-- <div class="position-absolute fixed-top ms-auto w-50 h-100 rounded-3 z-index-0 d-none d-sm-none d-md-block me-n4" style="background-image: url(assets/img/ivancik.jpg); background-size: cover;">
    </div> -->
    <div class="container py-5" style="margin-top:100px">
        <div class="row">
            <div class="card card-body d-flex justify-content-center shadow-lg p-5 blur align-items-center">
                <h3 class="text-center">Tagihan anda</h3>
                <form enctype="multipart/form-data" role="form" id="contact-form" method="post" action='<?= base_url('pembayaran-ukt/pembayaran/lakukan-pembayaran'); ?>'>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label>NIM</label>
                                <div class="input-group mb-4">
                                    <input value='<?= $data1['NIM']; ?>' disabled class="form-control" placeholder="" aria-label="First Name..." type="text">
                                </div>
                            </div>
                            <div class="col-md-6 ps-2">
                                <label>Nama Mahasiswa</label>
                                <div class="input-group">
                                    <input value='<?= $data1['fullname'] ?>' disabled type="text" class="form-control" placeholder="" aria-label="Last Name...">
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label>Total Tagihan</label>
                            <div class="input-group">
                                <input disabled value='<?= $data1['nominal'] ?>' type="number" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="">Sudah dibayar</label>
                                <div class="input-group">
                                    <input disabled value='<?= $data2['nominal_terbayar']; ?>' type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Akan dibayar</label>
                                <div class="input-group">
                                    <input name="nominal_pembayaran" value='' type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>

                        <!-- <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Status</label>
                                <div class="input-group mb-4">
                                    echo "<input value='". $status."' disabled class='form-control bg-gradient-danger' aria-label='First Name...' type='text'>";
                                    <?php
                                    if ($data1['status'] == 'BELUM BAYAR') {
                                        $status = "belum dibayar";
                                        echo "<span class='badge bg-gradient-danger p-2'>" . $status . "</span>";
                                    } elseif ($data1['status'] === "SUDAH MEMBAYAR") {
                                        $status = "sudah dibayar";
                                        echo "<span class='badge bg-gradient-warning p-2'>" . $status . "</span>" . "<hr>";
                                        echo "<span class='badge bg-gradient-info p-2'>Belum dikonfirmasi</span>";
                                    } elseif ($data1['status'] === "SUDAH TERKONFIMASI") {
                                        $status = "sudah terkonfirmasi";
                                        echo "<span class='badge bg-gradient-success p-2'>" . $status . "</span>";
                                    }
                                    ?>
                                </div>

                            </div>
                            <div class="col-md-6 ps-2">
                                <label for="Nama">Bukti Pembayaran</label>
                                <div class="custom-file">
                                    <?php
                                    if ($data1['status'] === 'SUDAH LUNAS') {
                                        echo "<input disabled name='bukti_pembayaran' type='file' class='btn btn-light' id='customFile'>
                                            <style>
                                            #customFile {
                                                
                                                font-size: 11px;
                                            }
                                            </style>
                                            ";
                                    } else {
                                        echo "<input name='bukti_pembayaran' type='file' class='btn btn-light' id='customFile'>
                                            <style>
                                            #customFile {
                                                
                                                font-size: 11px;
                                            }
                                            </style>
                                            ";
                                    }
                                    ?>
                                    <input style="font-size:12px" name="bukti_pembayaran" type="file" class="btn btn-light" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose image</label>
                        </div> -->

                        <!-- <div class="form-group mb-4">
                        <label>Catatan</label>
                        <?php
                        if ($data1['status'] == 'SUDAH LUNAS') {
                            echo "<textarea disabled name='catatan' class='form-control' id='message' rows='4'></textarea>";
                        } else {
                            echo "<textarea name='catatan' class='form-control' id='message' rows='4'></textarea>";
                        }
                        ?>
                        </div> -->

                        <label>Pilih metode pembayaran</label>
                        <hr>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="metode_pembayaran" id="inlineRadio1" value="BRI" checked>
                            <label class="form-check-label" for="inlineRadio1" name="metode_pembayaran" value="BRI">BRI</label>
                            <div>
                                <p>No Rekening BRI</p>
                                <h3>12345678</h3>
                                <p>Atas Nama Kemendikti</p>
                            </div>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="metode_pembayaran" id="inlineRadio2" value="BSI">
                            <label class="form-check-label" for="inlineRadio2" name="metode_pembayaran" value="BSI">BSI</label>
                            <div>
                                <p>No Rekening BSI</p>
                                <h3>87654321</h3>
                                <p>Atas Nama Kemendikti</p>
                            </div>
                        </div>
                        <hr class="mt-0 pt-0">

                        <div class="row">
                            <div class="col-md-12">
                                <button type='submit' class='btn bg-gradient-primary w-100'>Lakukan Pembayaran</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>