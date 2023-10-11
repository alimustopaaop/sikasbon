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
                                    <li class="nav-item"> <a class="nav-link "
                                            href="<?=base_url() . 'petugas/detail_ajuan?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="ti-home"></i></span> <span
                                                class="hidden-xs-down">
                                                Penandatangan</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link "
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
                                    <li class="nav-item"> <a class="nav-link "
                                            href="<?=base_url() . 'petugas/detail_bendahara?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="fa fa-tag"></i></span> <span
                                                class="hidden-xs-down">Kas di
                                                Bendahara Pengeluaran</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link active"
                                            href="<?=base_url() . 'petugas/detail_pimpinan?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="fa fa-users"></i></span> <span
                                                class="hidden-xs-down">TTD
                                                Pimpinan</span></a> </li>

                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" role="tabpanel">
                                        <div class="p-20">
                                            <p>LAPORAN REALISASI BELANJA (PEMENDAGRI 64)</p>
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
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#signatureModal1">
                                                                Tanda Tangan Pihak Pertama
                                                            </button>
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
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#signatureModal2">
                                                                Tanda Tangan Pihak Kedua
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 text-center">
                                                <a href="<?=base_url() . 'petugas/cetak_dokumen?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"
                                                    class="btn btn-success">
                                                    <i class="fa fa-print"></i> Cetak Dokumen
                                                </a>
                                            </div>




                                            <!-- Modal untuk tanda tangan Pihak Pertama -->
                                            <!-- Modal untuk tanda tangan Pihak Pertama -->
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
                                                                    onclick="saveSignature('signatureCanvas1', '<?php echo base_url('petugas/simpan_ttd1'); ?>')">Simpan</button>
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
                                                                    onclick="saveSignature('signatureCanvas2', '<?php echo base_url('petugas/simpan_ttd2'); ?>')">Simpan</button>
                                                                <button type="button" class="btn btn-danger"
                                                                    onclick="clearSignature('signatureCanvas2')">Hapus</button>
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

        // Fungsi untuk menginisialisasi SignaturePad pada canvas
        function initializeSignaturePads() {
            var canvas1 = document.getElementById('signatureCanvas1');
            var canvas2 = document.getElementById('signatureCanvas2');
            signaturePad1 = new SignaturePad(canvas1);
            signaturePad2 = new SignaturePad(canvas2);
        }

        // Fungsi untuk menghapus tanda tangan pada canvas
        function clearSignature(canvasId) {
            if (canvasId === 'signatureCanvas1') {
                signaturePad1.clear();
            } else if (canvasId === 'signatureCanvas2') {
                signaturePad2.clear();
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


</body>


















</html>
