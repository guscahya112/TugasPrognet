	@extends('layout.app')

			@section('title','CRUD pengempu')

			@section('judul')
				Daftar pengempu
			@endsection

			@section('konten')
				<input type="button" value="Tambah pengempu Baru" onclick="location.href='/pengempu/create'">
				<br>
				@if($all_pengempu->isEmpty())
					Belum ada data ...
				@else
				<table>
					<tr>
						<th>No</th>
						<th>ID</th>
						<th>ID Penawaran MK</th>
						<th>ID Dosen</th>
						<th>Order</th>
					</tr>
					@foreach($all_pengempu as $mhs)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$mhs->id}}</td>
							<td>{{$mhs->id_penawaran_mk}}</td>
							<td>{{$mhs->id_dosen}}</td>
							<td>{{$mhs->order}}</td>
							

							<td>
								<span>
									<input type="button" value="Edit" onclick="location.href='/pengempu/{{$mhs->id}}/edit'">
									<form style="display:inline-block;" action="/pengempu/{{$mhs->id}}" method="post">
										@csrf
										@method('DELETE')
										<input type="submit" value="Delete">
									</form>
									<input type="button" value="Details" onclick="location.href='/pengempu/{{$mhs->id}}'">
								</span>
							</td>
						</tr>
					@endforeach
				</table>
				@endif
			@endsection