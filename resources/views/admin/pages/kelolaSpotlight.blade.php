@extends('admin.index')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">News /</span> Kelola Spotlight</h4>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card">
            <h5 class="card-header">Data Spotlight</h5>
            <div class="table-responsive text-nowrap">
                <table class="table" style="width: 100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Status Spotlight</th>
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
                                <td>
                                    @if ($new->is_spotlight ===1)
                                    <p>Ya</p>
                                    @else
                                    <p>Bukan</p>
                                    @endif
                                </td>
                                <td style="width: 3%">
                                    <form action="{{ route('kelolaSpotlight.updateSpotlight', $new->id) }}" method="post"
                                        class="delete">
                                        @csrf
                                        @method('PUT')
                                        @if ($new->is_spotlight ===1)
                                        <button type="submit" class="btn" style="text-decoration: underline"><i class='bx bx-dizzy' ></i> Bukan Spotlight </button>
                                        @else
                                        <button type="submit" class="btn" style="text-decoration: underline"><i class='bx bxs-heart'></i> Jadikan Spotlight </button>
                                        @endif
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
