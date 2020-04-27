@extends('layout.app')

		@section('title','CRUD Kampus')

		@section('judul')
			Kampus
		@endsection

		@section('konten')
			<input type="button" value="Tambah MK Baru" onclick="location.href='/matakuliaah/create'">
			<br>
			@if($all_tb_matakuliaah->isEmpty())
				Belum ada data ...
			@else
			<table border="2">
				<tr>
					<th>No</th>
					<th>Kode Matakuliah</th>
					<th>Nama Matakuliah</th>
					<th>SKS</th>
					<th>Semester</th>
					<th>ID Kurikulum</th>
					<th>ID Dosen</th>
					<th>ID Prodi</th>
				</tr>
				@foreach($all_tb_matakuliaah as $mk)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$mk->kode_matakuliah}}</td>
						<td>{{$mk->nama_matakuliah}}</td>
						<td>{{$mk->sks}}</td>
						<td>{{$mk->semester}}</td>
						<td>{{$mk->tb_kurikulum->nama_kurikulum}}</td>
						<td>{{$mk->tb_dosen->nama_dosen}}</td>
						<td>{{$mk->tb_prodi->nama_prodi}}</td>
						<td>
							<span>
								<input type="button" value="Edit" onclick="location.href='/matakuliaah/{{$mk->id}}/edit'">
								<form style="display:inline-block;" action="/matakuliaah/{{$mk->id}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" value="Delete">
								</form>
								<input type="button" value="Details" onclick="location.href='/matakuliaah/{{$mk->id}}'">
							</span>
						</td>
					</tr>
				@endforeach
			</table>
			@endif
		@endsection