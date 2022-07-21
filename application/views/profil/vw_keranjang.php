<?php $this->load->view('backend/template/meta') ?>
<div class="wrapper">

	<div class="preloader flex-column justify-content-center align-items-center">
		<img class="animation__shake" src="<?php echo base_url('assets/template/backend/dist') ?>/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
	</div>

	<?php $this->load->view('backend/template/navbar') ?>
	<?php $this->load->view('backend/template/sidebar') ?>

	<div class="content-wrapper">

		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0"><?php echo $judul ?></h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active"><?php echo $judul ?></li>
						</ol>
					</div>
				</div>
			</div>
		</div>


		<section class="content">
			<!-- Begin Page Content -->
			<div class="container-fluid">
				<div class="col-xl-12 col-md-12 mb-6">
					<div class="card border-left-dark shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col-auto">
									<img src="<?= base_url('assets/img/coffee/') . $coffee['gambar']; ?>" style="width:400px" class="img-thumbnail">
								</div>
								<div class="col mr-2">
									<div class="card-body">
										<form action="" method="POST">
											<input type="hidden" name="id" value="<?= $coffee['id']; ?>">
											<input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
											<input type="hidden" name="stok" value="<?= $coffee['stok'] ?>">
											<div class="form-group">
												<label for="nama">Nama Coffee</label>
												<input name="nama" type="text" value="<?= $coffee['nama']; ?>" readonly class="form-control" id="nama">
											</div>
											<div class="form-group">
												<label for="barista">Barista</label>
												<input name="barista" value="<?= $coffee['barista']; ?>" type="text" readonly class="form-control" id="barista">
											</div>
											<div class="form-group">
												<label for="stok">Stok</label>
												<input name="stok" value="<?= $coffee['stok']; ?>" type="text" readonly class="form-control" id="stok">
											</div>
											<div class="form-group">
												<label for="harga">Harga</label>
												<input name="harga" value="<?= $coffee['harga']; ?>" type="text" readonly class="form-control" id="harga">
											</div>
											<div class="form-group">
												<label for="jumlah">Jumlah</label>
												<input type="number" name="jumlah" id="jumlah" class="form-control" min='1'>
												<?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="form-group">
												<label for="total">Total Harga</label>
												<input type="text" name="total" id="total" readonly class="form-control">
											</div>
											<a href="<?= base_url('Profil/coffee') ?>" class="btn btn-danger">Tutup</a>
											<button type="submit" id="tambah" name="tambah" class="btn btn-dark float-right">Tambah Ke Keranjang</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>

	<?php $this->load->view('backend/template/footer') ?>
</div>

<?php $this->load->view('backend/template/js') ?>
</body>

</html>