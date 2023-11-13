<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kodebarang;

class KodebarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kodebarang = Kodebarang::all();
        return view('pages.datamaster.kodebarang.kodebarang',['kodebarang'=> $kodebarang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.datamaster.kodebarang.tambahkodebarang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kodebarang = new Kodebarang;
        $kodebarang->kode_barang = $request->input('kode_barang');
        $kodebarang->save();


        return redirect('kodebarang');
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
        $kodebarang = kodebarang::find($id);
        return view('pages.datamaster.kodebarang.editkodebarang')->with('kodebarang',$kodebarang);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kodebarang)
    {
        $ubah = Kodebarang::findorfail($id_kodebarang);

        $data = [
            'kode_barang' => $request['kode_barang']
        ];
        $ubah->update($data);
        return redirect ('kodebarang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Kodebarang $kodebarang)
    {
        $kodebarang->delete();
        return redirect ('kodebarang');

    }
}
