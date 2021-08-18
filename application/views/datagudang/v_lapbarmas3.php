<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--h1 class="h3 mb-4 text-gray-800">Kelola User</-h1-->

    <div class="col-xl-12 col-lg-7">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow mb-4">
            <p class="m-0 text-gray-800">Lap. Pengadaan / <a href="<?= base_url('dashboard'); ?>">Home</a></p>
            <p class="m-0 text-gray-800 navbar-right"><?= date('D, d M Y H:i'); ?></p>
        </div>
    </div>
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <br>
            <center>
                <h4>Data Pengadaan</h4>
            </center>

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content bg-default">

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
                                <th style="width: 10px">No</th>
                                <th>Tanggal</th>
                                <th>Kode Barang</th>
                                <th>Nama</th>
                                <th>Tipe</th>
                                <th>Pengirim</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                                <th>Cetak</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Tanggal</th>
                                <th>Kode Barang</th>
                                <th>Nama</th>
                                <th>Tipe</th>
                                <th>Pengirim</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                                <th>Cetak</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($lap3 as $a) : ?>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $a['tanggal']; ?></td>
                                    <td><?= $a['id_barang']; ?></td>
                                    <td><?= $a['nama']; ?></td>
                                    <td><?= $a['tipe']; ?></td>
                                    <td><?= $a['pengirim']; ?></td>
                                    <td><?= $a['jumlah']; ?></td>
                                    <td><?= $a['keterangan']; ?></td>
                                    <td><a href="<?= base_url('data_gudang/print_lap_barmas3/' . $a['id']); ?>" class="btn btn-xs btn-success"><i class="fa fa-print"></i></a></td>
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