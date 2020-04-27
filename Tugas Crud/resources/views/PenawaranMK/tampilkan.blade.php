
		@extends('layout.app')

		@section('title','CRUD kurikulum')

		@section('judul')
			Detail Data kurikulum
		@endsection

		@section('konten')
			<p>
				<label for="tahun_ajaran">Tahun Ajaran</label>
				<input type="text" name="id" value="{{$penawaranmk->tahun_ajaran}}" readonly>
			</p>
			<p>
				<label for="semester">Semester</label>
					<input type="text" name="semester" value="{{$penawaranmk->semester}}"readonly>
				</p>
				<p>
					<label for="id_prodi">ID Prodi</label>
					<input type="text" name="id_prodi" value="{{$penawaranmk->id_prodi}}"readonly>
				</p>
				<p>

					<label for="id_matakuliah">ID Matakuliah</label>
					<input type="text" name="id_matakuliah" value="{{$penawaranmk->id_matakuliah}}"readonly>
				</p>
				<p>

					<label for="kelas">Kelas</label>
					<input type="text" name="kelas" value="{{$penawaranmk->kelas}}"readonly>

				</p>
			<p>
				<input type="button" value="Kembali" onclick="location.href=' /penawaranmk'">
			</p>
		@endsection	