<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/images/favicon.png">
    <title><?=$title;?></title>
    <!-- This page CSS -->
    <!-- chartist CSS -->

    <?=$this->load->view('css.php')?>

    <!-- page css -->
    <link href="<?=base_url()?>assets/dist/css/pages/tab-page.css" rel="stylesheet">

</head>

<body class="skin-green-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"><?=$title;?></p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
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
                            <img src="<?=base_url()?>assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?=base_url()?>assets/images/logo-light-icon.png" alt="homepage"
                                class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <span class="hidden-xs"><span class="font-bold">elite</span>university</span>
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
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a
                                class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">


                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->

                    </ul>
                </div>
            </nav>
        </header>

        <?=$this->load->view('sidebar.php')?>

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Pengajuan</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">

                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <center>
                                    <h4 class="card-title">BERITA ACARA REKONSILIASI</h4>
                                    <h6 class="card-title">REKONSILIASI DATA PERTANGGUNGJAWABAN REALISASI APBD <br>
                                        BADAN
                                        PENGELOLA KEUANGAN DAN ASET DAERAH KABUPATEN MEMPAWAH <br> NOMOR:
                                        <?=$list->nomor_surat;?>
                                </center>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active"
                                            href="<?=base_url() . 'petugas/detail_ajuan?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="ti-home"></i></span> <span
                                                class="hidden-xs-down">
                                                Penandatangan</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="<?=base_url() . 'petugas/detail_belanja?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="ti-user"></i></span> <span
                                                class="hidden-xs-down">
                                                Belanja (PEMENDAGRI 64)</span></a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="<?=base_url() . 'petugas/detail_pengeluaran?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="ti-money"></i></span> <span
                                                class="hidden-xs-down">
                                                BKU Pengeluaran</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="<?=base_url() . 'petugas/detail_bendahara?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="fa fa-tag"></i></span> <span
                                                class="hidden-xs-down">Kas di
                                                Bendahara Pengeluaran</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="<?=base_url() . 'petugas/detail_pimpinan?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="fa fa-users"></i></span> <span
                                                class="hidden-xs-down">TTD
                                                Pimpinan</span></a> </li>

                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" role="tabpanel">
                                        <div class="p-20">
                                            <p>Pada <b><?=$list->keterangan;?></b>, kami yang bertanda tangan
                                                dibawah ini: </p>

                                            <div class="col-md-12">
                                                <div class="card card-body">

                                                    <form class="form-horizontal"
                                                        action="<?php base_url()?>petugas/simpan_step1" method="post">
                                                        <h3 class="box-title m-b-0">Pihak Pertama</h3>
                                                        <br>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-sm-3 text-right control-label col-form-label">Pilih
                                                                Pihak Pertama</label>
                                                            <div class="col-sm-9">
                                                                <select class="select2 form-control custom-select"
                                                                    style="width: 100%; height:36px;" name="pihak1"
                                                                    onchange="updateReadOnlyValue(this, 'nama1', 'nip1', 'jabatan1')">
                                                                    <option>-- Pilih --</option>
                                                                    <?php foreach ($users as $us): ?>
                                                                    <option value="<?=$us->id;?>"
                                                                        data-nama="<?=$us->nama_lengkap;?>"
                                                                        data-nip="<?=$us->nip;?>"
                                                                        data-jabatan="<?=$us->jabatan;?>">
                                                                        <?=$us->nama_lengkap;?>
                                                                    </option>
                                                                    <?php endforeach;?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-3 text-right control-label col-form-label">Nama*</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="nama1"
                                                                    value="<?=$step1->nama1;?>" placeholder="Nama"
                                                                    readonly>
                                                                <input type="hidden" class="form-control"
                                                                    name="id_ajuan" value="<?=$list->id_ajuan;?>"
                                                                    placeholder="Nama">
                                                                <input type="hidden" class="form-control" name="hash"
                                                                    value="<?=hash('sha256', $list->created_at);?>"
                                                                    placeholder="Nama">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-3 text-right control-label col-form-label">NIP*</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="nip1"
                                                                    value=" <?=$step1->nip1;?>" placeholder="NIP"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-3 text-right control-label col-form-label">Jabatan</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="jabatan1"
                                                                    value="<?=$step1->jabatan1;?>" placeholder="Jabatan"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                        <h3 class="box-title m-b-0">Pihak Kedua</h3>
                                                        <br>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-sm-3 text-right control-label col-form-label">Pilih
                                                                Pihak Kedua</label>
                                                            <div class="col-sm-9">
                                                                <select class="select2 form-control custom-select"
                                                                    style="width: 100%; height:36px;" name="pihak2"
                                                                    onchange="updateReadOnlyValue(this, 'nama2', 'nip2', 'jabatan2')">
                                                                    <option>-- Pilih --</option>
                                                                    <?php foreach ($users as $us): ?>
                                                                    <option value="<?=$us->id;?>"
                                                                        data-nama="<?=$us->nama_lengkap;?>"
                                                                        data-nip="<?=$us->nip;?>"
                                                                        data-jabatan="<?=$us->jabatan;?>">
                                                                        <?=$us->nama_lengkap;?>
                                                                    </option>
                                                                    <?php endforeach;?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-3 text-right control-label col-form-label">Nama*</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="nama2"
                                                                    value="<?=$step1->nama2;?>" placeholder="Nama"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-3 text-right control-label col-form-label">NIP*</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="nip2"
                                                                    value="<?=$step1->nip2;?>" placeholder="NIP"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3"
                                                                class="col-sm-3 text-right control-label col-form-label">Jabatan</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="jabatan2"
                                                                    value="<?=$step1->jabatan2;?>" placeholder="Jabatan"
                                                                    readonly>
                                                            </div>
                                                        </div>
                                                        <p>Dengan ini menerangkan bahwa: <br>PIHAK PERTAMA telah
                                                            melakukan Rekonsiliasi Pengeluaran Bulan
                                                            <input type="text" placeholder="Bulan" name="bulan"
                                                                value="<?=$step1->bulan;?>" style="width: 20%;"> Tahun
                                                            <input type="number" placeholder="Tahun" name="tahun"
                                                                value="<?=$step1->tahun;?>" style="width: 20%;"> <br>
                                                            dengan
                                                            PIHAK KEDUA
                                                        </p>

                                                        <div class="form-group m-b-0">
                                                            <div class="offset-sm-3 col-sm-9">
                                                                <button type="submit"
                                                                    class="btn btn-info waves-effect waves-light m-t-10">Simpan
                                                                    Ajuan</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <!-- ============================================================== -->
                <!-- End Comment - chats -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->

                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->

        <!-- Modal Tambah -->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form tambah data -->
                        <form class="form-horizontal" action="<?php base_url()?>petugas/add_karyawan" method="post">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Nama
                                    Lengkap*</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_lengkap"
                                        placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3"
                                    class="col-sm-3 text-right control-label col-form-label">NIP*</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nip" placeholder="NIP" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3"
                                    class="col-sm-3 text-right control-label col-form-label">Jabatan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="jabatan" required>
                                        <option value="">-- Pilih opsi --</option>
                                        <?php foreach ($jabatan as $j): ?>
                                        <option value="<?=$j->nama_jabatan?>"><?=$j->nama_jabatan?></option>
                                        <?php endforeach;?>
                                    </select>

                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        <?=$this->load->view('footer.php')?>
        <?=$this->load->view('javascript.php')?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
        function updateReadOnlyValue(selectElement, namaInput, nipInput, jabatanInput) {
            var selectedOption = selectElement.options[selectElement.selectedIndex];
            var selectedNama = selectedOption.getAttribute('data-nama');
            var selectedNIP = selectedOption.getAttribute('data-nip');
            var selectedJabatan = selectedOption.getAttribute('data-jabatan');

            document.getElementsByName(namaInput)[0].value = selectedNama;
            document.getElementsByName(nipInput)[0].value = selectedNIP;
            document.getElementsByName(jabatanInput)[0].value = selectedJabatan;
        }
        </script>
        <script>
        $(document).ready(function() {
            // Tangkap klik pada tombol "Hapus"
            $('.delete-btn').on('click', function() {
                // Ambil ID dari atribut data-id
                var id = $(this).data('id');

                // Tampilkan Sweet Alert untuk konfirmasi penghapusan
                Swal.fire({
                    title: 'Konfirmasi Hapus',
                    text: 'Apakah Anda yakin ingin menghapus item ini?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Hapus',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Jika pengguna mengonfirmasi penghapusan, lakukan tindakan hapus
                        // Panggil fungsi hapus dengan mengirimkan ID ke controller
                        hapusData(id);
                    }
                });
            });

            // Fungsi untuk mengirimkan ID ke controller untuk penghapusan
            function hapusData(id) {
                $.ajax({
                    url: '<?=base_url()?>petugas/hapus_karyawan',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        // Handle respons dari controller
                        if (response == 'success') {

                            // Jika penghapusan berhasil, tampilkan Sweet Alert sukses
                            Swal.fire('Sukses', 'Item berhasil dihapus', 'success');
                            // Lakukan tindakan lain yang diperlukan, misalnya refresh halaman atau update tampilan
                            window.location.reload();
                        } else {
                            // Jika penghapusan gagal, tampilkan Sweet Alert error
                            Swal.fire('Error', 'Terjadi kesalahan saat menghapus item', 'error');
                        }
                    },
                    error: function() {
                        // Jika terjadi kesalahan pada AJAX, tampilkan Sweet Alert error
                        Swal.fire('Error', 'Terjadi kesalahan saat menghubungi server', 'error');
                    }
                });
            }
        });
        </script>

        <!-- <script>
        $(document).ready(function() {
            // Tangkap perubahan pada checkbox
            $('.selected-item').on('change', function() {
                // Periksa apakah ada checkbox yang dicentang
                var isChecked = $('.selected-item:checked').length > 0;

                if (isChecked) {
                    // Jika ada checkbox yang dicentang, tampilkan tombol "Hapus"
                    $('.delete-btn').show();
                } else {
                    // Jika tidak ada checkbox yang dicentang, sembunyikan tombol "Hapus"
                    $('.delete-btn').hide();
                }
            });

            // Tangkap klik pada tombol "Hapus"
            $('.delete-btn').on('click', function() {
                // Periksa item terpilih
                var selectedItems = $('input.selected-item:checked');

                if (selectedItems.length === 0) {
                    // Jika tidak ada item yang terpilih, tampilkan pesan
                    alert('Tidak ada item yang dipilih untuk dihapus.');
                    return;
                }

                // Tampilkan konfirmasi penghapusan
                Swal.fire({
                    title: 'Konfirmasi',
                    text: 'Apakah Anda yakin ingin menghapus item yang dipilih?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Batal'
                }).then(function(result) {
                    if (result.isConfirmed) {
                        // Lakukan tindakan penghapusan di sini
                        var itemIds = [];

                        selectedItems.each(function() {
                            itemIds.push($(this).val());
                        });

                        // Kirim data itemIds menggunakan AJAX
                        $.ajax({
                            url: '<?=base_url()?>petugas/hapus_karyawan',
                            type: 'POST',
                            data: {
                                itemIds: itemIds
                            },
                            success: function(response) {
                                // Handle respons dari server
                                if (response.success) {
                                    // Lakukan tindakan lain yang diperlukan, misalnya refresh halaman atau update tampilan
                                    Swal.fire({
                                        title: 'Sukses!',
                                        text: 'Data berhasil dihapus',
                                        icon: 'success',
                                        timer: 3000,
                                        showConfirmButton: false
                                    }).then(function() {
                                        // location.reload();
                                        $('#myTable').DataTable().ajax
                                            .reload(null, false);
                                    });
                                } else {
                                    Swal.fire('Error',
                                        'Terjadi kesalahan saat menghapus item.',
                                        'error');
                                }
                            },
                            error: function() {
                                Swal.fire('Error',
                                    'Terjadi kesalahan saat menghubungi server.',

                             'error');
                            }
                        });
                    }
                });
            });
        });
        </script> -->




</body>













</html>
