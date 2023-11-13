<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Peralatan;
use App\Models\Barangkeluar;
use Livewire\WithFileUploads;

class Tambahbarangkeluar extends Component
{
    use WithFileUploads;

    public $databarang;
    public $id_peralatan, $nama_barang, $kode_barang, $banyaknya_barang,
        $merk, $ukuran, $bahan, $tanggal, $no_pabrik, $no_rangka, $no_mesin,
        $no_polisi, $no_bpkb, $asal_usul, $harga_satuan, $kode_penanggung_jawab, $keterangan, $penerima;

    public $foto;

    public function render()
    {
        $this->databarang = Peralatan::get(['nama_barang', 'id_peralatan']);
        return view('livewire.tambahbarangkeluar');
    }

    public function updatingIdPeralatan($value)
    {
        $databarang = Peralatan::find($value);

        $this->nama_barang = $databarang->nama_barang;
        $this->kode_barang = $databarang->kode_barang;
        $this->banyaknya_barang = $databarang->banyaknya_barang;
        $this->merk = $databarang->merk;
        $this->penerima = $databarang->penerima;
        $this->ukuran = $databarang->ukuran;
        $this->bahan = $databarang->bahan;
        // $this->tanggal = $databarang->tanggal;
        $this->no_pabrik = $databarang->no_pabrik;
        $this->no_rangka = $databarang->no_rangka;
        $this->no_mesin = $databarang->no_mesin;
        $this->no_polisi = $databarang->no_polisi;
        $this->no_bpkb = $databarang->no_bpkb;
        $this->asal_usul = $databarang->asal_usul;
        $this->harga_satuan = $databarang->harga_satuan;
        $this->kode_penanggung_jawab = $databarang->kode_penanggung_jawab;
        $this->keterangan = $databarang->keterangan;
    }

    public function store()
    {
        // Store image in public storage folder
        $file_name = time() .'--'. $this->foto->getClientOriginalName();
        $image = $this->foto->storeAs('barangkeluar', $file_name);

        $peralatan = Peralatan::find($this->id_peralatan);
        $jumlahKeluar = $this->banyaknya_barang;
        $currentQty = $peralatan->banyaknya_barang;
        if ($jumlahKeluar > $currentQty) {
            session()->flash('qtyMessage', 'Jumlah barang keluar tidak boleh lebih dari '. $currentQty);

            return redirect()
                ->route('tambahbarangkeluar');
        }

        $barangkeluar = new Barangkeluar;
        $barangkeluar->nama_barang = $this->nama_barang;
        $barangkeluar->kode_barang = $this->kode_barang;
        $barangkeluar->merk = $this->merk;
        $barangkeluar->ukuran = $this->ukuran;
        $barangkeluar->bahan = $this->bahan;
        $barangkeluar->tanggal = $this->tanggal;
        $barangkeluar->no_pabrik = $this->no_pabrik;
        $barangkeluar->no_rangka = $this->no_rangka;
        $barangkeluar->no_mesin = $this->no_mesin;
        $barangkeluar->no_polisi = $this->no_polisi;
        $barangkeluar->no_bpkb = $this->no_bpkb;
        $barangkeluar->asal_usul = $this->asal_usul;
        $barangkeluar->banyaknya_barang = $this->banyaknya_barang;
        $barangkeluar->harga_satuan = $this->harga_satuan;
        $barangkeluar->jumlah_harga = $this->banyaknya_barang * $this->harga_satuan;
        $barangkeluar->kode_penanggung_jawab = $this->kode_penanggung_jawab;
        $barangkeluar->keterangan = $this->keterangan;
        $barangkeluar->penerima = $this->penerima;
        $barangkeluar->foto = $image;
        $barangkeluar->save();

        $peralatan->update([
            'banyaknya_barang' => $peralatan->banyaknya_barang - $this->banyaknya_barang
        ]);

        return redirect()
            ->to(route('barangkeluar'));
    }
}
