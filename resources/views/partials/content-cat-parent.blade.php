<article @php(post_class())>
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('商品がありません.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php(the_post())
    @include ('partials.content-'.(get_post_type() !== 'post' ? get_post_type() : get_post_format()))
  @endwhile
</article>
