<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Namabarang;

class NamabarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $namabarang = Namabarang::all();
        return view('pages.datamaster.namabarang.namabarang',['namabarang'=> $namabarang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.datamaster.namabarang.tambahnamabarang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $namabarang = new Namabarang;
        $namabarang->nama_barang = $request->input('nama_barang');
        $namabarang->save();

        return redirect('namabarang');
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
        $namabarang = Namabarang::find($id);
        return view('pages.datamaster.namabarang.editnamabarang')->with('namabarang',$namabarang);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_namabarang)
    {
        $ubah = Namabarang::findorfail($id_namabarang);

        $data = [
            'nama_barang' => $request['nama_barang']
        ];
        $ubah->update($data);
        return redirect ('namabarang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Namabarang $namabarang)
    {
        $namabarang->delete();
        return redirect ('namabarang');

    }
}
