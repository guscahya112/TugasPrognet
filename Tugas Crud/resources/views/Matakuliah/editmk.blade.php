
		@extends('layout.app')

		@section('title','CRUD Matakuliah')

		@section('judul')
			Edit Matakuliah
		@endsection

		@section('konten')
			<form action="/matakuliaah/{{$matakuliaah->id}}" method="POST">
				@csrf
				@method('PUT')
				<p>
					<label for="kode_matakuliah">Kode Matakuliah</label>
					<input type="text" name="kode_matakuliah" value="{{$matakuliaah->kode_matakuliah}}">
				</p>
				<p>
					<label for="nama_matakuliah">Nama Matakuliah</label>
					<input type="text" name="nama_matakuliah" value="{{$matakuliaah->nama_matakuliah}}">
				</p>
				<p>
					<label for="sks">SKS Matakuliah</label>
					<input type="text" name="sks" value="{{$matakuliaah->sks}}">
				</p>
				<p>
					<label for="semester">Semeter</label>
					<input type="text" name="semester" value="{{$matakuliaah->semester}}">
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
				</p>
			</form>
		@endsection
