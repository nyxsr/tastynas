@extends('admin.index')
@section('main')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Event /</span> Kelola Events</h4>
    @if (session('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card" style=>
      <h5 class="card-header">Data Event</h5>
      <div style="width: 100%">
          <a href="{{ url('kelolaEvent/create') }}" class="btn btn-lg btn-primary" style="float: right; margin-right: 2rem; width: 10rem">Tambah Data</a>
        </div>
      <div style="display: flex; flex-wrap: wrap; justify-content: space-evenly">
        @forelse ($event as $item)
        <div class="card" style="width: 18rem; margin-top: 5rem; margin-bottom: 5rem">
            <img src="{{ asset('storage/'.$item->poster) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-text">{{ $item->nama_event }}</h5>
              <a href="{{ $item->link_event }}">Link Event</a>
              <div style="display: flex;margin-top: 2rem;">
                  <a href="{{ route('kelolaEvent.edit', $item->id) }}" class="btn"><i class='bx bxs-edit'></i> Edit</a></td>
                  <a href="{{ route('kelolaEvent.show', $item->id) }}" class="btn"><i class='bx bx-show'></i>@if ($item->is_show ===1) Jangan Tampilkan @else Tampilkan @endif</a></td>
                  <form action="{{ route('kelolaEvent.destroy', $item->id) }}" method="post" id="delete">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn"><i class='bx bxs-trash'></i> Hapus</button>
                     </form>
              </div>
            </div>
          </div>
        @empty
            <h3 style="text-align: center">Tidak ada data</h3>
        @endforelse
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
