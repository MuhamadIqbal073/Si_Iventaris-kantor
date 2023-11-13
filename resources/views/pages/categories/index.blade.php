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
                                <h3 class="card-title"> <i class="fas fa-chalkboard-teacher"></i> Kategori Barang</h3>
                            </div>
                            <div class="content-header">
                                <div class="container-fluid">
                                    <a href="{{ route('category.create') }}" class="btn btn-warning mb-3"><i
                                            class="fas fa-plus-square mr-2"></i>Tambah data</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div style="overflow: auto">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama Kategori</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td class="text-right">
                                                        <form action="{{ route('category.destroy', $item->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a href="{{ route('category.edit', $item->id) }}"
                                                                class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                                    class="fa fa-trash"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
