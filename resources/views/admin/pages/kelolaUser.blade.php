@extends('admin.index')
@section('main')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users /</span> Kelola Users</h4>
    @if (session('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card">
      <h5 class="card-header">Data Users</h5>
      <div class="table-responsive text-nowrap">
        <a href="{{ url('kelolaUser/create') }}" class="btn btn-lg btn-primary" style="float: right; margin-right: 2rem">Tambah Data</a>
        <table class="table" style="width: 100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Email</th>
              <th>Foto Profil</th>
              <th style="text-align: center" colspan="3">Aksi</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @forelse ($dataUsers as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->name }}</strong></td>
                  <td>{{ $user->username }}</td>
                  <td>{{ $user->email }}</td>
                  <td><img src="{{ asset('storage/'.$user->foto_profil) }}" alt="" class="rounded-circle" style="width:2rem; height: 2rem;"></td>
                  <td style="width:3%">
                    <a href="{{ route('kelolaUser.edit', $user->id) }}" class="btn"><i class='bx bxs-edit'></i> Edit</a></td>
                    <td style="width: 3%">
                    <a href="{{ route('kelolaUser.editPass', $user->id) }}" class="btn"><i class='bx bxs-key'></i> Edit Password</a></td>
                    <td style="width: 3%">
                        @if ($user->id !== auth()->user()->id)
                        <form action="{{ route('kelolaUser.destroy', $user->id) }}" method="post" id="delete">
                         @csrf
                         @method('delete')
                         <button type="submit" class="btn"><i class='bx bxs-trash'></i> Hapus</button>
                        </form>
                        @endif
                </td>
                </tr>
            @empty
                <td>Tidak ada data</td>
            @endforelse

          </tbody>
        </table>
        {{ $dataUsers->links() }}
        {{-- <nav aria-label="Page navigation" style="margin-top: 5rem; display: flex; justify-content: center;">
            <ul class="pagination">
              <li class="page-item prev">
                <a class="page-link" href="javascript:void(0);"
                  ><i class="tf-icon bx bx-chevrons-left"></i
                ></a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);">2</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0);">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);">5</a>
              </li>
              <li class="page-item next">
                <a class="page-link" href="javascript:void(0);"
                  ><i class="tf-icon bx bx-chevrons-right"></i
                ></a>
              </li>
            </ul>
          </nav> --}}
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
