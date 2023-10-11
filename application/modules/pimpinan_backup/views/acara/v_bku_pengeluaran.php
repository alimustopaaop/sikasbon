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
                                    <li class="nav-item"> <a class="nav-link active"
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
                                            <p>LAPORAN BELANJA DI BKU PENGELUARAN</p>

                                            <div class="col-md-12">
                                                <div class="card card-body">

                                                    <form class="form-horizontal"
                                                        action="<?php base_url()?>petugas/simpan_step3" method="post">
                                                        <br>
                                                        <div class="form-group row">
                                                            <!-- Input Saldo Awal -->
                                                            <label
                                                                class="col-sm-3 text-right control-label col-form-label">Saldo
                                                                Awal*</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Rp</span>
                                                                    </div>
                                                                    <input type="text" class="form-control input-rupiah"
                                                                        name="saldo_awal" id="saldo_awal"
                                                                        value="<?=$step3->saldo_awal;?>" data-min="0">


                                                                    <input type="hidden" class="form-control"
                                                                        name="id_ajuan" value="<?=$list->id_ajuan;?>"
                                                                        placeholder="Nama">
                                                                    <input type="hidden" class="form-control"
                                                                        name="hash"
                                                                        value="<?=hash('sha256', $list->created_at);?>"
                                                                        placeholder="Nama">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <!-- Input Belanja Operasi -->
                                                            <label
                                                                class="col-sm-3 text-right control-label col-form-label">Jumlah
                                                                Penerimaan SP2D (LS+UP/GU/TU)</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Rp</span>
                                                                    </div>
                                                                    <input type="text" class="form-control input-rupiah"
                                                                        name="penerimaan_sp2d" id="penerimaan_sp2d"
                                                                        value="<?=$step3->penerimaan_sp2d;?>"
                                                                        data-min="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>

                                                        <h4 class="card-title"">Jumlah Belanja</h4>
                                                        <div class=" form-group row">
                                                            <!-- Input Belanja Modal -->
                                                            <label
                                                                class="col-sm-3 text-right control-label col-form-label">-
                                                                Belanja Berdasarkan BKU</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Rp</span>
                                                                    </div>
                                                                    <input type="text" class="form-control input-rupiah"
                                                                        name="bku" id="bku" value="<?=$step3->bku;?>"
                                                                        data-min="0">
                                                                </div>
                                                            </div>
                                                </div>
                                                <div class="form-group row">
                                                    <!-- Input Belanja Tidak Terduga -->
                                                    <label class="col-sm-3 text-right control-label col-form-label">-
                                                        Belanja
                                                        Berdasarkan LRA</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Rp</span>
                                                            </div>
                                                            <input type="text" class="form-control input-rupiah"
                                                                name="lra" id="lra" value="<?=$step3->lra;?>"
                                                                data-min="0">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <!-- Total Pengeluaran -->
                                                    <label class="col-sm-3 text-right control-label col-form-label">-
                                                        Selisih Antara Belanja BKU dan LRA </label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control input-rupiah"
                                                            name="selisih" id="selisih" value="(<?=$step3->selisih;?>)"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="form-group row">
                                                    <!-- Input Belanja Tidak Terduga -->
                                                    <label class="col-sm-3 text-right control-label col-form-label">
                                                        <i>1. Belanja GU di BKU </i></label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Rp</span>
                                                            </div>
                                                            <input type="text" class="form-control input-rupiah"
                                                                name="gu_bku" id="gu_bku" value="<?=$step3->gu_bku;?>"
                                                                data-min="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <!-- Input Belanja Tidak Terduga -->
                                                    <label class="col-sm-3 text-right control-label col-form-label">
                                                        <i>2. GU di BKU yang belum disahkan</i></label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Rp</span>
                                                            </div>
                                                            <input type="text" class="form-control input-rupiah"
                                                                name="bku_gu" id="bku_gu" value="<?=$step3->bku_gu;?>"
                                                                data-min="0">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <!-- Input Belanja Tidak Terduga -->
                                                    <label class="col-sm-3 text-right control-label col-form-label">
                                                        <i>3. Pencatatan Dana Desa tidak meleluai BKU tetapi Melalui
                                                            Penjurnalan (Jurnal Penyesuaian)</i></label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Rp</span>
                                                            </div>
                                                            <input type="text" class="form-control input-rupiah"
                                                                name="dana_desa" id="dana_desa"
                                                                value="<?=$step3->dana_desa;?>" data-min="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <!-- Input Belanja Tidak Terduga -->
                                                    <label class="col-sm-3 text-right control-label col-form-label">
                                                        <i>4. SPJ di BKU kan tetapi belum di Transfer</i></i></label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Rp</span>
                                                            </div>
                                                            <input type="text" class="form-control input-rupiah"
                                                                name="spj" id="spj" value="<?=$step3->spj;?>"
                                                                data-min="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <!-- Input Belanja Tidak Terduga -->
                                                    <label class="col-sm-3 text-right control-label col-form-label">
                                                        <i>5. Kelebihan Bayar Pajak</i></label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Rp</span>
                                                            </div>
                                                            <input type="text" class="form-control input-rupiah"
                                                                name="lebih_pajak" id="lebih_pajak"
                                                                value="<?=$step3->lebih_pajak;?>" data-min="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <!-- Input Belanja Tidak Terduga -->
                                                    <label class="col-sm-3 text-right control-label col-form-label">
                                                        <i>Pajak yang belum di Setor</i></label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Rp</span>
                                                            </div>
                                                            <input type="text" class="form-control input-rupiah"
                                                                name="pajak_setor" id="pajak_setor"
                                                                value="<?=$step3->pajak_setor;?>" data-min="0">
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>
                                                <h4 class="card-title"">Pajak</h4>

                                                <div class=" form-group row">
                                                    <!-- Input Belanja Tidak Terduga -->
                                                    <label class="col-sm-3 text-right control-label col-form-label">-
                                                        Penerimaan Pajak</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Rp</span>
                                                            </div>
                                                            <input type="text" class="form-control input-rupiah"
                                                                name="penerima_pajak" id="penerima_pajak"
                                                                value="<?=$step3->penerima_pajak;?>" data-min="0">
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                <!-- Input Belanja Tidak Terduga -->
                                                <label class="col-sm-3 text-right control-label col-form-label">-
                                                    Penyetoran Pajak</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Rp</span>
                                                        </div>
                                                        <input type="text" class="form-control input-rupiah"
                                                            name="penyetor_pajak" id="penyetor_pajak"
                                                            value="<?=$step3->penyetor_pajak;?>" data-min="0">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <h4 class="card-title"">Pengembalian Sisa UP/GU/TU</h4>
                                            <div class=" form-group row">
                                                <!-- Input Belanja Tidak Terduga -->
                                                <label class="col-sm-3 text-right control-label col-form-label"></label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Rp</span>
                                                        </div>
                                                        <input type="text" class="form-control input-rupiah"
                                                            name="pengembalian" id="pengembalian"
                                                            value="<?=$step3->pengembalian;?>" data-min="0">
                                                    </div>
                                                </div>
                                        </div>
                                        <div class=" form-group m-b-0">
                                            <div class="offset-sm-3 col-sm-9">
                                                <button type="submit"
                                                    class="btn btn-info waves-effect waves-light m-t-10">Simpan
                                                    Belanja</button>
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

    <?=$this->load->view('footer.php')?>
    <?=$this->load->view('javascript.php')?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js">
    </script>
    <script>
    $(document).ready(function() {
        $('.input-rupiah').inputmask({
            prefix: 'Rp ',
            radixPoint: ',',
            groupSeparator: '.',
            alias: 'numeric',
            autoGroup: true,
            digits: 0
        });

        // Menghitung selisih antara LRA dan BKU
        function calculateSelisih() {
            var bku = parseInt($('#bku').inputmask('unmaskedvalue')) || 0;
            var lra = parseInt($('#lra').inputmask('unmaskedvalue')) || 0;
            var selisih = lra - bku;
            $('#selisih').val('Rp ' + selisih.toLocaleString());
        }

        // Memanggil fungsi calculateSelisih saat inputan berubah
        $('.input-rupiah').on('input', calculateSelisih);
    });
    </script>



</body>







</html>