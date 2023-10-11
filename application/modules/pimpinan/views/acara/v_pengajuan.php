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
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/images/mempawah.png">
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
                                <a href="<?php base_url();?>pimpinan/pengajuan" class="btn btn-success">
                                    <i class="ti ti-angle-double-left"></i>
                                    <span class="ml-2">Menu Pengajuan</span>
                                </a>
                                <center>
                                    <h5 class="card-title"> <?=$list->header;?></h5>
                                    <h5 class="card-title">NOMOR:
                                        <?=$list->nomor_surat;?> </h5>
                                    Status : <span class="label label-table label-<?=$list->warna;?>">
                                        <?=$list->nama_status;?></span>
                                </center>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active"
                                            href="<?=base_url() . 'pimpinan/detail_ajuan?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="ti-home"></i></span> <span
                                                class="hidden-xs-down">
                                                Penandatangan</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="<?=base_url() . 'pimpinan/detail_belanja?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="ti-user"></i></span> <span
                                                class="hidden-xs-down">
                                                Belanja (PEMENDAGRI 64)</span></a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="<?=base_url() . 'pimpinan/detail_pengeluaran?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="ti-money"></i></span> <span
                                                class="hidden-xs-down">
                                                BKU Pengeluaran</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="<?=base_url() . 'pimpinan/detail_bendahara?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="fa fa-tag"></i></span> <span
                                                class="hidden-xs-down">
                                                Bendahara Pengeluaran</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="<?=base_url() . 'pimpinan/detail_pimpinan?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="fa fa-users"></i></span> <span
                                                class="hidden-xs-down">TTD
                                                Pimpinan</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="<?=base_url() . 'pimpinan/log?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="fa fa-recycle"></i></span> <span
                                                class="hidden-xs-down">Log</span></a> </li>


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
                                                        action="<?php base_url()?>pimpinan/simpan_step1" method="post"
                                                        onsubmit="return validateForm()">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h3 class="box-title m-b-0">Pihak Pertama</h3>
                                                                <br>
                                                                <div class="form-group row">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-3 text-right control-label col-form-label">Nama*</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                            name="nama1" value="<?=$list->nama1;?>"
                                                                            placeholder="Nama" readonly required>
                                                                        <input type="hidden" class="form-control"
                                                                            name="id_ajuan"
                                                                            value="<?=$list->id_ajuan;?>"
                                                                            placeholder="Nama">
                                                                        <input type="hidden" class="form-control"
                                                                            name="hash"
                                                                            value="<?=hash('sha256', $list->created_at);?>"
                                                                            placeholder="Nama">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-3 text-right control-label col-form-label">NIP*</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                            name="nip1" value=" <?=$list->nip1;?>"
                                                                            placeholder="NIP" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-3 text-right control-label col-form-label">Jabatan</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                            name="jabatan1"
                                                                            value="<?=$list->jabatan1;?>"
                                                                            placeholder="Jabatan" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <h3 class="box-title m-b-0">Pihak Kedua</h3>
                                                                <br>


                                                                <div class="form-group row">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-3 text-right control-label col-form-label">Nama*</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                            name="nama2" value="<?=$list->nama2;?>"
                                                                            placeholder="Nama" readonly required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-3 text-right control-label col-form-label">NIP*</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                            name="nip2" value="<?=$list->nip2;?>"
                                                                            placeholder="NIP" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-3 text-right control-label col-form-label">Jabatan</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                            name="jabatan2"
                                                                            value="<?=$list->jabatan2;?>"
                                                                            placeholder="Jabatan" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <hr>


                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h3 class="box-title m-b-0">Mengetahui Pertama</h3>
                                                                <br>

                                                                <div class="form-group row">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-3 text-right control-label col-form-label">Nama*</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                            name="nama3"
                                                                            value="<?=$list->nama_mengetahui1;?>"
                                                                            placeholder="Nama" readonly required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-3 text-right control-label col-form-label">NIP*</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                            name="nip3"
                                                                            value="<?=$list->nip_mengetahui1;?>"
                                                                            placeholder="NIP" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-3 text-right control-label col-form-label">Jabatan</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                            name="jabatan3"
                                                                            value="<?=$list->jabatan_mengetahui1;?>"
                                                                            placeholder="Jabatan" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <h3 class="box-title m-b-0">Mengetahui Kedua</h3>
                                                                <br>

                                                                <div class="form-group row">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-3 text-right control-label col-form-label">Nama*</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                            name="nama4"
                                                                            value="<?=$list->nama_mengetahui2;?>"
                                                                            placeholder="Nama" readonly required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-3 text-right control-label col-form-label">NIP*</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                            name="nip4"
                                                                            value="<?=$list->nip_mengetahui2;?>"
                                                                            placeholder="NIP" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-3 text-right control-label col-form-label">Jabatan</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                            name="jabatan4"
                                                                            value="<?=$list->jabatan_mengetahui2;?>"
                                                                            placeholder="Jabatan" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- <?php if ($list->status == 1 || $list->status == 4): ?>

                                                        <div class="form-group m-b-0">
                                                            <div class="offset-sm-3 col-sm-9">
                                                                <button type="submit"
                                                                    class="btn btn-info waves-effect waves-light m-t-10">Simpan
                                                                    Ajuan</button>
                                                            </div>
                                                        </div>
                                                        <?php endif;?> -->



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

        <?=$this->load->view('footer.php')?>
        <?=$this->load->view('javascript.php')?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
        function validateForm() {
            var pihak1 = document.getElementsByName("pihak1")[0].value;
            var pihak2 = document.getElementsByName("pihak2")[0].value;
            var nama1 = document.getElementsByName("nama1")[0].value;
            var nama2 = document.getElementsByName("nama2")[0].value;
            var nip1 = document.getElementsByName("nip1")[0].value;
            var nip2 = document.getElementsByName("nip2")[0].value;

            if (pihak1 == "-- Pilih --" || pihak2 == "-- Pilih --" || nama1 == "" || nama2 == "" || nip1 == "" ||
                nip2 == "") {
                alert("Mohon lengkapi semua field yang diperlukan.");
                return false;
            }
        }
        </script>

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
                    url: '<?=base_url()?>pimpinan/hapus_karyawan',
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
                            url: '<?=base_url()?>pimpinan/hapus_karyawan',
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