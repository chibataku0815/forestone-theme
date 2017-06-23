<article @php(post_class())>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    @if(has_post_thumbnail())
        {{the_post_thumbnail(array( 200, 150 )) }}
    @else
        <img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/IMG_7576.jpg" class="" />
    @endif
    <a href="{{ get_permalink() }}">詳細はこちら</a></h2>
  </header>
  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
