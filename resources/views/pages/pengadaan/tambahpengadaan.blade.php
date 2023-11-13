@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Pengadaan Barang</h1>
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
                    <form action="{{route('simpanpengadaan')}}" method="POST" class="p-5">
                      {{ csrf_field() }}
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="merek">Merek</label>
                            <input name="merek" type="text" class="form-control" id="merek" placeholder="merek">
                          </div>
                        </div>
                          <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="no_kontrak">No Kontrak</label>
                            <input name="no_kontrak" type="text" class="form-control" id="no_kontrak" placeholder="no_kontrak">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="tanggal">Tanggal</label>
                            <input name="tanggal" type="date" class="form-control" id="tanggal" placeholder="tanggal">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="banyaknya_barang">Banyaknya Barang</label>
                            <input name="banyaknya_barang" type="text" class="form-control" id="banyaknya_barang" placeholder="banyaknya_barang">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="harga_satuan">Harga Satuan</label>
                            <input name="harga_satuan" type="text" class="form-control" id="harga_satuan" placeholder="harga_satuan">
                          </div>
                         </div>
                          <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="jumlah_harga">Jumlah Harga</label>
                            <input name="jumlah_harga" type="text
                            " class="form-control" id="jumlah_harga" placeholder="jumlah_harga">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="keterangan">Keterangan</label>
                            <input name="keterangan" type="text" class="form-control" id="keterangan" placeholder="keterangan">
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