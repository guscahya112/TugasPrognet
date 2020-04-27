		@extends('layout.app')

		@section('title','CRUD mahasiswa')

		@section('judul')
			Tambah mahasiswa
		@endsection

		@section('konten')
			<form action="/mahasiswa" method="POST">
				@csrf
				<p>
					<label for="id_prodi">ID Prodi</label>
					<select name="id_prodi">
						@foreach($prodi as $prodis)
							<option value="{{ $prodis->id }}">{{ $prodis->nama_prodi }}</option>
						@endforeach
					</select>
				</p>
				<p>
					<label for="nim">NIM</label>
					<input type="text" name="nim" >
				</p>
				<p>

					<label for="nama">Nama</label>
					<input type="text" name="nama" >
				</p>
				<p>

					<label for="alamat">Alamat</label>
					<input type="text" name="alamat" >
				</p>
				<p>

					<label for="email">Email</label>
					<input type="text" name="email" >
				</p>
				<p>

					<label for="tempat_lahir">Tempat Lahir</label>
					<input type="text" name="tempat_lahir" >
				</p>
				<p>

					<label for="tanggal_lahir">Tanggal Lahir</label>
					<input type="date" name="tanggal_lahir" >
				</p>
				<p>

					<label for="id_pa">ID PA</label>
					<select name="id_prodi">
						@foreach($dosen as $dosens)
							<option value="{{ $dosens->id }}">{{ $dosens->nama_dosen }}</option>
						@endforeach
					</select>
				</p>
				<p>
					<input type="submit" value="Simpan">
					<input type="button" value="Kembali" onclick="location.href='/mahasiswa'">
					</p>
			</form>
		@endsection	
	