@extends('admin.index')
@section('main')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Testimoni /</span> Kelola Testimoni</h4>
    @if (session('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card">
      <h5 class="card-header">Data Testimoni</h5>
      <div class="table-responsive text-nowrap">
        <a href="{{ url('kelolaTestimoni/create') }}" class="btn btn-lg btn-primary" style="float: right; margin-right: 2rem">Tambah Data</a>
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Reviewer</th>
              <th>Foto Reviewer</th>
              <th>Isi Review</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @forelse ($dataTesti as $testi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $testi->nama_reviewer }}</strong></td>
                  <td><img src="{{ asset('storage/'.$testi->foto_reviewer) }}" alt="" class="rounded-circle" style="width:2rem; height: 2rem;"></td>
                  <td>{{ $testi->isi_review }}</td>
                  <td style="display: flex; align-items: center; justify-content: center">
                    <a href="{{ route('kelolaTestimoni.edit', $testi->id) }}" class="btn"><i class='bx bxs-edit'></i> Edit</a>
                    <p style="font-size: 1.3rem">|</p>
                   <form action="{{ route('kelolaTestimoni.destroy', $testi->id) }}" method="post" id="delete">
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
        {{ $dataTesti->links() }}
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
