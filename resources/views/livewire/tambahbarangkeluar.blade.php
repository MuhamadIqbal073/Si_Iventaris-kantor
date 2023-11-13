<div class="col-12">
    <form class="p-5" enctype="multipart/form-data" wire:submit.prevent="store">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nama_barang">Nama Barang <span style="color: red;">*</span> </label>
                {{-- <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="nama narang"> --}}
                <select id="nama_barang" class="form-control" wire:model="id_peralatan">
                    <option value="">Pilih nama barang</option>
                    @foreach ($databarang as $item)
                    <option value="{{ $item->id_peralatan }}">{{ $item->nama_barang }}</option>
                    @endforeach
                </select>
            </div>
            {{-- <input type="hidden" wire:model="nama_barang"> --}}
            <div class="form-group col-md-4">
                <label for="kode_barang">Kode Barang</label>
                <input wire:model="kode_barang" type="text" class="form-control" id="kode_barang" placeholder="kode barang" readonly>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="merk">Merk</label>
                <input wire:model="merk" type="text" class="form-control" id="merk" placeholder="merk" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="penerima">Penerima</label>
                <input wire:model="penerima" type="text" class="form-control" id="penerima" placeholder="penerima">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="ukuran">Ukuran</label>
                <input wire:model="ukuran" type="text" class="form-control" id="ukuran" placeholder="ukuran" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="bahan">Bahan</label>
                <input wire:model="bahan" type="text" class="form-control" id="bahan" placeholder="Bahan" readonly>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="tanggal">Tanggal</label>
                <input wire:model="tanggal" type="date" class="form-control" id="tanggal" placeholder="tanggal" >
            </div>
            <div class="form-group col-md-4">
                <label for="no_pabrik">Nomor Pabrik</label>
                <input wire:model="no_pabrik" type="text" class="form-control" id="no_pabrik" placeholder="no pabrik" readonly>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="no_rangka">Nomor Rangka</label>
                <input wire:model="no_rangka" type="text" class="form-control" id="no_rangka" placeholder="no rangka" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="no_mesin">Nomor Mesin</label>
                <input wire:model="no_mesin" type="text" class="form-control" id="no_mesin" placeholder="no mesin" readonly>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="no_polisi">No Polisi</label>
                <input wire:model="no_polisi" type="text" class="form-control" id="no_polisi" placeholder="no polisi" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="no_bpkb">Nomor BPKB</label>
                <input wire:model="no_bpkb" type="text" class="form-control" id="no_bpkb" placeholder="no_bpkb" readonly>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="asal_usul">Asal Usul</label>
                <input wire:model="asal_usul" type="text" class="form-control" id="asal_usul" placeholder="asal usul" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="harga_satuan">Harga satuan</label>
                <input wire:model="harga_satuan" type="number" class="form-control" id="harga_satuan" placeholder="harga satuan" readonly>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="kode_penanggung_jawab">Kode Penanggung Jawab</label>
                <input wire:model="kode_penanggung_jawab" type="text" class="form-control" id="kode_penanggung_jawab" placeholder="kode penanggung jawab" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="keterangan">Keterangan</label>
                <input wire:model="keterangan" type="text" class="form-control" id="keterangan" placeholder="keterangan" readonly>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="foto">Foto Barang Masuk <span style="color: red;">*</span></label>
                <input wire:model="foto" type="file" class="form-control" id="foto">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="banyaknya_barang">Banyaknya Barang Keluar <span style="color: red;">*</span> </label>
                <input wire:model="banyaknya_barang" type="number" value="12" class="form-control"
                    id="banyaknya_barang" placeholder="">

                @if (session()->has('qtyMessage'))
                    <span class="text-danger">
                        {{ session()->get('qtyMessage') }}
                    </span>
                @endif
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-primary pr-4 pl-4">Simpan</button>
    </form>
</div>