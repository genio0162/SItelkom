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
                                            <a href="<?= base_url('laporan/accept/' . $a['id']); ?>" class="btn btn-xs btn-success">Accept</a>
                                            <a href="<?= base_url('laporan/tolak/' . $a['id']); ?>" class="btn btn-xs btn-danger">Tolak</a>
                                        </td>
                                    <?php elseif ($a['statusin'] == 1) :  ?>
                                        <td class="text-success"> Diterima </td>
                                        <td><a href="<?= base_url('laporan/print_pengajuan/' . $a['id']); ?>" class="btn btn-xs btn-dark"><i class="fas fa-print"></i></a></td>
                                    <?php elseif ($a['statusin'] == 2) : ?>
                                        <td class="text-danger"> Ditolak </td>
                                        <td><a href="#"></a></td>
                                    <?php endif; ?>
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