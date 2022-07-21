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
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach; ?>
                            </tbody>
                    </div>
                    <form action="" method="POST">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>No Pembelian</td>
                                        <td>Coffee</td>
                                        <td>Jumlah</td>
                                        <td>Total</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($detailbeli as $us) : ?>
                                        <tr>
                                            <td><?= $i; ?>.</td>
                                            <td><?= $us['no_penjualan']; ?></td>
                                            <td><?= $us['nama_coffee']; ?></td>
                                            <td><?= $us['jumlah']; ?></td>
                                            <td><?= $us['total']; ?></td>
                                        </tr>
                                        <?php $i++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12">
                            <input type="hidden" name="no_penjualan" value="<?= $us['no_penjualan']; ?>">
                            <table class="table">
                                <tr>
                                    <td>Apakah pesanan sudah anda terima ?</td>
                                    <td>
                                        <select name="status" id="status" class="form-control">
                                            <option value="">Pilih Status</option>
                                            <option value="Diterima">Sudah</option>
                                            <option value="Gagal">Belum</option>
                                        </select>
                                        <?= form_error('status', '<small class="text-danger pi-3>', '</small>'); ?>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i>&nbsp;&nbsp;Ubah Status</button>
                                        <a href="<?= base_url('Profil/pembelian') ?>" class="btn btn-secondary">
                                            <i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <?php $this->load->view('backend/template/footer') ?>
</div>

<?php $this->load->view('backend/template/js') ?>
</body>

</html>