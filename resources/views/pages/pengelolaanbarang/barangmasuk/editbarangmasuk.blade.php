@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Data Barang Masuk</h1>
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
                    <form action="{{route('barangmasuk-update-barangmasuk',$barangmasuk->id)}}" method="POST" class="p-5">
                      {{ csrf_field() }}
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="nama barang"value="{{$barangmasuk->nama_barang}}">
                        </div>
                          <div class="form-group col-md-4">
                            <label for="kode_barang">Kode Barang</label>
                            <input name="kode_barang" type="text" class="form-control" id="kode_barang" placeholder="kode barang"value="{{$barangmasuk->kode_barang}}">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="merk">Merk</label>
                            <input name="merk" type="text" class="form-control" id="merk" placeholder="merk"value="{{$barangmasuk->merk}}">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="ukuran">Ukuran</label>
                            <input name="ukuran" type="text" class="form-control" id="ukuran" placeholder="ukuran"value="{{$barangmasuk->ukuran}}">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="bahan">Bahan</label>
                            <input name="bahan" type="text" class="form-control" id="bahan" placeholder="bahan"value="{{$barangmasuk->bahan}}">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="tanggal">Tanggal</label>
                            <input name="tanggal" type="date" class="form-control" id="tanggal" placeholder="tanggal"value="{{$barangmasuk->tanggal}}">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="pabrik">No Pabrik</label>
                            <input name="pabrik" type="text" class="form-control" id="pabrik" placeholder="no pabrik"value="{{$barangmasuk->no_pabrik}}">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="no_rangka">No Rangka</label>
                            <input name="no_rangka" type="text" class="form-control" id="no_rangka" placeholder="no rangka"value="{{$barangmasuk->no_rangka}}">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="no_mesin">No Mesin</label>
                            <input name="no_mesin" type="text" class="form-control" id="no_mesin" placeholder="no mesin"value="{{$barangmasuk->no_mesin}}">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="no_polisi">No Polisi</label>
                            <input name="no_polisi" type="text" class="form-control" id="no_polisi" placeholder="no polisi"value="{{$barangmasuk->no_polisi}}">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="no_bpkb">BPKB</label>
                            <input name="no_bpkb" type="text" class="form-control" id="no_bpkb" placeholder="no bpkb"value="{{$barangmasuk->bpkb}}">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="asal_usul">Asal Usul</label>
                            <input name="asal_usul" type="text" class="form-control" id="asal_usul" placeholder="asal usul"value="{{$barangmasuk->asal_usul}}">
                          </div>
                        </div>
                          <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="register">Banyaknya Barang</label>
                              <input name="register" type="text" class="form-control" id="register" placeholder="banyaknya_barang"value="{{$barangmasuk->banyaknya_barang}}">
                            </div>
                          <div class="form-group col-md-4">
                            <label for="harga_perolehan">Harga Satuan</label>
                            <input name="harga_perolehan" type="text" class="form-control" id="harga_perolehan" placeholder="harga perolehan"value="{{$barangmasuk->harga_perolehan}}">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="kode_penanggung_jawab">Kode penanggung jawab</label>
                            <input name="kode_penanggung_jawab" type="text" class="form-control" id="kode_penanggung_jawab" placeholder="kode penanggung jawab" value="{{$barangmasuk->kode_penanggung_jawab}}">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="keterangan">Keterangan</label>
                            <input name="keterangan" type="text" class="form-control" id="keterangan" placeholder="Keterangan"value="{{$barangmasuk->keterangnan}}">
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