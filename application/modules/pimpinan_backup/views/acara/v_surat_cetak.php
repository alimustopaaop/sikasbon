<!DOCTYPE html>
<html>

<head>
    <title>Kop Surat</title>
    <style>
    /* Gaya CSS untuk kop surat */
    .kop-surat {
        text-align: center;
        margin-bottom: 20px;
    }

    .kop-surat h1 {
        font-size: 24px;
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
    </style>
</head>

<body>
    <div class="kop-surat">
        <h6 class="card-title">BERITA ACARA REKONSILIASI <br>REKONSILIASI DATA PERTANGGUNGJAWABAN REALISASI APBD <br>
            BADAN
            PENGELOLA KEUANGAN DAN ASET DAERAH KABUPATEN MEMPAWAH <br> NOMOR:
            <?=$list->nomor_surat;?> </h6>
    </div>

    <p style=" font-size: 12px">Pada <?=$list->keterangan;?>, Kami yang bertanda tangan dibawah ini : </p>
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

    <br>
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

    <p style="font-size: 12px; margin-left: 30px; line-height: 2;">Dengan ini menerangkan bahwa : <br> PIHAK PERTAMA
        telah melakukan
        Rekonsiliasi Pengeluaran Bulan
        <?=$list->bulan;?> Tahun <?=$list->tahun;?> dengan PIHAK KEDUA <br> Adapun Hasil Rekonsiliasi sebagai berikut :
    </p>
    <br>

    <p style=" font-size: 12px"><b>LAPORAN REALISASI BELANJA (PEMENDAGRI 64)</b> </p>
    <p style=" font-size: 12px;margin-left: 20px; font-weight: bold;">I.PENGELUARAN</p>
    <table style="font-size: 12px; margin-left: 30px;font-weight: bold;">
        <tr>
            <td style="padding-right: 280px;">SALDO AWAL</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->nama2;?></b></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">BELANJA OPERASI</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->nip2;?></b></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">BELANJA MODAL</td>
            <td style="padding-right: 5px;">:</td>
            <td><?=$list->jabatan2;?></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">BELANJA TIDAK TERDUGA</td>
            <td style="padding-right: 5px;">:</td>
            <td>Selanjutnya disebut <b>PIHAK KEDUA</b></td>
        </tr>
        <tr>
            <td style="padding-right: 10px;">BELANJA TRANSFER</td>
            <td style="padding-right: 5px;">:</td>
            <td>Selanjutnya disebut <b>PIHAK KEDUA</b></td>
        </tr>

    </table>
    <hr style="font-size: 12px; margin-left: 30px;font-weight: bold; margin-right:70px">
    <table style="font-size: 12px; margin-left: 30px;font-weight: bold;">
        <tr>
            <td style="padding-right: 225px;">TOTAL PENGELUARAN</td>
            <td style="padding-right: 5px;">:</td>
            <td><b><?=$list->nama2;?></b></td>
        </tr>
    </table>
</body>

</html>