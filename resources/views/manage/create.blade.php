@extends('layouts.app')

@section('title', 'Tambah User')

@section('content')
<div class="card p-5 bg">
<form action="{{ url('/manageUsers/store') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" required name="name" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter your name or email">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" required name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter receivers email">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email Verified At</label>
        <input type="date" required name="verify" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter receivers email">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail2">Password</label>
        <input type="password" required name="password" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail2">Confirm Password</label>
        <input type="password" required name="confirm" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Confirm Password">
    </div>
    <div class="form-group">
        <label for="roles">Select Role</label>
        <select name="roles" id="role" class="form-control">
            @foreach ($roles as $role)

            <option value="{{ $role->id }}">{{ $role->title }}</option>

            @endforeach
        </select>
    </div>
    <br>
    <button onclick="return confirm('Apakah anda yakin ingin menambah user ini?')" class="btn btn-success" type="submit">submit</button>

</form>
</div>
@endsection
