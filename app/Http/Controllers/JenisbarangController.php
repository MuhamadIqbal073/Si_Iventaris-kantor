<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenisbarang;

class JenisbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisbarang = Jenisbarang::all();
        return view('pages.datamaster.jenisbarang.jenisbarang',['jenisbarang'=> $jenisbarang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pengelolaanbarang.barangmasuk.tambahbarangmasuk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenisbarang = new jenisbarang;
        $jenisbarang->jenis_barang = $request->input('jenis_barang');
        $jenisbarang->no_pabrik = $request->input('no_pabrik');
        $jenisbarang->no_rangka = $request->input('no_rangka');
        $jenisbarang->no_mesin = $request->input('no_mesin');
        $jenisbarang->no_polisi = $request->input('no_polisi');
        $jenisbarang->no_bpkb = $request->input('no_bpkb');
        $jenisbarang->save();

        return redirect('jenisbarang');
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
        $jenisbarang = jenisbarang::find($id);
        return view('pages.datamaster.jenisbarang.editjenisbarang')->with('jenisbarang',$jenisbarang);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_jenisbarang)
    {
        $ubah = Jenisbarang::findorfail($id_jenisbarang);

        $data = [
            'jenis_barang' => $request['jenis_barang'],
            'no_pabrik' => $request['no_pabrik'],
            'no_rangka' => $request['no_rangka'],
            'no_mesin' => $request['no_mesin'],
            'no_polisi' => $request['no_polisi'],
            'no_bpkb' => $request['no_bpkb'],
        ];
        $ubah->update($data);
        return redirect ('jenisbarang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Jenisbarang $jenisbarang)
    {
        $jenisbarang->delete();
        return redirect ('jenisbarang');

    }
}
