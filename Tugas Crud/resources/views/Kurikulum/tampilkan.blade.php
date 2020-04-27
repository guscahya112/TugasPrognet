
		@extends('layout.app')

		@section('title','CRUD kurikulum')

		@section('judul')
			Detail Data kurikulum
		@endsection

		@section('konten')

			<p>
				<label for="id">ID</label>
				<input type="text" name="id" value="{{ $kurikulum->id}}" readonly>
			</p>
			<p>
				<label for="id_prodi">ID Prodi</label>
					<input type="text" name="id_prodi" value="{{$kurikulum->id_prodi}}"readonly>
				</p>
				<p>
					<label for="nama_kurikulum">Nama Kurikulum</label>
					<input type="text" name="nama" value="{{$kurikulum->nama_kurikulum}}"readonly>
				</p>
				<p>

					<label for="tahun">Tahun</label>
					<input type="date" name="tahun" value="{{$kurikulum->tahun}}"readonly>
				</p>
				<p>

				
			</p>
			<p>
				<input type="button" value="Kembali" onclick="location.href='/kurikulum'">
			</p>
		@endsection	