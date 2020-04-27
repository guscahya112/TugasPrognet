@extends('layout.app')

		@section('title','CRUD Matakuliah')

		@section('judul')
			Detail Data Matakuliah
		@endsection

		@section('konten')
			<p>
				<label for="kode_matakuliah">Kode Matakuliah</label>
				<input type="text" name="kode_matakuliah" value="{{$tb_matakuliaah->kode_matakuliah}}" readonly>
			</p>
			<p>
				<label for="nama_matakuliah">Nama Matakuliah</label>
				<input type="text" name="nama_matakuliah" value="{{$tb_matakuliaah->nama_matakuliah}}" readonly>
			</p>
			<p>
				<label for="sks">SKS Matakuliah</label>
				<input type="text" name="sks" value="{{$tb_matakuliaah->sks}}" readonly>
			</p>
			<p>
				<label for="semester">Semeter</label>
				<input type="text" name="semester" value="{{$tb_matakuliaah->semester}}"readonly>
			</p>
			<p>
				<label for="id_kurikulum">ID Kurikulum</label>
				<input type="text" name="id_kurikulum" value="{{$tb_matakuliaah->tb_kurikulum->nama_kurikulum}}"readonly>
			</p>
			<p>
				<label for="id_dosen">ID Dosen</label>
				<input type="text" name="id_dosen" value="{{$tb_matakuliaah->tb_dosen->nama_dosen}}"readonly>
			</p>
			<p>
				<label for="id_prodi">ID Prodi</label>
				<input type="text" name="id_prodi" value="{{$tb_matakuliaah->tb_prodi->nama_prodi}}" readonly>
			</p>
			<p>


				<input type="button" value="Kembali" onclick="location.href='/matakuliaah'">
			</p>
		@endsection	