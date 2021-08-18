<html lang="en" moznomarginboxes mozdisallowselectionprint>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Print Laporan</title>
    <link rel="shortcut icon" href="<?= base_url('asset/sbadmin/img/talogo.png'); ?>">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('asset/sbadmin/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('asset/sbadmin/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url('asset/sbadmin/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body onload="window.print()" id="page-top">
    <div class="container">
        <div class="row align-items-center container">
            <table class="table table-borderless">
                <tr>
                    <td>
                        <center>
                            <img src="<?= base_url(); ?>asset/sbadmin/img/ikonaks.png" />
                        </center>
                    </td>
                </tr>
            </table>
        </div>
        <div class="row container">
            <table class="table table-borderless table-sm">
                <tr>
                    <td>
                        <center>
                            <h5>
                                <p style="font-family: Arial;"><b>FORM PERMINTAAN PENGELUARAN BARANG</b></p>
                            </h5>
                        </center>
                    </td>
                </tr>
            </table>
        </div>

        <div class="row align-items-center container">
            <table class="table table-borderless table-sm">
                <tbody>
                    <tr>
                        <td style="font-family: Arial; font-size: small;">Nomer*)</td>
                        <td style="font-family: Arial; font-size: small;">:</td>
                        <td rowspan="7">
                            <br>
                            <center>
                                <img src="<?= base_url(); ?>asset/sbadmin/img/ikonp.png" />
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-family: Arial; font-size: small;">ID_Gudang</td>
                        <td style="font-family: Arial; font-size: small;">:</td>
                    </tr>
                    <tr>
                        <td style="font-family: Arial; font-size: small;">Hari & Tanggal</td>
                        <td style="font-family: Arial; font-size: small;">: <?= date('D, d M Y'); ?></td>
                    </tr>
                    <tr>
                        <td style="font-family: Arial; font-size: small;">Time</td>
                        <td style="font-family: Arial; font-size: small;">: <?= date('H:i'); ?></td>
                    </tr>
                    <tr>
                        <td style="font-family: Arial; font-size: small;">ID_Project</td>
                        <td style="font-family: Arial; font-size: small;">:</td>
                    </tr>
                    <tr>
                        <td style="font-family: Arial; font-size: small;">Nama Project</td>
                        <td style="font-family: Arial; font-size: small;">:</td>
                    </tr>
                    <tr>
                        <td style="font-family: Arial; font-size: small;">Nama Mitra</td>
                        <td style="font-family: Arial; font-size: small;">: PT TA</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row align-items-center container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="text-align:center;" rowspan="2">NO</th>
                        <th style="text-align:center;" rowspan="2">NAMA BARANG</th>
                        <th style="text-align:center;" rowspan="2">SATUAN</th>
                        <th style="text-align:center;" colspan="2">JUMLAH DIMINTA</th>
                        <th style="text-align:center;" rowspan="2">KETERANGAN</th>
                    </tr>
                    <tr>
                        <th style="text-align:center;">DIMINTA</th>
                        <th style="text-align:center;">DBERIKAN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($stok as $u) : ?>
                        <tr>
                            <td>1</td>
                            <td><?= $u['nama'] ?></td>
                            <td>(Kosong)</td>
                            <td><?= $u['jumlah'] ?></td>
                            <td><?= $u['jumlah'] ?></td>
                            <td><?= $u['keterangan'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div><br>

        <table class="table table-borderless table-default">
            <thead>
                <tr>
                    <th style="text-align:center;">Mengetahui / Menyetujui<br>Mgr. Support Regional Jatim</th>
                    <th></th>
                    <th style="text-align:center;">Pemohon / Peminta<br>Mitra PT TA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align:center;"><br><br><br></td>
                    <td style="text-align:center;"><br><br><br></td>
                    <td style="text-align:center;"><br><br><br></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td style="text-align:center;"><u><b>MUHAMMAD FAHMY AKBAR</b></u><br>NIK : 916009</td>
                    <td style="text-align:center;"></td>
                    <td style="text-align:center;"><u><b>EVA HUSNI KURNIAWATI</b></u><br>19970081</td>
                </tr>
            </tfoot>
        </table>

        <table class="table table-borderless table-default">
            <thead>
                <tr>
                    <th style="text-align:center;">Penerima</th>
                    <th></th>
                    <th style="text-align:center;">Petugas Gudang</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align:center;"><br><br><br></td>
                    <td style="text-align:center;"><br><br><br></td>
                    <td style="text-align:center;"><br><br><br></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td style="text-align:center;"><u><b>......................................</b></u><br>NIP/NIK : ..................</td>
                    <td style="text-align:center;"></td>
                    <td style="text-align:center;"><u><b>M. REZA ARDIWINATA</b></u><br>NIP/NIK : 18930388</td>
                </tr>
            </tfoot>
        </table>

    </div>
</body>

</html>