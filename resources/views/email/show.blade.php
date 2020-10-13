@extends('layouts.app')

@section('title', 'Detail Email')

@section('content')
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
<h2>Detail Email</h2>
    <form action="{{ url('/email/sendAgain') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Id Email</label>
            <input type="text" value="{{ $email['id'] }}" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter your name or email">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Pengirim</label>
            <input name="from" type="text" value="{{ $email->from }}" class="form-control " id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter your name or email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tujuan</label>
            <input name="email" type="text" value="{{ $email->to }}" class="form-control " id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter your name or email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Subjek</label>
            <input name="subject" type="text" value="{{ $email['subject'] }}" class="form-control " id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter your name or email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Isi Pesan</label>
            <textarea name="pesan" id="" cols="30" rows="10">
                {!! nl2br($email['pesan']) !!}
            </textarea>
        </div>
        <div class="form-group">
            <label for="">Select Template</label>
            <select name="template" id="" class="form-control bg">
                <option value="1">Blast Template</option>
                <option value="2">Sky</option>
            </select>
        </div>
        <div class="form-group">
            <a href="/email" class="btn btn-primary">Back</a>
            <button onload="move()" onclick="return confirm('Apakah anda yakin ingin mengirim email ini?')" class="btn btn-success" type="submit">send again</button>
        </div>
    </form>
    <script>
        var i = 0;
        function move() {
          if (i == 0) {
            i = 1;
            var elem = document.getElementById("myBar");
            var width = 10;
            var id = setInterval(frame, 0);
            function frame() {
              if (width >= 100) {
                clearInterval(id);
                i = 0;
              } else {
                width++;
                elem.style.width = width + "%";
                elem.innerHTML = width  + "%";
              }
            }
          }
        }
        </script>

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
@endsection
