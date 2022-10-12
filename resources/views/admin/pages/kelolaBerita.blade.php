@extends('admin.index')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">News /</span> Kelola Berita</h4>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card">
            <h5 class="card-header">Data Berita</h5>
            <div class="table-responsive text-nowrap">
                <a href="{{ url('kelolaBerita/create') }}" class="btn btn-lg btn-primary"
                    style="float: right; margin-right: 2rem">Tambah Data</a>
                <table class="table" style="width: 100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Berita</th>
                            <th>Slug</th>
                            <th>Isi</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Gambar Thumbnail</th>
                            <th style="text-align: center" colspan="3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($news as $new)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $new->judul }}</strong></a>
                                </td>
                                <td>{{ $new->slug }}</td>
                                <td>{{ Str::limit($new->isi, 30, '...') }}</td>
                                <td><b>{{ $new->kategori }}</b></td>
                                <td>{{ $new->user->name }}</td>
                                <td><img src="{{ asset('storage/' . $new->gambar) }}" alt=""
                                        class="rounded-circle" style="width:4rem; height: 4rem;">
                                </td>
                                <td style="width:3%">
                                    <a href="{{ route('kelolaBerita.edit', $new->id) }}" class="btn"><i
                                            class='bx bxs-edit'></i> Edit</a>
                                </td>
                                <td style="width: 3%">
                                    <form action="{{ route('kelolaBerita.destroy', $new->id) }}" method="post"
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
                {{ $news->links() }}
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
