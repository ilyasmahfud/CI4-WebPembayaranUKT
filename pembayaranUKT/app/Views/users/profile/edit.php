<?= $this->extend('users/layouts/master.php') ?>

<?= $this->section('content') ?>

<section>
    <div class="container py-4" style="margin-top:150px">
        <div class="row">
            <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                <div class="card d-flex justify-content-center p-4 shadow-lg">
                    <div class="text-center">
                        <h3 class="text-gradient text-primary">Edit Profile</h3>
                    </div>
                    <div class="card card-plain">

                        <form role="form" id="contact-form" method="post" action="<?= base_url('pembayaran-ukt/profile/save/'); ?>" enctype="multipart/form-data">
                            <div class="card-body pb-2">
                                <div class="row">
                                    <div class="form-group mb-4 mt-md-0" align="center">
                                        <label for="Nama">Foto Profil</label>
                                        <div class="custom-file">
                                            <input name="foto" type="file" class="btn btn-primary" id="customFile">
                                            <!-- <label class="custom-file-label" for="customFile">Choose image</label> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nama Lengkap</label>
                                        <div class="input-group mb-4">
                                            <input name="fullname" value="<?= $data->fullname; ?>" class="form-control" placeholder="Full Name" aria-label="Full Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 ps-md-2">
                                        <label>NIM</label>
                                        <input name="NIM" value="<?= $data->NIM; ?>" type="text" class="form-control" placeholder="Nomor Induk Mahasiswa">
                                    </div>
                                </div>
                                <div class="form-group mb-4 mt-md-0">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <input name="email" value="<?= $data->email; ?>" type="email" class="form-control" placeholder="hello@creative-tim.com">
                                    </div>
                                </div>
                                <div class="form-group mb-4 mt-md-0">
                                    <label>Tanggal Lahir</label>
                                    <input name="tanggal_lahir" value="<?= $data->tanggal_lahir; ?>" class="form-control" type="date" id="datePicker" name="tgl_lahir" placeholder="">
                                </div>
                                <div class="form-group mb-4 mt-md-0">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control form-control" name="jk">
                                        <option name="jk" value="Laki-laki">Laki-laki</option>
                                        <option name="jk" value="Prempuan">Prempuan</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4 mt-md-0">
                                    <label>Nama Pengguna</label>
                                    <input name="username" value="<?= $data->username; ?>" type="text" class="form-control" placeholder="Username" aria-label="Last Name...">
                                </div>
                                <div class="form-group mb-4 mt-md-0">
                                    <label>Universitas</label>
                                    <select class="form-control form-control" name="universitas_id">
                                        <option name="universitas_id" value="11M">Universitas Sebelas Maret</option>
                                        <option name="universitas_id" value="UMS">Universitas Muhammadiyah</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn bg-gradient-primary mt-3 mb-0">Simpan Perubahan</button>
                                    </div>
                                    <div class="card-footer text-center pt-0 px-lg-2 px-1 mt-2">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection('content') ?>