<table id="laporan-masuk" class="table table-bordered table-striped">    
  <thead>
    <tr>
      <td colspan="7" height="70"></td>
      <td valign="top" style="text-align: center">
        <b>PEMERINTAH PROVINSI BENGKULU</b>
        <br>
        <b>KARTU INVENTARIS BARANG (KIB) B</b>
        <br>
        <b>PERALATAN DAN MESIN</b>
      </td>
      <td colspan="10"></td>
    </tr>
    <tr>
      <td>Provinsi</td>
      <td style="text-align: center">:</td>
      <td colspan="16">Provinsi Bengkulu</td>
    </tr>
    <tr>
      <td>Kab / Kota</td>
      <td style="text-align: center">:</td>
      <td colspan="16">Pemerintah Provinsi Bengkulu</td>
    </tr>
    <tr>
      <td>Bidang</td>
      <td style="text-align: center">:</td>
      <td colspan="16">Bidang Sosial</td>
    </tr>
    <tr>
      <td>Unit Organisasi</td>
      <td style="text-align: center">:</td>
      <td colspan="16">Badan Penanggulangan Bencana Daerah</td>
    </tr>
    <tr>
      <td>Sub. Unit Organisasi</td>
      <td style="text-align: center">:</td>
      <td colspan="16">Kepala Badan</td>
    </tr>
    <tr>
      <td>No. KODE LC</td>
      <td style="text-align: center">:</td>
      <td colspan="16">11.06.00.09.03.00.01.01</td>
    </tr>
   <tr>
     <td colspan="18"></td>
   </tr>
      <tr>              
        <th scope="col" rowspan="2" valign="center" style="text-align: center">No</th>
        <th scope="col" rowspan="2" valign="center" style="text-align: center">Nama Barang</th>
        <th scope="col" rowspan="2" valign="center" style="text-align: center">Kode Barang</th>
        <th scope="col" rowspan="2" valign="center" style="text-align: center">Merk</th>
        <th scope="col" rowspan="2" valign="center" style="text-align: center">Ukuran</th>
        <th scope="col" rowspan="2" valign="center" style="text-align: center">Bahan</th>
        <th scope="col" rowspan="2" valign="center" style="text-align: center">Tanggal</th>
        <th scope="col" colspan="5" valign="center" style="text-align: center">Nomor</th>
        <th scope="col" rowspan="2" valign="center" style="text-align: center">Asal Usul</th>
        <th scope="col" rowspan="2" valign="center" style="text-align: center">Banyaknya Barang</th>
        <th scope="col" rowspan="2" valign="center" style="text-align: center">Harga Satuan</th>
        <th scope="col" rowspan="2" valign="center" style="text-align: center">Jumlah Harga</th>
        <th scope="col" rowspan="2" valign="center" style="text-align: center">Kode Penanggung Jawab</th>
        <th scope="col" rowspan="2" valign="center" style="text-align: center">Keterangan</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
      <tr>
        <td style="text-align: center">Pabrik</td>
        <td style="text-align: center">Rangka</td>
        <td style="text-align: center">Mesin</td>
        <td style="text-align: center">Polisi</td>
        <td style="text-align: center">BPKB</td>
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
        <td></td>
        <td></td>
      </tr>
  </thead>
    <tbody>
      @php
      $no = 1;
      @endphp
      @foreach($barangmasuk as $laporanmasuk)
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
        
      </tr>
      @endforeach   
    </tbody>
</table>