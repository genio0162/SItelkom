<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Page</title>
    <link rel="shortcut icon" href="<?= base_url('asset/sbadmin/img/talogo.png'); ?>">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('asset/sbadmin/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('asset/sbadmin/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-danger">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-5">

                <form class="user" method="post" action="<?= base_url('login'); ?>">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <img src="<?= base_url(); ?>asset/sbadmin/img/telkomaks.png" />
                                            <br><br><br>
                                        </div>

                                        <?= $this->session->flashdata('message'); ?>

                                        <div class="form-group">
                                            <input type="email" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="E-mail" value="<?= set_value('username'); ?>">
                                            <?= form_error('username', '<small class="text-danger pl-3", </small>'); ?>
                                        </div>
                                        <div class=" form-group">
                                            <input type="password" name="passwordd" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                            <?= form_error('passwordd', '<small class="text-danger pl-3", </small>'); ?>
                                        </div>
                                        <div class="form-group">
                                        </div>
                                        <button type="submit" class="btn btn-danger btn-user btn-block">
                                            Masuk
                                        </button>
                                        <hr>
                                        <div class="text-center">
                                            <p>Ghifari Ilham</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('asset/sbadmin/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('asset/sbadmin/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('asset/sbadmin/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('asset/sbadmin/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>