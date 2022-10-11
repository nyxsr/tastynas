@extends('admin.index');
@section('main')
<div class="container-xxl flex-grow-1 container-p-y">
        <a href="{{ route('kelolaProduk.editDetail', $prod->id) }}" class="btn btn-lg btn-primary"
        style="float: right; margin-right: 2rem">Edit Data Detail</a>
        <a href="{{ route('kelolaProduk.edit', $prod->id) }}" class="btn btn-lg btn-primary"
        style="float: right; margin-right: 2rem">Edit Data</a>
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produk/ <a href="{{ url('kelolaKategori') }}"> Kelola
                    Produk</a>/</span> {{ $prod->nama_produk }}</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic with Icons -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header ">
                        <h2>{{ $prod->nama_produk }}</h2>
                        <h5 style="color: rgb(181, 181, 181)">Best Seller : @if ($prod->best_seller === 1) Yes @else No @endif</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('storage/' . $prod->foto_produk1) }}" alt="foto_produk1" style="width: 80%">
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('storage/' . $prod->foto_produk2) }}" alt="foto_produk2" style="width: 80%">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                            <h4>Produk</h4>
                            <hr>
                            <ul>
                                <li>Panjang Produk : @if ($prod->panjang_produk) {{ $prod->panjang_produk }} @else ? @endif cm</li>
                                <li>Lebar Produk : @if ($prod->lebar_produk) {{ $prod->lebar_produk }} @else ? @endif cm</li>
                                <li>Tinggi Produk : @if ($prod->tinggi_produk) {{ $prod->tinggi_produk }} @else ? @endif cm</li>
                            </ul>
                            <h4>Packaging</h4>
                            <hr>
                            <ul>
                                <li>Panjang Packaging : @if ($prod->panjang_package) {{ $prod->panjang_package }} @else ? @endif cm</li>
                                <li>Lebar Packaging : @if ($prod->lebar_package) {{ $prod->lebar_package }} @else ? @endif cm</li>
                                <li>Tinggi Packaging : @if ($prod->tinggi_package) {{ $prod->tinggi_package }} @else ? @endif cm</li>
                            </ul>
                            <h3 style="text-align: right">Netto : @if ($prod->netto) {{ $prod->netto }} @else ? @endif gr</h3>
                            <h3 style="text-align: right">Berat Total : @if ($prod->berat_total) {{ $prod->berat_total }} @else ? @endif gr</h3>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <h4>Deskripsi</h4>
                            <hr>
                            <p>{{ $prod->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
