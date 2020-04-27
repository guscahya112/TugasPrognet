@extends('layout.app')

		@section('title','CRUD KRS')

		@section('judul')
			Tambah KRS
		@endsection

		@section('konten')
			<form action="/krs" method="POST">
				@csrf
				<p>
					<label>ID Mahasiswa</label>
					<select name="id_mahasiswa">
						@foreach($mahasiswa as $mahasiswas)
							<option value="{{ $mahasiswas->id }}">{{ $mahasiswas->nama }}</option>
						@endforeach
					</select>
				</p>
				<p>
					<label>ID Penawaran MK</label>
					<select name="id_penawaranmk">
						@foreach($penawaranmk as $penawaranmks)
							<option value="{{ $penawaranmks->id }}">{{ $penawaranmks->id }}</option>
						@endforeach
					</select>
				</p>
				<p>

					<label for="nilai_huruf">Nilai Huruf</label>
					<input type="text" name="nilai_huruf" >
				</p>
				
				<p>
					<input type="submit" value="Simpan">
					<input type="button" value="Kembali" onclick="location.href='/krs'">
					</p>
			</form>
		@endsection	
	