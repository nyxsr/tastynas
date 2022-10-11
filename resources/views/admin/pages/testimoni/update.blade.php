@extends('admin.index');
@section('main')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Testimoni/ <a href="{{ url('kelolaTestimoni') }}"> Kelola Testimoni</a>/</span> Update Data</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic with Icons -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Update Data Testimoni</h5>
          </div>
          <div class="card-body">
            <form action="{{ route('kelolaTestimoni.update', $testi->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Reviewer</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"
                          ><i class="bx bx-user"></i
                        ></span>
                        <input
                          type="text"
                          class="form-control"
                          id="basic-icon-default-fullname"
                          placeholder="John Doe"
                          aria-label="John Doe"
                          aria-describedby="basic-icon-default-fullname2"
                          name="nama_reviewer"
                          value="{{ $testi->nama_reviewer }}"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Isi Review</label>
                    <div class="col-md-12">
                      <div class="input-group input-group-merge">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_review">{{ $testi->isi_review }}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto Reviewer</label>
                        <input class="form-control @if(session('errors')) is-invalid @endif" type="file" id="formFile" name="foto_reviewer" accept=".jpg, .jpeg, .png"/>
                        @if(session('errors'))
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
