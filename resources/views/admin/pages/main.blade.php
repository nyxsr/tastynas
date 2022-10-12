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
                                        {{ $greeting }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-5 text-center text-sm-left">
                                <div class="card-body pb-0 px-0 px-md-4">
                                    <img src="{{ asset('adminAssets/assets/img/illustrations/man-with-laptop-light.png') }}"
                                        height="140" alt="View Badge User"
                                        data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                        data-app-light-img="illustrations/man-with-laptop-light.png" />
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
                                            <svg width="34" height="45" viewBox="0 0 34 45" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.5 12.5C13 12 13 11.15 13 9C13 5.134 17 2 17 2C17 2 20 5.134 20 9C20 10.922 20 12 19.5 12.5"
                                                    stroke="#96C745" stroke-width="4" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M10 15C8.79 12.082 5.862 8.433 4 7C9.411 5.986 13.774 9.3 16 12M23 14C24.452 11.303 27.304 8.305 29 7C23.357 5.942 19.129 9.261 17 12"
                                                    stroke="#96C745" stroke-width="4" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M25 16L4.00002 27M9.00002 16L30 27M28 39L4.00002 25M30 25L6.00002 39M9.72502 15.374C9.1336 15.8983 8.55833 16.4406 8.00002 17C3.81002 21.19 3.10202 28.864 3.00302 32.28C2.96902 33.43 2.97702 34.602 3.41202 35.667C3.87902 36.81 4.87502 38.406 7.00002 40C11 43 23 43 27 40C29.116 38.413 30.112 36.825 30.581 35.682C31.022 34.608 31.031 33.424 30.996 32.263C30.896 28.838 30.184 21.183 26 17C25.4 16.4 24.824 15.86 24.274 15.374C20.016 11.607 13.983 11.607 9.72402 15.374H9.72502Z"
                                                    stroke="#FED326" stroke-width="4" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                <a class="dropdown-item" href="{{ url('kelolaProduk') }}">View More</a>
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
                                            <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.0833 5.125H6.83333C6.38026 5.125 5.94573 5.30498 5.62536 5.62536C5.30498 5.94573 5.125 6.38026 5.125 6.83333V17.0833C5.125 17.5364 5.30498 17.9709 5.62536 18.2913C5.94573 18.6117 6.38026 18.7917 6.83333 18.7917H17.0833C17.5364 18.7917 17.9709 18.6117 18.2913 18.2913C18.6117 17.9709 18.7917 17.5364 18.7917 17.0833V6.83333C18.7917 6.38026 18.6117 5.94573 18.2913 5.62536C17.9709 5.30498 17.5364 5.125 17.0833 5.125ZM15.375 15.375H8.54167V8.54167H15.375V15.375ZM34.1667 22.2083H23.9167C23.4636 22.2083 23.0291 22.3883 22.7087 22.7087C22.3883 23.0291 22.2083 23.4636 22.2083 23.9167V34.1667C22.2083 34.6197 22.3883 35.0543 22.7087 35.3746C23.0291 35.695 23.4636 35.875 23.9167 35.875H34.1667C34.6197 35.875 35.0543 35.695 35.3746 35.3746C35.695 35.0543 35.875 34.6197 35.875 34.1667V23.9167C35.875 23.4636 35.695 23.0291 35.3746 22.7087C35.0543 22.3883 34.6197 22.2083 34.1667 22.2083ZM32.4583 32.4583H25.625V25.625H32.4583V32.4583ZM29.0417 5.125C25.2731 5.125 22.2083 8.18975 22.2083 11.9583C22.2083 15.7269 25.2731 18.7917 29.0417 18.7917C32.8103 18.7917 35.875 15.7269 35.875 11.9583C35.875 8.18975 32.8103 5.125 29.0417 5.125ZM29.0417 15.375C27.1574 15.375 25.625 13.8426 25.625 11.9583C25.625 10.074 27.1574 8.54167 29.0417 8.54167C30.926 8.54167 32.4583 10.074 32.4583 11.9583C32.4583 13.8426 30.926 15.375 29.0417 15.375ZM11.9583 22.2083C8.18975 22.2083 5.125 25.2731 5.125 29.0417C5.125 32.8103 8.18975 35.875 11.9583 35.875C15.7269 35.875 18.7917 32.8103 18.7917 29.0417C18.7917 25.2731 15.7269 22.2083 11.9583 22.2083ZM11.9583 32.4583C10.074 32.4583 8.54167 30.926 8.54167 29.0417C8.54167 27.1574 10.074 25.625 11.9583 25.625C13.8426 25.625 15.375 27.1574 15.375 29.0417C15.375 30.926 13.8426 32.4583 11.9583 32.4583Z"
                                                    fill="#FED326" />
                                            </svg>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt6" id="cardOpt6"
                                                id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                <a class="dropdown-item" href="{{ url('kelolaKategori') }}">View More</a>
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
                                        <img src="{{ asset('storage/' . $item->poster) }}" alt="poster_image"
                                            style="width:300px; height:400px">
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
                                                <td style="padding:1rem"><a
                                                        href="{{ $item->link_event }}">{{ $item->link_event }}</a></td>
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

                                        <svg width="41" height="42" viewBox="0 0 41 42" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M33.953 5.25H7.04671C5.04455 5.25 3.4165 6.81975 3.4165 8.75V33.25C3.4165 35.1803 5.04455 36.75 7.04671 36.75H33.953C35.9551 36.75 37.5832 35.1803 37.5832 33.25V8.75C37.5832 6.81975 35.9551 5.25 33.953 5.25ZM33.953 33.25H7.04671C6.94934 33.25 6.88271 33.222 6.85367 33.222C6.84171 33.222 6.83488 33.2255 6.83317 33.236L6.81267 8.8305C6.82463 8.813 6.9015 8.75 7.04671 8.75H33.953C34.0879 8.75175 34.1614 8.799 34.1665 8.764L34.187 33.1695C34.175 33.187 34.0982 33.25 33.953 33.25Z"
                                                fill="#FED326" />
                                            <path
                                                d="M10.25 12.25H20.5V22.75H10.25V12.25ZM22.2083 26.25H10.25V29.75H30.75V26.25H23.9167H22.2083ZM23.9167 19.25H30.75V22.75H23.9167V19.25ZM23.9167 12.25H30.75V15.75H23.9167V12.25Z"
                                                fill="#96C745" />
                                        </svg>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
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

                                        <svg width="35" height="33" viewBox="0 0 35 33" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M14.0832 32.75C10.4585 32.75 6.98238 31.3804 4.41938 28.9424C1.85638 26.5044 0.416504 23.1978 0.416504 19.75C0.416504 16.3022 1.85638 12.9956 4.41938 10.5576C6.98238 8.11964 10.4585 6.75 14.0832 6.75C17.7078 6.75 21.184 8.11964 23.747 10.5576C26.31 12.9956 27.7498 16.3022 27.7498 19.75C27.7498 23.1978 26.31 26.5044 23.747 28.9424C21.184 31.3804 17.7078 32.75 14.0832 32.75ZM14.0832 29.5C15.4292 29.5 16.7621 29.2478 18.0057 28.7578C19.2493 28.2678 20.3792 27.5497 21.331 26.6443C22.2828 25.7389 23.0378 24.6641 23.5529 23.4812C24.068 22.2982 24.3332 21.0304 24.3332 19.75C24.3332 18.4696 24.068 17.2018 23.5529 16.0188C23.0378 14.8359 22.2828 13.7611 21.331 12.8557C20.3792 11.9503 19.2493 11.2322 18.0057 10.7422C16.7621 10.2522 15.4292 10 14.0832 10C11.3647 10 8.75757 11.0272 6.83533 12.8557C4.91308 14.6842 3.83317 17.1641 3.83317 19.75C3.83317 22.3359 4.91308 24.8158 6.83533 26.6443C8.75757 28.4728 11.3647 29.5 14.0832 29.5ZM19.2082 21.375C19.2082 22.6679 18.6682 23.9079 17.7071 24.8221C16.746 25.7364 15.4424 26.25 14.0832 26.25C12.7239 26.25 11.4204 25.7364 10.4592 24.8221C9.49812 23.9079 8.95817 22.6679 8.95817 21.375H19.2082ZM10.6665 18.125C11.1196 18.125 11.5541 17.9538 11.8745 17.649C12.1949 17.3443 12.3748 16.931 12.3748 16.5C12.3748 16.069 12.1949 15.6557 11.8745 15.351C11.5541 15.0462 11.1196 14.875 10.6665 14.875C10.2134 14.875 9.77891 15.0462 9.45853 15.351C9.13816 15.6557 8.95817 16.069 8.95817 16.5C8.95817 16.931 9.13816 17.3443 9.45853 17.649C9.77891 17.9538 10.2134 18.125 10.6665 18.125ZM17.4998 18.125C17.0468 18.125 16.6122 17.9538 16.2919 17.649C15.9715 17.3443 15.7915 16.931 15.7915 16.5C15.7915 16.069 15.9715 15.6557 16.2919 15.351C16.6122 15.0462 17.0468 14.875 17.4998 14.875C17.9529 14.875 18.3874 15.0462 18.7078 15.351C19.0282 15.6557 19.2082 16.069 19.2082 16.5C19.2082 16.931 19.0282 17.3443 18.7078 17.649C18.3874 17.9538 17.9529 18.125 17.4998 18.125ZM28.8175 10C27.4048 9.7075 23.0519 7.41625 23.0519 3.29688C23.0519 2.65739 23.2634 2.03411 23.6565 1.51534C24.0496 0.996558 24.6043 0.608579 25.2421 0.406356C25.8799 0.204132 26.5684 0.197918 27.2101 0.388592C27.8518 0.579265 28.4142 0.957161 28.8175 1.46875C29.2209 0.957161 29.7833 0.579265 30.425 0.388592C31.0667 0.197918 31.7552 0.204132 32.393 0.406356C33.0307 0.608579 33.5855 0.996558 33.9786 1.51534C34.3716 2.03411 34.5832 2.65739 34.5832 3.29688C34.5832 7.41625 30.2303 9.7075 28.8175 10Z"
                                                fill="#FED326" />
                                        </svg>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
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
                    <a href="{{ url('/') }}" target="_blank" class="btn btn-primary btn-lg"><i class='bx bx-home'
                            style="font-size: 1.5rem"></i> Lihat Halaman Awal</a>
                </div>
            @endsection
