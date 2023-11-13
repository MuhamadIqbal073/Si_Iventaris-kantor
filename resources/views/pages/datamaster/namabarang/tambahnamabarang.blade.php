@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Nama Barang</h1>
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
                    <form action="{{route('simpannamabarang')}}" method="POST" class="p-5">
                      {{ csrf_field() }}
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="nama_barang">Nama Barang</label>
                          <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="nama barang">
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