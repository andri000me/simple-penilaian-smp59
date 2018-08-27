
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
                                <h4 class="m-t-0 header-title">Laporan Nilai</h4>
                                <div class="m-b-20 table-responsive">
                                    
                                    <p class="text-muted font-13 m-b-30">
                                        <!-- <a href="<?= base_url('app/pelajaran/add'); ?>" class="btn btn-success btn-sm">Add Data <i class="fa fa-plus-circle"></i></a> -->
                                    </p>

                                    <table id="list-data" class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Semester</th>
                                            <th>Agama</th>
                                            <th>PKN</th>
                                            <th>B. Indo</th>
                                            <th>B. Inggris</th>
                                            <th>Matematika</th>
                                            <th>IPA</th>
                                            <th>IPS</th>
                                            <th>Seni Budaya</th>
                                            <th>Penjaskes</th>
                                            <th>TIK</th>
                                            <th>PLKJ</th>
                                            <th>Tata Busana</th>
                                            <th>Nilai Akhir</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php foreach ($nilai as $key => $value): ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $value->NIS ?></td>
                                            <td><?= $value->nama ?></td>
                                            <td><?= $value->kelas ?></td>
                                            <td><?= $value->semester ?></td>
                                            <td><?= $value->pendidikan_agama ?></td>
                                            <td><?= $value->pendidikan_kewarganegaraan ?></td>
                                            <td><?= $value->bahasa_indonesia ?></td>
                                            <td><?= $value->bahasa_inggris ?></td>
                                            <td><?= $value->matematika ?></td>
                                            <td><?= $value->ilmu_pengetahuan_alam ?></td>
                                            <td><?= $value->ilmu_pengetahuan_sosial ?></td>
                                            <td><?= $value->seni_budaya ?></td>
                                            <td><?= $value->penjaskes ?></td>
                                            <td><?= $value->tik ?></td>
                                            <td><?= $value->plkj ?></td>
                                            <td><?= $value->tata_busana ?></td>
                                            <td><?= $value->NA ?></td>
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

        <script type="text/javascript" src="<?= base_url('asset/datatable/') ?>jquery.dataTables.min.js"></script>

        <script type="text/javascript" src="<?= base_url('asset/datatable/') ?>dataTables.buttons.min.js"></script>
        
        <script type="text/javascript" src="<?= base_url('asset/datatable/') ?>buttons.print.min.js"></script>

        <script type="text/javascript" src="<?= base_url('asset/datatable/') ?>dataTables.select.min.js"></script>

        <link rel="stylesheet" type="text/css" href="<?= base_url('asset/datatable/') ?>jquery.dataTables.min.css">
        
        <link rel="stylesheet" type="text/css" href="<?= base_url('asset/datatable/') ?>buttons.dataTables.min.css">


        <script type="text/javascript">
          $(document).ready(function() {
                $('#list-data').DataTable( {
                    dom: 'Bfrtip',
                    responsive: true,
                    buttons: [
                        {
                            extend: 'print',
                            text: 'Print all',
                            exportOptions: {
                                modifier: {
                                    selected: null
                                }
                            }
                        },
                        {
                            extend: 'print',
                            text: 'Print selected'
                        }
                    ],
                    select: true
                } );
          });
        </script>

    </body>
</html>