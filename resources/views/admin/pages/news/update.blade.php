@extends('admin.index');
@section('main')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kategori/ <a href="{{ url('kelolaKategori') }}"> Kelola Kategori</a>/</span> Update Data</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic with Icons -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Update Data Kategori</h5>
          </div>
          <div class="card-body">
            <form action="{{ route('kelolaBerita.update', $news->id) }}" method="post">
                @method('put')
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Penulis</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="exampleFormControlSelect1"
                            aria-label="Default select example" name="penulis"
                            onmousedown="if(this.options.length>5){this.size=5;}">
                            <option>Pilih User</option>
                            @forelse ($users as $user)
                                <option value="{{ $user->id }}"
                                    @if ($user->id == $news->user->id) selected @endif>{{ $user->name }}
                                </option>
                            @empty
                                <option>Tidak ada data</option>
                            @endforelse
                        </select>
                    </div>
                  </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Judul Berita</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                      ><i class='bx bx-bulb'></i></span>
                    <input
                      type="text"
                      class="form-control"
                      id="basic-icon-default-fullname"
                      placeholder="Masukkan judul berita...."
                      aria-describedby="basic-icon-default-fullname2"
                      name="judul"
                      value="{{ $news->judul }}"
                    />
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Kategori</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                      ><i class='bx bx-category'></i></span>
                      <select class="form-select" id="exampleFormControlSelect1"
                      aria-label="Default select example" name="kategori">
                      <option disabled>Pilih Kategori</option>
                      <option @if ($news->kategori == 'Tastynas') selected @endif value="Tastynas">Tastynas</option>
                      <option @if ($news->kategori == 'Subang') selected @endif value="Subang">Subang</option>
                  </select>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Isi</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <textarea class="ckeditor form-control" name="isi">{{ $news->isi }}</textarea>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Gambar Thumbnail :</label>
                    <input
                        class="form-control @if (session('errors')) is-invalid @endif"
                        type="file" id="formFile" name="gambar" accept=".jpg, .jpeg, .png" />
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
