@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Data Banyaknya Barang</h1>
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
                    <form action="{{route('banyaknyabarang-update-banyaknyabarang',$banyaknyabarang->id)}}" method="POST" class="p-5">
                      {{ csrf_field() }}
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="banyaknya_barang">Banyaknya Barang</label>
                          <input type="text" class="form-control" name="banyaknya_barang" id="banyaknya_barang" placeholder="banyaknya barang"value="{{$banyaknyabarang->banyaknya_barang}}">
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