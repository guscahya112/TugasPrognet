@extends('layout.app')

		@section('title','CRUD Matakuliah')

		@section('judul')
			Tambah Matakuliah
		@endsection

		@section('konten')
			<form action="/matakuliaah" method="POST">
				@csrf
				<p>
					<label for="kode_matakuliah">Kode Matakuliah</label>
					<input type="text" name="kode_matakuliah" >
				</p>
				<p>
					<label for="nama_matakuliah">Nama Matakuliah</label>
					<input type="text" name="nama_matakuliah" >
				</p>
				<p>
					<label for="sks">SKS Matakuliah</label>
					<input type="text" name="sks" >
				</p>
				<p>
					<label for="semester">Semester</label>
					<input type="text" name="semester" >
				</p>
				<p>
					<label for="id_kurikulum">ID Kurikulum</label>
					<select name="id_kurikulum">
						@foreach($kurikulums as $kurikulum)
							<option value="{{ $kurikulum->id }}">{{ $kurikulum->nama_kurikulum }}</option>
						@endforeach
					</select>
				</p>
				<p>
					<label for="id_dosen">ID Dosen</label>
					<select name="id_dosen">
						@foreach($dosens as $dosen)
							<option value="{{ $dosen->id }}">{{ $dosen->nama_dosen }}</option>
						@endforeach
					</select>
				</p>
				<p>
					<label for="id_prodi">ID Prodi</label>
					<select name="id_prodi">
						@foreach($prodis as $prodi)
							<option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}</option>
						@endforeach
					</select>
				</p>
				<p>
					<input type="submit" value="Simpan">
					<input type="button" value="Kembali" onclick="location.href='/matakuliaah'">
				</p>
			</form>
		@endsection	