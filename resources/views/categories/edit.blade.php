@extends('layouts.back')

@section('content')
<section class="section-wrap">
	<div class="container">
		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
			<a href="{{ route('articles.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
				class="fas fa-bell fa-fw fa-sm text-white-50"></i> Add New Article</a>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="page-title">
						<h3><i class="fas fa-sticky-note"></i> Ubah Kategori</h3>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="mailbox-search">
						<a href="{{ route('articles.index') }}" class="btn btn-primary float-right m-r-xxs" ><i class="fas fa-list"></i> List Artikel</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Ubah Kategori</h5>
							<form action="{{route('categories.update', $category->id)}}" method="POST">
								@csrf
								@method('PUT')
								<div class="form-group">
									<label for="nama">Ubah Nama Kategori</label>
									<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$category->name}}">
									@error('name')
									<strong class="text-danger">{{ $message }}</strong>
									@enderror
								</div>
								<div class="form-group">
									<label for="description">Ubah Deskripsi</label>
									<textarea class="form-control" name="description" rows="3">{{$category->description}}</textarea>
								</div>
								<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table" id="dataTable">
									<thead>
										<tr>
											<th width="2%">#</th>
											<th>Nama Kategory</th>
											<th>Deskripsi</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										@foreach($categories as $item)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td><b>{{$item->name}}</b></td>
											<td>{{$item->description}}</td>
											<td>
												<form action="{{route('categories.destroy',$item->id)}}" method="POST">
													@csrf
													@method('DELETE')
													<a href="{{route('categories.edit', $item->id)}}" class="btn btn-warning btn-sm">Edit</a>
													<button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin Mau Dhapus')">Delete</button>
												</form>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
	@endsection
	@push('styles')
	<style type="text/css" media="screen">
		.table tbody tr:hover td, .table-hover tbody tr:hover th {
			background-color: lightgrey;
		}	
	</style>
	@endpush
	@push('scripts')
	<script>
		$(document).ready(function() {
			$('#dataTable').DataTable({
				lengthMenu: [
					[10, 25, 50, -1],
					[10, 25, 50, 'All'],
					],
			});
		});
	</script>
	@endpush