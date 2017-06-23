<?php $cat = get_the_category(); $cat = $cat[0]; {
  echo '<section class="flex flex--center section section--' . $cat->category_nicename . '" />';
 } ?>
<div class="section__title">
    <?php
        $cats = get_the_category();
        $cat = $cats[0];
        if($cat->parent){
        $parent = get_category($cat->parent);
        echo $parent->cat_name;
        }else{
        echo $cat->cat_name;
        }
    ?>
    を売るなら全日本スニーカー買取センターへ
    </div>
</section>
