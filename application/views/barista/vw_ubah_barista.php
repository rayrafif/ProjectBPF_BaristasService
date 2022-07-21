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
                        <h3 class="card-title">Form Ubah Data Barista</h3>
                    </div>


                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <input type="hidden" name="id" value="<?= $barista['id']; ?>">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input value="<?= $barista['nama']; ?>" name="nama" type="text" class="form-control" id="nama" placeholder="Nama">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="prodi">Posisi</label>
                                <input value="<?= $barista['posisi']; ?>" name="posisi" type="text" class="form-control" id="posisi" placeholder="Posisi">
                                <?= form_error('posisi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="Shift">Shift</label>
                                <select name="shift" id="menu_id" class="form-control">
                                    <?php foreach ($shift as $s) : ?>
                                        <option value="<?= $s['id']; ?>" <?php if ($barista['shift'] == $s['id']) {
                                                                                echo "selected";
                                                                            } ?>><?= $s['type']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('shift', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input value="<?= $barista['email']; ?>" name="email" type="text" class="form-control" id="email" placeholder="Email">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <img src="<?= base_url('assets/img/barista/') . $barista['gambar']; ?>" style="width:100px" class="img-thumbnail">

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                    <label for="gambar" class="custom-file-label">Choose File</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?= base_url('barista') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah " class="btn btn-primary">Submit</button>
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