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
                            <h3 class="card-title"> <i class="fas fa-chalkboard-teacher"></i> Kartu Inventaris Barang B Peralatan Mesin dan Kendaraan  </h3>
                        </div>
                        <div class="content-header">
                            <div class="container-fluid">
                                <a href="{{ route('tambahbarangkeluar')}}"
                                class="btn btn-warning mb-3"><i class="fas fa-plus-square mr-2"></i>Tambah data</a>
                                <div class="card-body">
                                    <div style="overflow: auto">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Barang</th>
                                                    <th scope="col">Kode Barang</th>
                                                    <th scope="col">Tanggal</th>
                                                    <th scope="col">Banyaknya Barang</th>
                                                    <th scope="col">Harga Satuan</th>
                                                    <th scope="col">Jumlah Harga</th>
                                                    <th scope="col">Kode Penanggung Jawab</th>
                                                    <th scope="col">Penerima</th>
                                                    <th scope="col">Gambar</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $no = 1;
                                                @endphp
                                                @foreach($barangkeluar as $item)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$item->nama_barang}}</td>
                                                    <td>{{$item->kode_barang}}</td>
                                                    <td>
                                                        @if ($item->tanggal == '')
                                                            
                                                        @else
                                                        {{ date('d M Y', strtotime($item->tanggal)) }}
                                                        @endif
                                                    </td>
                                                    <td>{{$item->banyaknya_barang}}</td>
                                                    <td>{{number_format($item->harga_satuan )}}</td>
                                                    <td>{{number_format($item->harga_satuan * $item->banyaknya_barang)}}</td>
                                                    <td>{{$item->kode_penanggung_jawab}}</td>
                                                    <td>{{$item->penerima}}</td>
                                                    <td>
                                                        <img width="75px" height="75px" src="{{asset('storage/' . $item->foto)}}" alt="" style="object-fit: cover;">
                                                    </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal"
                                                        data-target="#view-{{ $item->id_barangkeluar }}"
                                                            class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                    </td>
                                                    {{-- <td>
                                                        <a class="mb-2 fas fa-edit bg-warning p-2 text-white rounded" href="/barangkeluar/{{$item->id_barangkeluar}}/edit"></a>
                                                        <a href="/barangkeluar/{{$item->id_barangkeluar}}/delete" onclick="return confirm('Yakin ingin menghapus data?')" class="mb-2 fas fa-trash-alt bg-success p-2 text-white rounded"></a>
                                                    </td> --}}
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

    @section('custom_html')
    @foreach($barangkeluar as $item)
    <div class="modal fade" id="view-{{ $item->id_barangkeluar }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Data Barang Keluar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-condensed table-bordered">
                        <tr>
                            <td>Nama Barang</td>
                            <td>{{$item->nama_barang}}</td>
                        </tr>
                            <tr>
                                <td>Kode Barang</td>
                                <td>{{$item->kode_barang}}</td>
                            </tr>
                           <tr>
                               <td>Merk</td>
                               <td>{{$item->merk}}</td>
                           </tr>
                            <tr>
                                <td>Ukuran</td>
                                <td>{{$item->ukuran}}</td>
                            </tr>
                            <tr>
                                <td>Bahan</td>
                                <td>{{$item->bahan}}</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>{{ date('d M Y', strtotime($item->tanggal)) }}</td>
                            </tr>
                            <tr>
                                <td>No. Pabrik</td>
                                <td>{{$item->no_pabrik}}</td>
                            </tr>
                            <tr>
                                <td>No. Rangka</td>
                                <td>{{$item->no_rangka}}</td>
                            </tr>
                            <tr>
                                <td>No. Mesin</td>
                                <td>{{$item->no_mesin}}</td>
                            </tr>
                            <tr>
                                <td>No Polisi</td>
                                <td>{{$item->no_polisi}}</td>
                            </tr>
                            <tr>
                                <td>No. BPKB</td>
                                <td>{{$item->no_bpkb}}</td>
                            </tr>
                           <tr>
                               <td>Asal Usul</td>
                               <td>{{$item->asal_usul}}</td>
                           </tr>
                            <tr>
                                <td>Banyaknya Barang</td>
                                <td>{{$item->banyaknya_barang}}</td>
                            </tr>
                            <tr>
                                <td>Harga Satuan</td>
                                <td>Rp {{number_format($item->harga_satuan, 2, ',', '.')}}</td>
                            </tr>
                            <tr>
                                <td>Total Harga</td>
                                <td>Rp {{number_format($item->harga_satuan * $item->banyaknya_barang, 2, ',', '.')}}</td>
                            </tr>
                            <tr>
                                <td>Kode Penanggung Jawab</td>
                                <td>{{$item->kode_penanggung_jawab}}</td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td>{{$item->keterangan}}</td>
                            </tr>
                            <tr>
                                <td>Penerima</td>
                                <td>{{$item->penerima}}</td>
                            </tr>
                            <tr>
                                <td>Foto</td>
                                <td>
                                    <a href="{{asset('storage/' . $item->foto)}}" target="_blank" rel="noopener noreferrer">
                                    <img width="75px" height="75px" src="{{asset('storage/' . $item->foto)}}" alt="" style="object-fit: cover;">
                                    </a>
                                </td>
                            </tr>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
          </div>
        </div>
    </div>
    @endforeach
    @endsection