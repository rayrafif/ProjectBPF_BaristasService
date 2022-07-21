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
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Ubah Data Coffee</h3>
                    </div>


                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $coffee['id']; ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input value="<?= $coffee['nama']; ?>" name="nama" type="text" class="form-control" id="nama" placeholder="Nama">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="Barista">Barista</label>
                                <select name="barista" id="menu_id" class="form-control">
                                    <?php foreach ($barista as $b) : ?>
                                        <option value="<?= $b['id']; ?>" <?php if ($coffee['barista'] == $b['id']) {
                                                                                echo "selected";
                                                                            } ?>><?= $b['nama']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('barista', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input value="<?= $coffee['stok']; ?>" name="stok" type="text" class="form-control" id="stok" placeholder="Stok">
                                <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input value="<?= $coffee['harga']; ?>" name="harga" type="text" class="form-control" id="harga" placeholder="Harga">
                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <img src="<?= base_url('assets/img/coffee/') . $coffee['gambar']; ?>" style="width:100px" class="img-thumbnail">

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                    <label for="gambar" class="custom-file-label">Choose File</label>
                                </div>
                            </div>
                            <a href="<?= base_url('Coffee') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
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