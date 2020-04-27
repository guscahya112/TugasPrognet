@extends('layout.app')

		@section('title','CRUD kurikulum')

		@section('judul')
			Tambah kurikulum
		@endsection

		@section('konten')
			<form action="/kurikulum" method="POST">
				@csrf
				<p>
					<label for="id_prodi">ID Prodi</label>
					<select name="id_prodi">
						@foreach($prodi as $prodi)
							<option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}</option>
						@endforeach
					</select>
				</p>
				<p>
					<label for="nama_kurikulum">Nama Kurikulum</label>
					<input type="text" name="nama_kurikulum" >
				</p>
				<p>

					<label for="tahun">Tahun</label>
					<input type="date" name="tahun" >
				</p>
				<p>

					<input type="submit" value="Simpan">
					<input type="button" value="Kembali" onclick="location.href='/kurikulum'">
					</p>
			</form>
		@endsection	
	