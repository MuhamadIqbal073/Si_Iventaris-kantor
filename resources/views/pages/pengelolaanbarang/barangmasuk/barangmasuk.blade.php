@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content">
        <div class="row mt-5">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title"> <i class="fas fa-chalkboard-teacher"></i> Data Barang Masuk </h3>
                        <a href="{{ route('tambahbarangmasuk')}}" class="btn btn-warning mb-3 float-right"><i class="fas fa-plus-square mr-2"></i>Tambah data</a>
                    </div>
                    <div class="card-body">
                        <div style="overflow: auto">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">QR Code</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Kode Barang</th>
                                        <th scope="col">Banyaknya Barang</th>
                                        <th scope="col">Harga Satuan</th>
                                        <th scope="col">Jumlah Harga</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach($barangmasuk as $item)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>
                                            {!! QrCode::size(100)->generate(createQrCodeLink($item->id_barangmasuk)); !!}
                                        </td>
                                        <td>{{$item->nama_barang}}</td>
                                        <td>{{$item->kode_barang}}</td>
                                        <td>{{$item->banyaknya_barang}}</td>
                                        <td>{{number_format($item->harga_satuan )}}</td>
                                        <td>{{number_format($item->harga_satuan * $item->banyaknya_barang)}}</td>
                                       
                                        <td>
                                            {{-- <a class="mb-2 fas fa-edit bg-warning p-2 text-white rounded" href="/barangmasuk/{{$item->id_barangmasuk}}/edit"></a>
                                            <a href="/barangmasuk/{{$item->id_item}}/delete" onclick="return confirm('Yakin ingin menghapus data?')" class="mb-2 fas fa-trash-alt bg-success p-2 text-white rounded"></a> --}}
                                            <a href="#" data-toggle="modal" data-target="#view-{{ $item->id_barangmasuk }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('public.print-qr-barang-masuk', $item->id_barangmasuk) }}" target="_blank" class="btn btn-success btn-sm"
                                            data-toggle="tooltip" title="Print QR Code"><i class="fa fa-qrcode"></i></a>
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
                                      <td>{{ $banyak }}</td>
                                        <td></td>
                                        <td>{{ number_format($jumlah_harga) }}</td>
                                       
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
        @endsection

@section('custom_html')
@foreach ($barangmasuk as $item)
<div class="modal fade" id="view-{{ $item->id_barangmasuk }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data Barang Masuk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table id="example1" class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td>Nama Barang</td>
                        <td>{{ $item->nama_barang }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>{{ $item->tanggal }}</td>
                    </tr>
                    <tr>
                        <td>Banyaknya Barang</td>
                        <td>{{ $item->banyaknya_barang }}</td>
                    </tr>
                    <tr>
                        <td>Harga Satuan</td>
                        <td>Rp {{ number_format($item->harga_satuan, 2) }}</td>
                    </tr>
                    <tr>
                        <td>Jumlah Harga</td>
                        <td> Rp {{ number_format($item->harga_satuan * $item->banyaknya_barang, 2) }}</td>
                    </tr>
                        <tr>
                            <td>Kode Barang</td>
                            <td>{{ $item->kode_barang }}</td>
                        </tr>
                        <tr>
                            <td>Merk</td>
                            <td>{{ $item->merk }}</td>
                        </tr>
                        <tr>
                            <td>Ukuran</td>
                            <td>{{ $item->ukuran }}</td>
                        </tr>
                        <tr>
                            <td>Bahan</td>
                            <td>{{ $item->bahan }}</td>
                        </tr>
                        
                        <tr>
                            <td>Nomor Pabrik</td>
                            <td>{{ $item->no_pabrik }}</td>
                        </tr>
                        <tr>
                            <td>Nomor Rangka</td>
                            <td>{{ $item->no_rangka }}</td>
                        </tr>
                        <tr>
                            <td>Nomor Mesin</td>
                            <td>{{ $item->no_mesin }}</td>
                        </tr>
                        <tr>
                            <td>Nomor Polisi</td>
                            <td>{{ $item->no_polisi }}</td>
                        </tr>
                        <tr>
                            <td>Nomor BPKB</td>
                            <td>{{ $item->no_bpkb }}</td>
                        </tr>
                        <tr>
                            <td>Asal Usul</td>
                            <td>{{ $item->asal_usul }}</td>
                        </tr>
                        
                        <tr>
                            <td>Kode Penanggung Jawab</td>
                            <td>{{ $item->kode_penanggung_jawab }}</td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>{{ $item->keterangan }}</td>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <td>
                                <img width="75px" height="75px" src="{{asset('storage/' . $item->foto)}}" alt="" style="object-fit: cover;">
                            </td>
                        </tr>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
</div>
@endforeach
@endsection