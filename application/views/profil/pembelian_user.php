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
                <div class="row">
                    <div class="col-md-12">
                        <?= $this->session->flashdata('message'); ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>No Pembelian</td>
                                    <td>Tanggal</td>
                                    <td>Total</td>
                                    <td>Status</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($pembelian as $us) : ?>
                                    <tr>
                                        <td><?= $i; ?>.</td>
                                        <td><?= $us['no_penjualan']; ?></td>
                                        <td><?= $us['tanggal']; ?></td>
                                        <td><?= $us['total_bayar']; ?></td>
                                        <td><?= $us['status']; ?></td>
                                        <td>
                                            <a href="<?= base_url('Profil/statusbeli/' . $us['no_penjualan']); ?>" class="badge badge-info">Detail</a>
                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <a href="<?= base_url('Profil/coffee') ?>" class="btn btn-secondary mb-4">
                    <i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali
                </a>
            </div>
        </section>

    </div>

    <?php $this->load->view('backend/template/footer') ?>
</div>

<?php $this->load->view('backend/template/js') ?>
</body>

</html>