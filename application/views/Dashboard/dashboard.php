
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

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="<?= base_url('asset') ?>/assets/plugins/morris/morris.css">

        <!-- Bootstrap core CSS -->
        <link href="<?= base_url('asset') ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="<?= base_url('asset') ?>/assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="<?= base_url('asset') ?>/assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?= base_url('asset') ?>/assets/css/style.css" rel="stylesheet">

    </head>


    <body>

        <div id="page-wrapper">


            <!-- Top Bar Start -->
            <?php $this->load->view('Layout/header'); ?>
            <!-- Top Bar End -->

            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <?php $this->load->view('Layout/sidebar'); ?>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
							<div class="col-sm-12">
								<div class="card-box widget-inline">
									<div class="row">
										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
												<h3 class="m-t-10"><i class="text-primary mdi mdi-account-circle"></i> <b data-plugin="counterup"><?= $totalGuru ?></b></h3>
												<p class="text-muted">Jumlah Guru</p>
											</div>
										</div>

										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
												<h3 class="m-t-10"><i class="text-custom mdi mdi-account"></i> <b data-plugin="counterup"><?= $totalSiswa ?></b></h3>
												<p class="text-muted">Jumlah Siswa</p>
											</div>
										</div>

										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
												<h3 class="m-t-10"><i class="text-info mdi mdi-animation"></i> <b data-plugin="counterup"><?= $totalMapel ?></b></h3>
												<p class="text-muted">Total Mata Pelajaran</p>
											</div>
										</div>

										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center b-0">
												<h3 class="m-t-10"><i class="text-danger mdi mdi-airplay"></i> <b data-plugin="counterup"><?= $totalNilai ?></b></h3>
												<p class="text-muted">Nilai yang sudah masuk</p>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
                        <!--end row -->

                    </div>
                    <!-- end container -->

                    <!-- footer -->
                    <?php $this->load->view('Layout/footer'); ?>
                    <!-- end footer -->

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?= base_url('asset') ?>/assets/js/jquery-2.1.4.min.js"></script>
        <script src="<?= base_url('asset') ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url('asset') ?>/assets/js/metisMenu.min.js"></script>
        <script src="<?= base_url('asset') ?>/assets/js/jquery.slimscroll.min.js"></script>

        <!--Morris Chart-->
		<script src="<?= base_url('asset') ?>/assets/plugins/morris/morris.min.js"></script>
		<script src="<?= base_url('asset') ?>/assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
		<script src="<?= base_url('asset') ?>/assets/pages/jquery.dashboard.js"></script>

        <!-- App Js -->
        <script src="<?= base_url('asset') ?>/assets/js/jquery.app.js"></script>

    </body>
</html>