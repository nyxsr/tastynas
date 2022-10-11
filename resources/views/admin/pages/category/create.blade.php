@extends('admin.index');
@section('main')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kategori/ Kelola Kategori/</span> Tambah Data</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic with Icons -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Tambah Data Kategori</h5>
          </div>
          <div class="card-body">
            <form action="{{ route('kelolaKategori.store') }}" method="post">
                @method('post')
                @csrf
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Kategori</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                      ><i class='bx bx-category'></i></span>
                    <input
                      type="text"
                      class="form-control"
                      id="basic-icon-default-fullname"
                      placeholder="cth: Pie, Tart, dll."
                      aria-describedby="basic-icon-default-fullname2"
                      name="nama_kategori"
                      value="{{ old('nama_kategori') }}"
                    />
                  </div>
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
