@extends('layouts.master')

@section('subtitle')
{{ $page->title }}
@endsection
@section('content')
<!-- Contact -->
<section class="section-wrap pt-40 pb-40">
<div class="container">

  <h1 class="page-title">{{$page->title}}</h1>
  <img data-src="{{ asset('templates/satu/img/blog/about_page_title.jpg')}}" src="{{ asset('templates/satu/img/blog/about_page_title.jpg')}}" alt="" class="lazyload contact__img">
  
  <div class="row justify-content-md-center">
    <div class="col-lg-8">
      <div class="entry__article">
        <p>{!! $page->content !!}.</p>
      </div>             

    </div>
  </div>          

</div>
</section> <!-- end contact -->
@endsection