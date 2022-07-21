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
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="card-img">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title"><?= $user['nama']; ?></h5>
								<p class="card-text"><?= $user['email']; ?></p>
								<p class="card-text"><small class="text-muted">Member Sejak <?= date('d F Y', $user['date_created']); ?></small></p>
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