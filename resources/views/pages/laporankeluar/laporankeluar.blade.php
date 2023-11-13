@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content">
        <div class="row">
            <div class="row-12">
                <div class="card p-4">
                  <div class="card card-primary card-outline">
                    <div class="card-header">
                      <h3 class="card-title"> <i class="fas fa-chalkboard-teacher"></i> Laporan Barang Keluar  </h3>
                    </div>
                    <div class="content-header">
                      <div class="container-fluid">
                    {{-- <a href="{{ route('tambahbarangkeluar')}}"     --}}
                    {{-- class="btn btn-warning mb-3"><i class="fas fa-plus-square mr-2"></i>Tambah data</a>                --}}
                  <div class="card-body">
                <div style="overflow: auto">
                  <table id="example1" class="table table-bordered table-striped">    
                <thead>
                <tr>              
                      <th scope="col">No</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Kode Barang</th>
                      <th scope="col">Merk</th>
                      <th scope="col">Ukuran</th>
                      <th scope="col">Bahan</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Nomor Pabrik</th>
                      <th scope="col">Nomor Rangka</th>
                      <th scope="col">Nomor Mesin</th>
                      <th scope="col">Nomor Polisi</th>
                      <th scope="col">Nomor BPKB</th>
                      <th scope="col">Asal Usul</th>
                      <th scope="col">Banyaknya Barang</th>
                      <th scope="col">Harga Satuan</th>
                      <th scope="col">Jumlah Harga</th>
                      <th scope="col">Kode Penanggung Jawab</th>
                      <th scope="col">Keterangan</th>  
                      <th scope="col">Penerima</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach($laporankeluar as $barangkeluar)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$barangkeluar->nama_barang}}</td>
                      <td>{{$barangkeluar->kode_barang}}</td>
                      <td>{{$barangkeluar->merk}}</td>
                      <td>{{$barangkeluar->ukuran}}</td>
                      <td>{{$barangkeluar->bahan}}</td>
                      <td>{{$barangkeluar->tanggal}}</td>
                      <td>{{$barangkeluar->no_pabrik}}</td>
                      <td>{{$barangkeluar->no_rangka}}</td>
                      <td>{{$barangkeluar->no_mesin}}</td>
                      <td>{{$barangkeluar->no_polisi}}</td>
                      <td>{{$barangkeluar->no_bpkb}}</td>
                      <td>{{$barangkeluar->asal_usul}}</td>
                      <td>{{$barangkeluar->banyaknya_barang}}</td>
                      <td>{{number_format($barangkeluar->harga_satuan )}}</td>
                      <td>{{number_format($barangkeluar->harga_satuan * $barangkeluar->banyaknya_barang)}}</td>
                      <td>{{$barangkeluar->kode_penanggung_jawab}}</td>
                      <td>{{$barangkeluar->keterangan}}</td>
                      <td>{{$barangkeluar->penerima}}</td>
                      <td>
                        {{-- <a class="mb-2 fas fa-edit bg-warning p-2 text-white rounded" href="/barangkeluar/{{$barangkeluar->id_barangkeluar}}/edit"></a>
                        <a href="/barangkeluar/{{$barangkeluar->id_barangkeluar}}/delete" onclick="return confirm('Yakin ingin menghapus data?')" class="mb-2 fas fa-trash-alt bg-success p-2 text-white rounded"></a> --}}
                      </td>
                    </tr>
                    @endforeach   
                  </tbody>
                  <tfoot>
                    <tr>
                      <td></td>
                      <td>Jumlah</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>{{ $jumlah_banyaknya_barang }}</td>
                      <td></td>
                      <td>Rp {{ number_format($jumlah_harga, 2, ',', '.') }}</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    </div>
    </div>   
    @endsection