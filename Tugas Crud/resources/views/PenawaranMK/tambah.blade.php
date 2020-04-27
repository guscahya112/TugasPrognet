@extends('layout.app')

		@section('title','CRUD Penawaran MK')

		@section('judul')
			Tambah Penawaran MK
		@endsection

		@section('konten')
			<form action="/penawaranmk" method="POST">
				@csrf
				<p>
					<label for="tahun_ajaran">Tahun Ajaran</label>
					<input type="text" name="tahun_ajaran" >
				</p>
			
				<p>

					<label for="semester">Semester</label>
					<input type="text" name="semester" >
				</p>
				<p>

					<label>ID Prodi</label>
					<select name="id_prodi">
						@foreach($prodi as $prodis)
							<option value="{{ $prodis->id }}">{{ $prodis->nama_prodi }}</option>
						@endforeach
					</select>
				</p>
				<p>

					<label>ID Matakuliah</label>
					<select name="id_matakuliah">
						@foreach($matakuliah as $matakuliaah)
							<option value="{{ $matakuliaah->id }}">{{ $matakuliaah->nama_matakuliah }}</option>
						@endforeach
					</select>
					<p>
					<label for="kelas">Kelas</label>
					<input type="text" name="kelas" >
				</p>
				
				<p>

					<input type="submit" value="Simpan">
					<input type="button" value="Kembali" onclick="location.href='/penawaranmk'">
					</p>
			</form>
		@endsection	
	