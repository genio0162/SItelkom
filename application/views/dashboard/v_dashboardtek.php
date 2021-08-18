<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--h1 class="h3 mb-4 text-gray-800">Kelola User</-h1-->

    <div class="col-xl-12 col-lg-7">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow mb-4">
            <p class="m-0 text-gray-800">Dashboard / <a href="<?= base_url('dashboard'); ?>">Home</a></p>
            <p class="m-0 text-gray-800 navbar-right"><?= date('D, d M Y H:i'); ?></p>
        </div>
    </div>

    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Body -->
            <br>

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content bg-default">

                    </div>
                    <!-- /.modal-content -->
                </div>
            </div>

            <?= $this->session->flashdata('message'); ?>

            <div class="card-body">
                <p>
                    Info penting hari ini, Mohon Dibaca :
                </p>

                <div class="col-md-12">
                    <?php if ($pengumuman == null) : ?>
                        <p>Belum ada Pengumuman</p>
                    <?php else : ?>
                        <table class="table table-borderless table-sm">
                            <thead>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pengumuman as $u) : ?>

                                    <tr>
                                        <td style="width: 10px" scope="row"><?= $no++ ?>.</td>
                                        <td><?= $u['pengumuman']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
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