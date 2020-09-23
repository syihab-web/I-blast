@extends('layouts.app')

@section('content')
<style>
    .progress { position:relative; width:100%; border: 1px solid #7F98B2; padding: 1px; border-radius: 3px; padding-top: 1%; }
    .bar { background-color: #B4F5B4; width:0%; height:25px; border-radius: 3px; }
    .percent { position:absolute; display:inline-block; top:7px; left:48%; color: #7F98B2;}
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
            <form action="{{ url('/email/sendMail') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">From</label>
                    <input type="email" required name="from" class="form-control bg" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">To</label>
                    <input type="text" required name="email" class="form-control bg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter receivers email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">subject</label>
                    <input type="text" required name="subject" class="form-control bg" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="subject">
                </div>
                <div class="form-group">
                    <label for="text">text</label>
                    <textarea id="text" required class="form-control bg" name="pesan" id="text" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                  <label for="image">Image</label>
                  <input required type="file" name="image" id="image" class="form-control-file" placeholder="" aria-describedby="helpId">
                  </div>
                <div class="form-group">
                    <label for="file">File</label>
                    <input required type="file" name="file" id="file" class="form-control-file" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="link">Insert Link</label>
                    <input required type="text" name="link" id="link" class="form-control bg" placeholder="" aria-describedby="helpId">
                </div>
                <div class="progress">
                    <div class="bar"></div >
                    <div class="percent">0%</div >
                </div>
                <br>
                <button onclick="return confirm('Apakah anda yakin ingin mengirim email ini?')" class="btn btn-success" type="submit">submit</button>
            </form>
            <script>
     function validate(formData, jqForm, options) {
        var form = jqForm[0];
    }

    (function() {

    var bar = $('.bar');
    var percent = $('.percent');
    var status = $('#status');

    $('form').ajaxForm({
        beforeSubmit: validate,
        beforeSend: function() {
            status.empty();
            var percentVal = '0%';
            bar.width(percentVal)
            percent.html(percentVal);
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar.width(percentVal)
            percent.html(percentVal);
        },
        success: function() {
            var percentVal = 'Wait, Saving';
            bar.width(percentVal)
            percent.html(percentVal);
        },
        complete: function(xhr) {
            status.html(xhr.responseText);
            alert('Uploaded Successfully');
            window.location.href = "/email/";
        }
    });

    })();
            </script>
@endsection
