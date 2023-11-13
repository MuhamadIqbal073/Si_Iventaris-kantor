<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Data Barang Masuk</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 col-sm-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Data Barang Masuk</h5>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td>Nama Barang</td>
                                <td>{{ $barangmasuk->nama_barang }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>{{ $barangmasuk->tanggal }}</td>
                            </tr>
                            <tr>
                                <td>Banyaknya Barang</td>
                                <td>{{ $barangmasuk->banyaknya_barang }}</td>
                            </tr>
                            <tr>
                                <td>Harga Satuan</td>
                                <td>Rp {{ number_format($barangmasuk->harga_satuan, 2) }}</td>
                            </tr>
                            <tr>
                                <td>Jumlah Harga</td>
                                <td> Rp {{ number_format($barangmasuk->harga_satuan * $barangmasuk->banyaknya_barang, 2) }}</td>
                            </tr>
                                <tr>
                                    <td>Kode Barang</td>
                                    <td>{{ $barangmasuk->kode_barang }}</td>
                                </tr>
                                <tr>
                                    <td>Merk</td>
                                    <td>{{ $barangmasuk->merk }}</td>
                                </tr>
                                <tr>
                                    <td>Ukuran</td>
                                    <td>{{ $barangmasuk->ukuran }}</td>
                                </tr>
                                <tr>
                                    <td>Bahan</td>
                                    <td>{{ $barangmasuk->bahan }}</td>
                                </tr>
                                
                                <tr>
                                    <td>Nomor Pabrik</td>
                                    <td>{{ $barangmasuk->no_pabrik }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Rangka</td>
                                    <td>{{ $barangmasuk->no_rangka }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Mesin</td>
                                    <td>{{ $barangmasuk->no_mesin }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Polisi</td>
                                    <td>{{ $barangmasuk->no_polisi }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor BPKB</td>
                                    <td>{{ $barangmasuk->no_bpkb }}</td>
                                </tr>
                                <tr>
                                    <td>Asal Usul</td>
                                    <td>{{ $barangmasuk->asal_usul }}</td>
                                </tr>
                                
                                <tr>
                                    <td>Kode Penanggung Jawab</td>
                                    <td>{{ $barangmasuk->kode_penanggung_jawab }}</td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>{{ $barangmasuk->keterangan }}</td>
                                </tr>
                                <tr>
                                    <td>Foto</td>
                                    <td>
                                        <img width="75px" height="75px" src="{{asset('storage/' . $barangmasuk->foto)}}" alt="" style="object-fit: cover;">
                                    </td>
                                </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>