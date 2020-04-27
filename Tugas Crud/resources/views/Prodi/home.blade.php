@extends('layout.app')

		@section('title','CRUD Prodi')

		@section('judul')
			Daftar Prodi
		@endsection

		@section('konten')
			<input type="button" value="Tambah Prodi Baru" onclick="location.href='/prodi/create'">
			<br>
			@if($all_prodi->isEmpty())
				Belum ada data ...
			@else
			<table border="1">

				<tr>
					<th>No</th>
					<th>ID</th>
					<th>Nama Prodi</th>
					
				</tr>
				@foreach($all_prodi as $mhs)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$mhs->id}}</td>
						<td>{{$mhs->nama_prodi}}</td>
						

						<td>
							<span>
								<input type="button" value="Edit" onclick="location.href='/prodi/{{$mhs->id}}/edit'">
								<form style="display:inline-block;" action="/prodi/{{$mhs->id}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" value="Delete">
								</form>
								<input type="button" value="Details" onclick="location.href='/prodi/{{$mhs->id}}'">
							</span>
						</td>
					</tr>
				@endforeach
			</table>
			@endif
		@endsection