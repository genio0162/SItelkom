<div class="container-fluid">

    <!-- Page Heading -->
    <!--h1 class="h3 mb-4 text-gray-800">Kelola User</-h1-->

    <div class="col-xl-12 col-lg-7">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow mb-4">
            <p class="m-0 text-gray-800">Stok Gudang / <a href="<?= base_url('dashboard'); ?>">Home</a></p>
            <p class="m-0 text-gray-800 navbar-right"><?= date('D, d M Y H:i'); ?></p>
        </div>
    </div>
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <br>
            <center>
                <h4>Tabel Stok Gudang</h4>
            </center>
            <br>

            <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>WH JEMBER</th>
                                <th>SO INV TANGGUL INNER</th>
                                <th>SO INV TANGGUL OUTTER</th>
                                <th>SO INV JEMBER KOTA INNER</th>
                                <th>SO INV JEMBER KOTA OUTTER</th>
                                <th>SO INV JEMBER</th>
                                <th>SO INV GENTENG</th>
                                <th>SO INV BANYUWANGI</th>
                                <th>SO INV BONDOWOSO</th>
                                <th>SO INV SITUBONDO</th>
                                <!--th>Date Create</!--th-->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($stok as $b) : ?>
                                <tr>
                                    <td scope="row"><?= $no++ ?></td>
                                    <td><?= $b['nama']; ?></td>
                                    <td><?= $b['whjember']; ?></td>
                                    <td><?= $b['soinvtguin']; ?></td>
                                    <td><?= $b['soinvtguout']; ?></td>
                                    <td><?= $b['soinvjemkotin']; ?></td>
                                    <td><?= $b['soinvjemkotout']; ?></td>
                                    <td><?= $b['soinvjember']; ?></td>
                                    <td><?= $b['soinvgen']; ?></td>
                                    <td><?= $b['soinvbwi']; ?></td>
                                    <td><?= $b['soinvbws']; ?></td>
                                    <td><?= $b['soinvsit']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>