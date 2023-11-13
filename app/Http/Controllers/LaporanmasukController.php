<?php

namespace App\Http\Controllers;

use App\Exports\BarangMasukExport;
use App\Models\Barangmasuk;
use Illuminate\Http\Request;
use App\Models\Laporanmasuk;
use Maatwebsite\Excel\Facades\Excel;


class LaporanmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporanmasuk = Barangmasuk::all();
        $jumlah_banyaknya_barang = Barangmasuk::get()->sum('banyaknya_barang');
        $jumlah_harga = Barangmasuk::get()->sum('jumlah_harga');
        
        return view('pages.laporanmasuk.laporanmasuk', [ 'laporanmasuk' => $laporanmasuk, 'jumlah_banyaknya_barang' => $jumlah_banyaknya_barang, 'jumlah_harga' => $jumlah_harga]); 
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('pages.laporanmasuk.lapotambahlaporanmasuk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $laporanmasuk = new Laporanmasuk;
        // $laporanmasuk->nama_barang = $request->input('nama_barang');
        // $laporanmasuk->kode_barang = $request->input('kode_barang');
        // $laporanmasuk->merk = $request->input('merk');
        // $laporanmasuk->ukuran = $request->input('ukuran');
        // $laporanmasuk->bahan = $request->input('bahan');
        // $laporanmasuk->tanggal = $request->input('tanggal');
        // $laporanmasuk->no_pabrik = $request->input('no_pabrik');
        // $laporanmasuk->no_rangka = $request->input('no_rangka');
        // $laporanmasuk->no_mesin = $request->input('no_mesin');
        // $laporanmasuk->no_polisi = $request->input('no_polisi');
        // $laporanmasuk->no_bpkb = $request->input('no_bpkb');
        // $laporanmasuk->asal_usul = $request->input('asal_usul');
        // $laporanmasuk->banyaknya_barang = $request->input('banyaknya_barang');
        // $laporanmasuk->harga_satuan = $request->input('harga_satuan');
        // $laporanmasuk->jumlah_harga = $request->input('jumlah_harga');
        // $laporanmasuk->kode_penanggung_jawab = $request->input('kode_penanggung_jawab');
        // $laporanmasuk->keterangan = $request->input('keterangan');
        // $laporanmasuk->save();

        // return redirect('laporanmasuk');
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
        // $laporanmasuk = Laporanmasuk::find($id);
        // return view('pages.laporan.laporanmasuk.editlaporanmasuk')->with('laporanmasuk',$laporanmasuk);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_laporanmasuk)
    {
        // dd($request->all());
        // $ubah = Laporanmasuk::findorfail($id_laporanmasuk);

        // $data = [
        //     'nama_barang' => $request['nama_barang'],
        //     'kode_barang' => $request['kode_barang'],
        //     'merk' => $request['merk'],
        //     'ukuran' => $request['ukuran'],
        //     'bahan' => $request['bahan'],
        //     'tanggal' => $request['tanggal'],
        //     'no_pabrik' => $request['no_pabrik'],
        //     'no_rangka' => $request['no_rangka'],
        //     'no_mesin' => $request['no_mesin'],
        //     'no_polisi' => $request['no_polisi'],
        //     'asal_usul' => $request['asal_usul'],
        //     'banyaknya_barang' => $request['banyaknya_barang'],
        //     'harga_satuan' => $request['harga_satuan'],
        //     'jumlah_harga' => $request['jumlah_harga'],
        //     'kode_penanggung_jawab' => $request['kode_penanggung_jawab'],
        //     'keterangan' => $request['keterangan'],
        // ];
        // $ubah->update($data);
        // return redirect('laporanmasuk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Laporanmasuk $laporanmasuk)
    {
        // $laporanmasuk->delete();
        // return redirect ('laporanmasuk');

    }

    public function print() {
        $barangmasuk = Barangmasuk::orderBy('tanggal', 'DESC')->get();
        $jumlah_harga = Barangmasuk::get()->sum('jumlah_harga');
        $banyak = Barangmasuk::get()->sum('banyaknya_barang');

        return Excel::download(new BarangMasukExport, time() .'-barang_masuk.xlsx');
    }
}
