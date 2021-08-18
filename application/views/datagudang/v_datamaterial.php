<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--h1 class="h3 mb-4 text-gray-800">Kelola User</-h1-->

    <div class="col-xl-12 col-lg-7">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow mb-4">
            <p class="m-0 text-gray-800">Data Material / <a href="<?= base_url('dashboard'); ?>">Home</a></p>
            <p class="m-0 text-gray-800 navbar-right"><?= date('D, d M Y H:i'); ?></p>
        </div>
    </div>
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <br>
            <center>
                <h4>Tabel Material</h4>
            </center>
            <br>

            <script>

            </script>

            <div class="col-sm-10">
                <div class="dropdown mb-4">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tambah Material
                    </button>
                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-default">Baru</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-defaultt">Dari Pengajuan</a>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content bg-default">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Material Baru</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="quickForm" method="POST" action="<?= base_url('data_gudang/material_baru') ?>">
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="namamaterial" class="form-control" id="namaadmin" placeholder="Masukkan Nama" value="<?= set_value('namaadmin'); ?>" required>
                                        <small class=" text-danger"><?= form_error('namaadmin'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">Tipe</label>
                                    <div class="col-sm-6">
                                        <select class="form-control select2" name="tipe">
                                            <?php foreach ($bar2 as $d) : ?>
                                                <option>
                                                    <?= $d['tipe'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="text-danger"><?= form_error('username'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">Satuan</label>
                                    <div class="col-sm-6">
                                        <select class="form-control select2" name="satuan">
                                            <?php foreach ($bar3 as $e) : ?>
                                                <option>
                                                    <?= $e['satuan'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="text-danger"><?= form_error('username'); ?></small>
                                    </div>
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

            <div class="modal fade" id="modal-defaultt">
                <div class="modal-dialog">
                    <div class="modal-content bg-default">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Material Pengajuan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="quickForm" method="POST" action="<?= base_url('data_gudang/material_baru') ?>">
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2" name="namamaterial">
                                            <?php foreach ($list as $g) : ?>
                                                <option>
                                                    <?= $g['tipe'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="text-danger"><?= form_error('username'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">Tipe</label>
                                    <div class="col-sm-6">
                                        <select class="form-control select2" name="tipe">
                                            <?php foreach ($bar2 as $h) : ?>
                                                <option>
                                                    <?= $h['tipe'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="text-danger"><?= form_error('username'); ?></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">Satuan</label>
                                    <div class="col-sm-6">
                                        <select class="form-control select2" name="satuan">
                                            <?php foreach ($bar3 as $e) : ?>
                                                <option>
                                                    <?= $e['satuan'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="text-danger"><?= form_error('username'); ?></small>
                                    </div>
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
                                <th style="width: 50px;">No</th>
                                <th>Nama</th>
                                <th>Tipe</th>
                                <th>Satuan</th>
                                <!--th>Date Create</!--th-->
                                <th style="width: 50px;">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th style="width: 50px;">No</th>
                                <th>Nama</th>
                                <th>Tipe</th>
                                <th>Satuan</th>
                                <!--th>Date Create</!--th-->
                                <th style="width: 50px;">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($bar1 as $a) : ?>
                                <tr>
                                    <td scope="row"><?= $no++ ?></td>
                                    <td><?= $a['nama']; ?></td>
                                    <td><?= $a['tipe']; ?></td>
                                    <td><?= $a['satuan']; ?></td>
                                    <td>
                                        <a href="<?= base_url('data_gudang/edit1/' . $a['id']); ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
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
<div class="container-fluid">

    <div class="row">

        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <br>
                <center>
                    <h4>Tabel Tipe</h4>
                </center>
                <br>
                <div class="card-body">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default1">Tambah Tipe</button>
                    </div>

                    <div class="modal fade" id="modal-default1">
                        <div class="modal-dialog">
                            <div class="modal-content bg-default">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Tipe</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form id="quickForm" method="POST" action="<?= base_url('data_gudang/tipe_baru') ?>">
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="namatipe" class="form-control" id="namaadmin" placeholder="Masukkan Nama" value="<?= set_value('namaadmin'); ?>" required>
                                                <small class=" text-danger"><?= form_error('namaadmin'); ?></small>
                                            </div>
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
                        <?= $this->session->flashdata('message1'); ?>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tipe</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Tipe</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($bar2 as $b) : ?>
                                        <tr>
                                            <td scope="row"><?= $no++ ?></td>
                                            <td><?= $b['tipe']; ?></td>
                                            <td>
                                                <a href="<?= base_url('data_gudang/hapus2/' . $b['id']); ?>" class="btn btn-sm btn-danger">Hapus</a>
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


        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <br>
                <center>
                    <h4>Tabel Satuan</h4>
                </center>
                <br>
                <div class="card-body">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default2">Tambah Satuan</button>
                    </div>

                    <div class="modal fade" id="modal-default2">
                        <div class="modal-dialog">
                            <div class="modal-content bg-default">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Satuan</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form id="quickForm" method="POST" action="<?= base_url('data_gudang/satuan_baru') ?>">
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-3 col-form-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="namasatuan" class="form-control" id="namaadmin" placeholder="Masukkan Nama" value="<?= set_value('namaadmin'); ?>" required>
                                                <small class=" text-danger"><?= form_error('namaadmin'); ?></small>
                                            </div>
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
                        <?= $this->session->flashdata('message2'); ?>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Satuan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Satuan</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($bar3 as $c) : ?>
                                        <tr>
                                            <td scope="row"><?= $no++ ?></td>
                                            <td><?= $c['satuan']; ?></td>
                                            <td>
                                                <a href="<?= base_url('data_gudang/hapus3/' . $c['id']); ?>" class="btn btn-sm btn-danger">Hapus</a>
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

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->