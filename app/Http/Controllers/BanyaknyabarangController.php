<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banyaknyabarang;

class BanyaknyabarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banyaknyabarang = Banyaknyabarang::all();
        return view('pages.datamaster.banyaknyabarang.banyaknyabarang',['banyaknyabarang' => $banyaknyabarang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.datamaster.banyaknyabarang.tambahbanyaknyabarang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banyaknyabarang = new Banyaknyabarang;
        $banyaknyabarang->banyaknya_barang = $request->input('banyaknya_barang');
        $banyaknyabarang->save();

        return redirect('banyaknyabarang');
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
        $banyaknyabarang = banyaknyabarang::find($id);
        return view('pages.datamaster.banyaknyabarang.editbanyaknyabarang')->with('banyaknyabarang',$banyaknyabarang);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_banyaknyabarang)
    {
        $ubah = Banyaknyabarang::findorfail($id_banyaknyabarang);

        $data = [
            'banyaknya_barang' => $request['banyaknya_barang'],
        ];
        $ubah->update($data);
        return redirect ('banyaknyabarang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Banyaknyabarang $banyaknyabarang)
    {
        $banyaknyabarang->delete();
        return redirect ('banyaknyabarang');

    }
}
