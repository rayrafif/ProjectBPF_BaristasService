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
            <div class="container-fluid">
                <div class="row">
                    <?= $this->session->flashdata('message');
                    ?>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-md-12 mb-6">
                        <div class="card border-left-dark shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <img src="<?= base_url('assets/img/pembayaran/') . $penjualan['gambar']; ?>" style="width:400px" class="img-thumbnail">
                                    </div>
                                    <div class="col mr-2">
                                        <div class="card-body">
                                            <form action="" method="POST">
                                                <div class="form-group">
                                                    <label for="no_penjualan">No Penjualan</label>
                                                    <input name="no_penjualan" type="text" value="<?= $penjualan['no_penjualan']; ?>" readonly class="form-control" id="no_penjualan">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pelanggan">Pelanggan</label>
                                                    <input name="pelanggan" value="<?= $penjualan['nama']; ?>" type="text" readonly class="form-control" id="pelanggan">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <input name="alamat" value="<?= $penjualan['alamat']; ?>" type="text" readonly class="form-control" id="alamat">
                                                </div>
                                                <div class="form-group">
                                                    <label for="total_bayar">Total Pembayaran</label>
                                                    <input name="total_bayar" value="<?= $penjualan['total_bayar']; ?>" type="text" readonly class="form-control" id="harga">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Status">Status</label>
                                                    <select name="status" id="status" class="form-control">
                                                        <option value="">Pilih Status</option>
                                                        <option value="Pengemasan">Pengemasan</option>
                                                        <option value="Proses Pengiriman">Proses Pengiriman</option>
                                                        <option value="Dikirim">Dikirim</option>
                                                    </select>
                                                    <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                                <a href="<?= base_url('Penjualan') ?>" class="btn btn-danger">Tutup</a>
                                                <button type="submit" id="tambah" name="tambah" class="btn btn-dark float-right">Ubah Status</button>
                                            </form>
                                        </div>
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