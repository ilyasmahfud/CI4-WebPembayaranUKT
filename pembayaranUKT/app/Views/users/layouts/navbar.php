<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid px-0">
                    <a class="navbar-brand font-weight-bolder ms-sm-3" href="<?= base_url('pembayaran-ukt/home'); ?>" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
                        Home
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover ms-lg-12 ps-lg-5 w-100">

                            <li class="nav-item ms-lg-auto">
                                <div class="nav-link nav-link-icon me-2">

                                    <!-- <img src='../storage/12112021142124bg about.png' style="height: 50px" alt=""> -->
                                </div>
                            </li>
                            <!-- <li class="nav-item my-auto ms-3 ms-lg-0">
                                <a href='../views/user-profile.php?username=<?php //echo $_GET['username'] 
                                                                            ?>' class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0">Profile</a>
                                                                        </li> -->
                            <li>
                                <div class="dropdown" style="border-radius: 100%;">
                                    <button class="btn bg-gradient-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src='<?php //echo $data['foto_profil'] 
                                                    ?>' style="height: 30px; width: 30px; border-radius:100%;object-fit: cover;border-radius: 100%;" alt="">
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="<?= base_url('pembayaran-ukt/profile'); ?>">Profil</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('pembayaran-ukt/pembayaran'); ?>">Pembayaran</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('/logout'); ?>">Keluar</a></li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
    </div>
</div>