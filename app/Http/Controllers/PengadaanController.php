<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengadaan;

class PengadaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $pengadaan = Pengadaan::all();
        return view('pages.pengadaan.pengadaan',['pengadaan'=> $pengadaan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pengadaan.tambahpengadaan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengadaan = new Pengadaan;
        $pengadaan->nama_barang = $request->input('nama_barang');
        $pengadaan->merek = $request->input('merek');
        $pengadaan->no_kontrak = $request->input('no_kontrak');
        $pengadaan->tanggal = $request->input('tanggal');
        $pengadaan->banyaknya_barang = $request->input('banyaknya_barang');
        $pengadaan->harga_satuan = $request->input('harga_satuan');
        $pengadaan->jumlah_harga = $request->input('jumlah_harga');
        $pengadaan->keterangan = $request->input('keterangan');
        $pengadaan->save();
        
        return redirect('pengadaan');
        
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
        $pengadaan = pengadaan::find($id);
        return view('pages.pengadaan.editpengadaan')->with('pengadaan',$pengadaan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pengadaan)
    {
        $ubah = Pengadaan::findorfail($id_pengadaan);

        $data = [
            'nama_barang' => $request['nama_barang'],
            'merek' => $request['merek'],
            'no_kontrak' => $request['no_kontrak'],
            'tanggal' => $request['tanggal'],
            'banyaknya_barang' => $request['banyaknya_barang'],
            'harga_satuan' => $request['harga_satuan'],
            'jumlah_harga' => $request['jumlah_harga'],
            'keterangan' => $request['keterangan'],
        ];
        $ubah->update($data);
        return redirect ('pengadaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete( Pengadaan $pengadaan)
    {
        $pengadaan->delete();
        return redirect('pengadaan');
    }
}
