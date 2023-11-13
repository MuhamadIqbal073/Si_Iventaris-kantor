@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <a href="{{ route('tambahpengadaan')}}" class="btn btn-warning mb-3"><i class="fas fa-plus-square mr-2"></i>Tambah data</a>
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title"> <i class="fas fa-chalkboard-teacher"></i> Data Buku Hasil Pengadaan Barang</h3>
                </div>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Merek</th>
                      <th scope="col">No Kontrak</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Banyaknya Barang</th>
                      <th scope="col">Harga Satuan</th>
                      <th scope="col">Jumlah Harga</th>
                      <th scope="col">Keterangan</th>
                      @if (auth()->user()->role == 'admin')
                      <th scope="col">Aksi</th>
                      @endif
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach($pengadaan as $pengadaan)
                    <tr>  
                      <td>{{$no++}}</td>
                      <td>{{$pengadaan->nama_barang}}</td>
                      <td>{{$pengadaan->merek}}</td>
                      <td>{{$pengadaan->no_kontrak}}</td>
                      <td>{{$pengadaan->tanggal}}</td>
                      <td>{{$pengadaan->banyaknya_barang}}</td>
                      <td>{{number_format($pengadaan->harga_satuan)}}</td>
                      <td>{{number_format($pengadaan->harga_satuan * $pengadaan->banyaknya_barang)}}</td>
                      <td>{{$pengadaan->keterangan}}</td>
                      {{-- <td>{{$pengadaan->banyaknya_barang_barang*$pengadaan->harga_satuan}} --}}
                      <td>
                        @if (auth()->user()->role == 'admin')
                        <a class="mb-2 fas fa-edit bg-warning p-2 text-white rounded" href="{{route('pengadaan-edit-pengadaan',$pengadaan->id_pengadaan)}}"></a>
                        <a href="/pengadaan/{{$pengadaan->id_pengadaan}}/delete" onclick="return confirm('Yakin ingin menghapus data?')" class="mb-2 fas fa-trash-alt bg-success p-2 text-white rounded"></a>
                      @endif
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