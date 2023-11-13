@extends('layouts.backend')
@section('content')
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="alert alert-primary" role="alert">
                Hai {{ auth()->user()->role }}
                <br>
                Selamat Datang Di Sistem Informasi Aset Tetap Inventaris Barang BPBD Provinsi Bengkulu
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">Barang Masuk dan Barang Keluar</h3>
                                        {{-- <a href="javascript:void(0);">View Report</a> --}}
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex">
                                        <p class="d-flex flex-column">
                                            {{-- <span class="text-bold text-lg">$18,230.00</span> --}}
                                            <span>Jumlah Total</span>
                                        </p>
                                        {{-- <p class="ml-auto d-flex flex-column text-right">
                                            <span class="text-success">
                                                <i class="fas fa-arrow-up"></i> 33.1%
                                            </span>
                                            <span class="text-muted">Since last month</span>
                                        </p> --}}
                                    </div>
                                    <!-- /.d-flex -->

                                    <div class="position-relative mb-4">
                                        <canvas id="chart-l" height="200"></canvas>
                                    </div>

                                    <div class="d-flex flex-row justify-content-end">
                                        <span class="mr-2">
                                            <i class="fas fa-square text-primary"></i> Barang Masuk
                                        </span>

                                        <span>
                                            <i class="fas fa-square text-gray"></i> Barang Keluar
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">Sales</h3>
                                        <a href="javascript:void(0);">View Report</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex">
                                        <p class="d-flex flex-column">
                                            <span class="text-bold text-lg">$18,230.00</span>
                                            <span>Sales Over Time</span>
                                        </p>
                                        <p class="ml-auto d-flex flex-column text-right">
                                            <span class="text-success">
                                                <i class="fas fa-arrow-up"></i> 33.1%
                                            </span>
                                            <span class="text-muted">Since last month</span>
                                        </p>
                                    </div>
                                    <!-- /.d-flex -->

                                    <div class="position-relative mb-4">
                                        <canvas id="sales-chart" height="200"></canvas>
                                    </div>

                                    <div class="d-flex flex-row justify-content-end">
                                        <span class="mr-2">
                                            <i class="fas fa-square text-primary"></i> This year
                                        </span>

                                        <span>
                                            <i class="fas fa-square text-gray"></i> Last year
                                        </span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>
@endsection

@push('custom-script')
<script>
    $(function () {
        'use strict'
        var ticksStyle = {
            fontColor: '#495057',
            fontStyle: 'bold'
        }

        var mode      = 'index'
        var intersect = true

        var $salesChart = $('#chart-l')
        var salesChart  = new Chart($salesChart, {
            type   : 'bar',
            data   : {
                labels  : ['JAN', 'FEB', 'MAR', 'APR', 'MEI', 'JUN', 'JUL', 'AUG', 'SEP', 'OKT', 'NOV', 'DEC'],
                datasets: [
                {
                    backgroundColor: '#007bff',
                    borderColor    : '#007bff',
                    data           : [
                    @foreach (getDataBarangMasuk() as $data)
                        @if ($data[0]->jumlah_keluar == null)
                            0,
                        @else
                            {{ $data[0]->jumlah_keluar }},
                        @endif
                    @endforeach
                    ]
                },
                {
                    backgroundColor: '#ced4da',
                    borderColor    : '#ced4da',
                    data           : [
                        @foreach (getDataBarangKeluar() as $data)
                            @if ($data[0]->jumlah_keluar == null)
                                0,
                            @else
                                {{ $data[0]->jumlah_keluar }},
                            @endif
                        @endforeach
                    ]
                }
                ]
            },
            options: {
                maintainAspectRatio: false,
                tooltips           : {
                    mode     : mode,
                    intersect: intersect
                },
                hover              : {
                    mode     : mode,
                    intersect: intersect
                },
                legend             : {
                    display: false
                },
                scales             : {
                    yAxes: [{
                        // display: false,
                        gridLines: {
                            display      : true,
                            lineWidth    : '4px',
                            color        : 'rgba(0, 0, 0, .2)',
                            zeroLineColor: 'transparent'
                        },
                        ticks    : $.extend({
                            beginAtZero: true,

                            // Include a dollar sign in the ticks
                            callback: function (value, index, values) {
                                if (value >= 1000) {
                                    value /= 1000
                                    value += 'k'
                                }
                                return value
                            }
                        }, ticksStyle)
                    }],
                    xAxes: [{
                        display  : true,
                        gridLines: {
                            display: false
                        },
                        ticks    : ticksStyle
                    }]
                }
            }
        })
    })
</script>
@endpush
