<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Terbilang
{
    private $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function getCustomFormattedDate($date)
    {
        $days = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
        $months = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

        $dateParts = explode('-', $date);
        $day = date('w', strtotime($date));
        $dayName = $days[$day];
        $dayNumber = (int) $dateParts[2];
        $monthNumber = (int) $dateParts[1];
        $monthName = $months[$monthNumber];
        $year = (int) $dateParts[0];

        $terbilangDayNumber = $this->terbilang($dayNumber);
        $terbilangYear = $this->terbilangTahun($year);

        $customFormattedDate = 'hari ' . $dayName . ' tanggal ' . $terbilangDayNumber . ' bulan ' . $monthName . ' tahun ' . $terbilangYear;
        return $customFormattedDate;
    }

    private function terbilang($number)
    {
        $terbilang = [
            '', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh',
            'sebelas', 'dua belas', 'tiga belas', 'empat belas', 'lima belas', 'enam belas', 'tujuh belas',
            'delapan belas', 'sembilan belas', 'dua puluh', 'tiga puluh', 'empat puluh', 'lima puluh', 'enam puluh',
            'tujuh puluh', 'delapan puluh', 'sembilan puluh',
        ];

        if ($number < 0) {
            return 'minus ' . $this->terbilang(abs($number));
        }

        if ($number < 20) {
            return $terbilang[$number];
        }

        if ($number < 100) {
            return $terbilang[floor($number / 10)] . ' puluh ' . $this->terbilang($number % 10);
        }

        if ($number < 200) {
            return 'seratus ' . $this->terbilang($number - 100);
        }

        if ($number < 1000) {
            return $terbilang[floor($number / 100)] . ' ratus ' . $this->terbilang($number % 100);
        }

        return 'Angka terlalu besar';
    }

    private function terbilangTahun($number)
    {
        $terbilang = $this->terbilang($number);

        if ($number < 2000) {
            return 'dua ribu ' . $this->terbilang($number - 2000);
        }

        if ($number < 1000000) {
            return $this->terbilang(floor($number / 1000)) . ' ribu ' . $this->terbilang($number % 1000);
        }

        if ($number < 1000000000) {
            return $this->terbilang(floor($number / 1000000)) . ' juta ' . $this->terbilang($number % 1000000);
        }

        if ($number < 1000000000000) {
            return $this->terbilang(floor($number / 1000000000)) . ' miliar ' . $this->terbilang($number % 1000000000);
        }

        if ($number < 1000000000000000) {
            return $this->terbilang(floor($number / 1000000000000)) . ' triliun ' . $this->terbilang($number % 1000000000000);
        }

        return 'Angka terlalu besar';
    }
}
