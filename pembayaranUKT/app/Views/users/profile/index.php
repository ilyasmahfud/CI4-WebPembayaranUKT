<?= $this->extend('users/layouts/master.php') ?>

<?= $this->section('content') ?>

<section class="py-sm-7 position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="row py-lg-7 py-5">
                    <div class="col-lg-3 col-md-5 position-relative my-auto">
                        <img class="img border-radius-lg max-width-200 w-100 position-relative z-index-2" src="<?php //echo $data['foto_profil'] 
                                                                                                                ?>" alt="foto <?php //echo $data['nama_mahasiswa'] 
                                                                                                                                ?> belum diupdate">
                    </div>
                    <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h4 class="mb-0"><?= $data->fullname; ?></h4>
                            <div class="d-block">
                                <a href="<?= base_url('pembayaran-ukt/profile/edit'); ?>">
                                    <button type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0">Edit Profile</button>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <span class="h6">Username : <?= $data->username; ?></span>
                                <span><?php //echo $data['username'] 
                                        ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <span class="h6">NIM : <?= $data->NIM; ?></span>
                                <span><?php //echo $data['NIM'] 
                                        ?></span>
                            </div>
                            <!-- <div class="col-auto">
                  <span class="h6">3.5k</span>
                  <span>Followers</span>
                </div>
                <div class="col-auto">
                  <span class="h6">260</span>
                  <span>Following</span>
                </div> -->
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <span class="h6">Perguruan Tinggi : <?= $data->universitas_id; ?></span>
                                <span><?php //echo $data['nama_univ'] 
                                        ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <span class="h6">E-mail : <?= $data->email; ?></span>
                                <span><?php //echo $data['email'] 
                                        ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <span class="h6">Tanggal Lahir : <?= $data->tanggal_lahir; ?></span>
                                <span><?php //echo $data['tgl_lahir'] 
                                        ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <span class="h6">Instagram : <?= $data->sosmed; ?></span>
                                <span><?php //echo $data['sosmed'] 
                                        ?></span>
                            </div>
                        </div>
                        <p class="text-lg mb-0">

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Testimonials w/ user image & text & info -->
<!-- START Blogs w/ 4 cards w/ image & text & link -->
<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="">Riwayat Pembayaran</h3>
            </div>
        </div>

    </div>
</section>

<!-- END Blogs w/ 4 cards w/ image & text & link -->
<section class="py-lg-7">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card overflow-hidden mb-1">
                    <div class="row">
                        <div class="col-lg-7">
                            <form class="p-3" id="contact-form" method="post">

                                <table class="table">
                                    <!-- <caption>List of users</caption> -->
                                    <tr>
                                        <th>Perubahan Terakhir</th>
                                        <th>Catatan</th>
                                        <th>Nominal</th>
                                        <th>Status</th>
                                    </tr>

                                </table>

                            </form>
                        </div>
                        <div class="col-lg-5 position-relative bg-cover px-0" style="background-image: url('assets/img/curved-images/curved5.jpg')">
                            <div class="position-absolute z-index-2 w-100 h-100 top-0 start-0 d-lg-block d-none">
                                <img src="<?= base_url('assets/img/wave-1.svg'); ?>" class="h-100 ms-n2" alt="vertical-wave">
                            </div>
                            <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                                <div class="mask bg-gradient-info opacity-9"></div>
                                <div class="p-5 ps-sm-8 position-relative text-start my-auto z-index-2">
                                    <h3 class="text-white">Contact Information</h3>
                                    <p class="text-white opacity-8 mb-4">
                                        Lets contact us!
                                    </p>
                                    <div class="d-flex p-2 text-white">
                                        <div>
                                            <i class="fas fa-phone text-sm"></i>
                                        </div>
                                        <div class="ps-3">
                                            <span class="text-sm opacity-8">(+40) 772 100 200</span>
                                        </div>
                                    </div>
                                    <div class="d-flex p-2 text-white">
                                        <div>
                                            <i class="fas fa-envelope text-sm"></i>
                                        </div>
                                        <div class="ps-3">
                                            <span class="text-sm opacity-8">hello@creative-tim.com</span>
                                        </div>
                                    </div>
                                    <div class="d-flex p-2 text-white">
                                        <div>
                                            <i class="fas fa-map-marker-alt text-sm"></i>
                                        </div>
                                        <div class="ps-3">
                                            <span class="text-sm opacity-8">Dyonisie Wolf Bucharest, RO 010458</span>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Facebook">
                                            <i class="fab fa-facebook"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Twitter">
                                            <i class="fab fa-twitter"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Dribbble">
                                            <i class="fab fa-dribbble"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Instagram">
                                            <i class="fab fa-instagram"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection('content') ?>