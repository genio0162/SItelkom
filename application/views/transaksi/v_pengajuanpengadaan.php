<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--h1 class="h3 mb-4 text-gray-800">Kelola User</-h1-->

    <div class="col-xl-12 col-lg-7">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow mb-4">
            <p class="m-0 text-gray-800">Pengajuan Pengadaan / <a href="<?= base_url('dashboard'); ?>">Home</a></p>
            <p class="m-0 text-gray-800 navbar-right"><?= date('D, d M Y H:i'); ?></p>
        </div>
    </div>
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <br>
            <center>
                <h4>Pengajuan Pengadaan</h4>
            </center>
            <br>

            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Buat Pengajuan</button>
            </div>

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content bg-default">
                        <div class="modal-header">
                            <h4 class="modal-title">Pengajuan Pengadaan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="quickForm" method="POST" action="<?= base_url('transaksi/input_pengajuan') ?>">
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-6 col-form-label">Material yang akan diadakan :</label>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">Nama Barang</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="tipe" class="form-control" id="inputName" value="" required></input>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">Tipe</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="satuan" class="form-control" id="inputName" value="" required></input>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 col-form-label">Jumlah</label>
                                    <div class="col-sm-3">
                                        <input type="number" name="jumlah" class="form-control" id="inputName" value="" required></input>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-3 form-label"></label>
                                    <div class="col-sm-6">
                                        <input type="hidden" name="nama" class="form-control" id="inputName" value="<?= $user['nama'] ?>" readonly></input>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-3 col-sm-10">
                                        <button type="submit" name="tambah" class="btn btn-success btn-flat">
                                            <i class="fa fa-paper-plane"></i>&nbsp;&nbsp;Submit
                                        </button>
                                        <!--a href="<?= base_url('user'); ?>" class="btn btn-primary">Kembali</!--a-->
                                    </div>
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
                                <th>Tanggal</th>
                                <th>Nama Teknisi</th>
                                <th>Nama Barang</th>
                                <th>Tipe</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                                <!--th>Date Create</!--th-->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama Teknisi</th>
                                <th>Nama Barang</th>
                                <th>Tipe</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                                <!--th>Date Create</!--th-->
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($list as $a) : ?>
                                <tr>
                                    <td scope="row" style="width: 50px;"><?= $no++ ?></td>
                                    <td><?= $a['tanggal'] ?></td>
                                    <td><?= $a['pemohon'] ?></td>
                                    <td><?= $a['tipe'] ?></td>
                                    <td><?= $a['satuan'] ?></td>
                                    <td><?= $a['jumlah'] ?></td>
                                    <?php if ($a['statusin'] == 0) :  ?>
                                        <td class="text-warning"> Pending </td>
                                        <td>
                                        </td>
                                    <?php elseif ($a['statusin'] == 1) :  ?>
                                        <td class="text-success"> Diterima </td>
                                        <td><a href="<?= base_url('transaksi/print_pengajuan/' . $a['id']); ?>" class="btn btn-xs btn-dark"><i class="fas fa-print"></i></a>
                                            <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#modal-default1<?= $a['id']; ?>"><i class="fas fa-plus-square"></i></a>
                                        </td>
                                    <?php elseif ($a['statusin'] == 2) : ?>
                                        <td class="text-danger"> Ditolak </td>
                                        <td><a href="#" data-toggle="modal" data-target="#modal-defaultt<?= $a['id']; ?>" class="btn btn-xs btn-warning"><i class="fas fa-edit"></i></a></td>
                                    <?php elseif ($a['statusin'] == 3) :  ?>
                                        <td class="text-primary"> Masuk Stok </td>
                                        <td><a href="<?= base_url('transaksi/print_pengajuan/' . $a['id']); ?>" class="btn btn-xs btn-dark"><i class="fas fa-print"></i></a></td>
                                    <?php endif; ?>

                                    <div class="modal fade" id="modal-defaultt<?= $a['id']; ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-default">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Pengajuan</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form id="quickForm" method="POST" action="<?= base_url('transaksi/update1') ?>">
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-6 col-form-label">Material yang akan diadakan :</label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3">
                                                                <input type="hidden" name="id" class="form-control" id="inputName" value="<?= $a['id']; ?>" readonly></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-3 col-form-label">Nama</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" name="tipe" class="form-control" id="inputName" value="<?= $a['tipe']; ?>" readonly></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-3 col-form-label">Tipe</label>
                                                            <div class="col-sm-3">
                                                                <input type="text" name="satuan" class="form-control" id="inputName" value="<?= $a['satuan']; ?>" readonly></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-3 col-form-label">Jumlah</label>
                                                            <div class="col-sm-3">
                                                                <input type="number" name="jumlah" class="form-control" id="inputName" value="<?= $a['jumlah']; ?>"></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-3 col-form-label"></label>
                                                            <div class="col-sm-6">
                                                                <input type="hidden" name="nama" class="form-control" id="inputName" value="<?= $user['nama'] ?>" readonly></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="offset-sm-3 col-sm-10">
                                                                <button type="submit" name="tambah" class="btn btn-success btn-flat">
                                                                    <i class="fa fa-paper-plane"></i>&nbsp;&nbsp;Submit
                                                                </button>
                                                                <!--a href="<?= base_url('user'); ?>" class="btn btn-primary">Kembali</!--a-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                    </div>

                                    <div class="modal fade" id="modal-default1<?= $a['id']; ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-default">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Tambahkan ke Stok</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form id="quickForm" method="POST" action="<?= base_url('transaksi/tambah_pengajuanstok/' . $a['id']); ?>">
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-9 col-form-label">Material yang akan dimasukkan :</label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3">
                                                                <input type="hidden" name="id" class="form-control" id="inputName" value="<?= $a['id']; ?>" readonly></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-3 col-form-label">Tanggal</label>
                                                            <div class="col-sm-6">
                                                                <input type="date" name="date" value="<?= date('Y-m-d'); ?>" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-3 col-form-label">Nama</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" name="tipe" class="form-control" id="inputName" value="<?= $a['tipe']; ?>" readonly></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-3 col-form-label">Tipe</label>
                                                            <div class="col-sm-3">
                                                                <select class="form-control select2" name="namatipe">
                                                                    <?php foreach ($bar2 as $g) : ?>
                                                                        <option>
                                                                            <?= $g['tipe'] ?>
                                                                        </option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                                <small class="text-danger"><?= form_error('username'); ?></small>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-3 col-form-label">Satuan</label>
                                                            <div class="col-sm-3">
                                                                <input type="text" name="satuan" class="form-control" id="inputName" value="<?= $a['satuan']; ?>" readonly></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-3 col-form-label">Jumlah</label>
                                                            <div class="col-sm-3">
                                                                <input type="txt" name="jumlah" class="form-control" id="inputName" value="<?= $a['jumlah']; ?>" readonly></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputName" class="col-sm-3 col-form-label"></label>
                                                            <div class="col-sm-6">
                                                                <input type="hidden" name="nama" class="form-control" id="inputName" value="<?= $user['nama'] ?>" readonly></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="offset-sm-3 col-sm-10">
                                                                <button type="submit" name="tambah" class="btn btn-success btn-flat">
                                                                    <i class="fa fa-paper-plane"></i>&nbsp;&nbsp;Submit
                                                                </button>
                                                                <!--a href="<?= base_url('user'); ?>" class="btn btn-primary">Kembali</!--a-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                    </div>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-body">
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->