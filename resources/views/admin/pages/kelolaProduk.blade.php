@extends('admin.index')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produk /</span> Kelola Produk</h4>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card">
            <h5 class="card-header">Data Produk</h5>
            <div class="table-responsive text-nowrap">
                <a href="{{ url('kelolaProduk/create') }}" class="btn btn-lg btn-primary"
                    style="float: right; margin-right: 2rem">Tambah Data</a>
                <table class="table" style="width: 100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Foto Produk</th>
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
                                <td>{{ $prod->category->nama_kategori }}</td>
                                <td>{{ $prod->harga }}</td>
                                <td>{{ Str::limit($prod->deskripsi, 30, '...') }}</td>
                                <td><img src="{{ asset('storage/' . $prod->foto_produk1) }}" alt=""
                                        class="rounded-circle" style="width:4rem; height: 4rem;">
                                    <img src="{{ asset('storage/' . $prod->foto_produk2) }}" alt=""
                                        class="rounded-circle" style="width:4rem; height: 4rem;">
                                </td>
                                <td style="width:3%">
                                    <a href="{{ route('kelolaProduk.edit', $prod->id) }}" class="btn"><i
                                            class='bx bxs-edit'></i> Edit</a>
                                </td>
                                <td style="width: 3%">
                                    <a href="{{ route('kelolaProduk.editDetail', $prod->id) }}" class="btn"><i
                                            class='bx bxs-key'></i> Edit Detail Produk</a>
                                </td>
                                <td style="width: 3%">
                                    <form action="{{ route('kelolaProduk.destroy', $prod->id) }}" method="post"
                                        id="delete">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn"><i class='bx bxs-trash'></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <td>Tidak ada data</td>
                        @endforelse

                    </tbody>
                </table>
                {{-- {{ $dataUsers->links() }} --}}
            </div>
        </div>
    </div>
    <script>
        var formHapus = document.getElementById('delete');

        formHapus.addEventListener('submit', function(e) {
            e.preventDefault()
            const tanya = confirm('Apakah anda yakin ?')
            if (tanya) {
                e.currentTarget.submit()
            }
        });
    </script>
@endsection
