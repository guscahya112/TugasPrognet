@extends('layout.app')

		@section('title','CRUD pengempu')

		@section('judul')
			Tambah pengempu
		@endsection

		@section('konten')
			<form action="/pengempu" method="POST">
				@csrf
				<p>
					<label for="id_penawaran_mk">ID Penawaran MK</label>
					<select name="id_penawaran_mk">
						@foreach($penawaranmk as $pmk)
							<option value="{{ $pmk->id }}">{{ $pmk->tahun_ajaran }}</option>
						@endforeach
					</select>
				</p>
				<p>
					<label for="id_dosen">ID Dosen</label>
					<select name="id_dosen">
						@foreach($dosen as $dosen)
							<option value="{{ $dosen->id }}">{{ $dosen->nama_dosen }}</option>
						@endforeach
					</select>
				</p>
				<p>

					<label for="order">Order</label>
					<input type="text" name="order" >
				</p>
				<p>


					<input type="submit" value="Simpan">
					<input type="button" value="Kembali" onclick="location.href='/pengempu'">
					</p>
			</form>
		@endsection	
	