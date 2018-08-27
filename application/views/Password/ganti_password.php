
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        
        <!-- Plugin Css -->
        <?php $this->load->view('Layout/pluginCSS'); ?>
        <!-- End Plugin Css -->

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
                                <h4 class="m-b-20 header-title">Ganti Password</h4>

                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" role="form" action="<?= base_url('app/password/update') ?>" method="POST">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Password Lama</label>
                                                <div class="col-md-9">
                                                    <input type="password" class="form-control" name="password_lama" required placeholder="Password Lama">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="example-email">Password Baru</label>
                                                <div class="col-md-9">
                                                    <input type="password" name="password_baru" class="form-control" placeholder="Password Baru" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Ulangi Password Baru</label>
                                                <div class="col-md-9">
                                                    <input type="password" class="form-control" placeholder="Ulangi Password Baru" name="ulangi_password_baru" required>
                                                </div>
                                            </div>
                                            <div class="form-group" align="center">
                                                <button type="submit" class="btn btn-primary">Ganti Password</button>
                                                <a href="<?=  base_url('app/dashboard')?>" class="btn btn-danger">Back to Dashboard</a>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
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
        <?php $this->load->view('Layout/pluginJS'); ?>

    </body>
</html>