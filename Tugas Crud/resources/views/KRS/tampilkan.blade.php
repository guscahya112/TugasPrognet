
		@extends('layout.app')

		@section('title','CRUD KRS')

		@section('judul')
			Detail KRS
		@endsection

		@section('konten')
				<p>
					<label for="id">ID</label>
					<input type="text" name="id" value="{{ $krs->id}}" readonly>
				</p>
				<p>
					<label for="id_mahasiswa">ID Mahasiswa</label>
					<input type="text" name="id_mahasiswa" value="{{$krs->mahasiswa->id_mahasiswa}}"readonly>
				</p>
				<p>
					<label for="id_penawaran_mk">ID Penawaran MK</label>
					<input type="text" name="id_penawaran_mk" value="{{$krs->penawaranmk->id_penawaran_mk}}"readonly>
				</p>
				<p>

					<label for="nilai_huruf">Nilai Huruf</label>
					<input type="text" name="nilai_huruf" value="{{$krs->nilai_huruf}}"readonly>
				</p>
				
			<p>
				<input type="button" value="Kembali" onclick="location.href='/krs'">
			</p>
		@endsection	