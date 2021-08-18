<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--h1 class="h3 mb-4 text-gray-800">Kelola User</-h1-->

    <div class="col-xl-12 col-lg-7">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow mb-4">
            <p class="m-0 text-gray-800">Barang Masuk / <a href="<?= base_url('dashboard'); ?>">Home</a></p>
            <p class="m-0 text-gray-800 navbar-right"><?= date('D, d M Y H:i'); ?></p>
        </div>
    </div>
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Body -->
            <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
            </div>

            <form id="quickForm" method="POST" action="<?= base_url('transaksi/tambah') ?>">
                <!--?php var_dump($brg); ?-->
                <div class="col-md-4 col-md-offset-4">
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-6">
                            <input type="hidden" name="namak" class="form-control" id="inputName" value="<?= $user['nama'] ?>" readonly></input>
                        </div>
                    </div>
                    <div>
                        <label>Id Material *</label>
                    </div>
                    <div class="form-group input-group">
                        <input type="hidden" name="item_id" id="item_id">
                        <input type="text" name="id_barang" id="id_barang" class="form-control" required autofocus>
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <div class="form-group">
                        <label>Tanggal *</label>
                        <input type="date" name="date" value="<?= date('Y-m-d'); ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Material</label>
                        <input type="text" name="nama" id="nama" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="unit_name">Tipe</label>
                                <input type="text" name="jenis" id="tipe" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="unit_name">Satuan</label>
                                <input type="text" name="satuan" id="satuan" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="stok">Sisa Stock</label>
                                <input type="text" name="jumlah" id="soinvjemkotin" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Jumlah *</label>
                        <input type="number" name="qty" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Pengirim *</label>
                        <input type="text" name="pengirim" id="item_name" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Detail *</label>
                        <input type="text" name="item_name" id="item_name" class="form-control" placeholder="Keterangan" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="tambah" class="btn btn-success btn-flat">
                            <i class="fas fa-paper-plane"></i>&nbsp;Simpan
                        </button>
                        <button type="reset" class="btn btn-warning btn-flat">Reset</button>
                    </div>
                </div>
            </form>

            <div class="modal fade" id="modal-item">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tabel Barang</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="card p-4">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body table-responsive">
                                <table class="table table-hover table-bordered text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Id Barang</th>
                                            <th>Nama</th>
                                            <th>Tipe</th>
                                            <th>Stok</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($stok as $a) : ?>
                                            <tr>
                                                <td><?= $a['id_barang']; ?></td>
                                                <td><?= $a['nama']; ?></td>
                                                <td><?= $a['tipe']; ?></td>
                                                <td><?= $a['soinvjemkotin']; ?></td>
                                                <td>
                                                    <button class="btn btn-x btn-info" id="select" data-id_barang="<?= $a['id_barang'] ?>" data-nama="<?= $a['nama'] ?>" data-tipe="<?= $a['tipe'] ?>" data-satuan="<?= $a['satuan'] ?>" data-soinvjemkotin="<?= $a['soinvjemkotin'] ?>">
                                                        <i class="fa fa-check"></i> Select
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

            <div class="card-body">
            </div>

        </div>
    </div>
</div>