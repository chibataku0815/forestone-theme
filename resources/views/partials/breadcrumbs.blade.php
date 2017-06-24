@if ( is_single() )
  <?php
      $cat = is_single() ? get_the_category() : array(get_category($cat));
      if($cat && !is_wp_error($cat)){
          $par = get_category($cat[0]->parent);
          echo '<ul id="breadcrumb" class="list scroll-x">';
          echo '<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a href="'.get_bloginfo('url').'" itemprop="url"><span itemprop="title">日本スニーカー買取センターTOP</span></a></li><li class="sp">　&gt;　</li>';
          while($par && !is_wp_error($par) && $par->term_id != 0){
               $echo = '<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a href="'.get_category_link($par->term_id).'" itemprop="url"><span itemprop="title">'.$par->name.'</span>買取</a></li><li class="sp">　&gt;　</li>'.$echo;
               $par = get_category($par->parent);
          }
          echo $echo.'<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a href="'.get_category_link($cat[0]->term_id).'" itemprop="url"><span itemprop="title">'.$cat[0]->name.'</span>買取</a></li><li>　&gt;　';
          echo  the_title();
          echo '</li></ul><!-- /#breadcrumb -->';

      }
  ?>
@endif


@if ( is_category() )
  <?php $cat = get_the_category(); $cat = $cat[0]; {
 } ?>
  <?php
      $cat = is_single() ? get_the_category() : array(get_category($cat));
      if($cat && !is_wp_error($cat)){
          $par = get_category($cat[0]->parent);
          echo '<ul id="breadcrumb" class="list flex">';
          echo '<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a href="'.get_bloginfo('url').'" itemprop="url"><span itemprop="title">日本スニーカー買取センターTOP</span></a></li><li class="sp">　&gt;　</li>';
          while($par && !is_wp_error($par) && $par->term_id != 0){
               $echo = '<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a href="'.get_category_link($par->term_id).'" itemprop="url"><span itemprop="title">'.$par->name.'</span>買取</a></li><li class="sp">　&gt;　</li>'.$echo;
               $par = get_category($par->parent);
          }
          echo $echo.'<li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a href="'.get_category_link($cat[0]->term_id).'" itemprop="url"><span itemprop="title">'.$cat[0]->name.'</span>買取</a></li>';
          echo '</ul><!-- /#breadcrumb -->';
      }
  ?>
@endif
