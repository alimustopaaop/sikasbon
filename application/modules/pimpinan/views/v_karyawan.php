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
                        <h4 class="text-themecolor">Data Karyawan</h4>
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
                                <h4 class="card-title">Data Karyawan</h4>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                    data-target="#addModal">
                                    <i class="fa fa-plus-circle"></i> Tambah
                                </button>
                                <!-- <button class="btn btn-danger btn-sm delete-btn" style="display: none;">
                                    <i class="fa fa-trash"></i> Hapus
                                </button> -->

                                <div class="table-responsive m-t-0">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>

                                                <th><i class="fa fa-tag"></i></th>
                                                <th>Nama Lengkap</th>
                                                <th>NIP</th>
                                                <th>Jabatan</th>
                                                <th>Role</th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$no = 1;

foreach ($list as $l): ?>
                                            <tr>

                                                <td> <button class="btn btn-success btn-sm reset-btn"
                                                        data-id="<?=$l->id?>">
                                                        <i class="ti-settings"></i> Reset Password
                                                    </button>
                                                </td>
                                                <td><?=$l->nama_lengkap?></td>
                                                <td><?=$l->nip?></td>
                                                <td><?=$l->jabatan?></td>
                                                <td>
                                                    <?php if ($l->role == "Pimpinan"): ?>
                                                    <div class="label label-table label-info">
                                                        <?php else: ?>
                                                        <div class="label label-table label-primary">
                                                            <?php endif;?>
                                                            <?=$l->role?></div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm"
                                                        data-toggle="modal" data-target="#editModal<?=$l->id?>">
                                                        <i class="fa fa-pencil"></i> Edit
                                                    </button>

                                                    <button class="btn btn-danger btn-sm delete-btn"
                                                        data-id="<?=$l->id?>">
                                                        <i class="fa fa-trash"></i> Hapus
                                                    </button>

                                                </td>

                                            </tr>

                                            <!-- Modal Edit -->
                                            <div class="modal fade modal-select" id="editModal<?=$l->id?>" tabindex="-1"
                                                role="dialog" aria-labelledby="editModalLabel<?=$l->id?>"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel<?=$l->id?>">Edit
                                                                Item</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Form Edit -->
                                                            <form action="<?php base_url()?>petugas/edit_karyawan"
                                                                method="post">
                                                                <!-- Isi form dengan data saat ini -->
                                                                <div class="form-group row">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-3 text-right control-label col-form-label">Nama
                                                                        Lengkap*</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" value="<?=$l->nama_lengkap?>"
                                                                            class="form-control" name="nama_lengkap"
                                                                            placeholder="Nama Lengkap">

                                                                        <input type="hidden" value="<?=$l->id?>"
                                                                            class="form-control" name="id"
                                                                            placeholder="ID">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-3 text-right control-label col-form-label">NIP*</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" value="<?=$l->nip?>"
                                                                            class="form-control" name="nip"
                                                                            placeholder="Email">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-3 text-right control-label col-form-label">Jabatan</label>
                                                                    <div class="col-sm-9">
                                                                        <select
                                                                            class="select2 form-control custom-select"
                                                                            style="width: 100%; height:36px;"
                                                                            name="jabatan">
                                                                            <option value="<?=$l->jabatan?>">
                                                                                <?=$l->jabatan?></option>
                                                                            <option value="">-- Pilih opsi --</option>
                                                                            <?php foreach ($jabatan as $j): ?>
                                                                            <option value="<?=$j->nama_jabatan?>">
                                                                                <?=$j->nama_jabatan?></option>
                                                                            <?php endforeach;?>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-3 text-right control-label col-form-label">Role</label>
                                                                    <div class="col-sm-9">
                                                                        <select
                                                                            class="select2 form-control custom-select"
                                                                            style="width: 100%; height:36px;"
                                                                            name="role">
                                                                            <option value="<?=$l->role?>"><?=$l->role?>
                                                                            </option>
                                                                            <option value="">-- Pilih opsi --</option>
                                                                            <option value="Pimpinan">Pimpinan</option>
                                                                            <option value="Petugas">Petugas</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Batal</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Simpan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php endforeach;?>

                                        </tbody>
                                    </table>
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
        <div class="modal fade modal-select" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
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
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                        name="jabatan">
                                        <option value="">-- Pilih opsi --</option>
                                        <?php foreach ($jabatan as $j): ?>
                                        <option value="<?=$j->nama_jabatan?>"><?=$j->nama_jabatan?></option>
                                        <?php endforeach;?>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3"
                                    class="col-sm-3 text-right control-label col-form-label">Role</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                        name="role">
                                        <option value="">-- Pilih opsi --</option>
                                        <option value="Pimpinan">Pimpinan</option>
                                        <option value="Petugas">Petugas</option>
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

            $('.reset-btn').on('click', function() {
                // Ambil ID dari atribut data-id
                var id = $(this).data('id');

                // Tampilkan Sweet Alert untuk konfirmasi penghapusan
                Swal.fire({
                    title: 'Konfirmasi Reset',
                    text: 'Apakah Anda yakin ingin mereset password item ini?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#D6B530',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Reset',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Jika pengguna mengonfirmasi penghapusan, lakukan tindakan hapus
                        // Panggil fungsi hapus dengan mengirimkan ID ke controller
                        resetData(id);
                    }
                });
            });

            // Fungsi untuk mengirimkan ID ke controller untuk penghapusan
            function resetData(id) {
                $.ajax({
                    url: '<?=base_url()?>petugas/reset_karyawan',
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