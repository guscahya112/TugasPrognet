@extends('layout.app')

		@section('title','CRUD dosen')

		@section('judul')
			Daftar dosen
		@endsection

		@section('konten')
			<input type="button" value="Tambah dosen Baru" onclick="location.href='/dosen/create'">
			<br>
			@if($all_dosen->isEmpty())
				Belum ada data ...
			@else
			<table border="1">
				<tr>
					<th>No</th>
					<th>ID</th>
					<th>ID Prodi</th>
					<th>NIP Dosen</th>
					<th>Nama Dosen</th>
					
				</tr>
				@foreach($all_dosen as $mhs)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$mhs->id}}</td>
						<td>{{$mhs->id_prodi}}</td>
						<td>{{$mhs->nip_dosen}}</td>
						<td>{{$mhs->nama_dosen}}</td>
						

						<td>
							<span>
								<input type="button" value="Edit" onclick="location.href='/dosen/{{$mhs->id}}/edit'">
								<form style="display:inline-block;" action="/dosen/{{$mhs->id}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" value="Delete">
								</form>
								<input type="button" value="Details" onclick="location.href='/dosen/{{$mhs->id}}'">
							</span>
						</td>
					</tr>
				@endforeach
			</table>
			@endif
		@endsection