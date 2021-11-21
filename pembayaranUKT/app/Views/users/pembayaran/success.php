<?= $this->extend('users/layouts/master.php') ?>

<?= $this->section('content') ?>

<div class="page-header" align="center" style="margin-top: 100px">
    <div class="container">
        <div class="row justify-content-center">
            <img src="<?= base_url('assets/img/transaksi-berhasil.png'); ?>" style="width:600px" alt="">
            <h3>Wuuhuu pembayaran berhasil</h3>
            <h6>Tunggu konfirmasi dari kami yaa</h6>

        </div>
    </div>
</div>

<?= $this->endSection('content') ?>