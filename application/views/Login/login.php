
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Sistem Informasi Raport SMPN 59</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?= base_url('asset') ?>/assets/images/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link href="<?= base_url('asset') ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?= base_url('asset') ?>/assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="<?= base_url('asset') ?>/assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?= base_url('asset') ?>/assets/css/style.css" rel="stylesheet">

    </head>


    <body style="background-color: whitesmoke">

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h2 class="text-uppercase m-t-0 m-b-30">
                                        <a href="javascript:void(0)" class="text-danger">
                                            SISTEM INFORMASI RAPOT
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" method="POST" action="<?= base_url('auth/login/submit'); ?>">
                                        <?php if ($this->session->flashdata('msg')): ?>
                                            <p class="<?= $this->session->flashdata('alert'); ?>"><?= $this->session->flashdata('msg'); ?></p>
                                        <?php endif ?>
                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="username">Username</label>
                                                <input class="form-control" type="text" name="username" required="" placeholder="Username">
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" required="" name="password" placeholder="Enter your password">
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn btn-lg btn-danger btn-block" type="submit">Sign In</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            <p style="margin-top: 40px" align="center"><strong>Sistem Informasi Rapot</strong> - Copyright &copy; <?= date('Y') ?></p>

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?= base_url('asset') ?>/assets/js/jquery-2.1.4.min.js"></script>
        <script src="<?= base_url('asset') ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url('asset') ?>/assets/js/metisMenu.min.js"></script>
        <script src="<?= base_url('asset') ?>/assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="<?= base_url('asset') ?>/assets/js/jquery.app.js"></script>

    </body>
</html>