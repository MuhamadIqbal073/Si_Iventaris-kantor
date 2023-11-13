<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barangmasuk;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class BarangmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangmasuk = Barangmasuk::all();
        $jumlah_harga = Barangmasuk::get()->sum('jumlah_harga');
        $banyak = Barangmasuk::get()->sum('banyaknya_barang');

        return view('pages.pengelolaanbarang.barangmasuk.barangmasuk', ['barangmasuk' => $barangmasuk, 'jumlah_harga' => $jumlah_harga, 'banyak' => $banyak]);
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
        // return redirect('barangmasuk');
    }
    /**
     * Display the specified resource.
     *
     * @param \App\Models\Barangmasuk $barangmasuk
     * @return \Illuminate\Http\Response
     */
    public function show(Barangmasuk $barangmasuk)
    {
        return view('public.barang-masuk', compact('barangmasuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangmasuk = Barangmasuk::find($id);
        return view('pages.pengelolaanbarang.barangmasuk.editbarangmasuk')->with('barangmasuk', $barangmasuk);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_barangmasuk)
    {
        $ubah = Barangmasuk::findorfail($id_barangmasuk);

        $data = [
            'nama_barang' => $request['nama_barang'],
            'kode_barang' => $request['kode_barang'],
            'banyknya_barang' => $request['banyaknya_barang'],
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
            'harga_satuan' => $request['harga_satuan'],
            'jumlah_harga' => $request['jumlah_harga'],
            'kode_penanggung_jawab' => $request['kode_penanggung_jawab'],
            'keterangan' => $request['keterangan'],
        ];
        $ubah->update($data);
        return redirect('barangmasuk');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Barangmasuk $barangmasuk)
    {
        $barangmasuk->delete();
        return redirect('barangmasuk');
    }

    public function print_qr_code(Barangmasuk $barangmasuk)
    {
        return view('public.barang-masuk-print-qr-code', compact('barangmasuk'));
    }

    
}
