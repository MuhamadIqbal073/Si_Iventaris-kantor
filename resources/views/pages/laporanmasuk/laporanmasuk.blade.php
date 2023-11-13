@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card p-4">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title"> <i class="fas fa-chalkboard-teacher"></i> Laporan Barang Masuk </h3>
                  <a href="{{ route('laporanmasuk.print') }}" target="_blank" class="btn btn-primary mb-3 float-right"><i class="fa fa-print"></i> Print</a>
                </div>
              <div class="content-header">
                <div class="container-fluid">
                  {{-- <a href="{{ route('tambahdataperalatan')}}" class="btn btn-warning mb-3"><i class="fas fa-plus-square mr-2"></i>Tambah data</a> --}}
                  <div class="col-sm-12 col-md-12">  
                    {{-- <div id="example1_filter" class="dataTables_filter d-flex justify-content-end">
                      <label>Search:
                        <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
                      </div> --}}
                    </div>
                  </div>
                  <div class="card-body">
                <div style="overflow: auto">
                  <table id="laporan-masuk" class="table table-bordered table-striped">    
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
                      <th scope="col">Aksi</th> 
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach($laporanmasuk as $laporanmasuk)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$laporanmasuk->nama_barang}}</td>
                      <td>{{$laporanmasuk->kode_barang}}</td>
                      <td>{{$laporanmasuk->merk}}</td>
                      <td>{{$laporanmasuk->ukuran}}</td>
                      <td>{{$laporanmasuk->bahan}}</td>
                      <td>{{$laporanmasuk->tanggal}}</td>
                      <td>{{$laporanmasuk->no_pabrik}}</td>
                      <td>{{$laporanmasuk->no_rangka}}</td>
                      <td>{{$laporanmasuk->no_mesin}}</td>
                      <td>{{$laporanmasuk->no_polisi}}</td>
                      <td>{{$laporanmasuk->no_bpkb}}</td>
                      <td>{{$laporanmasuk->asal_usul}}</td>
                      <td>{{$laporanmasuk->banyaknya_barang}}</td>
                      <td>{{number_format($laporanmasuk->harga_satuan )}}</td>
                      <td>{{number_format($laporanmasuk->harga_satuan *$laporanmasuk->banyaknya_barang)}}</td>
                      <td>{{$laporanmasuk->kode_penanggung_jawab}}</td>
                      <td>{{$laporanmasuk->keterangan}}</td>
                      <td>
                        {{-- <a class="mb-2 fas fa-edit bg-warning p-2 text-white rounded" href="/$laporanmasuk/{{$$laporanmasuk->id_$laporanmasuk}}/edit"></a>
                        <a href="/dataperalatan/{{$peralatan->id_peralatan}}/delete" onclick="return confirm('Yakin ingin menghapus data?')" class="mb-2 fas fa-trash-alt bg-success p-2 text-white rounded"></a> --}}
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
                      <td>{{ number_format($jumlah_harga) }}</td>
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

    @push('custom_js')
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
        <script>
          $(function () {
            $('#laporan-masuk').DataTable({
              dom: 'Bfrtip',
              buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
          });
          })
        </script>
    @endpush