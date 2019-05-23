<article @php post_class() @endphp>
  <div class="row">
    <div class="col-12 col-sm-3 col-md-4 col-lg-4">
      <header>
        @if (has_post_thumbnail())
          @php
            the_post_thumbnail();
          @endphp
        @else
          @php
              $dancers = tr_posts_field('dancers');
              $dancer = get_post($dancers[0]);
          @endphp
          <img src="{{get_the_post_thumbnail_url($dancer->ID)}}" alt="" class="img-fluid">
        @endif
        <h1 class="entry-title">{!! get_the_title() !!}</h1>

        <table class="table">
          <tr>
            <td>Instructor</td>
            <td><a href="{{ get_permalink($dancer->ID) }}">{{ $dancer->post_title }}</a></td>
          </tr>
          <tr>
            <td>Date</td>
            <td>{{ tr_posts_field('date') }}</td>
          </tr>
          <tr>
            <td>Hour</td>
            <td>{{ tr_posts_field('begin_time') }} - {{ tr_posts_field('end_time') }}</td>
          </tr>
          <tr>
            <td>Level</td>
            <td>{{ tr_posts_field('level') }}</td>
          </tr>
        </table>
      </header>
    </div>
    <div class="col-12 col-sm-9 col-md-8 col-lg-8">
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
