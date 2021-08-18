<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--h1 class="h3 mb-4 text-gray-800">Kelola User</-h1-->

    <div class="col-xl-12 col-lg-7">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow mb-4">
            <p class="m-0 text-gray-800">Kelola Pengumuman / <a href="<?= base_url('dashboard'); ?>">Home</a></p>
            <p class="m-0 text-gray-800 navbar-right"><?= date('D, d M Y H:i'); ?></p>
        </div>
    </div>

    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <br>
            <center>
                <h4>List Pengumuman</h4>
            </center>
            <br>

            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Pengumuan Baru</button>
            </div>

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content bg-default">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Pengumuman</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="quickForm" method="POST" action="<?= base_url('administrator/pengumuman_baru') ?>">
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-6 col-form-label">Inputkan pengumuman baru :</label>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <input type="text" name="baru" class="form-control" id="inputName" value="" required></input>
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
                                <th>Isi Pengumuman</th>
                                <th style="width: 50px;">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th style="width: 50px;">No</th>
                                <th>Isi Pengumuman</th>
                                <th style="width: 50px;">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($pengumuman as $a) : ?>
                                <tr>
                                    <td scope="row"><?= $no++ ?></td>
                                    <td><?= $a['pengumuman']; ?></td>
                                    <td><a href="<?= base_url('administrator/hapus2/' . $a['id']); ?>" class="btn btn-xs btn-danger"><i class="fas fa-times"></i></a></td>
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