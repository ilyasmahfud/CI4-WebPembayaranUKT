<?= $this->extend('users/layouts/master.php') ?>

<?= $this->section('content') ?>

<div class="page-header" align="center" style="margin-top: 100px">
    <div class="container">
        <div class="row justify-content-center">
            <img src="<?= base_url('assets/img/errors-notsetyet.png'); ?>" style="width:600px" alt="">
            <h3>Wah sepertinya belum saatnya pembayaran di univeasitasmu</h3>
            <h6>Coba hubungi call center universitasmu</h6>

        </div>
    </div>
</div>

<?= $this->endSection('content') ?>