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
                    <div class="float-right">
                        <a href="<?= base_url('Penjualan/export') ?>" class="btn btn-warning text-gray-900 btn-sm"><i class="fa fa-file-pdf"></i>&nbsp;&nbsp;Export</a>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid my-auto">
                <?= $this->session->flashdata('message');
                ?>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive text-gray-100">
                            <table class="table table-bordered text-gray-100" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>No Pembelian</td>
                                        <td>Tanggal</td>
                                        <td>Pelanggan</td>
                                        <td>Total</td>
                                        <td>Status</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($penjualan as $us) : ?>
                                        <tr>
                                            <td><?= $i; ?>.</td>
                                            <td><?= $us['no_penjualan']; ?></td>
                                            <td><?= $us['tanggal']; ?></td>
                                            <td><?= $us['nama']; ?></td>
                                            <td><?= $us['total_bayar']; ?></td>
                                            <td><?= $us['status']; ?></td>
                                            <td>
                                                <a href="<?= base_url('Penjualan/detail/' . $us['no_penjualan']); ?>" class="btn btn-info">Detail</a>
                                            </td>
                                        </tr>
                                        <?php $i++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </section>

    </div>

    <?php $this->load->view('backend/template/footer') ?>
</div>

<?php $this->load->view('backend/template/js') ?>
</body>

</html>