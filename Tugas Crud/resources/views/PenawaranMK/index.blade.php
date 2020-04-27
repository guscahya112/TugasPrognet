@extends('layout.app')

		@section('title','CRUD Penawaran MK')

		@section('judul')
			Daftar Penawaran MK
		@endsection

		@section('konten')
			<input type="button" value="Tambah Penawaran MK Baru" onclick="location.href='/penawaranmk/create'">
			<br>
			@if($all_penawaranmk->isEmpty())
				Belum ada data ...
			@else
			<table border="1">
				<tr>
					<th>No</th>
					<th>ID</th>
					<th>Tahun Ajaran</th>
					<th>Semester</th>
					<th>ID Prodi</th>
					<th>ID Matakuliah</th>
					<th>Kelas</th>
					
				</tr>
				@foreach($all_penawaranmk as $mhs)
					<tr>
						<td>{{$loop->iteration}}</td>
						
						<td>{{$mhs->id}}</td>
						<td>{{$mhs->tahun_ajaran}}</td>	
						<td>{{$mhs->semester}}</td>
						<td>{{$mhs->id_prodi}}</td>
						<td>{{$mhs->id_matakuliah}}</td>
						<td>{{$mhs->kelas}}</td>
						

						<td>
							<span>
								<input type="button" value="Edit" onclick="location.href='/penawaranmk/{{$mhs->id}}/edit'">
								<form style="display:inline-block;" action="/penawaranmk/{{$mhs->id}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" value="Delete">
								</form>
								<input type="button" value="Details" onclick="location.href='/penawaranmk/{{$mhs->id}}'">
							</span>
						</td>
					</tr>
				@endforeach
			</table>
			@endif
		@endsection