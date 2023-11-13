<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruanganbarang;

class RuanganbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruanganbarang = Ruanganbarang::all();
        return view('pages.datamaster.ruanganbarang.ruanganbarang',['ruanganbarang'=> $ruanganbarang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.datamaster.ruanganbarang.tambahruanganbarang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ruanganbarang = new Ruanganbarang;
        $ruanganbarang->nama_barang = $request->input('nama_barang');
        $ruanganbarang->ruangan = $request->input('ruangan');
        $ruanganbarang->kode_penanggung_jawab = $request->input('kode_penanggung_jawab');
        $ruanganbarang->kondisi = $request->input('kondisi');
        $ruanganbarang->save();

        return redirect('ruanganbarang');
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
        $ruanganbarang = ruanganbarang::find($id);
        return view('pages.datamaster.ruanganbarang.editruanganbarang')->with('ruanganbarang',$ruanganbarang);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_ruanganbarang)
    {
        $ubah = Ruanganbarang::findorfail($id_ruanganbarang);

        $data = [
            'nama_barang' => $request['nama_barang'],
            'ruangan' => $request['ruangan'],
            'kode_penanggung_jawab' => $request['kode_penanggung_jawab'],
            'kondisi' => $request['kondisi'],
        ];
        $ubah->update($data);
        return redirect ('ruanganbarang');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Ruanganbarang $ruanganbarang)
    {
        $ruanganbarang->delete();
        return redirect ('ruanganbarang');

    }
}
