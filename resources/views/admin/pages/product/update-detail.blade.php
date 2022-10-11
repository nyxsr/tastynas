@extends('admin.index');
@section('main')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produk/ <a href="{{ url('kelolaKategori') }}"> Kelola Produk</a>/</span> Update Data</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic with Icons -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Update Data Detail Produk</h5>
          </div>
          <div class="card-body">
            <form action="{{ route('kelolaProduk.updateProduk', $prod->id) }}" method="post">
                @method('put')
                @csrf
                @if (session('errors'))
                <div id="floatingInputHelp" class="form-text">
                    {{ session('errors') }}
                </div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <h3>Produk</h3>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Panjang Produk</label>
                            <div class="col-md-6">
                                <div class="input-group input-group-merge">
                                    <input type="number" step="0.1" class="form-control" id="basic-icon-default-fullname"
                                        placeholder="" aria-describedby="basic-icon-default-fullname2"
                                        name="panjang_produk" value="{{ $prod->panjang_produk }}"/>
                                        <span id="basic-icon-default-fullname2" class="input-group-text">CM</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Lebar Produk</label>
                            <div class="col-md-6">
                                <div class="input-group input-group-merge">
                                    <input type="number" step="0.1" class="form-control" id="basic-icon-default-fullname"
                                        placeholder="" aria-describedby="basic-icon-default-fullname2"
                                        name="lebar_produk" value="{{ $prod->lebar_produk }}" />
                                        <span id="basic-icon-default-fullname2" class="input-group-text">CM</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Tinggi Produk</label>
                            <div class="col-md-6">
                                <div class="input-group input-group-merge">
                                    <input type="number" step="0.1" class="form-control" id="basic-icon-default-fullname"
                                        placeholder="" aria-describedby="basic-icon-default-fullname2"
                                        name="tinggi_produk" value="{{ $prod->tinggi_produk }}" />
                                        <span id="basic-icon-default-fullname2" class="input-group-text">CM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-md-6">
                    <h3>Packaging</h3>
                        <hr>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Panjang Packaging</label>
                            <div class="col-md-6">
                                <div class="input-group input-group-merge">
                                    <input type="number" step="0.1" class="form-control" id="basic-icon-default-fullname"
                                        placeholder="" aria-describedby="basic-icon-default-fullname2"
                                        name="panjang_package" value="{{ $prod->panjang_package }}" />
                                        <span id="basic-icon-default-fullname2" class="input-group-text">CM</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Lebar Packaging</label>
                            <div class="col-md-6">
                                <div class="input-group input-group-merge">
                                    <input type="number" step="0.1" class="form-control" id="basic-icon-default-fullname"
                                        placeholder="" aria-describedby="basic-icon-default-fullname2"
                                        name="lebar_package" value="{{ $prod->lebar_package }}" />
                                        <span id="basic-icon-default-fullname2" class="input-group-text">CM</span>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Tinggi Packaging</label>
                            <div class="col-md-6">
                                <div class="input-group input-group-merge">
                                    <input type="number" step="0.1" class="form-control" id="basic-icon-default-fullname"
                                        placeholder="" aria-describedby="basic-icon-default-fullname2"
                                        name="tinggi_package" value="{{ $prod->tinggi_package }}" />
                                        <span id="basic-icon-default-fullname2" class="input-group-text">CM</span>
                                </div>
                            </div>
                        </div>
                </div>
                <hr class="mt-5 mb-5">
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Netto</label>
                    <div class="col-md-3">
                        <div class="input-group input-group-merge">
                            <input type="text" step="0.1" class="form-control" id="basic-icon-default-fullname"
                                placeholder="" aria-describedby="basic-icon-default-fullname2"
                                name="netto" value="{{ $prod->netto }}" />
                                <span id="basic-icon-default-fullname2" class="input-group-text">gr</span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Berat Total</label>
                    <div class="col-md-3">
                        <div class="input-group input-group-merge">
                            <input type="text" step="0.1" class="form-control" id="basic-icon-default-fullname"
                                placeholder="" aria-describedby="basic-icon-default-fullname2"
                                name="berat_total" value="{{ $prod->berat_total }}" />
                                <span id="basic-icon-default-fullname2" class="input-group-text">gr</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
          </div>
      </div>
    </div>
  </div>
@endsection
