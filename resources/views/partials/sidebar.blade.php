  <ul class="category-list">
    @php
    //一番親階層のカテゴリをすべて取得
    $categories = get_categories('parent=0');

    //取得したカテゴリへの各種処理
    foreach($categories as $val){
      //カテゴリのリンクURLを取得
      $cat_link = get_category_link($val->cat_ID);
      //カスタムフィールドでアイコン取得する用のIDを取得
      $post_id = 'category_' . $val -> cat_ID;
      //アイコンのソース取得
      $attachment_id=get_field('category_icon_small',$post_id);
      $icon_src = wp_get_attachment_image($attachment_id,'full');
      //親カテゴリのリスト出力
      echo '<li>';
      echo '<div class="category-list__title"><a href="' . $cat_link . '" class="mdl-color-text--white">' . $val -> name . '</a>';

      //子カテゴリのIDを配列で取得。配列の長さを変数に格納
      $child_cat_num = count(get_term_children($val->cat_ID,'category'));

      //子カテゴリが存在する場合
      if($child_cat_num > 0){
        echo '<ul class="category-list__child">';
        //子カテゴリの一覧取得条件
        $category_children_args = array('parent'=>$val->cat_ID);
        //子カテゴリの一覧取得
        $category_children = get_categories($category_children_args);
        //子カテゴリの数だけリスト出力
        foreach($category_children as $child_val){
          $cat_link = get_category_link($child_val -> cat_ID);
          echo '<li class="category-list__item"><a href="' . $cat_link . '">' . $child_val -> name . '</a>';
        }
        echo '</ul>';
      }
      echo '</div></li>';
    }
    @endphp
  </ul>

@php(dynamic_sidebar('sidebar-primary'))
