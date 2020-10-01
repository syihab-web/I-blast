@extends('layouts.app')

@section('title', 'History')

@section('content')

@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
@if (session('delete'))
<div class="alert alert-danger">
    {{ session('delete') }}
</div>
@endif

<style>
  .pointer{
    cursor:pointer;
  }
</style>

    <div class="container">
        <div class="jumbotron bg">
            <div class="container">
              <h1 class="display">Welcome</h1>
              <h4 class="lead">Selamat datang di Dashboard I-Blast.</h4>
            </div>
          </div>

          <table class="table table-hover" id="table">
            <thead>
              <tr class="up">
                <th scope="col">No</th>
                <th scope="col">
                    Email Pengirim
                    <i class="fas fa-sort-amount-down pointer" onclick="sortTable(0)"></i>
                    <i class="fas fa-sort-amount-up pointer" onclick="sortTable(0)"></i>
                </th>
                <th scope="col">
                    Subjek
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
                <td>{{ $values['from'] }}</td>
                <td>{{ $values['subject'] }}</td>
                <td>{{ $values['created_at'] }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="/email/{{ $values->id }}" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="left" data-content="Show Detail Email History?" class="btn btn-primary mr-1"><i class="fas fa-eye"></i></a>
                        <form action="/email/{{ $values->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="left" data-content="Delete Email History?" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
                </td>
              </tr>
              <?php $count++; ?>
              @endforeach
            </tbody>
          </table>
          <table align="center">
              <tr>
                  <td>{{ $value->links() }}</td>
              </tr>
              <tr>
                  <td>
                    <form>
                      <select name="pagination" id="pagination" class="form-control">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                      </select>
                    </form>
                  </td>
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
@endsection
