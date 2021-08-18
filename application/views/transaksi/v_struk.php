<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--h1 class="h3 mb-4 text-gray-800">Kelola User</-h1-->

    <div class="col-xl-12 col-lg-7">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow mb-4">
            <p class="m-0 text-gray-800">Upload Struk / <a href="<?= base_url('dashboard'); ?>">Home</a></p>
            <p class="m-0 text-gray-800 navbar-right"><?= date('D, d M Y H:i'); ?></p>
        </div>
    </div>
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <br>
            <center>
                <h4>Data Struk</h4>
            </center>
            <br>

            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Upload Struk</button>
            </div>

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content bg-default">
                        <div class="modal-header">
                            <h4 class="modal-title">Upload Struk</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?= form_open_multipart('transaksi/upload'); ?>
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-6 col-form-label">Pastikan file berbentuk PDF</label>
                            </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-1 col-form-label"></label>
                                <div class="col-sm-6">
                                    <input type="file" class="custom-file-input" id="filename" name="filename">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-0 col-sm-10">
                                    <button type="submit" name="tambah" class="btn btn-success btn-flat">
                                        <i class="fa fa-paper-plane"></i>&nbsp;&nbsp;Submit
                                    </button>
                                    <!--a href="<?= base_url('user'); ?>" class="btn btn-primary">Kembali</!--a-->
                                </div>
                            </div>
                        </div>
                        <?= form_close(); ?>
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
                                <!--th>Waktu Upload</!--th-->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <!--th>Waktu Upload</!--th-->
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($files as $file) : ?>
                                <tr>
                                    <td scope="row" style="width: 50px;"><?= $no++ ?></td>
                                    <td><?= $file ?></td>
                                    <!--td><?= $cek['created_at']; ?></!--td-->
                                    <td><a href="<?= base_url("./asset/file_upload/pdf/$file") ?>" class="btn btn-xs btn-dark"><i class="fas fa-download"></i></a></td>
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