@extends('admin.index');
@section('main')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users/ Kelola Users/</span> Tambah Data</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic with Icons -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Tambah Data User</h5>
          </div>
          <div class="card-body">
            <form action="{{ url('kelolaUser') }}" method="post" enctype="multipart/form-data">
                @method('post')
                @csrf
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
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
                      name="name"
                      value="{{ old('name') }}"
                    />
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Username</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-company2" class="input-group-text"
                      ><i class='bx bx-user-circle' ></i></i
                    ></span>
                    <input
                      type="text"
                      id="basic-icon-default-company"
                      class="form-control"
                      placeholder="johndoe123"
                      aria-label="johndoe123"
                      name="username"
                      value="{{ old('username') }}"
                    />
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Password</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-company2" class="input-group-text"
                      ><i class='bx bxs-key' ></i></i
                    ></span>
                    <input
                      type="text"
                      id="basic-icon-default-company"
                      class="form-control"
                      placeholder="Buat yang mudah diingat tapi susah ditebak ya..."
                      aria-label="Buat yang mudah diingat tapi susah ditebak ya..."
                      name="password"
                    />
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                    <input
                      type="text"
                      id="basic-icon-default-email"
                      class="form-control"
                      placeholder="john.doe@mail.com"
                      aria-label="john.doe@mail.com"
                      aria-describedby="basic-icon-default-email2"
                      name="email"
                      value="{{ old('email') }}"
                    />
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto Profil</label>
                    <input class="form-control @if(session('errors')) is-invalid @endif" type="file" id="formFile" name="foto_profil" accept=".jpg, .jpeg, .png"/>
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
