
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
                                <h4 class="m-b-20 header-title">Form Siswa</h4>

                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" role="form" action="<?= base_url('app/siswa/insert') ?>" method="POST">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Username</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="username" required placeholder="Username" autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Password</label>
                                                <div class="col-md-10">
                                                    <input type="password" class="form-control" name="password" required placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">NIS</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="nis" required readonly value="<?= $nis ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-email">Nama Siswa</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Jenis Kelamin</label>
                                                <div class="col-md-10">
                                                    <select class="form-control" name="jenis_kelamin" required>
                                                        <option value="">-- Pilih --</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Agama</label>
                                                <div class="col-md-10">
                                                    <select name="agama" class="form-control" required>
                                                        <option value="">-- Pilih --</option>
                                                        <?php 
                                                        $arrayAgama = ['Islam','Kristen','Hindu','Buddha','Konghucu']; 
                                                        for ($i=0; $i < count($arrayAgama) ; $i++) { 
                                                        ?>
                                                        <option value="<?= $arrayAgama[$i] ?>"><?= $arrayAgama[$i] ?></option>
                                                        <?php } ?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tempat Lahir</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="tempat_lahir" class="form-control" required placeholder="Tempat Lahir">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tanggal Lahir</label>
                                                <div class="col-md-10">
                                                    <input type="date" name="tanggal_lahir" class="form-control" required >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Alamat</label>
                                                <div class="col-md-10">
                                                    <textarea name="alamat" class="form-control" rows="4" placeholder="Alamat"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group" align="center">
                                                <button type="submit" class="btn btn-primary">Input Data</button>
                                                <a href="<?=  base_url('app/siswa')?>" class="btn btn-danger">Back</a>
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