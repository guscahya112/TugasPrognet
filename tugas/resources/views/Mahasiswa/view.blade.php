@extends('layout.app')

		@section('title','CRUD Mahasiswa')

		@section('judul')
			Daftar Mahasiswa
		@endsection

		@section('konten')
			<input type="button" value="Tambah Mahasiswa Baru" onclick="location.href='/mahasiswa/create'">
				<br>
				@if($all_mahasiswa->isEmpty())
					Belum ada data ...
				@else
				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      	<th>No</th>
						<th>ID</th>
						<th>Nama</th>
						<th>NIM</th>
						<th>Alamat</th>
						<th>Jenis Kelamin</th>
						<th>ID Prodi</th>
						<th>Aksi</th>
				    </tr>
				  </thead>
				  <tbody>
				    @foreach($all_mahasiswa as $mhs)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$mhs->id}}</td>
							<td>{{$mhs->nama}}</td>
							<td>{{$mhs->nim}}</td>
							<td>{{$mhs->alamat}}</td>
							<td>{{$mhs->jenis_kelamin}}</td>
							<td>{{$mhs->prodi->nama_prodi}}</td>
							<td>
								<span>
									<input type="button" value="Edit" onclick="location.href='/mahasiswa/{{$mhs->id}}/edit'">
									<form style="display:inline-block;" action="/mahasiswa/{{$mhs->id}}" method="post">
										@csrf
										@method('DELETE')
										<input type="submit" value="Delete">
									</form>
									<input type="button" value="Details" onclick="location.href='/mahasiswa/{{$mhs->id}}'">
								</span>
							</td>
						</tr>
					@endforeach
				  </tbody>
				</table>
				@endif
		@endsection