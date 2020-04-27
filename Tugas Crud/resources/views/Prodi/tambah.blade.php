@extends('layout.app')

		@section('title','CRUD prodi')

		@section('judul')
			Tambah prodi
		@endsection

		@section('konten')
			<form action="/prodi" method="POST">
				@csrf
				<p>
					<label for="nama_prodi">Nama prodi</label>
					<input type="text" name="nama_prodi" >
				</p>
				<p>
				
					<input type="submit" value="Simpan">
					<input type="button" value="Kembali" onclick="location.href='/prodi'">
				</p>
			</form>
		@endsection	