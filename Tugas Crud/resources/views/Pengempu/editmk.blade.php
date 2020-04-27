
		@extends('layout.app')

		@section('title','CRUD pengempu')

		@section('judul')
			Edit pengempu
		@endsection

		@section('konten')
			<form action="/pengempu/{{$tb_pengempu->id}}" method="POST">
				@csrf
				@method('PUT')
				<p>
					<label for="id">ID </label>
					<input type="text" name="id" value="{{$tb_pengempu->id}}">
				</p>
				<p>
				
					<label for="id_penawaran_mk">ID Penawaran MK</label>
					<input type="text" name="id_penawaran_mk" value="{{$tb_pengempu->id_penawaran_mk}}">
				</p>
				
				<p>

					<label for="id_dosen">ID Dosen</label>
					<input type="text" name="id_dosen" value="{{$tb_pengempu->id_dosen}}">
				</p>
				<p>

					<label for="order">Order</label>
					<input type="text" name="order" value="{{$tb_pengempu->order}}">
				</p>
				<p>

					

					
					<input type="submit" value="Simpan">
				</p>
			</form>
		@endsection
