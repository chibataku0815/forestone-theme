<header class="mdl-layout__header mdl-color--white">
  <div class="mdl-layout__header-row">
    <a class="brand" href="{{ home_url('/') }}">
      <span class="mdl-layout-title">
        {{-- {{ get_bloginfo('name', 'display') }} --}}
        @php
          $upload_dir = wp_upload_dir();
        @endphp
        <img src="{{ $upload_dir['baseurl'] }}/2017/06/logo.svg" alt="日本スニーカー買取センター" class="logo ie-svg">
      </span>
    </a>
    <div class="mdl-layout-spacer"></div>
    <nav class="mdl-navigation">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'menu_class' => 'mdl-grid mdl-cell--hide-phone mdl-cell--hide-tablet']) !!}
      @endif
    </nav>
  </div>
</header>

<div class="mdl-layout__drawer">
  <nav class="mdl-navigation">
    @if (has_nav_menu('primary_navigation'))
      <?php $menuParameters = array( 'container' => false, 'echo' => false, 'items_wrap' => '%3$s', 'depth' => 0 );
      echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
      ?>
    @endif
  </nav>
</div>
