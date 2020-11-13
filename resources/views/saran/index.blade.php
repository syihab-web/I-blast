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

        <h3>Kelola Saran dari User</h3>

        <hr><br>

        <table class="table table-hover" id="table">
            <thead>
              <tr class="up">
                <th scope="col">No</th>
                <th scope="col">
                    Nama Pengirim
                    <i class="fas fa-sort-amount-down pointer" onclick="sortTable(0)"></i>
                    <i class="fas fa-sort-amount-up pointer" onclick="sortTable(0)"></i>
                </th>
                <th scope="col">
                    Email Pengirim
                    <i class="fas fa-sort-amount-down pointer" onclick="sortTable(0)"></i>
                    <i class="fas fa-sort-amount-up pointer" onclick="sortTable(0)"></i>
                </th>
                <th scope="col">
                    Saran
                    <i class="fas fa-sort-amount-down pointer" onclick="sortTable(1)"></i>
                    <i class="fas fa-sort-amount-up pointer" onclick="sortTable(1)"></i>
                </th>
                <th scope="col">Tanggal
                    <i class="fas fa-sort-amount-down pointer" onclick="sortTable(2)"></i>
                    <i class="fas fa-sort-amount-up pointer" onclick="sortTable(2)"></i>
                </th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="bg">
             <?php  $count = 1; ?>
            @foreach ($saran as $item)
              <tr>
              <th scope="row">{{ $saran->perPage()*($saran->currentPage()-1)+$count }}</th>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['contact'] }}</td>
                <td>{{ $item['saran'] }}</td>
                <td>{{ $item['created_at'] }}</td>
                <td>
                    <div class="btn-group" role="group">
                          <form action="/saran/{{ $item->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="left" data-content="Delete Email History?" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" onclick="showAlert()"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
                </td>
              </tr>
              <?php $count++; ?>
              @endforeach
            </tbody>
            <tfoot>
                {{ $saran->links() }}
            </tfoot>
          </table>
    </div>
@endsection
