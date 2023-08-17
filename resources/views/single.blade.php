@extends('layouts.master')

@section('subtitle')
{{ $posts->title }}
@endsection
@section('content')
<!-- Content -->
<section class="section-wrap pt-60 pb-20">
<div class="container">
  <div class="row">
    
    <!-- post content -->
    <div class="col-md-8 blog__content mb-30">

      <!-- standard post -->
      <article class="entry">
        
        <div class="single-post__entry-header  entry__header">
          
          <h1 class="single-post__entry-title">
            {{$posts->title}}
          </h1>
          
          <ul class="single-post__entry-meta entry__meta">
            <li>
              <div class="entry-author">
                <a href="#" class="entry-author__url">
                  <img src="{{ asset('templates/satu/img/blog/author.png')}}" class="entry-author__img" alt="">
                  <span>by</span>
                  <span class="entry-author__name">{{$posts->author}}</span>
                </a>
              </div>
            </li>
            <li class="entry__meta-date">
              {{ Carbon\Carbon::parse($posts->created_at)->format('d-M-Y')}}
            </li>
            <li>
              <span>in</span>
              @if (!empty($posts->category->name))
              <a href="" class="entry__meta-category">{{$posts->category->name}}</a>
              @else
              <a href="" class="entry__meta-category">Null</a>
              @endif
            </li>
          </ul>
        </div>

        <div class="entry__img-holder">
          <figure>
            <img src="{{asset($posts->images)}}" alt="" class="entry__img">
            <figcaption>A photo collection samples</figcaption>
          </figure>
        </div>

        <div class="entry__article-holder">

          <!-- Share -->
          <div class="entry__share">
            <div class="entry__share-inner">
              <div class="socials">
                <a href="#" class="social-facebook entry__share-social" aria-label="facebook"><i class="ui-facebook"></i></a>
                <a href="#" class="social-twitter entry__share-social" aria-label="twitter"><i class="ui-twitter"></i></a>
                <a href="#" class="social-google-plus entry__share-social" aria-label="google+"><i class="ui-google"></i></a>
                <a href="#" class="social-instagram entry__share-social" aria-label="instagram"><i class="ui-instagram"></i></a>
              </div>
            </div>                    
          </div> <!-- share -->

          <div class="entry__article">
            <p>{!! $posts->content !!}.</p>

            <!-- tags -->
            <div class="entry__tags">
              Tags: <a href="#" rel="tag">mobile</a><a href="#" rel="tag">gadgets</a><a href="#" rel="tag">satelite</a>
            </div> <!-- end tags -->

          </div> <!-- end entry article -->
        </div>

        <!-- Newsletter -->
        <div class="newsletter-wide widget widget_mc4wp_form_widget">
          <div class="newsletter-wide__text">
            <h4 class="widget-title">Subscribe for Neotech news and receive daily updates</h4>
          </div>

          <div class="newsletter-wide__form">
            <form class="mc4wp-form" method="post">
              <div class="mc4wp-form-fields">
                <i class="mc4wp-form-icon ui-email"></i>
                <input type="email" name="EMAIL" placeholder="Your email" required="">
                <input type="submit" class="btn btn-md btn-color" value="Subscribe">
              </div>
            </form>
          </div>
        </div>

        <!-- Related Posts -->
        <div class="related-posts">
          <h5 class="related-posts__title">You might like</h5>
          <div class="row row-20">
            @foreach($relateds as $rows)
            <div class="col-md-4">
              <article class="related-posts__entry entry">
                <a href="{{ route('main.single', $rows->slug) }}">
                  <div class="thumb-container">
                    <img src="{{ asset($rows->images) }}" data-src="{{ asset($rows->images) }}" alt="" class="entry__img lazyload">
                  </div>
                </a>
                <div class="related-posts__text-holder">   
                  <h2 class="related-posts__entry-title">
                    <a href="{{ route('main.single', $rows->slug) }}">{{ $rows->title }}</a>
                  </h2>
                </div>
              </article>
            </div>
            @endforeach
          </div>
        </div> <!-- end related posts -->                

      </article> <!-- end standard post -->

      <!-- Comments -->
      <!-- end comments -->


      <!-- Comment Form -->
      <!-- end comment form -->

    </div> <!-- end col -->
    
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

  </div> <!-- end row -->
</div> <!-- end container -->
</section> <!-- end content -->
@endsection