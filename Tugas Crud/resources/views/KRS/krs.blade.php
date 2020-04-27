@extends('layout.app')

		@section('title','CRUD KRS')

		@section('judul')
			Daftar KRS
		@endsection

		@section('konten')
			<input type="button" value="Tambah krs Baru" onclick="location.href='/krs/create'">
			<br>
			@if($all_krs->isEmpty())
				Belum ada data ...
			@else
			<table border="1">

				<tr>
					
					<th>ID</th>
					<th>ID Mahasiswa</th>
					<th>ID Penawaran MK</th>
					<th>Nilai Huruf</th>
					
				</tr>
				@foreach($all_krs as $krs)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$krs->id}}</td>
						<td>{{$krs->mahasiswa->nama_mahasiswa}}</td>
						<td>{{$krs->id_penawaran_mk}}</td>
						<td>{{$krs->nilai_huruf}}</td>
						
						<td>
							<span>
								<input type="button" value="Edit" onclick="location.href='/krs/{{$krs->id}}/edit'">
								<form style="display:inline-block;" action="/krs/{{$krs->id}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" value="Delete">
								</form>
								<input type="button" value="Details" onclick="location.href='/krs/{{$krs->id}}'">
							</span>
						</td>
					</tr>
				@endforeach
			</table>
			@endif
		@endsection