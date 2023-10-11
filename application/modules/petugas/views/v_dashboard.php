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
    <title>Dashboard - SIKASBON</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->

    <?=$this->load->view('css.php')?>






</head>

<?php
function tgl_indo($tanggal)
{
    $bulan = array(
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember',
    );

    $hari = array(
        1 => 'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu',
        'Minggu',
    );

    $pecahkan = explode('-', $tanggal);

    $hari_ini = $hari[(int) date('N', strtotime($tanggal))];

    return $hari_ini . ', ' . $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
}

?>

<body class="skin-green-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Dashboard</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?=$this->load->view('sidebar.php')?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
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
                        <h4 class="text-themecolor">Dashboard SIKASBON</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>

                        </div>
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
                            <h5 class="text-title" style="padding: 10px;"> Selamat
                                Datang <span class="text-danger"><b>
                                        <?=$this->session->userdata('nama_lengkap');?></b></span> Pada Website SIKASBON
                                (Sistem
                                Informasi Rekon Kas
                                dan Belanja)
                            </h5>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">DRAFT</h5>
                                <div class="text-right">
                                    <h2><sup><i class="ti-package text-inverse"></i></sup><?=$status->jumlah_draft;?>
                                    </h2>
                                </div>
                                <span class="text-inverse">20%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-inverse" style="width: 20%; height:6px;"
                                        role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase text-info">PENGAJUAN</h5>
                                <div class="text-right  text-info">
                                    <h2><sup><i class=" ti-harddrives text-info"></i></sup>
                                        <?=$status->jumlah_pengajuan;?></h2>
                                </div>
                                <span class="text-info">30%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-info" style="width: 30%; height:6px;"
                                        role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase  text-primary">PROSES</h5>
                                <div class="text-right  text-primary">
                                    <h2><sup><i class="ti-loop text-primary"></i></sup> <?=$status->jumlah_proses;?>
                                    </h2>
                                </div>
                                <span class="text-primary">60%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" style="width: 40%; height:6px;"
                                        role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body  text-success">
                                <h5 class="card-title text-uppercase ">ACC PIMPINAN</h5>
                                <div class="text-right">
                                    <h2><sup><i class=" ti-face-smile text-success"></i></sup>
                                        <?=$status->jumlah_selesai;?></h2>
                                </div>
                                <span class="text-success">80%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width: 40%; height:6px;"
                                        role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Data Pengajuan Terbaru </h4>

                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Nomor Surat</th>
                                                            <th style="width:25%;">Tanggal</th>

                                                            <th>Status</th>
                                                            <th>Nama</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($list as $ls): ?>
                                                        <tr>
                                                            <td><a href="javascript:void(0)"><?=$ls->nomor_surat;?></a>
                                                            </td>
                                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i>
                                                                    <?=tgl_indo($ls->tgl);?></span> </td>



                                                            <td>
                                                                <div class="label label-table label-<?=$ls->warna;?>">
                                                                    <?=$ls->nama_status;?></div>
                                                            </td>
                                                            <td><?=$ls->nama_user;?></td>

                                                        </tr>
                                                        <?php endforeach;?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
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
</body>

</html>
