<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Print QR Code Data Barang Masuk</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 col-sm-12 mx-auto">
                @for ($i = 0; $i < $barangmasuk->banyaknya_barang; $i++)
                <div class="card">
                    <div class="card-body text-center">
                        {!! QrCode::size(300)->generate(createQrCodeLink($barangmasuk->id_barangmasuk)); !!}

                        <h5 class="mt-5">{{ $barangmasuk->nama_barang }} | Jumlah: {{ $barangmasuk->banyaknya_barang }}</h5>
                        <h5 class="mt-2">{{ $barangmasuk->kode_barang }}</h5>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>

    <script>
        window.onload = print();
    </script>
</body>
</html>