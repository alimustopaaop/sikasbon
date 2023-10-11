<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">


                        <?php if (!empty($gambar_profile)): ?>
                        <img src="<?=base_url('assets/profile/' . $gambar_profile);?>" class="img-circle"
                            alt="user-img" />
                        <!-- Jika akses->gambar kosong, tampilkan gambar default -->
                        <?php else: ?>
                        <img src="<?=base_url('assets/images/users/5.jpg');?>" class="img-circle" alt="user-img" />
                        <?php endif;?>




                        <span class="hide-menu"><?=$this->session->userdata('nama_lengkap');?></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href=" <?=base_url()?>petugas/myprofile"><i class="ti-user"></i> My Profile</a></li>
                    </ul>

                </li>
                <li class="nav-small-cap">--- PERSONAL</li>
                <li> <a class="waves-effect waves-dark" href="<?=base_url()?>petugas/petugas"><i
                            class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-settings"></i><span class="hide-menu">Menu Master</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?=base_url()?>petugas/karyawan">Karyawan</a></li>
                        <li><a href=" <?=base_url()?>petugas/jabatan">Jabatan</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-layout-grid2"></i><span class="hide-menu">Berita Acara</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?=base_url()?>petugas/pengajuan"">Pengajuan</a></li>
						<!-- <li><a href=" <?=base_url()?>petugas/laporan"">Laporan</a></li> -->
                    </ul>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="icon-logout"></i>
                        <span class="hide-menu">Logout</span>
                    </a>

                </li>




            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!--
 End Sid
ebar scroll-->
</aside>
<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Logout Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin logout?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="<?=base_url()?>login/auth/logout" class="btn btn-primary">Logout</a>
            </div>
        </div>
    </div>
</div>
