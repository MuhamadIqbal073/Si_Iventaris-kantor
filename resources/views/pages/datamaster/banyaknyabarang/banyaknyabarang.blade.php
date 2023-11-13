@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content">
    <div class="container-fluid">
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card p-4">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title"> <i class="fas fa-chalkboard-teacher"></i> Data Banyak Barang</h3>
                </div>
                <div class="content-header">
                <div class="container-fluid">
                  <a href="{{ route('tambahbanyaknyabarang')}}" class="btn btn-warning mb-3"><i class="fas fa-plus-square mr-2"></i>Tambah data</a>
              {{-- <div class="col-sm-12 col-md-12">
                <div id="example1_filter" class="dataTables_filter d-flex justify-content-end">
                  <label>Search:
                    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
                  </div> --}}
                </div>
              </div>
              <div class="card-body">
            <div style="overflow: auto">
              <table id="example1" class="table table-bordered table-striped">    
            <thead>
            <tr>              
                      <th scope="col">No</th>
                      <th scope="col">Banyaknya Barang</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach($banyaknyabarang as $banyaknyabarang)
                    <tr>  
                      <td>{{$no++}}</td>
                      <td>{{$banyaknyabarang->banyaknya_barang}}</td>
                      <td>
                        <a class="mb-2 fas fa-edit bg-warning p-2 text-white rounded" href="{{route('banyaknyabarang-edit-banyaknyabarang',$banyaknyabarang->id)}}"></a>
                        <a href="/banyaknyabarang/{{$banyaknyabarang->id}}/delete" onclick="return confirm('Yakin ingin menghapus data?')" class="mb-2 fas fa-trash-alt bg-success p-2 text-white rounded"></a>
                      </td>
                    </tr>
                    @endforeach   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>   
@endsection