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

    <div class="container">
        <div class="jumbotron bg">
            <div class="container">
              <h1 class="display">Welcome</h1>
              <h4 class="lead">Selamat datang di Dashboard I-Blast.</h4>
            </div>
          </div>

          <table class="table table-hover">
            <thead>
              <tr class="up">
                <th scope="col">No</th>
                <th scope="col">
                    Email Pengirim
                    <a href=""><i class="fas fa-sort-amount-down"></i></a>
                    <a href=""><i class="fas fa-sort-amount-up"></i></a>
                </th>
                <th scope="col">
                    Subjek
                    <a href=""><i class="fas fa-sort-amount-down"></i></a>
                    <a href=""><i class="fas fa-sort-amount-up"></i></a>
                </th>
                <th scope="col">Tanggal
                    <a href=""><i class="fas fa-sort-amount-down"></i></a>
                    <a href=""><i class="fas fa-sort-amount-up"></i></a>
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
          </table>
    </div>
    <script>
      $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
      });
    </script>
@endsection
