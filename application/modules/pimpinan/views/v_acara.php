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
                        <h4 class="text-themecolor"><?=$title;?></h4>
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
                                <h4 class="card-title"><?=$title;?></h4>
                                <!-- <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                    data-target="#addModal">
                                    <i class="fa fa-plus-circle"></i> Tambah
                                </button> -->
                                <!-- <button class="btn btn-danger btn-sm delete-btn" style="display: none;">
								<i class="fa fa-trash"></i> Hapus
							</button> -->

                                <div class="table-responsive m-t-0">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>

                                                <th><i class="fa fa-tag"></i></th>
                                                <th>Nomor Surat</th>
                                                <th>Tanggal</th>
                                                <!-- <th>Terbilang</th> -->
                                                <th>Belanja Operasi</th>
                                                <th>Belanja Modal</th>
                                                <th>Belanja Tidak Terduga</th>
                                                <th>Status</th>
                                                <th>TTD</th>

                                                <!-- <th></th> -->

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

$no = 1;
foreach ($list as $l):
?>
                                            <tr>
                                                <td>
                                                    <a href="<?=base_url() . 'pimpinan/detail_ajuan?d=' . $l->id_ajuan . '&s=' . hash('sha256', $l->created_at)?>"
                                                        class="btn btn-success btn-xs" title="Detail">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <?php if ($l->status == 6): ?>
                                                    <a target="_blank"
                                                        href="<?=base_url() . 'pimpinan/cetak_dokumen?d=' . $l->id_ajuan . '&s=' . hash('sha256', $l->created_at)?>"
                                                        class="btn btn-info btn-xs">
                                                        <i class="fa fa-file"></i>
                                                    </a>
                                                    <?php endif;?>
                                                </td>
                                                <td><?=$l->nomor_surat?></td>
                                                <td><?=$l->tgl?></td>
                                                <td><?=$l->belanja_operasi?></td>
                                                <td><?=$l->belanja_modal?></td>
                                                <td><?=$l->belanja_terduga?></td>
                                                <!-- <td style=" text-transform:capitalize ;" width="28%">
                                                    <?=$l->keterangan?></td> -->
                                                <td>
                                                    <div class="label label-table label-<?=$l->warna;?>">
                                                        <?=$l->nama_status;?>

                                                    </div>



                                                </td>

                                                <td>
                                                    <button type="button" class="btn btn-facebook btn-xs"
                                                        data-toggle="modal" data-target="#ttdModal<?=$l->id_ajuan?>"
                                                        title="TTD">
                                                        <i class="fa fa-users"></i>
                                                    </button>
                                                    <div class="modal fade modal-select bs-example-modal-lg"
                                                        id="ttdModal<?=$l->id_ajuan?>" tabindex="-1" role="dialog"
                                                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="myLargeModalLabel">Yang
                                                                        Bertanda Tangan
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- Form edit data -->
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label>Pihak 1*</label>
                                                                            <div>
                                                                                <input type="text" class="form-control"
                                                                                    name="nomor_surat"
                                                                                    placeholder="Pihak 1"
                                                                                    value="<?=$l->nama_user?>" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label>Pihak 2*</label>
                                                                            <div>
                                                                                <input type="text" class="form-control"
                                                                                    name="nomor_surat"
                                                                                    value="<?=$l->nama_pihak2?>"
                                                                                    readonly>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label>Mengetahui 1*</label>
                                                                            <div>
                                                                                <input type="text" class="form-control"
                                                                                    name="nomor_surat"
                                                                                    value="<?=$l->nama_mengetahui1?>"
                                                                                    readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label>Mengetahui 2*</label>
                                                                            <div>
                                                                                <input type="text" class="form-control"
                                                                                    name="nomor_surat"
                                                                                    value="<?=$l->nama_mengetahui2?>"
                                                                                    readonly>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- <td>
                                                    <button type="button" class="btn btn-warning btn-xs"
                                                        data-toggle="modal" data-target="#editModal<?=$l->id_ajuan?>"
                                                        title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-xs delete-btn"
                                                        data-id="<?=$l->id_ajuan?>" title="Hapus">
                                                        <i class="fa fa-trash"></i>
                                                    </button>

                                                </td> -->
                                            </tr>

                                            <div class="modal fade modal-select" id="editModal<?=$l->id_ajuan?>"
                                                tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Form edit data -->
                                                            <form class="form-horizontal"
                                                                action="<?php base_url()?>pimpinan/edit_ajuan/<?=$l->id_ajuan?>"
                                                                method="post">
                                                                <div class="form-group row">
                                                                    <label for="editInputEmail"
                                                                        class="col-sm-3 text-right control-label col-form-label">Nomor
                                                                        Surat*</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                            name="nomor_surat" placeholder="Nomor Surat"
                                                                            value="<?=$l->nomor_surat?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="editInputDate"
                                                                        class="col-sm-3 text-right control-label col-form-label">Tanggal*</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="date" class="form-control"
                                                                            name="tgl" placeholder="Tanggal"
                                                                            value="<?=$l->tgl?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="inputEmail3"
                                                                        class="col-sm-3 text-right control-label col-form-label">Pihak
                                                                        2</label>
                                                                    <div class="col-sm-9">
                                                                        <select
                                                                            class="select2 form-control custom-select"
                                                                            style="width: 100%; height:36px;"
                                                                            name="pihak_2">
                                                                            <option value="<?=$l->pihak_2?>">
                                                                                <?=$l->nama_pihak2?></option>
                                                                            <option value="">-- Pilih opsi --</option>
                                                                            <?php foreach ($pihak as $p): ?>
                                                                            <option value="<?=$p->id?>">
                                                                                <?=$p->nama_lengkap?></option>
                                                                            <?php endforeach;?>
                                                                        </select>

                                                                    </div>
                                                                </div>


                                                                <div class="modal-footer">
                                                                    <button type="reset" class="btn btn-secondary"
                                                                        data-dismiss="modal">Batal
                                                                    </button>
                                                                    <button type="submit" class="btn btn-primary">Simpan
                                                                        Perubahan
                                                                    </button>
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

        <div class="modal fade modal-select modal-lg" id="addModal" tabindex="-1" role="dialog"
            aria-labelledby="addModalLabel" aria-hidden="true">
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
                        <form class="form-horizontal" action="<?php base_url()?>add_ajuan" method="post">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Nomor
                                    Surat*</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nomor_surat" placeholder="Nomor Surat"
                                        required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3"
                                    class="col-sm-3 text-right control-label col-form-label">Tanggal*</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="tgl" placeholder="Tanggal" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Pihak
                                    2</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;"
                                        name="pihak_2" required>
                                        <option value="">-- Pilih opsi --</option>
                                        <?php foreach ($pihak as $p): ?>
                                        <option value="<?=$p->id?>"><?=$p->nama_lengkap?></option>
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
                    url: '<?=base_url()?>pimpinan/hapus_ajuan',
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