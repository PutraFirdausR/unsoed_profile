<?php

if (!function_exists('base_url')) {
    function base_url($path = '') {
        $root = '/unsoed_profile/public'; 
        return $root . '/' . ltrim($path, '/');
    }
}

if (!function_exists('e')) {
    function e($string) {
        return htmlspecialchars($string ?? '', ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('tgl_indo')) {
    function tgl_indo($tanggal){
        $bulan = array (
            1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        if(count($pecahkan) < 3) return $tanggal;

        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
}
?>