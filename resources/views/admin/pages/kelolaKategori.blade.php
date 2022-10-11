@extends('admin.index')
@section('main')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kategori /</span> Kelola Kategori</h4>
    @if (session('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card">
      <h5 class="card-header">Data Kategori</h5>
      <div class="table-responsive text-nowrap">
        <a href="{{ url('kelolaKategori/create') }}" class="btn btn-lg btn-primary" style="float: right; margin-right: 2rem">Tambah Data</a>
        <table class="table" style="width: 100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kategori</th>
              <th style="text-align: center" colspan="2">Aksi</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @forelse ($categories as $cat)
            <tr>
                <td>{{ $loop->iteration }}</td>
                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $cat->nama_kategori }}</strong></td>
                  <td style="width:3%">
                    <a href="{{ route('kelolaKategori.edit', $cat->id) }}" class="btn"><i class='bx bxs-edit'></i> Edit</a></td>
                    <td style="width: 3%">
                   <form action="{{ route('kelolaKategori.destroy', $cat->id) }}" method="post" id="delete">
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
        {{ $categories->links() }}
      </div>
    </div>
</div>
<script>
    var formHapus = document.getElementById('delete');

    formHapus.addEventListener('submit',function(e){
        e.preventDefault()
        const tanya = confirm('Apakah anda yakin ?')
        if(tanya){
            e.currentTarget.submit()
        }
    });
</script>
@endsection
