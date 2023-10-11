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

    <link href="<?=base_url()?>assets/dist/css/pages/timeline-vertical-horizontal.css" rel="stylesheet">
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
                                <a href="<?php base_url();?>petugas/pengajuan" class="btn btn-success">
                                    <i class="ti ti-angle-double-left"></i>
                                    <span class="ml-2">Menu Pengajuan</span>
                                </a>
                                <center>
                                    <h5 class="card-title"> <?=$list->header;?> <br> NOMOR:
                                        <?=$list->nomor_surat;?> </h5>
                                    Status : <span class="label label-table label-<?=$list->warna;?>">
                                        <?=$list->nama_status;?></span>
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
                                                class="hidden-xs-down">Bendahara Pengeluaran</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link "
                                            href="<?=base_url() . 'petugas/detail_pimpinan?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="fa fa-users"></i></span> <span
                                                class="hidden-xs-down">TTD
                                                Pimpinan</span></a> </li>

                                    <li class="nav-item"> <a class="nav-link active"
                                            href="<?=base_url() . 'petugas/log?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="fa fa-recycle"></i></span> <span
                                                class="hidden-xs-down">Log</span></a> </li>

                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" role="tabpanel">
                                        <div class="p-20">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <ul class="timeline">
                                                                <li class="timeline-inverted">
                                                                    <div class="timeline-badge"
                                                                        style="background-color:black">
                                                                        <i class="fa fa-recycle"></i>

                                                                    </div>
                                                                    <div class=" timeline-panel">
                                                                        <div class="timeline-heading">
                                                                            <h4 class="timeline-title">Draft
                                                                            </h4>
                                                                            <p><small class="text-muted"><i
                                                                                        class="fa fa-clock-o"></i>
                                                                                    <?=$draft->created_at?>
                                                                                </small>
                                                                            </p>
                                                                        </div>
                                                                        <div class="timeline-body">
                                                                            <p></p>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <?php foreach ($log as $lg): ?>
                                                                <li class="timeline-<?=$lg->timeline?>">
                                                                    <div class="timeline-badge <?=$lg->warna?>">
                                                                        <i class="fa fa-recycle"></i>

                                                                    </div>
                                                                    <div class=" timeline-panel">
                                                                        <div class="timeline-heading">
                                                                            <h4 class="timeline-title">
                                                                                <?=$lg->nama_status;?>
                                                                            </h4>
                                                                            <p><small class="text-muted"><i
                                                                                        class="fa fa-clock-o"></i>
                                                                                    <?=$lg->updated_at;?>
                                                                                </small>
                                                                            </p>
                                                                        </div>
                                                                        <div class="timeline-body">
                                                                            <p><small>
                                                                                    <?=$lg->catatan;?>
                                                                                </small></p>
                                                                            <p> <small>
                                                                                    <i class="fa fa-user"></i>
                                                                                    <?=$lg->eksekutor;?>
                                                                                </small>
                                                                            </p>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <?php endforeach;?>


                                                            </ul>
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