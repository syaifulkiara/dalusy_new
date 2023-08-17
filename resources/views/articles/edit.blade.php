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
						<h3><i class="fas fa-edit"></i> Buat Artikel</h3>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="mailbox-search">
						<a href="{{ route('articles.index') }}" class="btn btn-danger float-right m-r-xxs" ><i class="fas fa-backward"></i> Artikel</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9">
					<div class="card">
						<div class="card-body">
							<form action="{{route('articles.update', $articles->id)}}" method="POST" enctype="multipart/form-data">
								@csrf
								@method('PUT')
								<div class="form-group">
									<label for="nama">Judul Artikel</label>
									<input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $articles->title }}">
									@error('title')
									<strong class="text-danger">{{ $message }}</strong>
									@enderror
								</div>
								<div class="form-group">
									<label for="description">Konten</label>
									<textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="13">{{ $articles->content }}</textarea>
									@error('content')
									<strong class="text-danger">{{ $message }}</strong>
									@enderror
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
							<a href="{{ route('articles.index')}}" class="btn btn-danger"><i class="fas fa-window-close"></i> Batal</a>
						</div>
						<div class="form-group">
							<label>Gambar</label>
							<input type="file" name="images" id="image" class="form-control">
							@error('image')
							<strong class="text-danger">{{ $message }}</strong>
							@enderror
						</div>
						<a href="#" class="thumbnail">
							<img id="preview-image-before-upload" src="{{ asset($articles->images) }}" width="300px">
						</a>
						<div class="form-group">
							<label>Kategori</label>
							<select class="form-control" name="category_id">
								<option value="">--Pilih Category--</option>
								@foreach($categories as $item)
								<option value="{{ $item->id }}" {{ old('category_id', $articles->category_id) == $item->id ? 'selected' : '' }}>{{ ucfirst($item->name) }}</option>
								@endforeach
							</select>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</section>
@endsection
@push('scripts')
<script>
	$(function () {
// Replace the <textarea id="editor1"> with a CKEditor
// instance, using default configuration.
		CKEDITOR.replace('editor1')
//bootstrap WYSIHTML5 - text editor
		$('.textarea1').wysihtml5()
	})
</script>

<script>      
	$(document).ready(function (e) {  
		$('#image').change(function(){           
			let reader = new FileReader();
			reader.onload = (e) => { 
				$('#preview-image-before-upload').attr('src', e.target.result); 
			}
			reader.readAsDataURL(this.files[0]);   
		});  
	});
</script>
@endpush