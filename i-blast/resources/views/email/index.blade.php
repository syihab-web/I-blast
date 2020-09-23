@extends('layouts.app')

@section('content')

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
                <th scope="col">Email Tujuan
                    <a href=""><i class="fas fa-sort-amount-down"></i></a>
                    <a href=""><i class="fas fa-sort-amount-up"></i></a>
                </th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="bg">
            @foreach ($value as $values)
              <tr>
              <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $values['from'] }}</td>
                <td>{{ $values['subject'] }}</td>
                <td>{{ $values['to'] }}</td>
                <td>
                <form action="form-check-inline">
                    <a href="" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                    <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection
