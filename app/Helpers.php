<?php

use App\Models\Barangkeluar;
use App\Models\Barangmasuk;

if (!function_exists('getDataBarangKeluar')) {
    function getDataBarangKeluar($tahun = '2021')
    {
        $months = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
        $dataKeluar = [];

        foreach ($months as $mo) {
            $data = Barangkeluar::select(DB::raw('SUM(banyaknya_barang) as jumlah_keluar'))
                ->whereMonth('created_at', '=', $mo)
                ->whereYear('created_at', '=', $tahun)
                ->get();

            $dataKeluar[] = $data;
        }

        return $dataKeluar;
    }
}

if (!function_exists('getDataBarangMasuk')) {
    function getDataBarangMasuk($tahun = '2021')
    {
        $months = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
        $dataKeluar = [];

        foreach ($months as $mo) {
            $data = Barangmasuk::select(DB::raw('SUM(banyaknya_barang) as jumlah_keluar'))
                ->whereMonth('created_at', '=', $mo)
                ->whereYear('created_at', '=', $tahun)
                ->get();

            $dataKeluar[] = $data;
        }

        return $dataKeluar;
    }
}

if ( ! function_exists('createQrCodeLink'))
{
    function createQrCodeLink($id = '')
    {
        $base_path = base_path();
        $bases = explode('\\', $base_path);
        $path = $bases[3];
        
        $target = 'http://'. getHostByName(getHostName()) .'/'. $path .'/public/data-barang-masuk/'. $id;
        return $target;
    }
}