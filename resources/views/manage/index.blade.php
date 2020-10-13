@extends('layouts.app')

@section('title', 'Manage Users')

@section('content')

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
@if (session('delete'))
<script>
        swal({
            icon: 'info',
            title: 'Data berhasil dihapus!',
        });
</script>
@endif

<style>
  .pointer{
    cursor:pointer;
  }
</style>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
    <script>
            swal({
                icon: 'info',
                title: 'Data berhasil ditambahkan!',
            });
    </script>
    @endif

    <div class="container">

        <nav class="navbar navbar-light bg">
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Search User..." aria-label="Search">
              <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>

          <a href="/manageUsers/create" class="btn btn-success"><i class="fas fa-user"></i> Tambahkan User/Admin</a>

          </nav>

          <div class="table-responsive">
          <table class="table table-hover" id="table">
            <thead>
              <tr class="up">
                <th scope="col">No</th>
                <th scope="col">
                    Username
                    <i class="fas fa-sort-amount-down pointer" onclick="sortTable(0)"></i>
                    <i class="fas fa-sort-amount-up pointer" onclick="sortTable(0)"></i>
                </th>
                <th scope="col">
                    Email
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
            @foreach ($value as $values)
              <tr>
              <th scope="row">{{ $value->perPage()*($value->currentPage()-1)+$count }}</th>
                <td>{{ $values['name'] }}</td>
                <td>{{ $values['email'] }}</td>
                <td>{{ $values['created_at'] }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="/manageUsers/{{ $values->id }}" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="left" data-content="Show Data User?" class="btn btn-primary mr-1"><i class="fas fa-eye"></i></a>
                        <form action="/manageUsers/{{ $values->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="left" data-content="Delete User?" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" onclick="showAlert()"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
                </td>
              </tr>
              <?php $count++; ?>
              @endforeach
            </tbody>
          </table>
        </div>
          <table align="center">
              <tr>
                  <td>{{ $value->links() }}</td>
              </tr>
           </table>
    </div>
    <script>
      $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
      });

      function sortTable(n) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById("table");
        switching = true;

        dir = "asc";

        while (switching) {
          switching = false;
          rows = table.rows;

          for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName("TD")[n];
            y = rows[i + 1].getElementsByTagName("TD")[n];
            if (dir == "asc") {
              if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                shouldSwitch = true;
                break;
              }
            } else if (dir == "desc") {
              if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                shouldSwitch = true;
                break;
              }
            }
          }
          if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            switchcount ++;
          } else {
            if (switchcount == 0 && dir == "asc") {
              dir = "desc";
              switching = true;
            }
          }
        }
      }
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function showAlert() {
            swal({
                icon: 'info',
                title: 'Data berhasil dihapus!',
                timer: 1500
            });
        }
    </script>
@endsection
