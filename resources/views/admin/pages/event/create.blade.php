@extends('admin.index');
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Event/ Kelola Event/</span> Tambah Data</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic with Icons -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Tambah Data Event</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kelolaEvent.store') }}" method="post" enctype="multipart/form-data">
                            @method('post')
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Event</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-user"></i></span>
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="Promo,Diskon,dll" aria-describedby="basic-icon-default-fullname2"
                                            name="nama_event" value="{{ old('nama_event') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Link Event</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="bx bx-user"></i></span>
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="https://" aria-describedby="basic-icon-default-fullname2"
                                            name="link_event" value="{{ old('link_event') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Foto Poster :</label>
                                    <input class="form-control @if (session('errors')) is-invalid @endif"
                                        type="file" id="imgInp" name="poster" accept="image/*" />
                                </div>
                            </div>
                            <div class="row mb-3" style="display: flex;justify-content: center">
                                <img src="{{ asset('assets/images/placeholder.png') }}" id="blah" alt="Foto Poster" style="width: 30rem">
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
    <script>
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
