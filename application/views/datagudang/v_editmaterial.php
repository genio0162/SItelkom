<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--h1 class="h3 mb-4 text-gray-800">Kelola User</-h1-->

    <div class="col-xl-12 col-lg-7">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow mb-4">
            <p class="m-0 text-gray-800">Edit Material / <a href="<?= base_url('dashboard'); ?>">Home</a></p>
            <p class="m-0 text-gray-800 navbar-right"><?= date('D, d M Y H:i'); ?></p>
        </div>
    </div>
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <br>
            <center>
                <h4>Edit Data Material</h4>
            </center>
            <br>

            <?php foreach ($bar1 as $u) { ?>
                <div class="card-body">
                    <div class="tab-content">
                        <form id="quickForm" method="POST" action="<?= base_url('data_gudang/update1'); ?>">
                            <div class="active tab-pane" id="activity">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-6">
                                        <input type="hidden" name="id_material" class="form-control" id="inputName" value="<?= $u['id'] ?>">
                                        <input type="text" name="nama" class="form-control" id="inputName" value="<?= $u['nama'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">Jenis</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="tipe" class="form-control" id="inputName" value="<?= $u['tipe'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">Satuan</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="satuan" class="form-control" id="inputName" value="<?= $u['satuan'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-3 col-sm-6">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <a href="<?= base_url('data_gudang/data_material'); ?>" class="btn btn-primary">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php } ?>

            <div class="card-body">
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->