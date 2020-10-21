@extends('layouts.app')

@section('title', 'Daftar Email')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Email</title>
</head>
<body>
 
	<div class="container">
		{{-- notifikasi form validasi --}}
		@if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
		@endif
 
		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<strong>{{ $sukses }}</strong>
		</div>
		@endif
 
		<button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
			IMPORT
		</button>
 
		<!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/daftaremail/import_excel" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import</h5>
						</div>
						<div class="modal-body">
 
							{{ csrf_field() }}
 
							<label>Pilih file .xls / .xlsx</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
 
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Import</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</form>
			</div>
		</div>
 
 
		
		<a href="/daftaremail/export_excel" class="btn btn-success my-3" target="_blank">EXPORT</a>
 
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Email</th>
					<th>Nama</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($daftaremail as $daftar)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{ $daftar->email }}</td>
					<td>{{ $daftar->nama }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>
@endsection