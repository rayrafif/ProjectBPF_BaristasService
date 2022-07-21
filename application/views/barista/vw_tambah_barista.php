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
                        <h3 class="card-title">Form Tambah Data Barista</h3>
                    </div>


                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input name="nama" type="text" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="posisi">Posisi</label>
                                <input name="posisi" value="<?= set_value('posisi'); ?>" type="text" class="form-control" id="posisi" placeholder="Posisi">
                                <?= form_error('posisi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="shift">Shift</label>
                                <select name="shift" id="shift" value="<?= set_value('shift'); ?>" class="form-control">
                                    <option value="">Pilih Shift</option>
                                    <?php foreach ($shift as $s) : ?>
                                        <option value="<?= $s['id']; ?>"><?= $s['type']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('prodi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" value="<?= set_value('email'); ?>" type="text" class="form-control" id="email" placeholder="Email">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="kompetensi">Gambar</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                    <label for="gambar" class="custom-file-label">Choose File</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?= base_url('Barista') ?>" class="btn btn-danger">Tutup</a>
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