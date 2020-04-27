
		@extends('layout.app')

		@section('title','CRUD Prodi')

		@section('judul')
			Edit Prodi
		@endsection

		@section('konten')
			<form action="/prodi/{{$prodi->id}}" method="POST">
				@csrf
				@method('PUT')
				<p>
					<label for="id">ID</label>
					<input type="text" name="id" value="{{$prodi->id}}">
				</p>
				<p>
					<label for="nama_prodi">Nama Prodi</label>
					<input type="text" name="nama_prodi" value="{{$prodi->nama_prodi}}">
				</p>
				<p>
					
		
					<input type="submit" value="Simpan">
				</p>
			</form>
		@endsection
