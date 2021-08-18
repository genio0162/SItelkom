<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--h1 class="h3 mb-4 text-gray-800">Kelola User</-h1-->

    <div class="col-xl-12 col-lg-7">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow mb-4">
            <p class="m-0 text-gray-800">My Profile / <a href="<?= base_url('dashboard'); ?>">Home</a></p>
            <p class="m-0 text-gray-800 navbar-right"><?= date('D, d M Y H:i'); ?></p>
        </div>
    </div>
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Body -->
            <br>
            <div class="card-body">
                <div class="form-group row">
                    <div class="modal-body row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('asset/sbadmin/img/profile/') . $user['foto']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-6">
                            <div class="costom-files">
                                <label for="inputName" class="col-sm-5 col-form-label">Data User :</label>
                            </div>
                            <div class="costom-files">
                                <label for="inputName" class="col-sm-5 col-form-label"><?= $user['nama']; ?></label>
                            </div>
                            <div class="costom-files">
                                <label for="inputName" class="col-sm-5 col-form-label"><?= $user['nik']; ?></label>
                            </div>
                            <div class="costom-files">
                                <label for="inputName" class="col-sm-5 col-form-label"><?= $user['wilayah']; ?></label>
                            </div><br>
                            <div class="form-group row">
                                <div class="offset-sm-0 col-sm-10">
                                    <a href="<?= base_url('user/editprofile'); ?>" class="btn btn-warning">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?= $this->session->flashdata('message'); ?>

            <div class="card-body">
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->