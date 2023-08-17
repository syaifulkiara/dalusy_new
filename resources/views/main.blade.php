@extends('layouts.master')
@section('subtitle')
Home
@endsection
@section('content')
<!-- Featured Posts Slider -->      
<section class="featured-posts-slider">
<div class="container">
  <div id="owl-featured-posts" class="owl-carousel owl-theme">      
   @foreach($features->take(6) as $item)
    <div class="featured-posts-slider__slide">
      <article class="featured-posts-slider__entry entry">
        <a href="{{ route('main.single', $item->slug) }}">
          <div class="thumb-container">
            <img src="{{ asset($item->images) }}" alt="">
          </div>
        </a>
        <div class="featured-posts-slider__text-holder">   
          <h2 class="featured-posts-slider__entry-title">
            <a href="{{ route('main.single', $item->slug) }}">{{$item->title}}</a>
          </h2>
        </div>
      </article>
    </div>
   @endforeach 
  </div> <!-- end owl -->
</div>
</section> <!-- end featured posts slider -->


<!-- Content -->
<section class="section-wrap pt-50 pb-30">
<div class="container">
  <div class="row">

    <!-- Posts -->
    <div class="col-md-8 blog__content mb-30">

      <!-- large post -->
      <article class="entry">
      @foreach($features->take(1) as $item)
        <div class="entry__img-holder mb-0">
          <div class="thumb-container">
            <a href="{{ route('main.single', $item->slug) }}" class="thumb-url"></a>
            <div class="bottom-gradient"></div>
            <img data-src="{{ asset($item->images) }}" src="{{ asset($item->images) }}" class="entry__img lazyload" alt="" />
          </div>
        </div>

        <div class="thumb-text-holder">
          @if (!empty($item->category->name))
          <a href="" class="entry__meta-category entry__meta-category--label">{{$item->category->name}}</a>  
          @else 
          <a href="" class="entry__meta-category entry__meta-category--label">Null</a> 
          @endif
          <h2 class="thumb-entry-title">
            <a href="{{ route('main.single', $item->slug) }}">{{$item->title}}</a>
          </h2>
        </div>
        @endforeach 
      </article>

      <h3 class="section-title">Latest Posts</h3>

      <div class="row">
        @foreach($articles as $item)
        <div class="col-lg-6">
          <article class="entry">                
            <div class="entry__img-holder">
              <a href="{{ route('main.single', $item->slug) }}">
                <div class="thumb-container">
                  <img data-src="{{ asset($item->images) }}" src="{{ asset($item->images) }}" class="entry__img lazyload" alt="" />
                </div>
              </a>
            </div>

            <div class="entry__body">
              <div class="entry__header">
                @if (!empty($item->category->name))
                <a href="" class="entry__meta-category">{{$item->category->name}}</a>
                @else
                <a href="" class="entry__meta-category">null</a>
                @endif
                <h2 class="entry__title">
                  <a href="{{ route('main.single', $item->slug) }}">{{$item->title}}</a>
                </h2>
                <ul class="entry__meta">
                  <li class="entry__meta-date">
                    {{ Carbon\Carbon::parse($item->created_at)->format('d-M-Y')}}
                  </li>
                  <li class="entry__meta-author">
                    by <a href="#">{{$item->author}}</a>
                  </li>
                </ul>
              </div>
              <div class="entry__excerpt">
                <p>{!! Str::limit($item->content,100) !!}...</p>
              </div>
            </div>
          </article>
        </div>
        @endforeach 
      </div>

      <!-- Pagination -->
      <div class="pagination clearfix">
        <div class="pagination__link right">
          <a href="#" class="btn btn-lg btn-color">
            <span>Older Posts</span>
          </a>
        </div>
      </div>
      

    </div> <!-- end posts -->

    <!-- Sidebar -->
    <aside class="col-md-4 sidebar sidebar--right">
      
      <!-- Widget Popular Posts -->
      <div class="widget widget-popular-posts">
        <h4 class="widget-title sidebar__widget-title">Popular Posts</h4>
        <ul class="widget-popular-posts__list">
          @php
          $no=1;
          @endphp
          @foreach($latestposts as $item)
          <li>
            <article class="clearfix">
              <div class="widget-popular-posts__img-holder">
                <span class="widget-popular-posts__number">{{ $no++ }}</span>
                <div class="thumb-container">
                  <a href="{{ route('main.single', $item->slug) }}">
                    <img data-src="{{ asset($item->images) }}" src="{{ asset($item->images) }}" alt="" class="lazyload">
                  </a>
                </div>
              </div>
              <div class="widget-popular-posts__entry">
                <h3 class="widget-popular-posts__entry-title">
                  <a href="{{ route('main.single', $item->slug) }}">{{$item->title}}</a>
                </h3>
              </div>                      
            </article>
          </li>
          @endforeach 
        </ul>
      </div> <!-- end widget popular posts -->

      <!-- Widget Newsletter -->
      <div class="widget widget_mc4wp_form_widget">
        <h4 class="widget-title">Subscribe for Neotech news and receive daily updates</h4>
        <form id="mc4wp-form-1" class="mc4wp-form" method="post">
          <div class="mc4wp-form-fields">
            <p>
              <i class="mc4wp-form-icon ui-email"></i>
              <input type="email" name="EMAIL" placeholder="Your email" required="">
            </p>
            <p>
              <input type="submit" class="btn btn-md btn-color" value="Subscribe">
            </p>
          </div>
        </form>
      </div> <!-- end widget newsletter -->

      <!-- Widget socials -->
      <div class="widget widget-socials">
        <h4 class="widget-title">Keep up with Neotech</h4>
        <ul class="socials">
          <li>
            <a class="social-facebook" href="#" title="facebook" target="_blank">
              <i class="ui-facebook"></i>
              <span class="socials__text">Facebook</span>
            </a>
          </li>
          <li>
            <a class="social-twitter" href="#" title="twitter" target="_blank">
              <i class="ui-twitter"></i>
              <span class="socials__text">Twitter</span>
            </a>
          </li>
          <li>
            <a class="social-google-plus" href="#" title="google" target="_blank">
              <i class="ui-google"></i>
              <span class="socials__text">Google+</span>
            </a>
          </li>
          <li>
            <a class="social-instagram" href="#" title="instagram" target="_blank">
              <i class="ui-instagram"></i>
              <span class="socials__text">Instagram</span>
            </a>
          </li>
        </ul>
      </div> <!-- end widget socials -->

      <!-- Widget Banner -->
      <div class="widget widget_media_image">
        <a href="#">
          <img src="{{ asset('templates/satu/img/blog/placeholder_300.jpg')}}" alt="">
        </a>
      </div> <!-- end widget banner -->

    </aside> <!-- end sidebar -->

  </div>
</div>
</section> <!-- end content -->
@endsection