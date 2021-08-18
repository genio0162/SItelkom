<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--h1 class="h3 mb-4 text-gray-800">Kelola User</-h1-->

    <div class="col-xl-12 col-lg-7">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow mb-4">
            <p class="m-0 text-gray-800">Data Permintaan / <a href="<?= base_url('dashboard'); ?>">Home</a></p>
            <p class="m-0 text-gray-800 navbar-right"><?= date('D, d M Y H:i'); ?></p>
        </div>
    </div>
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Body -->

            <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
            </div>

            <br>
            <center>
                <h4>Data Permintaan</h4>
            </center>

            <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pilihan</th>
                                <!--th>Waktu Upload</!--th-->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Pilihan</th>
                                <!--th>Waktu Upload</!--th-->
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td scope="row" style="width: 50px;">1</td>
                                <td>Data Permintaan</td>
                                <td style="width: 100px;"><a href="#" class="btn btn-xs btn-dark" data-toggle="modal" data-target="#modal-default"><i class="fas fa-download"></i> Print</a></td>
                            </tr>
                            <tr>
                                <td scope="row" style="width: 50px;">2</td>
                                <td>Tabel Permintaan</td>
                                <td style="width: 100px;"><a href="#" class="btn btn-xs btn-dark" data-toggle="modal" data-target="#modal-defaultt"><i class="fas fa-download"></i> Print</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content bg-default">
                        <div class="modal-header">
                            <h4 class="modal-title">Cetak laporan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="quickForm" method="POST" action="<?= base_url('bon_material/cetak_pengeluaran2') ?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">No Permintaan</label>
                                    <div class="col-sm-6">
                                        <input name="nofrak" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Bulan" data-width="80%" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-0 col-sm-10">
                                        <button data-dismiss="modal" class="btn btn-danger btn-flat">
                                            Kembali
                                        </button>
                                        <button type="submit" name="tambah" class="btn btn-success btn-flat">
                                            Lihat
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
            </div>

            <div class="modal fade" id="modal-defaultt">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tabel Permintaan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="card p-4">
                            <div class="modal-body">
                                <div class="card-body">
                                    <?= $this->session->flashdata('message'); ?>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nomor Permintaan</th>
                                                    <th>Tanggal</th>
                                                    <th>Nama Teknisi</th>
                                                    <th>Nama Barang</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nomor Permintaan</th>
                                                    <th>Tanggal</th>
                                                    <th>Nama Teknisi</th>
                                                    <th>Nama Barang</th>
                                                    <th>Jumlah</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($barkel2 as $a) : ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $a['nofrak']; ?></td>
                                                        <td><?= $a['tanggal']; ?></td>
                                                        <td><?= $a['namatek']; ?></td>
                                                        <td><?= $a['nama']; ?></td>
                                                        <td><?= $a['jumlah']; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

        </div>
    </div>
</div>