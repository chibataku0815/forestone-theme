<article class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col">
  <header>
    @if(has_post_thumbnail())
        {{the_post_thumbnail() }}
    @else
        <img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/IMG_7576.jpg" class="" />
    @endif

    <div class="mdl-grid">
      <p class=""><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></p>
    </div>

    <div class="mdl-card__actions mdl-card--border flex flex--center">
      <a href="{{ get_permalink() }}" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color--black mdl-color-text--white">詳細はこちら</a></h2>
    </div>
  </header>
  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
