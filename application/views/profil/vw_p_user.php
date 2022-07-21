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
				<!-- Page Heading -->
				<div class="row">
					<div class="col-md-12">
						<?= $this->session->flashdata('message');
						?>
					</div>
					<?php $i = 1; ?>
					<?php foreach ($coffee as $us) : ?>
						<div class="col-xl-4 col-md-6 mb-4">
							<div class="card border-bottom-dark shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="tetxt-xs font-weight-bold text-gray-800">Rp.<?= $us['harga'] ?></div>
											<div>Stok <a class="badge badge-warning"><?= $us['stok'] ?></a></div>
										</div>
										<div class="col-auto">
											<img src="<?= base_url('assets/img/coffee/') . $us['gambar']; ?>" style="width:100px" class="img-thumbnail">
										</div>
									</div>
									<div class="align-items-center">
										<a href="<?= base_url('Profil/keranjang/') . $us['id'] ?>" class="badge badge-danger badge-block">Beli Sekarang</a>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</section>

	</div>

	<?php $this->load->view('backend/template/footer') ?>
</div>

<?php $this->load->view('backend/template/js') ?>
</body>

</html>