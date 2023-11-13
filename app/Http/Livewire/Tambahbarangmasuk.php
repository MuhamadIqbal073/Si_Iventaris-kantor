<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Peralatan;
use App\Models\Barangmasuk;
use App\Models\Namabarang;
use Livewire\WithFileUploads;

class Tambahbarangmasuk extends Component
{
    use WithFileUploads;

    public $databarang;
    public $id_peralatan, $nama_barang, $kode_barang, $banyaknya_barang,
        $merk, $ukuran, $bahan, $tanggal, $no_pabrik, $no_rangka, $no_mesin,
        $no_polisi, $no_bpkb, $asal_usul, $harga_satuan, $kode_penanggung_jawab, $keterangan;

    public $foto;

    public function render()
    {
        $this->databarang = Peralatan::get(['nama_barang', 'id_peralatan']);
        
        return view('livewire.tambahbarangmasuk');
    }

    public function updatingIdPeralatan($value)
    {
        $databarang = Peralatan::find($value);

        $this->nama_barang = $databarang->nama_barang;
        $this->kode_barang = $databarang->kode_barang;
        $this->banyaknya_barang = $databarang->banyaknya_barang;
        $this->merk = $databarang->merk;
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
        $file_name = md5($this->foto . microtime()).'.'.$this->foto->extension();
        $image = $this->foto->storeAs('barangmasuk', $file_name);

        $barangmasuk = new Barangmasuk;
        $barangmasuk->nama_barang = $this->nama_barang;
        $barangmasuk->kode_barang = $this->kode_barang;
        $barangmasuk->merk = $this->merk;
        $barangmasuk->ukuran = $this->ukuran;
        $barangmasuk->bahan = $this->bahan;
        $barangmasuk->tanggal = $this->tanggal;
        $barangmasuk->no_pabrik = $this->no_pabrik;
        $barangmasuk->no_rangka = $this->no_rangka;
        $barangmasuk->no_mesin = $this->no_mesin;
        $barangmasuk->no_polisi = $this->no_polisi;
        $barangmasuk->no_bpkb = $this->no_bpkb;
        $barangmasuk->asal_usul = $this->asal_usul;
        $barangmasuk->banyaknya_barang = $this->banyaknya_barang;
        $barangmasuk->harga_satuan = $this->harga_satuan;
        $barangmasuk->jumlah_harga = $this->banyaknya_barang * $this->harga_satuan;
        $barangmasuk->kode_penanggung_jawab = $this->kode_penanggung_jawab;
        $barangmasuk->keterangan = $this->keterangan;
        $barangmasuk->foto = $image;
        $barangmasuk->save();

        $peralatan = Peralatan::find($this->id_peralatan);

        $peralatan->update([
            'banyaknya_barang' => $peralatan->banyaknya_barang + $this->banyaknya_barang
        ]);

        return redirect()
            ->to(route('barangmasuk'));
    }
}
