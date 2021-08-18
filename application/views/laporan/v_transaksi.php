<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--h1 class="h3 mb-4 text-gray-800">Kelola User</-h1-->

    <div class="col-xl-12 col-lg-7">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow mb-4">
            <p class="m-0 text-gray-800">Data Transaksi / <a href="<?= base_url('dashboard'); ?>">Home</a></p>
            <p class="m-0 text-gray-800 navbar-right"><?= date('D, d M Y H:i'); ?></p>
        </div>
    </div>
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <br>
            <center>
                <h4>Data Transaksi</h4>
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
                                <td>Data Pengadaan Gudang WH JEMBER</td>
                                <td style="width: 100px;"><a href="#" class="btn btn-xs btn-dark" data-toggle="modal" data-target="#modal-default1">
                                        <!--i class="fas fa-download"></!--i--> Lihat
                                    </a></td>
                            </tr>
                            <tr>
                                <td scope="row" style="width: 50px;">2</td>
                                <td>Data Pengadaan Gudang SO INV JEMKOT IN</td>
                                <td style="width: 100px;"><a href="#" class="btn btn-xs btn-dark" data-toggle="modal" data-target="#modal-default2">
                                        <!--i class="fas fa-download"></!--i--> Lihat
                                    </a></td>
                            </tr>
                            <tr>
                                <td scope="row" style="width: 50px;">3</td>
                                <td>Data Pengadaan Gudang SO INV JEMKOT OUT</td>
                                <td style="width: 100px;"><a href="#" class="btn btn-xs btn-dark" data-toggle="modal" data-target="#modal-default3">
                                        <!--i class="fas fa-download"></!--i--> Lihat
                                    </a></td>
                            </tr>
                            <tr>
                                <td scope="row" style="width: 50px;">4</td>
                                <td>Data Permintaan Gudang WH JEMBER</td>
                                <td style="width: 100px;"><a href="#" class="btn btn-xs btn-dark" data-toggle="modal" data-target="#modal-defaultt4">
                                        <!--i class="fas fa-download"></!--i--> Lihat
                                    </a></td>
                            </tr>
                            <tr>
                                <td scope="row" style="width: 50px;">5</td>
                                <td>Data Permintaan Gudang SO INV JEMKOT IN</td>
                                <td style="width: 100px;"><a href="#" class="btn btn-xs btn-dark" data-toggle="modal" data-target="#modal-defaultt5">
                                        <!--i class="fas fa-download"></!--i--> Lihat
                                    </a></td>
                            </tr>
                            <tr>
                                <td scope="row" style="width: 50px;">6</td>
                                <td>Data Permintaan Gudang SO INV JEMKOT OUT</td>
                                <td style="width: 100px;"><a href="#" class="btn btn-xs btn-dark" data-toggle="modal" data-target="#modal-defaultt6">
                                        <!--i class="fas fa-download"></!--i--> Lihat
                                    </a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal fade" id="modal-default1">
                <div class="modal-dialog">
                    <div class="modal-content bg-default">
                        <div class="modal-header">
                            <h4 class="modal-title">Pilih Bulan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="quickForm" method="POST" action="<?= base_url('laporan/bulanan') ?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Bulan</label>
                                    <div class="col-sm-6">
                                        <select name="bln" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Bulan" data-width="80%" required />
                                        <option>Pilih Bulan</option>
                                        <?php foreach ($graf_bln->result_array() as $k) {
                                            $bln = $k['bulan'];
                                        ?>
                                            <option><?php echo $bln; ?></option>
                                        <?php } ?>
                                        </select>
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

            <div class="modal fade" id="modal-default2">
                <div class="modal-dialog">
                    <div class="modal-content bg-default">
                        <div class="modal-header">
                            <h4 class="modal-title">Pilih Bulan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="quickForm" method="POST" action="<?= base_url('laporan/bulanan21') ?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Bulan</label>
                                    <div class="col-sm-6">
                                        <select name="bln" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Bulan" data-width="80%" required />
                                        <option>Pilih Bulan</option>
                                        <?php foreach ($graf_bln21->result_array() as $k) {
                                            $bln = $k['bulan'];
                                        ?>
                                            <option><?php echo $bln; ?></option>
                                        <?php } ?>
                                        </select>
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

            <div class="modal fade" id="modal-default3">
                <div class="modal-dialog">
                    <div class="modal-content bg-default">
                        <div class="modal-header">
                            <h4 class="modal-title">Pilih Bulan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="quickForm" method="POST" action="<?= base_url('laporan/bulanan31') ?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Bulan</label>
                                    <div class="col-sm-6">
                                        <select name="bln" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Bulan" data-width="80%" required />
                                        <option>Pilih Bulan</option>
                                        <?php foreach ($graf_bln31->result_array() as $k) {
                                            $bln = $k['bulan'];
                                        ?>
                                            <option><?php echo $bln; ?></option>
                                        <?php } ?>
                                        </select>
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

            <div class="modal fade" id="modal-defaultt4">
                <div class="modal-dialog">
                    <div class="modal-content bg-default">
                        <div class="modal-header">
                            <h4 class="modal-title">Pilih Bulan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="quickForm" method="POST" action="<?= base_url('laporan/bulanan2') ?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Bulan</label>
                                    <div class="col-sm-6">
                                        <select name="bln" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Bulan" data-width="80%" required />
                                        <option>Pilih Bulan</option>
                                        <?php foreach ($graf_bln2->result_array() as $k) {
                                            $bln = $k['bulan'];
                                        ?>
                                            <option><?php echo $bln; ?></option>
                                        <?php } ?>
                                        </select>
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

            <div class="modal fade" id="modal-defaultt5">
                <div class="modal-dialog">
                    <div class="modal-content bg-default">
                        <div class="modal-header">
                            <h4 class="modal-title">Pilih Bulan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="quickForm" method="POST" action="<?= base_url('laporan/bulanan22') ?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Bulan</label>
                                    <div class="col-sm-6">
                                        <select name="bln" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Bulan" data-width="80%" required />
                                        <option>Pilih Bulan</option>
                                        <?php foreach ($graf_bln22->result_array() as $k) {
                                            $bln = $k['bulan'];
                                        ?>
                                            <option><?php echo $bln; ?></option>
                                        <?php } ?>
                                        </select>
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

            <div class="modal fade" id="modal-defaultt6">
                <div class="modal-dialog">
                    <div class="modal-content bg-default">
                        <div class="modal-header">
                            <h4 class="modal-title">Pilih Bulan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="quickForm" method="POST" action="<?= base_url('laporan/bulanan32') ?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-xs-3">Bulan</label>
                                    <div class="col-sm-6">
                                        <select name="bln" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Bulan" data-width="80%" required />
                                        <option>Pilih Bulan</option>
                                        <?php foreach ($graf_bln32->result_array() as $k) {
                                            $bln = $k['bulan'];
                                        ?>
                                            <option><?php echo $bln; ?></option>
                                        <?php } ?>
                                        </select>
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

            <div class="card-body">
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->