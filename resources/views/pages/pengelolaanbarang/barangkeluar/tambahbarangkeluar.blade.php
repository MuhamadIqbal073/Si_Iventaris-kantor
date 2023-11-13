@extends('layouts.backend')

@push('custom-style')
<style>
    .box-image{
        width: 200px;
        height: 200px;
        object-fit: cover;
    }
</style>
@endpush

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Barang Keluar</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <livewire:tambahbarangkeluar>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@endsection

@push('custom-script')
@push('custom-script')
    <script>
        const today = new Date().toISOString().split('T')[0];
        document.querySelector('#tanggal').setAttribute('max', today);
    </script>
@endpush
@endpush