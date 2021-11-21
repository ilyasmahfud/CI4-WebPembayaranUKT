<?= $this->extend('users/halaman_awal/master.php') ?>

<?= $this->section('content') ?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-8 text-center mx-auto my-auto">
			<h1 class="text-white">Bayar UKT yok!</h1>
			<p class="lead mb-4 text-white opacity-8">Kalau bisa sekarang ngapain nunggu kaya? Masuk dan temukan hal menarik disini</p>
			<a href="<?= base_url('register'); ?>">
				<button type="submit" class="btn bg-white text-dark">Create Account</button>
			</a>
			<h6 class="text-white mb-2 mt-5">Find us on</h6>
			<div class="d-flex justify-content-center">
				<a href="javascript:;"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
				<a href="javascript:;"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
				<a href="javascript:;"><i class="fab fa-twitter text-lg text-white me-4"></i></a>
				<a href="javascript:;"><i class="fab fa-google-plus text-lg text-white"></i></a>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection('content') ?>