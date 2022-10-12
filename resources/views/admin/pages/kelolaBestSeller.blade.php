@extends('admin.index')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produk /</span> Kelola Best Seller</h4>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card">
            <h5 class="card-header">Data Produk</h5>
            <div class="table-responsive text-nowrap">
                <table class="table" style="width: 100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Status Best Seller</th>
                            <th style="text-align: center" colspan="3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($products as $prod)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <a href="{{ route('kelolaProduk.show', $prod->id) }}" style="text-decoration: underline" class="btn"></i><strong>{{ $prod->nama_produk }}</strong></a>
                                </td>
                                <td>
                                    @if ($prod->best_seller ===1)
                                    <p>Ya</p>
                                    @else
                                    <p>Bukan</p>
                                    @endif
                                </td>
                                <td style="width: 3%">
                                    <form action="{{ route('kelolaBestSeller.updateBestSeller', $prod->id) }}" method="post"
                                        class="delete">
                                        @csrf
                                        @method('PUT')
                                        @if ($prod->best_seller ===1)
                                        <button type="submit" class="btn" style="text-decoration: underline"><i class='bx bx-dizzy' ></i> Bukan Best Seller </button>
                                        @else
                                        <button type="submit" class="btn" style="text-decoration: underline"><i class='bx bxs-heart'></i> Jadikan Best Seller </button>
                                        @endif
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <td>Tidak ada data</td>
                        @endforelse

                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>
    <script>
        var formHapus = document.getElementsByClassName('delete');

        formHapus[0].addEventListener('submit', function(e) {
            e.preventDefault()
            const tanya = confirm('Apakah anda yakin ?')
            if (tanya) {
                e.currentTarget.submit()
            }
        });
    </script>
@endsection
