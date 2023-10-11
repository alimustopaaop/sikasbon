<!DOCTYPE html>
<html>

<head>
    <!-- <title>SIKASBON</title> -->
    <style>
    /* Gaya CSS untuk kop surat */
    .kop-surat {
        text-align: center;
    }

    .kop-surat h5 {
        font-size: 12px;
        font-weight: bold;
        margin: 0;
    }

    .kop-surat p {
        font-size: 12px;
        margin: 5px 0;
    }

    .kop-surat .alamat {
        font-style: italic;
    }

    .tanda-tangan {
        width: 100%;
    }

    .tanda-tangan-kanan {
        text-align: right;
    }

    .tanda-tangan-kiri {
        text-align: left;
        margin-top: 20px;
        /* Ubah nilai sesuai kebutuhan */

    }
    </style>
</head>

<body>
    <div class="kop-surat">
        <h5 class="card-title"><b> <?=$list->header;?></b></h5>
        <h5>NOMOR:
            <?=$list->nomor_surat;?> </h5>
    </div>

    <span style=" font-size: 12px">Pada <?=$list->keterangan;?>, Kami yang bertanda tangan dibawah ini : </span>
    <table style="font-size: 12px; margin-left: 30px;">
        <tr>
            <td style="padding-right: 280px;">Nama</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->nama1;?></b></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">NIP</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->nip1;?></b></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">Jabatan</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->jabatan1;?></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;"></td>
            <td style="padding-right: 5px;"></td>
            <td>Selanjutnya disebut <b>PIHAK PERTAMA</b></td>
        </tr>

    </table>
    <table style="font-size: 12px; margin-left: 30px;">
        <tr>
            <td style="padding-right: 280px;">Nama</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->nama2;?></b></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">NIP</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->nip2;?></b></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">Jabatan</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->jabatan2;?></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;"></td>
            <td style="padding-right: 5px;"></td>
            <td>Selanjutnya disebut <b>PIHAK KEDUA</b></td>
        </tr>
    </table>
    <br>

    <span style="font-size: 12px; line-height: 1;">Dengan ini menerangkan bahwa : <br> PIHAK PERTAMA
        telah melakukan
        Rekonsiliasi Pengeluaran Bulan
        <?=$list->bulan;?> Tahun <?=$list->tahun;?> dengan PIHAK KEDUA <br> Adapun Hasil Rekonsiliasi sebagai berikut :
    </span>
    <br>

    <span style=" font-size: 12px"><b>LAPORAN REALISASI BELANJA (PEMENDAGRI 64)</b> </span> <br>
    <span style=" font-size: 12px;margin-left: 20px; font-weight: bold;">I.PENGELUARAN</span>
    <table style="font-size: 12px; margin-left: 30px;font-weight: bold;">
        <tr>
            <td style="padding-right: 280px;">SALDO AWAL</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->saldo_awal_belanja;?></b></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">BELANJA OPERASI</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->belanja_operasi;?></b></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">BELANJA MODAL</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->belanja_modal;?></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">BELANJA TIDAK TERDUGA</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->belanja_terduga;?></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">BELANJA TRANSFER</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->belanja_transfer;?></td>
        </tr>

    </table>
    <hr style="font-size: 12px; margin-left: 30px;font-weight: bold; margin-right:70px">
    <table style="font-size: 12px; margin-left: 30px;font-weight: bold;">
        <tr>
            <td style="padding-right: 225px;">TOTAL PENGELUARAN</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->total_pengeluaran;?></b></td>
        </tr>
    </table>
    <br>

    <span style=" font-size: 12px"><b>LAPORAN BELANJA DI BKU PENGELUARAN</b> </span>
    <table style="font-size: 12px; margin-left: 30px;font-weight: bold;">
        <tr>
            <td style="padding-right: 280px;">SALDO AWAL</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->saldo_awal_pengeluaran;?></b></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">JUMLAH PENERIMAAN SP2D(LS+UP/GU/TU)</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->penerimaan_sp2d;?></b></td>
        </tr>
    </table>

    <p style=" font-size: 12px; margin-left: 30px;"><b>JUMLAH BELANJA</b> </p>

    <table style="font-size: 12px; margin-left: 30px;">
        <tr>
            <td>-</td>
            <td style="padding-right: 225px;">Belanja Berdasarkan BKU</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->bku;?></td>
        </tr>
        <tr>
            <td>-</td>
            <td style="padding-right: 10px;">Belanja Berdasarkan LRA</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->lra;?></td>
        </tr>
        <tr>
            <td>-</td>
            <td style="padding-right: 10px;">Selisih antara Belanja BKU dan LRA</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->selisih;?></td>
        </tr>
    </table>
    <table style="font-size: 12px; margin-left: 30px;">
        <tr>
            <td></td>
            <td style="padding-right: 10px; line-height: 1;"><?=$list->catatan_pengeluaran;?></td>
            <td style="padding-right: 5px;"></td>
            <td></td>
        </tr>
    </table>
    <p style=" font-size: 12px; margin-left: 30px;"><b>PAJAK</b> </p>
    <table style="font-size: 12px; margin-left: 30px;">
        <tr>
            <td>-</td>
            <td style="padding-right: 280px;">Penerima Pajak</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->penerima_pajak;?></td>
        </tr>
        <tr>
            <td>-</td>
            <td style="padding-right: 10px;">Penyetor Pajak</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->penyetor_pajak;?></td>
        </tr>

    </table>
    <table style="font-size: 12px; margin-left: 30px;font-weight: bold;">
        <tr>
            <td style="padding-right: 172px;">PENGEMBALIAN SISA UP/GU/TU</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->pengembalian;?></b></td>
        </tr>

    </table>

    <span style=" font-size: 12px"><b>LAPORAN KAS DI BENDAHARA PENGELUARAN</b> </span>
    <table style="font-size: 12px; margin-left: 30px;">
        <tr>
            <td>-</td>
            <td style="padding-right: 260px;">Saldo Kasi di BKU</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->saldo_kas;?></td>
        </tr>
        <tr>
            <td>-</td>
            <td style="padding-right: 10px;">Saldo Bank Bendahara (CMS)</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->saldo_bank;?></td>
        </tr>
        <tr>
            <td>-</td>
            <td style="padding-right: 10px;">Saldo Tunai</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->saldo_tunai;?></td>
        </tr>
        <tr>
            <td>-</td>
            <td style="padding-right: 10px;">Total Saldo Kas Bendahara</td>
            <td style="padding-right: 5px;">:</td>
            <td> <?=$list->total_saldo;?> </td>
        </tr>
        <tr>
            <td>-</td>
            <td style="padding-right: 10px;">Selisih Saldo BKU dan Saldo Kas Bendahara</td>
            <td style="padding-right: 5px;">:</td>
            <td>( <?=$list->selisih_saldo;?> )</td>
        </tr>
    </table>

    <table style="font-size: 12px; margin-left: 30px;">
        <tr>
            <td></td>
            <td style="padding-right: 10px; line-height: 1;"><?=$list->catatan_bendahara;?></td>
            <td style="padding-right: 5px;"></td>
            <td></td>
        </tr>
    </table>
    <span style=" font-size: 12px;margin-left: 30px;">Demikian Berita Acara Rekonsiliasi ini dibuat untuk dipergunakan
        sebagaimana mestinya.</span>
    <br>

    <table class="tanda-tangan" style=" font-size: 12px">
        <tr>
            <td class="tanda-tangan-kanan" style="text-align: center;">
                PIHAK PERTAMA <br>
                <?=$list->jabatan1;?> <br>

                <?php if ($list->ttd_1 != null) {
    $imagePath = base_url() . $list->ttd_1;
    $imagePathWithVersion = $imagePath . '?v=' . filemtime($list->ttd_1);
    ?>
                <img src="<?=$imagePathWithVersion;?>" style="width: 30%; height: auto;" alt="Tanda Tangan">

                <?php }?> <br>
                <u><?=$list->nama1;?></u><br><?=$list->nip1;?>
            </td>
            <td class="tanda-tangan-kiri" style="text-align: center;"> PIHAK KEDUA <br>
                <?=$list->jabatan2;?> <br>

                <?php if ($list->ttd_2 != null) {
    $imagePath = base_url() . $list->ttd_2;
    $imagePathWithVersion = $imagePath . '?v=' . filemtime($list->ttd_2);
    ?>
                <img src="<?=$imagePathWithVersion;?>" style="width: 30%; height: auto;" alt="Tanda Tangan">

                <?php }?> <br>
                <u><?=$list->nama2;?></u><br><?=$list->nip2;?>
            </td>
        </tr>
    </table>
    <center>
        <span style=" font-size: 12px">Mengetahui, </span>
    </center>

    <table class="tanda-tangan" style=" font-size: 12px">
        <tr>
            <td class="tanda-tangan-kanan" style="text-align: center;">

                <?=$list->jabatan3;?> <br>

                <?php if ($list->ttd_3 != null) {
    $imagePath = base_url() . $list->ttd_3;
    $imagePathWithVersion = $imagePath . '?v=' . filemtime($list->ttd_3);
    ?>
                <img src="<?=$imagePathWithVersion;?>" style="width: 30%; height: auto;" alt="Tanda Tangan">

                <?php }?> <br>
                <u><?=$list->nama3;?></u><br><?=$list->nip3;?>
            </td>
            <td class="tanda-tangan-kiri" style="text-align: center;">
                <?=$list->jabatan4;?> <br>

                <?php if ($list->ttd_4 != null) {
    $imagePath = base_url() . $list->ttd_4;
    $imagePathWithVersion = $imagePath . '?v=' . filemtime($list->ttd_4);
    ?>
                <img src="<?=$imagePathWithVersion;?>" style="width: 30%; height: auto;" alt="Tanda Tangan">

                <?php }?> <br>
                <u><?=$list->nama4;?></u><br><?=$list->nip4;?>
            </td>
        </tr>
    </table>
</body>


</html>