@extends('admin.index');
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produk/ Kelola Produk/</span> Tambah Data</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic with Icons -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Tambah Data Produk</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('kelolaProduk') }}" method="post" enctype="multipart/form-data">
                            @method('post')
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Produk</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-user"></i></span>
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="Kue Nastar" aria-describedby="basic-icon-default-fullname2"
                                            name="nama_produk" value="{{ old('nama_produk') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="exampleFormControlSelect1"
                                        aria-label="Default select example" name="categories_id" onmousedown="if(this.options.length>5){this.size=5;}">
                                        <option selected>Pilih Kategori</option>
                                        @forelse ($kategori as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->nama_kategori }}</option>
                                        @empty
                                        <option>Tidak ada data</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Harga</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-company2" class="input-group-text">Rp</span>
                                        <input type="text" id="harga" class="form-control"
                                            placeholder="format:000000(tanpa titik/koma)"
                                            name="harga" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Deskripsi</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class='bx bx-detail'></i></span>
                                            <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Foto Produk Ke 1 :</label>
                                    <input
                                        class="form-control @if (session('errors')) is-invalid @endif"
                                        type="file" id="formFile" name="foto_produk1" accept=".jpg, .jpeg, .png" />
                                        <label for="formFile" class="form-label mt-3">Foto Produk Ke 2 (Hovered) :</label>
                                        <input
                                        class="form-control @if (session('errors')) is-invalid @endif"
                                        type="file" id="formFile" name="foto_produk2" accept=".jpg, .jpeg, .png" />
                                    @if (session('errors'))
                                        <div id="floatingInputHelp" class="form-text">
                                            {{ session('errors') }}
                                        </div>
                                @endif
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
