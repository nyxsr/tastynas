@extends('admin.index');
@section('main')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">News/ Kelola Berita/</span> Tambah Data</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic with Icons -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Tambah Data Berita</h5>
          </div>
          <div class="card-body">
            <form action="{{ route('kelolaBerita.store') }}" method="post" enctype="multipart/form-data">
                @method('post')
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Penulis</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <input
                          type="text"
                          class="form-control"
                          id="basic-icon-default-fullname"
                          placeholder="Masukkan judul berita...."
                          aria-describedby="basic-icon-default-fullname2"
                          name="penulis"
                          value="{{ auth()->user()->name }}"
                          disabled
                        />
                      </div>
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
                      value="{{ old('judul') }}"
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
                      <option selected disabled>Pilih Kategori</option>
                      <option value="Tastynas">Tastynas</option>
                      <option value="Subang">Subang</option>
                  </select>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Isi</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <textarea class="ckeditor form-control" name="isi"></textarea>
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
  @push('scripts')
  <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
  <script type="text/javascript">
    var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
</script>
<script>
    CKEDITOR.replace('ckeditor', options);
    </script>
  @endpush
@endsection
