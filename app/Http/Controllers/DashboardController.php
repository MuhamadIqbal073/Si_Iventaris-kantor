<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Barangmasuk;
use App\Models\Barangkeluar;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Caster\DsCaster;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $harga_tanah = Tanah::get()->sum('harga_perolehan');
        // $harga_peralatan = Peralatan::get()->sum('harga_perolehan');
        // $harga_gedung = Gedung::get()->sum('harga_perolehan');
        // $harga_jalan = Jalan::get()->sum('harga_perolehan');
        // $harga_aset = Aset::get()->sum('harga_perolehan');

        // return view('pages.dashboard.index', [ 'harga_tanah' => $harga_tanah, 'harga_peralatan' => $harga_peralatan, 'harga_gedung' => $harga_gedung, 'harga_jalan' => $harga_jalan, 'harga_aset' => $harga_aset]);

        // $penyusutan_tanah = Tanah::get()->sum('penyusutan');
        // $penyusutan_peralatan = Peralatan::get()->sum('penyusutan');
        // $penyusutan_gedung = Gedung::get()->sum('penyusutan');
        // $penyusutan_jalan= Jalan::get()->sum('penyusutan');
        // $penyusutan_aset= Aset::get()->sum('penyusutan');

        //'penyusutan_tanah' => $penyusutan_tanah, 'penyusutan_peralatan' => $penyusutan_peralatan, 'penyusutan_gedung' => $penyusutan_gedung, 'penyusutan_jalan' => $penyusutan_jalan, 'penyusutan_aset' => $penyusutan_aset]);

        $last_year = Carbon::now()->year - 1;

        // $get_last_sevent_month = Carbon::now()->startOfMonth()->subMonth(7);
        // $get_last_sevent_month = [];

        // for ($i = 7; $i <= 1; $i--) {
        //     $month = Carbon::now()->startOfMonth()->subMonth($i);
        //     array_push($get_last_sevent_month, $month);
        // }

        $jumlah_barang_masuk = Barangmasuk::whereBetween('created_at', [$last_year, now()])->sum('banyaknya_barang');
        $jumlah_barang_keluar = Barangkeluar::whereBetween('created_at', [$last_year, now()])->sum('banyaknya_barang');


        return view('pages.dashboard.index', compact('jumlah_barang_masuk', 'jumlah_barang_keluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
