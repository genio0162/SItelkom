<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--h1 class="h3 mb-4 text-gray-800">Kelola User</-h1-->

    <div class="col-xl-12 col-lg-7">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow mb-4">
            <p class="m-0 text-gray-800">Kelola User / <a href="<?= base_url('dashboard'); ?>">Home</a></p>
        </div>
    </div>
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Body -->
            <br>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Tambah User</button>
            </div>

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content bg-default">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah User</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="quickForm" method="POST" action="<?= base_url('administrator/userbaru') ?>">
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">Nama User</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="namaadmin" class="form-control" id="namaadmin" placeholder="Masukkan Nama" value="<?= set_value('namaadmin'); ?>" required>
                                        <small class=" text-danger"><?= form_error('namaadmin'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">E-mail</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="username" class="form-control" id="Id Admin" placeholder="Masukkan E-mail" value="<?= set_value('idadmin'); ?>" required>
                                        <small class="text-danger"><?= form_error('username'); ?></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password1" class="form-control" id="password1" placeholder="Masukkan Password" required>

                                    </div>
                                    <div class="col">
                                        <label for="exampleInputPassword1">Masukkan ulang password</label>
                                        <input type="password" name="password2" class="form-control" id="password2" placeholder="Masukkan Password" required>
                                    </div>
                                </div><br>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">NIK</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nik" class="form-control" id="Id Admin" placeholder="Masukkan NIK" value="<?= set_value('nik'); ?>" required>
                                        <small class="text-danger"><?= form_error('nik'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">Jabatan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="wilayah" class="form-control" id="Id Admin" placeholder="Masukkan NIK" value="<?= set_value('nik'); ?>" required>
                                        <small class="text-danger"><?= form_error('nik'); ?></small>
                                    </div>
                                </div>
                                <label for="inputName" class="col-sm-3 col-form-label">Posisi</label>
                                <div class="form-check">
                                    <input class="col-sm-1 form-check-input" type="radio" name="role" id="flexRadioDefault1" data-target="flexRadioDefaultkk" value="1">
                                    <label class="col-sm-4 form-check-label" for="flexRadioDefault1">
                                        Admin Gudang
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="col-sm-1 form-check-input" type="radio" name="role" id="flexRadioDefault1" value="2">
                                    <label class="col-sm-4 form-check-label" for="flexRadioDefault2">
                                        Teknisi
                                    </label>
                                </div>
                                <label for="inputName" class="col-sm-8 col-form-label">Wilayah Gudang</label>
                                <div class="form-check">
                                    <input class="col-sm-1 form-check-input" type="radio" name="id_wilayah" id="flexRadioDefault2" value="1">
                                    <label class="col-sm-6 form-check-label" for="flexRadioDefault1">
                                        WH JEMBER
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="col-sm-1 form-check-input" type="radio" name="id_wilayah" id="flexRadioDefault2" value="2">
                                    <label class="col-sm-6 form-check-label" for="flexRadioDefault1">
                                        SO INV JEMKOT IN
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="col-sm-1 form-check-input" type="radio" name="id_wilayah" id="flexRadioDefault2" value="3">
                                    <label class="col-sm-6 form-check-label" for="flexRadioDefault1">
                                        SO INV JEMKOT OUT
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="col-sm-1 form-check-input" type="radio" name="id_wilayah" id="flexRadioDefault2" value="4">
                                    <label class="col-sm-6 form-check-label" for="flexRadioDefault1">
                                        SO INV JEMBER
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="col-sm-1 form-check-input" type="radio" name="id_wilayah" id="flexRadioDefault2" value="5">
                                    <label class="col-sm-6 form-check-label" for="flexRadioDefault1">
                                        SO INV TANGGUL IN
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="col-sm-1 form-check-input" type="radio" name="id_wilayah" id="flexRadioDefault2" value="6">
                                    <label class="col-sm-6 form-check-label" for="flexRadioDefault1">
                                        SO INV TANGGUL OUT
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="col-sm-1 form-check-input" type="radio" name="id_wilayah" id="flexRadioDefault2" value="7">
                                    <label class="col-sm-6 form-check-label" for="flexRadioDefault1">
                                        SO INV GENTENG
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="col-sm-1 form-check-input" type="radio" name="id_wilayah" id="flexRadioDefault2" value="8">
                                    <label class="col-sm-6 form-check-label" for="flexRadioDefault1">
                                        SO INV BANYUWANGI
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="col-sm-1 form-check-input" type="radio" name="id_wilayah" id="flexRadioDefault2" value="9">
                                    <label class="col-sm-6 form-check-label" for="flexRadioDefault1">
                                        SO INV BONDOWOSO
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="col-sm-1 form-check-input" type="radio" name="id_wilayah" id="flexRadioDefaul2" value="10">
                                    <label class="col-sm-6 form-check-label" for="flexRadioDefault2">
                                        SO INV SITUBONDO
                                    </label>
                                </div><br>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
            </div>


            <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>E-mail</th>
                                <th>Password</th>
                                <!--th>Date Create</!--th-->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>E-mail</th>
                                <th>Password</th>
                                <!--th>Date Create</!--th-->
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($waw as $a) : ?>
                                <tr>
                                    <td scope="row"><?= $no++ ?></td>
                                    <td><?= $a['nama']; ?></td>
                                    <td><?= $a['username']; ?></td>
                                    <td><?= $a['password2']; ?></td>
                                    <td>
                                        <a href="<?= base_url('administrator/hapus1/' . $a['id']); ?>" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->