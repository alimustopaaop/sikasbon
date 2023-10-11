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
    <link rel="stylesheet" href="<?=base_url()?>assets/node_modules/html5-editor/bootstrap-wysihtml5.css" />
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
                                    <li class="nav-item"> <a class="nav-link active"
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
                                            <p>LAPORAN BELANJA DI BKU PENGELUARAN</p>

                                            <div class="col-md-12">
                                                <div class="card card-body">

                                                    <form class="form-horizontal"
                                                        action="<?php base_url()?>pimpinan/simpan_step3" method="post"
                                                        onsubmit="return validateForm()">
                                                        <br>
                                                        <div class="form-group row">
                                                            <!-- Input Saldo Awal -->
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
                                                                        data-saldo-awal="<?=$sal->saldo_kas;?>">
                                                                        <?=$sal->bulan;?> <?=$sal->tahun;?>
                                                                        (<?=$sal->saldo_kas;?>)
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
                                                                name="lra" id="lra" value="<?=$nilai_lra?>" data-min="0"
                                                                readonly>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <!-- Total Pengeluaran -->
                                                    <label class="col-sm-3 text-right control-label col-form-label">-
                                                        Selisih Antara Belanja BKU dan LRA </label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control input-rupiah"
                                                            name="selisih" id="selisih" value="<?=$step3->selisih;?>"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <h4 class="card-title"">Catatan Belanja</h4>

                                                <div class=" col-sm-12">
                                                    <textarea id="mymce" name="catatan"><?=$step3->catatan;?></textarea>
                                            </div>
                                            <br>
                                            <hr>
                                            <h4 class=" card-title"">Pajak</h4>

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
                                                            value="<?=$step3->penerima_pajak;?>" data-min="0" required>
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
                                                        value="<?=$step3->penyetor_pajak;?>" data-min="0" required>
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
                                                        value="<?=$step3->pengembalian;?>" data-min="0" required>
                                                </div>
                                            </div>
                                    </div>

                                    <!-- <?php if ($list->status == 1 || $list->status == 4): ?>
                                    <div class=" form-group m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit"
                                                class="btn btn-info waves-effect waves-light m-t-10">Simpan
                                                BKU Pengeluaran</button>
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

    <?=$this->load->view('footer.php')?>
    <?=$this->load->view('javascript.php')?>

    <script src="<?=base_url()?>assets/node_modules/tinymce/tinymce.min.js"></script>
    <script>
    $(document).ready(function() {

        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

            });
        }
    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js">
    </script>
    <script>
    function validateForm() {
        var saldoAwal = document.getElementById("saldo_awal").value;
        var penerimaanSP2D = document.getElementById("penerimaan_sp2d").value;
        var bku = document.getElementById("bku").value;
        var lra = document.getElementById("lra").value;
        var guBku = document.getElementById("gu_bku").value;
        var bkuGu = document.getElementById("bku_gu").value;
        var danaDesa = document.getElementById("dana_desa").value;
        var spj = document.getElementById("spj").value;
        var lebihPajak = document.getElementById("lebih_pajak").value;
        var pajakSetor = document.getElementById("pajak_setor").value;
        var penerimaPajak = document.getElementById("penerima_pajak").value;
        var penyetorPajak = document.getElementById("penyetor_pajak").value;
        var pengembalian = document.getElementById("pengembalian").value;

        if (saldoAwal === "" || penerimaanSP2D === "" || bku === "" || lra === "" || guBku === "" || bkuGu === "" ||
            danaDesa === "" || spj === "" || lebihPajak === "" || pajakSetor === "" || penerimaPajak === "" ||
            penyetorPajak === "" || pengembalian === "") {
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

        // Memperbarui nilai saldo_awal saat elemen select berubah
        $('#pilih_saldo').change(function() {
            var selectedOption = $(this).find('option:selected');
            var saldoAwalValue = selectedOption.attr('data-saldo-awal');

            $('#saldo_awal').val(saldoAwalValue);
            calculateSelisih();
        });
    });
    </script>



</body>









</html>