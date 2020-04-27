@extends('layout.app')

		@section('title','CRUD kurikulum')

		@section('judul')
			Daftar kurikulum
		@endsection

		@section('konten')
			<input type="button" value="Tambah kurikulum Baru" onclick="location.href='/kurikulum/create'">
			<br>
			@if($all_kurikulum->isEmpty())
				Belum ada data ...
			@else
			<table>
				<tr>
					<th>No</th>
					<th>ID</th>
					<th>Nama Prodi</th>
					<th>Nama Kurikulum</th> 
					<th>Tahun</th>
				</tr>
				@foreach($all_kurikulum as $mhs)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$mhs->id}}</td>
						<td>{{$mhs->tb_prodi->nama_prodi}}</td>
						<td>{{$mhs->nama_kurikulum}}</td>
						<td>{{$mhs->tahun}}</td>
						

						<td>
							<span>
								<input type="button" value="Edit" onclick="location.href='/kurikulum/{{$mhs->id}}/edit'">
								<form style="display:inline-block;" action="/kurikulum/{{$mhs->id}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" value="Delete">
								</form>
								<input type="button" value="Details" onclick="location.href='/kurikulum/{{$mhs->id}}'">
							</span>
						</td>
					</tr>
				@endforeach
			</table>
			@endif
		@endsection