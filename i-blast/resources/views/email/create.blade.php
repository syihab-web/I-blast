@extends('layouts.app')

@section('content')
    <div class="container">
            <form action="/email/sendMail" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">subject</label>
                    <input type="text" name="subjek" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="subject">
                </div>
                <div class="form-group">
                    <label for="text">text</label>
                    <textarea id="text" class="form-control" name="pesan" id="text" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <select class="form-control" name="opsi_template" id="opsi_template">
                        <option value="1">Dengan Template</option>
                        <option value="2">Tanpa Template</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="images">Image</label>
                    <input type="file" class="form-control-file" name="image" id="image">
                </div>
                <button class="btn btn-success" type="submit">submit</button>
            </form>
     </div>
@endsection
