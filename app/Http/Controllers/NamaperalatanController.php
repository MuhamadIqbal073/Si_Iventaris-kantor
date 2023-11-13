<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Peralatan;

class NamaperalatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_peralatan = Peralatan::orderBy('created_at', 'DESC')->with('category')->get();
        $jumlah_banyaknya_barang = Peralatan::get()->sum('jumlah_banyaknya_barang');
        $jumlah_harga = Peralatan::get()->sum('jumlah_harga');

        $categories = Category::all();
        $data = [];
        $n = 0;

        foreach ($categories as $category) {
            $peralatan = Peralatan::where('category_id', $category->id)
                ->orderBy('created_at', 'DESC')
                ->with('category')
                ->get();

            if (count($peralatan) > 0) {
                $data[$n]['category'] = $category;
                $data[$n]['peralatan'] = $peralatan;
                $n++;
            }
        }

        return view('pages.databarang.namaperalatan', ['data' => $data, 'data_peralatan' => $data_peralatan, 'jumlah_banyaknya_barang' => $jumlah_banyaknya_barang, 'jumlah_harga' => $jumlah_harga]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('pages.databarang.tambahdataperalatan', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peralatan = new Peralatan;
        $peralatan->category_id = $request->category_id;
        $peralatan->nama_barang = $request->input('nama_barang');
        $peralatan->kode_barang = $request->input('kode_barang');
        $peralatan->merk = $request->input('merk');
        $peralatan->ukuran = $request->input('ukuran');
        $peralatan->bahan = $request->input('bahan');
        $peralatan->tanggal = $request->input('tanggal');
        $peralatan->no_pabrik = $request->input('no_pabrik');
        $peralatan->no_rangka = $request->input('no_rangka');
        $peralatan->no_mesin = $request->input('no_mesin');
        $peralatan->no_polisi = $request->input('no_polisi');
        $peralatan->no_bpkb = $request->input('no_bpkb');
        $peralatan->asal_usul = $request->input('asal_usul');
        $peralatan->banyaknya_barang = $request->input('banyaknya_barang');
        $peralatan->harga_satuan = $request->input('harga_satuan');
        $peralatan->jumlah_harga = $request->input('jumlah_harga');
        $peralatan->kode_penanggung_jawab = $request->input('kode_penanggung_jawab');
        $peralatan->keterangan = $request->input('keterangan');
        $peralatan->save();

        return redirect('dataperalatan');
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
        $peralatan = Peralatan::find($id);
        return view('pages.databarang.editdataperalatan')->with('peralatan', $peralatan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_peralatan)
    {
        // dd($request->all());
        $ubah = Peralatan::findorfail($id_peralatan);

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
            'asal_usul' => $request['asal_usul'],
            'banyaknya_barang' => $request['banyaknya_barang'],
            'harga_satuan' => $request['harga_satuan'],
            'jumlah_harga' => $request['jumlah_harga'],
            'kode_penanggung_jawab' => $request['kode_penanggung_jawab'],
            'keterangan' => $request['keterangan'],
        ];
        $ubah->update($data);
        return redirect('dataperalatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Peralatan $peralatan)
    {
        $peralatan->delete();
        return redirect('dataperalatan');
    }
}
