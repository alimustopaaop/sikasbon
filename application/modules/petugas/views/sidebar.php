<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
                <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="<?=base_url()?>assets/images/mempawah.png" alt="homepage" width="50px"
                        class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="<?=base_url()?>assets/images/mempawah.png" alt="homepage" width="50px"
                        class="light-logo" />
                </b>
                <!--End Logo icon -->
                <span class="hidden-xs"><span class="font-bold">SI</span>KASBON</span>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto">
                <!-- This is  -->
                <li class="nav-item"><a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark"
                        href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                <li class="nav-item"><a
                        class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                        href="javascript:void(0)"><i class="icon-menu"></i></a></li>
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->

            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->

        </div>
    </nav>
</header>

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

                <?php if ($this->session->userdata('role') == 'Admin' || $this->session->userdata('role') == "Super Admin"): ?>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-settings"></i><span class="hide-menu">Menu Master</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?=base_url()?>petugas/karyawan">Karyawan</a></li>
                        <li><a href=" <?=base_url()?>petugas/jabatan">Jabatan</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-layout-grid2"></i><span class="hide-menu">Menu Rekon</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?=base_url()?>petugas/pengajuan"">Pengajuan</a></li>
						<!-- <li><a href=" <?=base_url()?>petugas/laporan"">Laporan</a></li> -->
                    </ul>
                </li>
                <?php endif;?>


                <?php if ($this->session->userdata('role') == 'Petugas'): ?>
                <!-- <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-settings"></i><span class="hide-menu">Menu Master</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?=base_url()?>petugas/karyawan">Karyawan</a></li>
                        <li><a href=" <?=base_url()?>petugas/jabatan">Jabatan</a></li>

                    </ul>
                </li> -->
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-layout-grid2"></i><span class="hide-menu">Menu Rekon</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?=base_url()?>petugas/pengajuan"">Pengajuan</a></li>
						<!-- <li><a href=" <?=base_url()?>petugas/laporan"">Laporan</a></li> -->
                    </ul>
                </li>

                <?php endif;?>

                <?php if ($this->session->userdata('role') == "Pimpinan" || $this->session->userdata('role') == "Super Admin"): ?>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="ti-layout-grid2"></i><span class="hide-menu">Menu Pimpinan</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?=base_url()?>pimpinan/pengajuan"">Pengajuan</a></li>
						<!-- <li><a href=" <?=base_url()?>petugas/laporan"">Laporan</a></li> -->
                    </ul>
                </li>
                <?php endif;?>
                <li>
                    <a class="waves-effect waves-dark" href="#" onclick="confirmLogout()">
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


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function confirmLogout() {
    Swal.fire({
        title: 'Konfirmasi',
        text: 'Apakah Anda yakin ingin logout?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak',
    }).then((result) => {
        if (result.isConfirmed) {
            // Jika pengguna menekan "Ya", lakukan tindakan logout di sini
            window.location.href = '<?=base_url()?>login/auth/logout';
        }
    });
}
</script>