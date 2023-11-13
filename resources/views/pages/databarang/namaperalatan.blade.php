@extends('layouts.backend')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Barang Peralatan
                            Mesin dan Kendaraan</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('tambahdataperalatan') }}" class="btn btn-warning mb-3"><i
                                class="fas fa-plus-square mr-2"></i>Tambah data</a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="row">
                @foreach ($data as $dataPerKategori)
                    <div class="col-12">
                        <div class="card card-primary card-outline">
                          <div class="card-header">
                            <h3 class="card-title">
                              {{ $dataPerKategori['category']->name }}
                            </h3>
                          </div>
                            <div class="card-body">
                                <div style="overflow: auto">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Barang</th>
                                                <th scope="col">Kode</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Merk</th>
                                                <th scope="col">Ukuran</th>
                                                <th scope="col">Bahan</th>
                                                {{-- <th scope="col">Tanggal</th> --}}
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
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($dataPerKategori['peralatan'] as $peralatan)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $peralatan->nama_barang }}</td>
                                                    <td>{{ $peralatan->kode_barang }}</td>
                                                    <td>{{ $peralatan->category->name }}</td>
                                                    <td>{{ $peralatan->merk }}</td>
                                                    <td>{{ $peralatan->ukuran }}</td>
                                                    <td>{{ $peralatan->bahan }}</td>
                                                    {{-- <td>{{$peralatan->tanggal}}</td> --}}
                                                    <td>{{ $peralatan->no_pabrik }}</td>
                                                    <td>{{ $peralatan->no_rangka }}</td>
                                                    <td>{{ $peralatan->no_mesin }}</td>
                                                    <td>{{ $peralatan->no_polisi }}</td>
                                                    <td>{{ $peralatan->no_bpkb }}</td>
                                                    <td>{{ $peralatan->asal_usul }}</td>
                                                    <td>{{ $peralatan->banyaknya_barang }}</td>
                                                    <td>{{ number_format($peralatan->harga_satuan) }}</td>
                                                    <td>{{ number_format($peralatan->harga_satuan * $peralatan->banyaknya_barang) }}
                                                    </td>
                                                    <td>{{ $peralatan->kode_penanggung_jawab }}</td>
                                                    <td>{{ $peralatan->keterangan }}</td>
                                                    <td>
                                                        <a class="mb-2 fas fa-edit bg-warning p-2 text-white rounded"
                                                            href="/dataperalatan/{{ $peralatan->id_peralatan }}/edit"></a>
                                                        <a href="/dataperalatan/{{ $peralatan->id_peralatan }}/delete"
                                                            onclick="return confirm('Yakin ingin menghapus data?')"
                                                            class="mb-2 fas fa-trash-alt bg-success p-2 text-white rounded"></a>
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
                                                {{-- <td></td> --}}
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>{{ number_format($jumlah_harga) }}</td>
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
                @endforeach
            </div>
        </section>
    </div>
@endsection
