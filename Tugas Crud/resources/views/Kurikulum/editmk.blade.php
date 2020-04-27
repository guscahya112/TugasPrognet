
		@extends('layout.app')

		@section('title','CRUD kurikulum')

		@section('judul')
			Edit kurikulum
		@endsection

		@section('konten')
			<form action="/kurikulum/{{$tb_kurikulum->id}}" method="POST">
				@csrf
				@method('PUT')
				<p>
					<label for="id">ID</label>
					<input type="text" name="id" value="{{$tb_kurikulum->id}}">
				</p>
				<p>
					<label for="id_prodi">ID Prodi</label>
					<select name="id_prodi">
						@foreach($tb_prodi as $tb_prodis)
							<option value="{{ $tb_prodis->id }}">{{ $tb_prodis->nama_prodi }}</option>
						@endforeach
					</select>
				</p>
				<p>

					<label for="nama_kurikulum">Nama Kurikulum</label>
					<input type="text" name="nama_kurikulum" value="{{$tb_kurikulum->nama_kurikulum}}">
				</p>
				<p>

					<label for="tahun">Tahun</label>
					<input type="date" name="tahun" value="{{$tb_kurikulum->tahun}}">
				</p>
				<p>

					

					
					<input type="submit" value="Simpan">
				</p>
			</form>
		@endsection
