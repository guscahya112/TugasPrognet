
		@extends('layout.app')

		@section('title','CRUD Penawaran MK')

		@section('judul')
			Edit Penawaran MK
		@endsection

		@section('konten')
			<form action="/penawaranmk/{{$tb_penawaranmk->id}}" method="POST">
				@csrf
				@method('PUT')
				<p>
					<label for="tahun_ajaran">Tahun Ajaran</label>
					<input type="text" name="tahun_ajaran" value="{{$tb_penawaranmk->tahun_ajaran}}">
				</p>
				<p>
					<label for="semester">Semester</label>
					<input type="text" name="semester" value="{{$tb_penawaranmk->semester}}">
				
				</p>
				<p>

					<label for="id_prodi">ID Prodi</label>
					<input type="text" name="id_prodi" value="{{$tb_penawaranmk->id_prodi}}">
				</p>
				<p>

					<label for="id_matakuliah">ID Matakuliah</label>
					<input type="text" name="id_matakuliah" value="{{$tb_penawaranmk->id_matakuliah}}">
				</p>
				<p>

					<label for="kelas">Kelas</label>
					<input type="text" name="kelas" value="{{$tb_penawaranmk->kelas}}">
				</p>
				<p>

					

					
					<input type="submit" value="Simpan">
				</p>
			</form>
		@endsection
