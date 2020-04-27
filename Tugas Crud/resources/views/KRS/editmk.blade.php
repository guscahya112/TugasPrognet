
		@extends('layout.app')

		@section('title','CRUD KRS')

		@section('judul')
			Edit KRS
		@endsection

		@section('konten')
			<form action="/krs/{{$tb_krs->id}}" method="POST">
				@csrf
				@method('PUT')
				<p>
					<label for="id">ID</label>
					<input type="text" name="id" value="{{$tb_krs->id}}">
				</p>
				<p>
					<label for="id_mahasiswa">ID Mahasiswa</label>
					<select name="id_mahasiswa">
						@foreach($tb_mahasiswa as $tb_mahasiswas)
							<option value="{{ $tb_mahasiswas->id }}">{{ $tb_mahasiswas->nama_mahasiswa }}</option>
						@endforeach
					</select>
				</p>
				<p>
					<label for="id_penawaranmk">ID Prodi</label>
					<select name="id_penawaranmk">
						@foreach($tb_penawaranmk as $tb_penawaranmks)
							<option value="{{ $tb_penawaranmks->id }}">{{ $tb_penawaranmks->id_penawaranmk }}</option>
						@endforeach
					</select>
				</p>
				<p>

					<label for="nilai_huruf">Nilai</label>
					<input type="text" name="nilai_huruf" value="{{$tb_krs->nilai_huruf}}">
				</p>
				<p>

					

					
					<input type="submit" value="Simpan">
				</p>
			</form>
		@endsection
