@extends('layout.app')

		@section('title','CRUD prodi')

		@section('judul')
			Detail Data prodi
		@endsection

		@section('konten')

			<p>
				<label for="id">ID Prodi</label>
				<input type="text" name="id" value="{{$prodi->id}}" readonly>
			</p>

			<p>
				<label for="nama_prodi">Nama prodi</label>
				<input type="text" name="nama_prodi" value="{{$prodi->nama_prodi}}" readonly>
			</p>
			<p>
				
				<input type="button" value="Kembali" onclick="location.href='/prodi'">
			</p>
		@endsection	