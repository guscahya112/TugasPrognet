
		@extends('layout.app')

		@section('title','CRUD mahasiswa')

		@section('judul')
			Edit mahasiswa
		@endsection

		@section('konten')
			<form action="/mahasiswa/{{$mahasiswa->id}}" method="POST">
				@csrf
				@method('PUT')
				<p>
					<label for="id">ID</label>
					<input type="text" name="id" value="{{$mahasiswa->id}}">
				</p>
				<p>
					<label for="nama">Nama</label>
					<input type="text" name="nama" value="{{$mahasiswa->nama}}">
					
				</p>
				<p>
					<label for="nim">NIM</label>
					<input type="text" name="nim" value="{{$mahasiswa->nim}}">
				</p>
				<p>

					<label for="jenis_kelamin">Jenis Kelamin</label>
					<input type="text" name="jenis_kelamin" value="{{$mahasiswa->jenis_kelamin}}">
					
					
				</p>
				<p>
					<label for="alamat">Alamat</label>
					<input type="text" name="alamat" value="{{$mahasiswa->alamat}}">
				</p>
				<p>
					<label for="id_prodi">ID Prodi</label>
					<input type="text" name="id_prodi" value="{{$mahasiswa->id_prodi}}">
					
				</p>
				<p>


					
					<input type="submit" value="Simpan">
				</p>
			</form>
		@endsection
