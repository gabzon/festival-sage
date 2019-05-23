<article @php post_class() @endphp>
  <div class="row">
    <div class="col-12 col-sm-2 col-md-3 col-lg-3">
      <header>
        <img src="{{get_the_post_thumbnail_url()}}" alt="" class="img-fluid">
        <h1 class="entry-title">{!! get_the_title() !!}</h1>

        @if (tr_posts_field('tagline'))
          <h4>{{ tr_posts_field('tagline') }}</h4>          
        @endif

        @if (tr_posts_field('nationality'))
          <h4>{{ tr_posts_field('nationality') }}</h4>
        @endif

        @if (tr_posts_field('website'))
          <a href="{{ tr_posts_field('website') }}"><i class="fas fa-globe fa-lg"></i></a>
        @endif

        @if (tr_posts_field('facebook'))
          <a href="{{ tr_posts_field('facebook') }}"><i class="fab fa-facebook fa-lg"></i></a>
        @endif

        @if (tr_posts_field('twitter'))
          <a href="{{ tr_posts_field('twitter') }}"><i class="fab fa-twitter fa-lg"></i></a>
        @endif

        @if (tr_posts_field('instagram'))
          <a href="{{ tr_posts_field('instagram') }}"><i class="fab fa-instagram fa-lg"></i></a>
        @endif

        @if (tr_posts_field('youtube'))
          <a href="{{ tr_posts_field('youtube') }}"><i class="fab fa-youtube fa-lg"></i></a>
        @endif

      </header>
    </div>
    <div class="col-12 col-sm-10 col-md-9 col-lg-9">
      <div class="entry-content">
        @php the_content() @endphp
      </div>
    </div>
  </div>


  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
