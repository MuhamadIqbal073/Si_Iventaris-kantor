@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-7">
                    <h1 class="text-center">Edit Data Inventaris Barang Peralatan, Mesin dan Kendaraan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{route('dataperalatan-update-peralatan',$peralatan->id_peralatan)}}" method="POST" class="p-5">
                      {{ csrf_field() }}
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="nama_barang">Nama Barang</label>
                          <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="nama narang" value="{{$peralatan->nama_barang}}">
                      </div>
                        <div class="form-group col-md-4">
                          <label for="kode_barang">Kode Barang</label>
                          <input name="kode_barang" type="text" class="form-control" id="kode_barang" placeholder="kode barang"value="{{$peralatan->kode_barang}}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="banyaknya_barang">Banyaknya Barang</label>
                          <input name="banyaknya_barang" type="text" class="form-control" id="banyaknya_barang" placeholder="banyaknya barang"value="{{$peralatan->banyaknya_barang}}">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="merk">Merk</label>
                          <input name="merk" type="text" class="form-control" id="merk" placeholder="merk"value="{{$peralatan->merk}}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="ukuran">Ukuran</label>
                          <input name="ukuran" type="text" class="form-control" id="ukuran" placeholder="ukuran"value="{{$peralatan->ukuran}}">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="bahan">Bahan</label>
                          <input name="bahan" type="text" class="form-control" id="bahan" placeholder="bahan"value="{{$peralatan->bahan}}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="tanggal">Tanggal</label>
                          <input name="tanggal" type="date" class="form-control" id="tanggal" placeholder="tanggal"value="{{$peralatan->tanggal}}">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="no_pabrik">Nomor Pabrik</label>
                          <input name="no_pabrik" type="text" class="form-control" id="no_pabrik" placeholder="no pabrik"value="{{$peralatan->no_pabrik}}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="no_rangka">Nomor Rangka</label>
                          <input name="no_rangka" type="text" class="form-control" id="no_rangka" placeholder="no rangka"value="{{$peralatan->no_rangka}}">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="no_mesin">Nomor Mesin</label>
                          <input name="no_mesin" type="text" class="form-control" id="no_mesin" placeholder="no mesin"value="{{$peralatan->no_mesin}}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="no_polisi">No Polisi</label>
                          <input name="no_polisi" type="text" class="form-control" id="no_polisi" placeholder="no polisi"value="{{$peralatan->no_polisi}}">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="no_bpkb">Nomor BPKB</label>
                          <input name="no_bpkb" type="text" class="form-control" id="no_bpkb" placeholder="no_bpkb"value="{{$peralatan->no_bpkb}}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="asal_usul">Asal Usul</label>
                          <input name="asal_usul" type="text" class="form-control" id="asal_usul" placeholder="asal usul"value="{{$peralatan->asal_usul}}">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="harga_satuan">Harga satuan</label>
                          <input name="harga_satuan" type="text" class="form-control" id="harga_satuan" placeholder="harga satuan"value="{{$peralatan->harga_satuan}}">
                        </div>
                      </div>
                        <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="kode_penanggung_jawab">Kode Penanggung Jawab</label>
                          <input name="kode_penanggung_jawab" type="text" class="form-control" id="kode_penanggung_jawab" placeholder="kode penanggung jawab"value="{{$peralatan->kode_penanggung_jawab}}">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="keterangan">Keterangan</label>
                          <input name="keterangan" type="text" class="form-control" id="keterangan" placeholder="keterangan"value="{{$peralatan->keterangan}}">
                        </div>
                      </div>
                      <hr>
                      <button type="submit" class="btn btn-primary pr-4 pl-4">Simpan</button>
                  </form>
              </div>
            </div>
          </div>
      </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection