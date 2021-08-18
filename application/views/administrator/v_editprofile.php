<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--h1 class="h3 mb-4 text-gray-800">Kelola User</-h1-->

    <div class="col-xl-12 col-lg-7">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow mb-4">
            <p class="m-0 text-gray-800">Edit Profile / <a href="<?= base_url('dashboard'); ?>">Home</a></p>
            <p class="m-0 text-gray-800 navbar-right"><?= date('D, d M Y H:i'); ?></p>
        </div>
    </div>
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Body -->
            <br>

            <!--form action="<?= form_open_multipart('user/update'); ?>"-->
            <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
                <?= form_open_multipart('user/update'); ?>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">User name</label>
                    <div class="col-sm-7">
                        <input type="text" name="username" class="form-control" id="inputName" value="<?= $user['username']; ?>" readonly></input>
                        <small class="text-danger"><?= form_error('iduser'); ?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-7">
                        <input type="text" name="nama" class="form-control" id="inputName" value="<?= $user['nama']; ?>"></input>
                        <small class="text-danger"><?= form_error('nama'); ?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-7">
                        <input type="text" name="nik" class="form-control" id="inputName" value="<?= $user['nik']; ?>"></input>
                        <small class="text-danger"><?= form_error('nik'); ?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-7">
                        <input type="text" name="jabatan" class="form-control" id="inputName" value="<?= $user['wilayah']; ?>"></input>
                        <small class="text-danger"><?= form_error('wilayah'); ?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="modal-body row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-3">
                            <img src="<?= base_url('asset/sbadmin/img/profile/') . $user['foto']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-4">
                            <div class="costom-files">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                            <small class="text-danger"><?= form_error('image'); ?></small>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="<?= base_url('user'); ?>" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->