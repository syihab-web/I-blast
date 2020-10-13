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
            <form action="{{ url('/email/sendMail') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">From</label>
                    <input type="text" required name="from" class="form-control bg" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter your name or email">
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
                    <input type="hidden" value="{{ Auth::user()->id }}" required name="user" class="form-control bg" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="subject">
                </div>
                <div class="form-group">
                    <label for="pesan">text</label>
                    <textarea id="pesan" class="bg" name="pesan" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Select Template</label>
                    <select name="template" id="" class="form-control bg">
                        <option value="1">Blast Template</option>
                        <option value="2">Sky</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="link">Attach File</label>
                    <input type="file" name="file" id="fileName" accept=".jpg,.jpeg,.png,.cdr,.docx,.xlsx,.txt,.pdf,.ppt,.mp3,.mp4" onchange="validateFileType()" class="form-control-file bg" placeholder="" aria-describedby="helpId">
                    <div class="alert alert-danger" role="alert">
                        Danger!!!, Don't send Zip or Rar Attachments!
                      </div>
                </div>
                <div class="form-group">
                    <div id="myProgress">
                        <div id="myBar">0%</div>
                      </div>
                </div>
                <br>
                <button onload="move()" onclick="return confirm('Apakah anda yakin ingin mengirim email ini?')" class="btn btn-success" type="submit">submit</button>

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
