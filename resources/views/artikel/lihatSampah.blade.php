@extends('layouts.app')

@section('content')
@if(session('pulih'))
    <script>
        swal({
            icon: 'info',
            title: 'Data berhasil Dipulihkan!',
        });
    </script>
    @endif
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

<div class="card bg" >
  <div class="card-header text-center">Data Artikel yang Sudah Dihapus</div>
  <div class="card-body">
  <table class="table table-bordered bg">
					<thead>
						<tr>
							<th>Judul</th>
							<th>Pembuat</th>
							<th width="30%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($artikel as $a)
						<tr>
							<td>{{ $a->judul }}</td>
							<td>{{ $a->user['name'] }}</td>
							<td>
                <form action="/hapusSampah/{{ $a->id }}" method="post">
                @csrf
                @method('delete')
                <a href="/pulihkanSampah/{{ $a->id }}" class="btn btn-success btn-sm">Restore</a>
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                </form>
              </td>
						</tr>
						@endforeach
					</tbody>
				</table>
  </div>
</div>
  <div class="row justify-content-center">
    {{ $artikel->links() }}
    </div>

@endsection
