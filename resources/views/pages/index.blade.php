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
						<h3><i class="fas fa-newspaper"></i> Halaman
						</h3>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="mailbox-search">
						<a href="{{ route('pages.create') }}" class="btn btn-primary" ><i class="fas fa-plus-square"></i> Buat Halaman</a>
						<a href="{{ route('categories.index') }}" class="btn btn-primary float-right" ><i class="fas fa-sticky-note"></i> List Kategori</a>
						<a href="{{ route('articles.index') }}" class="btn btn-warning float-right m-r-xxs" ><i class="fas fa-sticky-note"></i> List Artikel</a>
					</div>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table" id="dataTable">
					<thead>
						<tr>
							<th>Gambar</th>
							<th>Judul</th>
							<th>Dibuat</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($pages as $item)
						<tr>
							<td><img src="{{asset($item->images)}}" alt="" width="80px"></td>
							<td><a href="{{route('pages.show', $item->id)}}">{{$item->title}}</a></td>
							<td>{{ Carbon\Carbon::parse($item->created_at)->format('d-M-Y')}}</td>
							<td>
								<form action="{{route('pages.destroy',$item->id)}}" method="POST">
									@csrf
									@method('DELETE')
									<a href="{{route('pages.edit', $item->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
									<button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin Mau Dhapus')"><i class="fa fa-trash"></i></button>
								</form> 
							</td>
						</tr>  
						@endforeach
					</tbody>
				</table>
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