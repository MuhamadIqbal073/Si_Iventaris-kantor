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
                                <h3 class="card-title"> <i class="fas fa-chalkboard-teacher"></i>Tambah Kategori Barang</h3>
                            </div>
                            <form action="{{ route('kategori-barang.store') }}" method="post">
                                @csrf

                                <div class="card-body">
                                    @if (session()->has('success'))
                                        <div class="text-success">{{ session()->get('success') }}</div>
                                    @endif
                                    <div class="form-group">
                                        <label for="name">Nama kategori:</label>
                                        <input type="text" name="name" id="name" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <input type="submit" value="Tambah" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
