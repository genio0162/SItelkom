<html lang="en" moznomarginboxes mozdisallowselectionprint>

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>
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
                    <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                    <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                    <td>
                        <center>
                            <img src="<?= base_url(); ?>asset/sbadmin/img/telkomaks.png" />
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
                                <p style="font-family: Arial;"><b>FORM PENGADAAN BARANG</b></p>
                            </h5>
                        </center>
                    </td>
                </tr>
            </table>
        </div>

        <?php foreach ($lap_barmas as $u) { ?>
            <div class="row align-items-center container">
                <table class="table table-borderless table-sm">
                    <tbody>
                        <tr>
                            <td style="font-family: Arial; font-size: small; width: 150px;">Pengirim</td>
                            <td style="font-family: Arial; font-size: small;">: <?= $u['pengirim'] ?></td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size: small; width: 150px;">Hari & Tanggal</td>
                            <td style="font-family: Arial; font-size: small;">: <?= date('D, d M Y'); ?></td>
                        </tr>
                        <tr>
                            <td style="font-family: Arial; font-size: small; width: 150px;">Time</td>
                            <td style="font-family: Arial; font-size: small;">: <?= date('H:i'); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row align-items-center container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="text-align:center;">NO</th>
                            <th style="text-align:center;">NAMA BARANG</th>
                            <th style="text-align:center;">JENIS</th>
                            <th style="text-align:center;">JUMLAH</th>
                            <th style="text-align:center;">KETERANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><?= $u['nama'] ?></td>
                            <td><?= $u['satuan'] ?></td>
                            <td><?= $u['jumlah'] ?></td>
                            <td><?= $u['keterangan'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div><br>
        <?php } ?>


        <table class="table table-borderless table-default">
            <thead>
                <tr>
                    <th style="text-align:center;">Mengetahui / Menyetujui<br>TL. WH INV JEMBER</th>
                    <th></th>
                    <th style="text-align:center;">Penerima<br>Petugas Gudang</th>
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
                    <td style="text-align:center;"><u><b>M. REZA ARDIWINATA</b></u><br>NIP/NIK : 18930388</td>
                    <td style="text-align:center;"></td>
                    <td style="text-align:center;"><u><b>......................................</b></u><br>NIP/NIK : ..................</td>
                </tr>
            </tfoot>
        </table>

    </div>
</body>

</html>