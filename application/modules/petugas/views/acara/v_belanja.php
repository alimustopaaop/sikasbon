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
                                    <li class="nav-item"> <a class="nav-link active"
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
                                                class="hidden-xs-down">Bendahara Pengeluaran</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="<?=base_url() . 'petugas/detail_pimpinan?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="fa fa-users"></i></span> <span
                                                class="hidden-xs-down">TTD
                                                Pimpinan</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="<?=base_url() . 'petugas/log?d=' . $list->id_ajuan . '&s=' . hash('sha256', $list->created_at)?>"><span
                                                class="hidden-sm-up"><i class="fa fa-recycle"></i></span> <span
                                                class="hidden-xs-down">Log</span></a> </li>


                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" role="tabpanel">
                                        <div class="p-20">
                                            <p>LAPORAN REALISASI BELANJA (PEMENDAGRI 64)</p>

                                            <div class="col-md-12">
                                                <div class="card card-body">

                                                    <form class="form-horizontal"
                                                        action="<?php base_url()?>petugas/simpan_step2" method="post"
                                                        onsubmit="return validateForm()">
                                                        <h4 class="box-title m-b-0">I. PENGELUARAN</h4>
                                                        <br>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-sm-3 text-right control-label col-form-label">Saldo
                                                                Awal*</label>
                                                            <div class="col-sm-4">
                                                                <select class="select20 form-control custom-select"
                                                                    name="pilih_saldo" id="pilih_saldo"
                                                                    style="width: 100%; height:36px;">
                                                                    <option>-- Pilih Otomatis Saldo --</option>
                                                                    <?php foreach ($saldo as $sal): ?>
                                                                    <option value="1"
                                                                        data-saldo-awal="<?=$sal->total_pengeluaran;?>">
                                                                        <?=$sal->bulan;?> <?=$sal->tahun;?>
                                                                        (<?=$sal->total_pengeluaran;?>)
                                                                    </option>
                                                                    <?php endforeach;?>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Rp</span>
                                                                    </div>
                                                                    <input type="text" class="form-control input-rupiah"
                                                                        name="saldo_awal" id="saldo_awal"
                                                                        value="<?=$step2->saldo_awal;?>" data-min="0">
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
                                                                class="col-sm-3 text-right control-label col-form-label">Belanja
                                                                Operasi*</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Rp</span>
                                                                    </div>
                                                                    <input type="text" class="form-control input-rupiah"
                                                                        name="belanja_operasi" id="belanja_operasi"
                                                                        value="<?=$step2->belanja_operasi;?>"
                                                                        data-min="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <!-- Input Belanja Modal -->
                                                            <label
                                                                class="col-sm-3 text-right control-label col-form-label">Belanja
                                                                Modal</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Rp</span>
                                                                    </div>
                                                                    <input type="text" class="form-control input-rupiah"
                                                                        name="belanja_modal" id="belanja_modal"
                                                                        value="<?=$step2->belanja_modal;?>"
                                                                        data-min="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <!-- Input Belanja Tidak Terduga -->
                                                            <label
                                                                class="col-sm-3 text-right control-label col-form-label">Belanja
                                                                Tidak Terduga</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Rp</span>
                                                                    </div>
                                                                    <input type="text" class="form-control input-rupiah"
                                                                        name="belanja_terduga" id="belanja_terduga"
                                                                        value="<?=$step2->belanja_terduga;?>"
                                                                        data-min="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <!-- Input Belanja Transfer -->
                                                            <label
                                                                class="col-sm-3 text-right control-label col-form-label">Belanja
                                                                Transfer</label>
                                                            <div class="col-sm-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Rp</span>
                                                                    </div>
                                                                    <input type="text" class="form-control input-rupiah"
                                                                        name="belanja_transfer" id="belanja_transfer"
                                                                        value="<?=$step2->belanja_transfer;?>"
                                                                        data-min="0">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group row">
                                                            <!-- Total Pengeluaran -->
                                                            <label
                                                                class="col-sm-3 text-right control-label col-form-label">Total
                                                                Pengeluaran</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control input-rupiah"
                                                                    name="total_pengeluaran" id="total_pengeluaran"
                                                                    value="<?=$step2->total_pengeluaran;?>" readonly>
                                                            </div>
                                                        </div>

                                                        <?php if ($list->status == 1 || $list->status == 4): ?>
                                                        <div class="form-group m-b-0">
                                                            <div class="offset-sm-3 col-sm-9">
                                                                <button type="submit"
                                                                    class="btn btn-info waves-effect waves-light m-t-10">Simpan
                                                                    Belanja</button>
                                                            </div>
                                                        </div>
                                                        <?php endif;?>
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js">
        </script>


        <script>
        function validateForm() {
            var saldoAwal = document.getElementById("saldo_awal").value;
            var belanjaOperasi = document.getElementById("belanja_operasi").value;
            var belanjaModal = document.getElementById("belanja_modal").value;
            var belanjaTerduga = document.getElementById("belanja_terduga").value;
            var belanjaTransfer = document.getElementById("belanja_transfer").value;

            if (saldoAwal.trim() === "" || belanjaOperasi.trim() === "" || belanjaModal.trim() === "" || belanjaTerduga
                .trim() === "" || belanjaTransfer.trim() === "") {
                alert("Mohon lengkapi semua field yang diperlukan. Jika kosong mohon isi dengan nol(0)");
                return false;
            }
        }
        </script>

        <script>
        $(document).ready(function() {
            $('.input-rupiah').inputmask({
                prefix: 'Rp ',
                radixPoint: ',',
                groupSeparator: '.',
                alias: 'numeric',
                autoGroup: true,
                autoUnmask: true,
                unmaskAsNumber: true
            });

            // Menghitung total pengeluaran
            function calculateTotalPengeluaran() {
                var saldoAwal = parseInt($('#saldo_awal').inputmask('unmaskedvalue')) || 0;

                var belanjaOperasi = parseInt($('#belanja_operasi').inputmask('unmaskedvalue')) || 0;
                var belanjaModal = parseInt($('#belanja_modal').inputmask('unmaskedvalue')) || 0;
                var belanjaTerduga = parseInt($('#belanja_terduga').inputmask('unmaskedvalue')) || 0;
                var belanjaTransfer = parseInt($('#belanja_transfer').inputmask('unmaskedvalue')) || 0;

                var totalPengeluaran = saldoAwal + belanjaOperasi + belanjaModal + belanjaTerduga +
                    belanjaTransfer;

                $('#total_pengeluaran').val('Rp ' + totalPengeluaran.toLocaleString());
            }

            // Memanggil fungsi calculateTotalPengeluaran saat inputan berubah
            $('.input-rupiah').on('input', calculateTotalPengeluaran);

            // Mendapatkan nilai dari opsi yang dipilih dalam elemen select
            $('#pilih_saldo').change(function() {
                var selectedOption = $(this).find('option:selected');
                var saldoAwalValue = selectedOption.attr('data-saldo-awal');

                $('#saldo_awal').val(saldoAwalValue);
                calculateTotalPengeluaran();
            });
        });
        </script>


</body>








</html>