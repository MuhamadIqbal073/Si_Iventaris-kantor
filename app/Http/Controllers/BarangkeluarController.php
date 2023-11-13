<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barangkeluar;
use App\Models\Peralatan;

class BarangkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangkeluar = Barangkeluar::orderBy('created_at', 'DESC')->get();
        $jumlah_harga= Barangkeluar::get()->sum('jumlah_harga');
        $banyak = Barangkeluar::get()->sum('banyaknya_barang');

        return view('pages.pengelolaanbarang.barangkeluar.barangkeluar', ['barangkeluar' => $barangkeluar, 'jumlah_harga' => $jumlah_harga, 'banyak'=> $banyak]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pengelolaanbarang.barangkeluar.tambahbarangkeluar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Store image in public storage folder
        $file_name = $request->foto->getClientOriginalName();
        $image = $request->foto->storeAs('barangkeluar', $file_name);

        $barangkeluar = new Barangkeluar;
        $barangkeluar->nama_barang = $request->input('nama_barang');
        $barangkeluar->kode_barang = $request->input('kode_barang');
        $barangkeluar->merk = $request->input('merk');
        $barangkeluar->ukuran = $request->input('ukuran');
        $barangkeluar->bahan = $request->input('bahan');
        $barangkeluar->tanggal = $request->input('tanggal');
        $barangkeluar->no_pabrik = $request->input('no_pabrik');
        $barangkeluar->no_rangka = $request->input('no_rangka');
        $barangkeluar->no_mesin = $request->input('no_mesin');
        $barangkeluar->no_polisi = $request->input('no_polisi');
        $barangkeluar->no_bpkb = $request->input('no_bpkb');
        $barangkeluar->asal_usul = $request->input('asal_usul');
        $barangkeluar->banyaknya_barang = $request->input('banyaknya_barang');
        $barangkeluar->harga_satuan = $request->input('harga_satuan');
        $barangkeluar->jumlah_harga = $request->input('jumlah_harga');
        $barangkeluar->kode_penanggung_jawab = $request->input('kode_penanggung_jawab');
        $barangkeluar->keterangan = $request->input('keterangan');
        $barangkeluar->penerima = $request->input('penerima');
        $barangkeluar->foto = $image;
        $barangkeluar->save();

        return redirect()
            ->to(route('barangkeluar'));
    }
    /**
     * Display the specified resource.
     *
     * @param \App\Models\Barangkeluar $barangkeluar
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
        $barangkeluar = Barangkeluar::find($id);
        return view('pages.pengelolaanbarang.barangkeluar.editbarangkeluar')->with('barangkeluar', $barangkeluar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_barangkeluar)
    {
        $ubah = Barangkeluar::findorfail($id_barangkeluar);

        $data = [
            'nama_barang' => $request['nama_barang'],
            'kode_barang' => $request['kode_barang'],
            'merk' => $request['merk'],
            'ukuran' => $request['ukuran'],
            'bahan' => $request['bahan'],
            'tanggal' => $request['tanggal'],
            'no_pabrik' => $request['no_pabrik'],
            'no_rangka' => $request['no_rangka'],
            'no_mesin' => $request['no_mesin'],
            'no_polisi' => $request['no_polisi'],
            'no_bpkb' => $request['no_bpkb'],
            'asal_usul' => $request['asal_usul'],
            'banyknya_barang' => $request['banyaknya_barang'],
            'harga_satuan' => $request['harga_satuan'],
            'jumlah_harga' => $request['jumlah_harga'],
            'kode_penanggung_jawab' => $request['kode_penanggung_jawab'],
            'keterangan' => $request['keterangan'],
        ];
        $ubah->update($data);
        return redirect('barangkeluar');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Barangkeluar $barangkeluar)
    {
        $barangkeluar->delete();
        return redirect('barangkeluar');
    }
}
