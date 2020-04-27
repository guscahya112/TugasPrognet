
		@extends('layout.app')

		@section('title','CRUD pengempu')

		@section('judul')
			Detail Data pengempu
		@endsection

		@section('konten')
			<p>
				<label for="ID_Penawaran_mk">ID_Penawaran MK</label>
				<input type="text" name="id" value="{{$tb_pengempu->id}}" readonly>
			</p>
			<p>
				<label for="id_dosen">ID Dosen</label>
					<input type="text" name="id_dosen" value="{{$tb_pengempu->id_dosen}}"readonly>
				</p>
				<p>
					<label for="order">Order</label>
					<input type="text" name="nim" value="{{$tb_pengempu->order}}"readonly>
				</p>
				<p>

				

			</p>
			<p>
				<input type="button" value="Kembali" onclick="location.href='/pengempu'">
			</p>
		@endsection	