@extends('layouts.app')

@section('content')
<style>
    .progress { position:relative; width:100%; border: 1px solid #7F98B2; padding: 1px; border-radius: 3px; padding-top: 1%; }
    .bar { background-color: #B4F5B4; width:0%; height:25px; border-radius: 3px; }
    .percent { position:absolute; display:inline-block; top:7px; left:48%; color: #7F98B2;}
</style>

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
                    <label for="link">Insert Link</label>
                    <input required type="text" name="link" id="link" class="form-control bg" placeholder="" aria-describedby="helpId">
                </div>
                <br>
                <button onclick="return confirm('Apakah anda yakin ingin mengirim email ini?')" class="btn btn-success" type="submit">submit</button>
            </form>

        <script>
                tinymce.init({
                selector: 'textarea',
                plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker image media link tinydrive code imagetools advlist',
                toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table media insertfile image link | bold italic underline | alignleft aligncenter alignjustify alignright ',
                toolbar_mode: 'floating',
                advlist_bullet_styles: 'square',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Syihab'
                });
        </script>
            @endsection
