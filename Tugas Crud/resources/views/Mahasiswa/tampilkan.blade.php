
		@extends('layout.app')

		@section('title','CRUD mahasiswa')

		@section('judul')
			Detail Data mahasiswa
		@endsection

		@section('konten')
				<p>
					<label for="id_prodi">ID Prodi</label>
					<input type="text" name="id_prodi" value="{{$mahasiswa->id_prodi}}" readonly>
				</p>
				<p>
					<label for="nim">NIM</label>
					<input type="text" name="nim" value="{{$mahasiswa->nim}}"readonly>
				</p>
				<p>

					<label for="nama">Nama</label>
					<input type="text" name="nama" value="{{$mahasiswa->nama}}"readonly>
				</p>
				<p>

					<label for="alamat">Alamat</label>
					<input type="text" name="alamat" value="{{$mahasiswa->alamat}}"readonly>
				</p>
				<p>

					<label for="email">Email</label>
					<input type="text" name="email" value="{{$mahasiswa->email}}"readonly>
				</p>
				<p>

					<label for="tempat_lahir">Tempat Lahir</label>
					<input type="text" name="tempat_lahir" value="{{$mahasiswa->tempat_lahir}}"readonly>
				</p>
				<p>

					<label for="tanggal_lahir">Tanggal Lahir</label>
					<input type="text" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}"readonly>
				</p>
				<p>

					<label for="id_pa">ID PA</label>
					<input type="text" name="id_pa" value="{{$mahasiswa->id_pa}}"readonly>
				</p>
			<p>
				<input type="button" value="Kembali" onclick="location.href='/mahasiswa'">
			</p>
		@endsection	