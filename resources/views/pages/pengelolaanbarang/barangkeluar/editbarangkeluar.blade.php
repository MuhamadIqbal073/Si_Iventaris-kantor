@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Barang Keluar</h1>
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
                    <form action="{{route('simpanbarangkeluar')}}" method="POST" class="p-5">
                      {{ csrf_field() }}
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang">
                        </div>
                          <div class="form-group col-md-4">
                            <label for="kode_barang">Kode Barang</label>
                            <input name="kode_barang" type="text" class="form-control" id="kode_barang" placeholder="Kode Barang">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="merk">Merk</label>
                            <input name="merk" type="text" class="form-control" id="merk" placeholder="Merk">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="ukuran">Ukuran</label>
                            <input name="ukuran" type="text" class="form-control" id="ukuran" placeholder="Ukuran">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="bahan">Bahan</label>
                            <input name="bahan" type="text" class="form-control" id="bahan" placeholder="Bahan">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="tanggal">Tanggal</label>
                            <input name="tanggal" type="date" class="form-control" id="tanggal" placeholder="Tanggal">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="pabrik">Nomor Pabrik</label>
                            <input name="pabrik" type="text" class="form-control" id="pabrik" placeholder="No_Pabrik">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="no_rangka">Nomor Rangka</label>
                            <input name="no_rangka" type="text" class="form-control" id="no_rangka" placeholder="No_Rangka">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="no_mesin">Nomor Mesin</label>
                            <input name="no_mesin" type="text" class="form-control" id="no_mesin" placeholder="No_Mesin">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="no_polisi">Nomor Polisi</label>
                            <input name="no_polisi" type="text" class="form-control" id="no_polisi" placeholder="No_Polisi">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="bpkb">Nomor BPKB</label>
                            <input name="bpkb" type="text" class="form-control" id="bpkb" placeholder="BPKB">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="asal_usul">Asal Usul</label>
                            <input name="asal_usul" type="text" class="form-control" id="asal_usul" placeholder="Asal_Usul">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="banyaknya_barang">Banyaknya Barang</label>
                            <input name="banyaknya_barang" type="text" class="form-control" id="banyaknya_barang" placeholder="banyaknya barang">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="harga_perolehan">Harga Satuan</label>
                            <input name="harga_perolehan" type="text" class="form-control" id="harga_perolehan" placeholder="Harga_Perolehan">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="kode_penanggung_jawab">Kode penanggung jawab</label>
                            <input name="kode_penanggung_jawab" type="text" class="form-control" id="kode_penanggung_jawab" placeholder="Kode Penanggung Jawab">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="keterangan">Keterangan</label>
                            <input name="keterangan" type="text" class="form-control" id="keterangan" placeholder="Keterangan">
                        </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="penerima">Penerima</label>
                        <input name="penerima" type="text" class="form-control" id="penerima" placeholder="penerima">
                      </div>
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