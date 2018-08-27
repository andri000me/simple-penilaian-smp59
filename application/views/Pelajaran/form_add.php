
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
                                <h4 class="m-b-20 header-title">Form Mata Pelajaran</h4>

                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" role="form" action="<?= base_url('app/pelajaran/insert') ?>" method="POST">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Kode Mata Pelajaran</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="kode_matapelajaran" required readonly value="<?= $kode_matapelajaran ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-email">Mata Pelajaran</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="mata_pelajaran" class="form-control" placeholder="Mata Pelajaran" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">KKM</label>
                                                <div class="col-md-10">
                                                    <input type="number" class="form-control" placeholder="KKM" name="kkm" required max="100" min="0">
                                                </div>
                                            </div>
                                            <div class="form-group" align="center">
                                                <button type="submit" class="btn btn-primary">Input Data</button>
                                                <a href="<?=  base_url('app/pelajaran')?>" class="btn btn-danger">Back</a>
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