@extends('admin.index');
@section('main')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users/ Kelola Users/</span> Update Data</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic with Icons -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Update Password User</h5>
          </div>
          <div class="card-body">
            <form action="{{ route('kelolaUser.updatePass', $user->id) }}" method="post">
                @method('patch')
                @csrf
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Password Baru</label>
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
