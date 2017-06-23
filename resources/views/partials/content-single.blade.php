<article @php(post_class())>
  <header>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php(the_content())
    <p>@php(the_field('color'))</p>
    <p>@php(the_field('model_number'))</p>
    <p>@php(the_field('age'))</p>
    <p>@php(the_field('market_price'))</p>
  </div>
  @php(dynamic_sidebar('sidebar-primary'))
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
