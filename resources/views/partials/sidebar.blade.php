@php(dynamic_sidebar('sidebar-primary'))

<dl class="category-list">
  <dt class="category-list__title">
    @php
      $cats = get_the_category();
      $cat = $cats[0];
      if($cat->parent){
        $parent = get_category($cat->parent);
        echo $parent->cat_name;
      }
      else{
        echo $cat->cat_name;
      }
    @endphp
  </dt>

  @php
    $categories = get_terms( 'category', array(
        'orderby'    => 'count',
        'hide_empty' => 0,
        'child_of' => get_query_var('cat'),
     ) )
   @endphp

    @foreach($categories as $value)
      <dd class="category-list__item">
        <a href="<?php echo get_category_link($value->term_id); ?>">
          {{$value->name}}
        </a>
      </dd>
    @endforeach
</dl>
