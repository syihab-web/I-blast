@extends('layouts.app')

@section('content')
    <div class="container">
            <form action="{{ url('/email/sendMail') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">From</label>
                    <input type="email" name="from" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">To</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter receivers email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">subject</label>
                    <input type="text" name="subject" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="subject">
                </div>
                <div class="form-group">
                    <label for="text">text</label>
                    <textarea id="text" class="form-control" name="pesan" id="text" cols="30" rows="10"></textarea>
                </div>
                <button class="btn btn-success" type="submit">submit</button>
            </form>
     </div>
@endsection
