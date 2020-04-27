@extends('layout.app')

		@section('title','CRUD dosen')

		@section('judul')
			Tambah dosen
		@endsection

		@section('konten')
			<form action="/dosen" method="POST">
				@csrf
				<p>
					<label for="id">ID</label>
					<input type="text" name="id" >
				</p>
				<p>
					<label for="id_prodi">ID Prodi</label>
					<input type="text" name="id_prodi" >
				</p>
				<p> 
					<label for="nip_dosen">NIP</label>
					<input type="text" name="nip_dosen" >
				</p>
				<p>

					<label for="nama_dosen">Nama</label>
					<input type="text" name="nama_dosen" >
				</p>
				<p>
										<input type="submit" value="Simpan">
					<input type="button" value="Kembali" onclick="location.href='/dosen'">
					</p>
			</form>
		@endsection	
	