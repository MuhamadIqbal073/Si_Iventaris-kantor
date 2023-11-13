@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Data Nomor Barang</h1>
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
                    <form action="{{route('jenisbarang-update-jenisbarang', $jenisbarang->id_jenisbarang)}}" method="POST" class="p-5">
                      {{ csrf_field() }}
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="no_pabrik">No Pabrik</label>
                            <input type="text" class="form-control" name="no_pabrik" id="no_pabrik" placeholder="no pabrik"value="{{$jenisbarang->no_pabrik}}">
                        </div>
                          <div class="form-group col-md-4">
                            <label for="merk">No Rangka</label>
                            <input name="merk" type="text" class="form-control" id="no_rangka" placeholder="no rangka"value="{{$jenisbarang->no_rangka}}">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="no_mesin">No Mesin</label>
                            <input name="no_mesin" type="text" class="form-control" id="no_mesin" placeholder="no mesin"value="{{$jenisbarang->no_mesin}}">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="no polisi">No Polisi</label>
                            <input name="no polisi" type="text" class="form-control" id="no_polisi" placeholder="no polisi"value="{{$jenisbarang->no_polisi}}">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="no_bpkb">No BPKB</label>
                            <input name="no_bpkb" type="text" class="form-control" id="no_bpkb" placeholder="no bpkb"value="{{$jenisbarang->no_bpkb}}">
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