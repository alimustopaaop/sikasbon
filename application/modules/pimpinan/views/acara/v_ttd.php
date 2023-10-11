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
    <style>
    #signature-pad {
        border: 1px solid #000;
    }
    </style>
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
                                    <li class="nav-item"> <a class="nav-link "
                                            href="<?=base_url() . 'pimpinan/detail_ajuan?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="ti-home"></i></span> <span
                                                class="hidden-xs-down">
                                                Penandatangan</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link "
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
                                    <li class="nav-item"> <a class="nav-link "
                                            href="<?=base_url() . 'pimpinan/detail_bendahara?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="fa fa-tag"></i></span> <span
                                                class="hidden-xs-down">
                                                Bendahara Pengeluaran</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link active"
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
                                            <p>PENANDATANGANAN BERITA ACARA REKONSILIASI</p>
                                            <div class="row">
                                                <div class="col-sm-6 text-center">
                                                    <div class="form-group">
                                                        <label class="text-right control-label">PIHAK
                                                            PERTAMA</label><br>
                                                        <label><?=$ajuan->jabatan1;?></label>
                                                        <div>
                                                            <?php if ($ajuan->ttd_1 != null) {
    $imagePath = base_url() . $ajuan->ttd_1;
    $imagePathWithVersion = $imagePath . '?v=' . filemtime($ajuan->ttd_1);
    ?>
                                                            <img src="<?=$imagePathWithVersion;?>" width="50%"
                                                                height="50%">
                                                            <?php }?>


                                                            <p> <u><?=$ajuan->nama1;?></u><br><?=$ajuan->nip1;?></p>
                                                            <?php if ($list->id_user == $this->session->userdata('id')): ?>
                                                            <?php if ($list->status == 1 || $list->status == 4): ?>
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#signatureModal1">
                                                                Tanda Tangan Pihak Pertama
                                                            </button>
                                                            <?php endif;?>
                                                            <?php endif;?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-center">
                                                    <div class="form-group">
                                                        <label class="text-right control-label">PIHAK KEDUA</label><br>
                                                        <label><?=$ajuan->jabatan2;?></label>
                                                        <div>

                                                            <?php if ($ajuan->ttd_2 != null) {
    $imagePath = base_url() . $ajuan->ttd_2;
    $imagePathWithVersion = $imagePath . '?v=' . filemtime($ajuan->ttd_2);
    ?>
                                                            <img src="<?=$imagePathWithVersion;?>" width="50%"
                                                                height="50%">
                                                            <?php }?>
                                                            <p> <u><?=$ajuan->nama2;?></u><br><?=$ajuan->nip2;?></p>
                                                            <?php if ($list->pihak_2 == $this->session->userdata('id')): ?>

                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#signatureModal2">
                                                                Tanda Tangan Pihak Kedua
                                                            </button>
                                                            <?php endif;?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row">
                                                <div class="col-sm-6 text-center">
                                                    <div class="form-group">
                                                        <label class="text-right control-label">MENGETAHUI
                                                            PERTAMA</label><br>
                                                        <label><?=$ajuan->jabatan3;?></label>
                                                        <div>
                                                            <?php if ($ajuan->ttd_3 != null) {
    $imagePath = base_url() . $ajuan->ttd_3;
    $imagePathWithVersion = $imagePath . '?v=' . filemtime($ajuan->ttd_3);
    ?>
                                                            <img src="<?=$imagePathWithVersion;?>" width="50%"
                                                                height="50%">
                                                            <?php }?>


                                                            <p> <u><?=$ajuan->nama3;?></u><br><?=$ajuan->nip3;?></p>
                                                            <?php if ($list->mengetahui_1 == $this->session->userdata('id')): ?>

                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#signatureModal3">
                                                                Tanda Tangan Mengetahui Pertama
                                                            </button>
                                                            <?php endif;?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-center">
                                                    <div class="form-group">
                                                        <label class="text-right control-label">MENGETAHUI
                                                            KEDUA</label><br>
                                                        <label><?=$ajuan->jabatan4;?></label>
                                                        <div>

                                                            <?php if ($ajuan->ttd_4 != null) {
    $imagePath = base_url() . $ajuan->ttd_4;
    $imagePathWithVersion = $imagePath . '?v=' . filemtime($ajuan->ttd_4);
    ?>
                                                            <img src="<?=$imagePathWithVersion;?>" width="50%"
                                                                height="50%">
                                                            <?php }?>
                                                            <p> <u><?=$ajuan->nama4;?></u><br><?=$ajuan->nip4;?></p>
                                                            <?php if ($list->mengetahui_2 == $this->session->userdata('id')): ?>

                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#signatureModal4">
                                                                Tanda Tangan Mengetahui Kedua
                                                            </button>
                                                            <?php endif;?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-sm-12 text-center">
                                                <a target="_blank"
                                                    href="<?=base_url() . 'pimpinan/cetak_dokumen?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"
                                                    class="btn btn-success">
                                                    <i class="fa fa-print"></i> Cetak Dokumen
                                                </a>
                                            </div>



                                            <?php if ($list->status == 2 || $list->status == 3): ?>
                                            <hr>

                                            <div class="col-sm-12 text-center">
                                                <h3>KEPUTUSAN PENGAJUAN</h3>
                                                <button type="button" class="btn btn-twitter" data-toggle="modal"
                                                    data-target="#myModal">
                                                    <i class="fa fa-pencil"></i> Ubah Status
                                                </button>
                                            </div>


                                            <!-- Modal -->
                                            <div class="modal fade modal-select" id="myModal" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Ubah Status</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Isi modal disini -->
                                                            <form action="<?php base_url();?>pimpinan/ubah_status"
                                                                method="post">
                                                                <div class="form-group row">
                                                                    <label
                                                                        class="col-sm-3 text-right control-label col-form-label">Status*</label>
                                                                    <div class="col-sm-9">

                                                                        <select
                                                                            class="select2 form-control custom-select"
                                                                            style="width: 100%; height:36px;"
                                                                            name="status">
                                                                            <option value="">-- Pilih opsi --</option>
                                                                            <option value="3">Proses</option>
                                                                            <option value="4">Revisi</option>
                                                                            <option value="5">Ditolak</option>
                                                                            <option value="6">Diterima</option>

                                                                        </select>


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
                                                                    <label
                                                                        class="col-sm-3 text-right control-label col-form-label">Catatan</label>
                                                                    <div class="col-sm-9">

                                                                        <textarea name="catatan" class="form-control"
                                                                            rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Tutup</button>
                                                                    <button type="submit" class="btn btn-primary">Simpan
                                                                        Status</button>
                                                                </div>


                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif;?>
                                            <br>



                                            <!-- <?php if ($list->status == 1 || $list->status == 4): ?>

                                            <div class="col-sm-12 text-center">
                                                <form action="<?php base_url();?>pimpinan/ajukanRekonsiliasi"
                                                    method="post" id="formRekonsiliasi">
                                                    <input type="hidden" name="id_ajuan" value="<?=$list->id_ajuan;?>">
                                                    <button class="btn btn-facebook" type="button"
                                                        onclick="showConfirmationModal()">
                                                        <i class="fa fa-address-book"></i> Ajukan Rekonsiliasi
                                                    </button>
                                                </form>
                                            </div>
                                            <?php endif;?> -->
                                            <div class="modal fade" id="signatureModal1" tabindex="-1" role="dialog"
                                                aria-labelledby="signatureModal1Label" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form class="form-horizontal">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="signatureModal1Label">Tanda
                                                                    Tangan Pihak Pertama</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <canvas id="signatureCanvas1" width="400"
                                                                    height="200"></canvas>
                                                            </div>

                                                            <input type="hidden" id="id_ajuan"
                                                                value="<?=$list->id_ajuan;?>" placeholder="Nama">
                                                            <input type="hidden" id="hash"
                                                                value="<?=hash('sha256', $list->created_at);?>"
                                                                placeholder="Nama">

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Tutup</button>
                                                                <button type="button" class="btn btn-primary"
                                                                    onclick="saveSignature('signatureCanvas1', '<?php echo base_url('pimpinan/simpan_ttd1'); ?>')">Simpan</button>
                                                                <button type="button" class="btn btn-danger"
                                                                    onclick="clearSignature('signatureCanvas1')">Hapus</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal untuk tanda tangan Pihak Kedua -->
                                            <div class="modal fade" id="signatureModal2" tabindex="-1" role="dialog"
                                                aria-labelledby="signatureModal2Label" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form class="form-horizontal">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="signatureModal2Label">Tanda
                                                                    Tangan Pihak Kedua</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <canvas id="signatureCanvas2" width="400"
                                                                    height="200"></canvas>
                                                            </div>

                                                            <input type="hidden" id="id_ajuan"
                                                                value="<?=$list->id_ajuan;?>" placeholder="Nama">
                                                            <input type="hidden" id="hash"
                                                                value="<?=hash('sha256', $list->created_at);?>"
                                                                placeholder="Nama">

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Tutup</button>
                                                                <button type="button" class="btn btn-primary"
                                                                    onclick="saveSignature('signatureCanvas2', '<?php echo base_url('pimpinan/simpan_ttd2'); ?>')">Simpan</button>
                                                                <button type="button" class="btn btn-danger"
                                                                    onclick="clearSignature('signatureCanvas2')">Hapus</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="signatureModal3" tabindex="-1" role="dialog"
                                                aria-labelledby="signatureModal3Label" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form class="form-horizontal">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="signatureModal3Label">Tanda
                                                                    Tangan Mengetahui Pertama</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <canvas id="signatureCanvas3" width="400"
                                                                    height="200"></canvas>
                                                            </div>

                                                            <input type="hidden" id="id_ajuan"
                                                                value="<?=$list->id_ajuan;?>" placeholder="Nama">
                                                            <input type="hidden" id="hash"
                                                                value="<?=hash('sha256', $list->created_at);?>"
                                                                placeholder="Nama">

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Tutup</button>
                                                                <button type="button" class="btn btn-primary"
                                                                    onclick="saveSignature('signatureCanvas3', '<?php echo base_url('pimpinan/simpan_ttd3'); ?>')">Simpan</button>
                                                                <button type="button" class="btn btn-danger"
                                                                    onclick="clearSignature('signatureCanvas3')">Hapus</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="signatureModal4" tabindex="-1" role="dialog"
                                                aria-labelledby="signatureModal4Label" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form class="form-horizontal">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="signatureModal4Label">Tanda
                                                                    Tangan Mengetahui Kedua</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <canvas id="signatureCanvas4" width="400"
                                                                    height="200"></canvas>
                                                            </div>

                                                            <input type="hidden" id="id_ajuan"
                                                                value="<?=$list->id_ajuan;?>" placeholder="Nama">
                                                            <input type="hidden" id="hash"
                                                                value="<?=hash('sha256', $list->created_at);?>"
                                                                placeholder="Nama">

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Tutup</button>
                                                                <button type="button" class="btn btn-primary"
                                                                    onclick="saveSignature('signatureCanvas4', '<?php echo base_url('pimpinan/simpan_ttd4'); ?>')">Simpan</button>
                                                                <button type="button" class="btn btn-danger"
                                                                    onclick="clearSignature('signatureCanvas4')">Hapus</button>
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
                </div>

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

        <?=$this->load->view('footer.php')?>
        <?=$this->load->view('javascript.php')?>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js">
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>

        <script>
        // Variabel global untuk menyimpan instance SignaturePad
        var signaturePad1;
        var signaturePad2;
        var signaturePad3;
        var signaturePad4;

        // Fungsi untuk menginisialisasi SignaturePad pada canvas
        function initializeSignaturePads() {
            var canvas1 = document.getElementById('signatureCanvas1');
            var canvas2 = document.getElementById('signatureCanvas2');
            var canvas3 = document.getElementById('signatureCanvas3');
            var canvas4 = document.getElementById('signatureCanvas4');
            signaturePad1 = new SignaturePad(canvas1);
            signaturePad2 = new SignaturePad(canvas2);
            signaturePad3 = new SignaturePad(canvas3);
            signaturePad4 = new SignaturePad(canvas4);
        }

        // Fungsi untuk menghapus tanda tangan pada canvas
        function clearSignature(canvasId) {
            if (canvasId === 'signatureCanvas1') {
                signaturePad1.clear();
            } else if (canvasId === 'signatureCanvas2') {
                signaturePad2.clear();
            } else if (canvasId === 'signatureCanvas3') {
                signaturePad3.clear();
            } else if (canvasId === 'signatureCanvas4') {
                signaturePad4.clear();
            }
        }

        // Panggil fungsi inisialisasi saat dokumen selesai dimuat
        document.addEventListener('DOMContentLoaded', function() {
            initializeSignaturePads();
        });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
        // Fungsi untuk mengirim tanda tangan menggunakan AJAX
        function saveSignature(signatureCanvasId, formAction) {
            var canvas = document.getElementById(signatureCanvasId);
            var imageData = canvas.toDataURL('image/png'); // Ambil data gambar dari canvas

            $.ajax({
                type: 'POST',
                url: formAction,
                data: {
                    ttd: imageData, // Kirim data gambar tanda tangan ke server
                    id_ajuan: $('#id_ajuan').val(), // Ambil nilai id ajuan
                    hash: $('#hash').val() // Ambil nilai hash
                },
                success: function(response) {
                    // Tampilkan pesan sukses atau error dengan Sweet Alert
                    let result = JSON.parse(response);
                    Swal.fire({
                        title: result.status === 'success' ? 'Sukses' : 'Error',
                        text: result.message,
                        icon: result.status === 'success' ? 'success' : 'error',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Lakukan reload halaman
                            location.reload();
                        }
                    });
                },
                error: function() {
                    alert('Terjadi kesalahan saat menyimpan tanda tangan.');
                }
            });
        }
        </script>


        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
        function showConfirmationModal() {
            Swal.fire({
                title: 'Konfirmasi',
                text: 'Apakah Anda yakin ingin mengajukan rekonsiliasi?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna menekan "Ya", submit form
                    document.getElementById('formRekonsiliasi').submit();
                }
            });
        }
        </script>

</body>



















</html>