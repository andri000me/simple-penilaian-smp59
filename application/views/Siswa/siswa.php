
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
                                <h4 class="m-t-0 header-title">Data Siswa</h4>
                                <div class="m-b-20 table-responsive">
                                    
                                    <?php if ($this->session->userdata('status') == 1): ?>
                                    <p class="text-muted font-13 m-b-30">
                                        <a href="<?= base_url('app/siswa/add'); ?>" class="btn btn-success btn-sm">Add Data <i class="fa fa-plus-circle"></i></a>
                                    </p>
                                    <?php else: ?>    
                                    <?php endif ?>
                                    

                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>NIS</th>
                                            <th>Nama Lengkap</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat, Tanggal Lahir</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>Created On</th>
                                            <?php if ($this->session->userdata('status') == 1): ?>
                                            <th>Action</th>
                                            <?php else: ?>    
                                            <?php endif ?>
                                            
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php foreach ($siswa as $key => $value): ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $value->username ?></td>
                                            <td><?= $value->password ?></td>
                                            <td><?= $value->NIS ?></td>
                                            <td><?= $value->nama ?></td>
                                            <td><?= $value->jenis_kelamin ?></td>
                                            <td><?= $value->tempat_lahir . ", " . $value->tanggal_lahir ?></td>
                                            <td><?= $value->agama ?></td>
                                            <td><?= $value->alamat ?></td>
                                            <td><?= $value->created_at ?></td>
                                            <?php if ($this->session->userdata('status') == 1): ?>
                                            <td align="center">
                                                <a href="<?= base_url('app/siswa/edit/'.$value->username) ?>" title="Edit" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                                <a href="<?= base_url('app/siswa/delete/'.$value->username) ?>" title="Delete" onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                
                                            </td>    
                                            <?php else: ?>
                                            <?php endif ?>
                                            
                                        </tr>
                                        <?php endforeach ?>      
                                        </tbody>

                                    </table>
                                </div>
                                
                            </div>
                        </div>

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


        <!-- Plugin JS -->
        <?php $this->load->view('Layout/pluginJS'); ?>
        <!-- End Plugin JS -->

        <script type="text/javascript">
          $(document).ready(function() {
            // alert('s');
          });
        </script>

    </body>
</html>