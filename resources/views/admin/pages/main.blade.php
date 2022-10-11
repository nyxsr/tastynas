@extends('admin.index');
@section('main')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row">
        <div class="col-lg-8 mb-4 order-0">
          <div class="card">
            <div class="d-flex align-items-end row">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title text-primary">Welcome Back, {{ auth()->user()->name }} 🎉</h5>
                  <p class="mb-4">
                    {{$greeting}}
                  </p>
                </div>
              </div>
              <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                  <img
                    src="{{ asset('adminAssets/assets/img/illustrations/man-with-laptop-light.png') }}"
                    height="140"
                    alt="View Badge User"
                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                    data-app-light-img="illustrations/man-with-laptop-light.png"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 order-1">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img
                        src="{{ asset('adminAssets/assets/img/icons/unicons/chart-success.png') }}"
                        alt="chart success"
                        class="rounded"
                      />
                    </div>
                    <div class="dropdown">
                      <button
                        class="btn p-0"
                        type="button"
                        id="cardOpt3"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                      </div>
                    </div>
                  </div>
                  <span class="fw-semibold d-block mb-1">Produk</span>
                  <h3 class="card-title mb-2">{{ $count_produk }}</h3>
                  <small class="fw-semibold"> items</small>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img
                        src="{{ asset('adminAssets/assets/img/icons/unicons/wallet-info.png') }}"
                        alt="Credit Card"
                        class="rounded"
                      />
                    </div>
                    <div class="dropdown">
                      <button
                        class="btn p-0"
                        type="button"
                        id="cardOpt6"
                        id="cardOpt6"
                        id="cardOpt6"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                      </div>
                    </div>
                  </div>
                  <span>Kategori</span>
                  <h3 class="card-title text-nowrap mb-1">{{ $count_kategori }}</h3>
                  <small class="fw-semibold"> jenis</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Total Revenue -->
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
          <div class="card pb-4">
            <div class="row row-bordered g-0">
              <div class="col-md-6">
                <h3 class="card-header m-0 me-2 pb-3">Popup Saat Ini</h3>
                @forelse ($showed_event as $item)
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('storage/'.$item->poster) }}" alt="poster_image" style="width:300px; height:400px">
                </div>
              </div>
              <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="card-body">
                    <h4>Detail Popup</h4>
                    <div class="d-flex justify-content-center align-items-center">
                        <table>
                            <tr>
                              <th style="padding:1rem">Nama Event</th>
                              <th style="padding:1rem">:</th>
                              <th style="padding:1rem">{{ $item->nama_event }}</th>
                            </tr>
                            <tr>
                              <td style="padding:1rem">Link Event</td>
                              <td style="padding:1rem">:</td>
                              <td style="padding:1rem"><a href="{{ $item->link_event }}">{{ $item->link_event }}</a></td>
                            </tr>
                          </table>
                    </div>
                </div>
              </div>
                @empty
                <h5 style="margin: 1.5rem">Tidak ada Popup yang sedang tampil saat ini</h5>
            </div>
                @endforelse

            </div>
          </div>
        </div>
        <!--/ Total Revenue -->
        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
          <div class="row">
            <div class="col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img src="{{ asset('adminAssets/assets/img/icons/unicons/paypal.png') }}" alt="Credit Card" class="rounded" />
                    </div>
                    <div class="dropdown">
                      <button
                        class="btn p-0"
                        type="button"
                        id="cardOpt4"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                        <a class="dropdown-item" href="{{ url('kelolaBerita') }}">View More</a>
                      </div>
                    </div>
                  </div>
                  <span class="d-block mb-1">Berita</span>
                  <h3 class="card-title text-nowrap mb-2">{{ $count_berita }}</h3>
                  <small class="fw-semibold"> postingan</small>
                </div>
              </div>
            </div>
            <div class="col-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img src="{{ asset('adminAssets/assets/img/icons/unicons/cc-primary.png') }}" alt="Credit Card" class="rounded" />
                    </div>
                    <div class="dropdown">
                      <button
                        class="btn p-0"
                        type="button"
                        id="cardOpt1"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="cardOpt1">
                        <a class="dropdown-item" href="{{ url('kelolaTestimoni') }}">View More</a>
                      </div>
                    </div>
                  </div>
                  <span class="fw-semibold d-block mb-1">Testimoni</span>
                  <h3 class="card-title mb-2">{{ $count_testimoni }}</h3>
                  <small class="fw-semibold"> reviewer</small>
                </div>
              </div>
            </div>
            <a href="{{ url('/') }}" target="_blank" class="btn btn-primary btn-lg"><i class='bx bx-home' style="font-size: 1.5rem"></i> Lihat Halaman Awal</a>
  </div>

@endsection
