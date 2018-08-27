<aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">
                                    <img src="<?= base_url('asset/img/user.png'); ?>" alt="user-img" class="img-circle img-thumbnail">
                                </div>
                                <div class="user-info">
                                    <a href="javascript:void(0)"><?= ucfirst($this->session->userdata('username')); ?></a>
                                    <p class="text-muted m-0"><?= $this->session->userdata('ket_status'); ?></p>
                                </div>
                            </div>
                            <!--- End User Detail box -->
                            <?php $menu = $this->uri->segment(2);  ?>
                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">

                                <?php if ($this->session->userdata('status') != 3): ?>
                                <li class="<?= ($menu == 'dashboard'?'active':'') ?>"><a class="<?= ($menu == 'dashboard'?'active':'') ?>" href="<?= base_url('app/dashboard'); ?>"><i class="ti-home"></i> Dashboard </a></li>
                                <?php else: ?>    
                                <?php endif ?>
                                
                                <?php if ($this->session->userdata('status') == 1): ?>
                                <li class="<?= ($menu == 'guru'?'active':'') ?>"><a class="<?= ($menu == 'guru'?'active':'') ?>" href="<?= base_url('app/guru'); ?>"><i class="mdi mdi-account"></i> Data Guru </a></li>
                                <?php else: ?>    
                                <?php endif ?>
                                <?php if ($this->session->userdata('status') != 3): ?>
                                <li class="<?= ($menu == 'siswa'?'active':'') ?>"><a class="<?= ($menu == 'siswa'?'active':'') ?>" href="<?= base_url('app/siswa'); ?>"><i class="mdi mdi-school"></i> Data Siswa </a></li>
                                <?php else: ?>    
                                <?php endif ?>
                                <?php if ($this->session->userdata('status') != 3): ?>
                                <li class="<?= ($menu == 'pelajaran'?'active':'') ?>"><a class="<?= ($menu == 'pelajaran'?'active':'') ?>" href="<?= base_url('app/pelajaran'); ?>"><i class="mdi mdi-book"></i> Mata Pelajaran </a></li>
                                <?php else: ?>    
                                <?php endif ?>
                                
                                <?php if ($this->session->userdata('status') != 3 ): ?>
                                <li class="<?= ($menu == 'nilai'?'active':'') ?>"><a class="<?= ($menu == 'nilai'?'active':'') ?>" href="<?= base_url('app/nilai'); ?>"><i class="mdi mdi-server"></i> Mengelola Nilai </a></li>
                                <?php else: ?>    
                                <?php endif ?>
                                
                                    
                                <li class="<?= ($menu == 'laporan'?'active':'') ?>" ><a class="<?= ($menu == 'laporan'?'active':'') ?>" href="<?= base_url('app/laporan'); ?>"><i class="mdi mdi-desktop-mac"></i> Laporan Nilai </a></li>

                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>