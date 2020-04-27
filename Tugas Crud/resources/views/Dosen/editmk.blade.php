
		@extends('layout.app')

		@section('title','CRUD dosen')

		@section('judul')
			Edit dosen
		@endsection

		@section('konten')
			<form action="/dosen/{{$tb_dosen->id}}" method="POST">
				@csrf
				@method('PUT')
				<p>
					<label for="id">ID</label>
					<input type="text" name="id" value="{{$tb_dosen->id}}">
				</p>
				<p>
					<label for="id_prodi">ID Prodi</label>
					<input type="text" name="id_prodi" value="{{$tb_dosen->id_prodi}}">
				</p>
				<p>
					<label for="nim">NIM</label>
					<input type="text" name="nip_dosen" value="{{$tb_dosen->nip_dosen}}">
				</p>
				<p>

					<label for="nama_dosen">Nama</label>
					<input type="text" name="nama" value="{{$tb_dosen->nama_dosen}}">
				</p>
				<p>	
					<input type="submit" value="Simpan">
				</p>
			</form>
		@endsection
