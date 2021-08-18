<!DOCTYPE html>
<html>

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

    <!-- end load library -->
</head>

<body>

    <?php
    /* Mengambil query report*/
    foreach ($bulanan as $result) {
        $bulan[] = $result->tgl; //ambil bulan
        $value[] = (float) $result->total; //ambil nilai
    }
    /* end mengambil query*/

    ?>

    <div class="container">
        <br>
        <div class="row container">
            <table class="table table-borderless">
                <tr>
                    <center><img src="<?= base_url(); ?>asset/sbadmin/img/telkomaks.png" /></center>
                </tr>
            </table>
        </div>

        <!-- Load chart dengan menggunakan ID -->
        <div id="report"></div>
        <!-- END load chart -->


        <script src="<?= base_url('asset/sbadmin/'); ?>js/grafik/jquery.js"></script>
        <script src="<?= base_url('asset/sbadmin/'); ?>js/grafik/highcharts.js"></script>
        <!-- Script untuk memanggil library Highcharts -->
        <script type="text/javascript">
            $(function() {
                $('#report').highcharts({
                    chart: {
                        type: 'line',
                        margin: 75,
                        options3d: {
                            enabled: false,
                            alpha: 10,
                            beta: 25,
                            depth: 70
                        }
                    },
                    title: {
                        text: 'Grafik Total Permintaan Gudang SO INV JEMKOT IN Bulan <?php echo $bln ?>',
                        style: {
                            fontSize: '18px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    },
                    subtitle: {
                        text: '',
                        style: {
                            fontSize: '15px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    },
                    plotOptions: {
                        column: {
                            depth: 25
                        }
                    },
                    credits: {
                        enabled: false
                    },
                    xAxis: {
                        categories: <?php echo json_encode($bulan); ?>
                    },
                    exporting: {
                        enabled: false
                    },
                    yAxis: {
                        title: {
                            text: 'Permintaan'
                        },
                    },
                    tooltip: {
                        formatter: function() {
                            return 'Total permintaan tanggal <b>' + this.x + '</b> adalah <b>' + Highcharts.numberFormat(this.y, 0) + '</b> permintaan </b>';
                        }
                    },
                    series: [{
                        name: 'Tanggal',
                        data: <?php echo json_encode($value); ?>,
                        shadow: true,
                        dataLabels: {
                            enabled: true,
                            color: '#045396',
                            align: 'center',
                            formatter: function() {
                                return Highcharts.numberFormat(this.y, 0);
                            }, // one decimal
                            y: 0, // 10 pixels down from the top
                            style: {
                                fontSize: '13px',
                                fontFamily: 'Verdana, sans-serif'
                            }
                        }
                    }]
                });
            });
        </script>
    </div>
</body>

</html>