
		@extends('layout.app')

		@section('title','CRUD mahasiswa')

		@section('judul')
			Detail Data mahasiswa
		@endsection

		@section('konten')
				<p>
					<label for="nama">Nama</label>
					<input type="text" name="nama" value="{{$mahasiswa->nama}}"readonly>
					
				</p>
				<p>
					<label for="nim">NIM</label>
					<input type="text" name="nim" value="{{$mahasiswa->nim}}"readonly>
				</p>
				<p>

					<label for="nim">Jenis Kelamin</label>
					<input type="text" name="jenis_kelamin" value="{{$mahasiswa->jenis_kelamin}}"readonly>
				</p>
				<p>

					<label for="alamat">Alamat</label>
					<input type="text" name="alamat" value="{{$mahasiswa->alamat}}"readonly>
				</p>
				<p>

					<label for="id_prodi">ID Prodi</label>
					<input type="text" name="id_prodi" value="{{$mahasiswa->prodi->nama_prodi}}" readonly>
				</p>
			
			<p>
				<input type="button" value="Kembali" onclick="location.href='/mahasiswa'">
			</p>
		@endsection	