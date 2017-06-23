

<article @php(post_class())>
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('商品がありません.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php(the_post())
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
      <p>@php(the_field('color'))</p>
      <p>@php(the_field('model_number'))</p>
      <p>@php(the_field('age'))</p>
      <p>@php(the_field('market_price'))</p>
      <p>@php(the_field('expensive'))</p>
    </div>
  @endwhile
</article>
