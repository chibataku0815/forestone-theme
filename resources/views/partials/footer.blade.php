<footer class="content-info">
  <div class="container">
    @php(dynamic_sidebar('sidebar-footer'))
    <footer class="mdl-mega-footer">
      <nav class="mdl-cell--hide-tablet mdl-cell--hide-phone">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'menu_class' => 'mdl-grid']) !!}
        @endif
      </nav>

      <div class="mdl-mega-footer--bottom-section flex flex--center">
            <div class="mdl-logo">
              Copyright © 2017 japan-sneaker All Rights Reserved
            </div>
      </div>

    </footer>
  </div>
</footer>
