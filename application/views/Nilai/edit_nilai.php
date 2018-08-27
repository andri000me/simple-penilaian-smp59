
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
                                <h4 class="m-b-20 header-title">Form Nilai</h4>
                                <?php foreach ($nilai as $key => $value) ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" role="form" action="<?= base_url('app/nilai/update') ?>" method="POST">
                                            <input type="hidden" name="id_nilai" value="<?= $value->id_nilai ?>">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">NIS</label>
                                                <div class="col-md-10">
                                                    <select name="nis" class="form-control select2" required>
                                                        <option value="">-- Pilih --</option>
                                                        <?php foreach ($siswa as $key => $row): ?>
                                                            <?php if ($value->NIS == $row->NIS): $p="selected"; ?>
                                                             <?php else: $p=""; ?>   
                                                            <?php endif ?>
                                                            <option value="<?= $row->NIS ?>" <?= $p ?> ><?= $row->NIS." (".$row->nama.")" ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-email">Kelas</label>
                                                <div class="col-md-4">
                                                    <select name="kelas" class="form-control select2" required>
                                                        <option value="">-- Pilih --</option>
                                                        <?php 
                                                        $arrayKelas = [71,72,73,74,75,76,81,82,83,84,85,86,91,92,93,94,95,96];
                                                        for ($i=0; $i < count($arrayKelas) ; $i++) { 
                                                            if ($value->kelas == $arrayKelas[$i]) {
                                                                $p = "selected";
                                                            }else{
                                                                $p = "";
                                                            }
                                                        ?>  
                                                        <option value="<?= $arrayKelas[$i] ?>" <?= $p; ?>><?= $arrayKelas[$i] ?></option>  
                                                        <?php } ?>
                                                            
                                                    </select>
                                                </div>

                                                <label class="col-md-2 control-label" for="example-email">Semester</label>
                                                <div class="col-md-4">
                                                    <select name="semester" required class="form-control">
                                                        <option value="">-- Pilih --</option>
                                                        <option value="Ganjil" <?= $value->semester == 'Ganjil'?'selected':'' ?> >Ganjil</option>
                                                        <option value="Genap" <?= $value->semester == 'Genap'?'selected':'' ?> >Genap</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <h4 class="page-header">Edit Data Nilai</h4>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Pendidikan Agama</label>
                                                <div class="col-md-4">
                                                    <input type="number" class="form-control"  name="pendidikan_agama" required max="100" min="0" value="<?= $value->pendidikan_agama ?>">
                                                </div>

                                                <label class="col-md-2 control-label">PKN</label>
                                                <div class="col-md-4">
                                                    <input type="number" class="form-control"  name="pendidikan_kewarganegaraan" required max="100" min="0" value="<?= $value->pendidikan_kewarganegaraan ?>">
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Bahasa Indonesia</label>
                                                <div class="col-md-4">
                                                    <input type="number" class="form-control"  name="bahasa_indonesia" required max="100" min="0" value="<?= $value->bahasa_indonesia ?>">
                                                </div>

                                                <label class="col-md-2 control-label">Bahasa Inggris</label>
                                                <div class="col-md-4">
                                                    <input type="number" class="form-control"  name="bahasa_inggris" required max="100" min="0" value="<?= $value->bahasa_inggris ?>">
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Matematika</label>
                                                <div class="col-md-4">
                                                    <input type="number" class="form-control"  name="matematika" required max="100" min="0" value="<?= $value->matematika ?>">
                                                </div>

                                                <label class="col-md-2 control-label">IPA</label>
                                                <div class="col-md-4">
                                                    <input type="number" class="form-control"  name="ilmu_pengetahuan_alam" required max="100" min="0" value="<?= $value->ilmu_pengetahuan_alam ?>">
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">IPS</label>
                                                <div class="col-md-4">
                                                    <input type="number" class="form-control"  name="ilmu_pengetahuan_sosial" required max="100" min="0" value="<?= $value->ilmu_pengetahuan_sosial ?>">
                                                </div>

                                                <label class="col-md-2 control-label">Seni Budaya</label>
                                                <div class="col-md-4">
                                                    <input type="number" class="form-control"  name="seni_budaya" required max="100" min="0" value="<?= $value->seni_budaya ?>">
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Penjaskes</label>
                                                <div class="col-md-4">
                                                    <input type="number" class="form-control"  name="penjaskes" required max="100" min="0" value="<?= $value->penjaskes ?>">
                                                </div>

                                                <label class="col-md-2 control-label">TIK</label>
                                                <div class="col-md-4">
                                                    <input type="number" class="form-control"  name="tik" required max="100" min="0" value="<?= $value->tik ?>">
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">PLKJ</label>
                                                <div class="col-md-4">
                                                    <input type="number" class="form-control"  name="plkj" required max="100" min="0" value="<?= $value->plkj ?>">
                                                </div>

                                                <label class="col-md-2 control-label">Tata Busana</label>
                                                <div class="col-md-4">
                                                    <input type="number" class="form-control"  name="tata_busana" required max="100" min="0" value="<?= $value->tata_busana ?>">
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nilai Akhir</label>
                                                <div class="col-md-10">
                                                    <input type="number" class="form-control"  name="na" id="na" required max="100" min="0" readonly placeholder="Nilai Akhir" value="<?= $value->NA ?>">
                                                </div>
                                            </div>
                                            <div class="form-group" align="center">
                                                <button type="submit" class="btn btn-primary">Update Data</button>
                                                <button id="btn-hitung-nilai" type="button" class="btn btn-warning">Hitung Nilai Akhir</button>
                                                <a href="<?=  base_url('app/nilai')?>" class="btn btn-danger">Back</a>
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

        <script type="text/javascript">
            $(document).ready(function() {
                $('.select2').select2();

                $('#btn-hitung-nilai').on('click', function(event) {
                    event.preventDefault();
                    var agama = $('input[name="pendidikan_agama"]').val();
                    var pkn = $('input[name="pendidikan_kewarganegaraan"]').val();
                    var bahasa_indonesia = $('input[name="bahasa_indonesia"]').val();
                    var bahasa_inggris = $('input[name="bahasa_inggris"]').val();
                    var matematika = $('input[name="matematika"]').val();
                    var ipa = $('input[name="ilmu_pengetahuan_alam"]').val();
                    var ips = $('input[name="ilmu_pengetahuan_sosial"]').val();
                    var seni_budaya = $('input[name="seni_budaya"]').val();
                    var penjaskes = $('input[name="penjaskes"]').val();
                    var tik = $('input[name="tik"]').val();
                    var plkj = $('input[name="plkj"]').val();
                    var tata_busana = $('input[name="tata_busana"]').val();

                    if (agama == ""){
                        agama = 0;
                    }
                    if (pkn == ""){
                        pkn = 0;
                    }
                    if (bahasa_indonesia == ""){
                        bahasa_indonesia = 0;
                    }
                    if (bahasa_inggris == ""){
                        bahasa_inggris = 0;
                    }
                    if (matematika == ""){
                        matematika = 0;
                    }
                    if (ipa == ""){
                        ipa = 0;
                    }
                    if (ips == ""){
                        ips = 0;
                    }
                    if (seni_budaya == ""){
                        seni_budaya = 0;
                    }
                    if (penjaskes == ""){
                        penjaskes = 0;
                    }
                    if (tik == ""){
                        tik = 0;
                    }
                    if (plkj == ""){
                        plkj = 0;
                    }
                    if (tata_busana == ""){
                        tata_busana = 0;
                    }

                    var jumlahNilai = parseInt(agama) + parseInt(pkn) +  parseInt(bahasa_indonesia) +  parseInt(bahasa_inggris) +  parseInt(matematika) +  parseInt(ipa) +  parseInt(ips) +  parseInt(seni_budaya) +  parseInt(penjaskes) +  parseInt(tik) + parseInt(plkj) + parseInt(tata_busana) ;
                    var nilaiAkhir = jumlahNilai / 12 ;
                    $('#na').val(nilaiAkhir.toFixed(2));

                });

            });
        </script>

    </body>
</html>