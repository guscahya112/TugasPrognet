
		@extends('layout.app')

		@section('title','CRUD dosen')

		@section('judul')
			Detail Data dosen
		@endsection

		@section('konten')
			<p>
				<label for="id">ID</label>
				<input type="text" name="id" value="{{ $dosen->id }}" readonly>
			</p>
			<p>
				<label for="id_prodi">ID Prodi</label>
					<input type="text" name="id_prodi" value="{{$dosen->id_prodi}}"readonly>
				</p>
				<p>
					<label for="nip_dosen">NIP</label>
					<input type="text" name="nip_dosen" value="{{$dosen->nip_dosen}}"readonly>
				</p>
				<p>

					<label for="nama_dosen">Nama</label>
					<input type="text" name="nama_dosen" value="{{$dosen->nama_dosen}}"readonly>
				</p>
				<p>

					
			</p>
			<p>
				<input type="button" value="Kembali" onclick="location.href='/dosen'">
			</p>
		@endsection	