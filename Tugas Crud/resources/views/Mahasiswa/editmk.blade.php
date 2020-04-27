
		@extends('layout.app')

		@section('title','CRUD mahasiswa')

		@section('judul')
			Edit mahasiswa
		@endsection

		@section('konten')
			<form action="/mahasiswa/{{$tb_mahasiswa->id}}" method="POST">
				@csrf
				@method('PUT')
				<p>
					<label for="id">ID</label>
					<input type="text" name="id" value="{{$tb_mahasiswa->id}}">
				</p>
				<p>
					<label for="id_prodi">ID Prodi</label>
					<input type="text" name="id_prodi" value="{{$tb_mahasiswa->id_prodi}}">
				</p>
				<p>
					<label for="nim">NIM</label>
					<input type="text" name="nim" value="{{$tb_mahasiswa->nim}}">
				</p>
				<p>

					<label for="nama">Nama</label>
					<input type="text" name="nama" value="{{$tb_mahasiswa->nama}}">
				</p>
				<p>

					<label for="alamat">Alamat</label>
					<input type="text" name="alamat" value="{{$tb_mahasiswa->alamat}}">
				</p>
				<p>

					<label for="email">Email</label>
					<input type="text" name="email" value="{{$tb_mahasiswa->email}}">
				</p>
				<p>

					<label for="tempat_lahir">Tempat Lahir</label>
					<input type="text" name="tempat_lahir" value="{{$tb_mahasiswa->tempat_lahir}}">
				</p>
				<p>

					<label for="tanggal_lahir">Tanggal Lahir</label>
					<input type="date" name="tanggal_lahir" value="{{$tb_mahasiswa->tanggal_lahir}}">
				</p>
				<p>

					<label for="id_pa">ID PA</label>
					<input type="text" name="id_pa" value="{{$tb_mahasiswa->id_pa}}">
				</p>
				<p>

					
					<input type="submit" value="Simpan">
				</p>
			</form>
		@endsection
