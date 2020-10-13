@extends('layouts.app')

@section('title', 'kritik dan saran')

@section('content')

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('delete'))
<script>
        swal({
            icon: 'info',
            title: 'Data berhasil dihapus!',
        });
</script>
@endif
    <div class="container">
        <div class="row">
            @foreach ($saran as $item)

            <div class="col-md-4 mt-3 ml-1">
                <div class="card bg" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('company/note.png') }}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">From : {{ $item->nama }}</h5>
                    <p class="card-text">{{ $item->saran }}</p>
                        <form action="/saran/{{ $item->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="left" data-content="Delete Email History?" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" onclick="showAlert()"><i class="fas fa-trash-alt"></i> Delete</button>

                         </form>
                     </div>
                  </div>
            </div>

            @endforeach

        </div>
    </div>
@endsection
