@extends('layouts.app')

@section('title', 'Send Email')

@section('content')
<style>
    .progress { position:relative; width:100%; border: 1px solid #7F98B2; padding: 1px; border-radius: 3px; padding-top: 1%; }
    .bar { background-color: #B4F5B4; width:0%; height:25px; border-radius: 3px; }
    .percent { position:absolute; display:inline-block; top:7px; left:48%; color: #7F98B2;}
    #myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 10%;
  height: 30px;
  background-color: #4CAF50;
  text-align: center;
  line-height: 30px;
  color: white;
}
</style>
<link rel="stylesheet" href="{{ asset('css/progress.css') }}">
<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">

@if (session('status'))
<script>
        swal({
            icon: 'info',
            title: 'Email berhasil dikirim!',
        });
</script>
@endif

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('danger'))
<script>
        swal({
            icon: 'danger',
            title: 'Maaf anda tidak mempunyai akses untuk fitur ini!',
        });
</script>
@endif
<h2>Send Email</h2>
<hr>
            <form action="http://127.0.0.1:8081/email/sendEmail" method="POST" enctype="multipart/form-data">
               @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">From</label>
                    <input type="text" required name="from" class="form-control bg" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter your name or email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">To</label>
                    <input type="file" required name="email" accept=".csv, .xls, .xlsx" class="form-control-file bg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter receivers email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">subject</label>
                    <input type="text" required name="subject" class="form-control bg" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="subject">
                </div>
                <div class="form-group">
                    <input type="hidden" value="{{ Auth::user()->id }}" required name="user" class="form-control bg" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="subject">
                </div>
                <div class="form-group">
                    <label for="pesan">Message</label>
                    <textarea id="pesan" class="bg" name="pesan" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="file">Attachment</label>
                    <input type="file" class="form-control-file bg" name="file" id="attach" accept=".png, .jpg, .jpeg, .txt, .xls, .ppt, .docx, .pdf">
                </div>
                <br>
               <input onclick="send()" type="submit" class="btn btn-success" value="submit" id="submit" name="submit">
            </form>
            <script src="https://cdn.pubnub.com/pubnub-3.7.13.min.js"></script>
        <script>
                var editor_config = {
                path_absolute : "/",
                selector: "textarea",
                plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
                ],
                toolbar: "insertfile undo redo | styleselect | bold underline italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                relative_urls: false,
                file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
                }
            };

            tinymce.init(editor_config);
        </script>
        <script src="{{ asset('js/progress.js') }}" defer></script>
        {{-- <script>
            $( 'form' ).submit(function ( e ) {
            var data, xhr;

            data = new FormData();

            xhr = new XMLHttpRequest();

            xhr.open( 'POST', 'http://127.0.0.1:8081/', true );
            xhr.onreadystatechange = function ( response ) {};
            xhr.send( data );

            e.preventDefault();
        });
        </script> --}}
            @endsection
