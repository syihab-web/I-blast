@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/email/create" class="btn btn-primary mb-3">Add Email</a>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Email
                    <a href=""><i class="fas fa-sort-amount-down"></i></a>
                    <a href=""><i class="fas fa-sort-amount-up"></i></a>
                </th>
                <th scope="col">Subjek
                    <a href=""><i class="fas fa-sort-amount-down"></i></a>
                    <a href=""><i class="fas fa-sort-amount-up"></i></a>
                </th>
                <th scope="col">Pesan
                    <a href=""><i class="fas fa-sort-amount-down"></i></a>
                    <a href=""><i class="fas fa-sort-amount-up"></i></a>
                </th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>syihabudin234@gmail.com</td>
                <td>Testing Email</td>
                <td>laravel</td>
                <td>
                <form action="form-check-inline">
                    <a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
                    <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                </form>
                </td>
              </tr>
            </tbody>
          </table>
    </div>
@endsection
