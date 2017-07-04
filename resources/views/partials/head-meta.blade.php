@if( is_single() )
  @if( get_post_type() === 'post' )
    @php
      remove_action('wp_head', '_wp_render_title_tag', 1)
    @endphp

    @if($title == '')
      <title>@php(the_title()) @php(the_field('color_japanese')) 最新買取価格@php(the_field('market_price'))円 | 日本スニーカー買取センター】15年10万足の買取実績</title>
    @endif

    @if($description=='')
      <meta name="description" content="@php(the_content())">
    @endif

    @if($keywords=='')
      <meta name="keywords" content="nike,買取,買い取り,買取り">
    @endif
  @endif
@endif

@if( is_page() || get_post_type() === 'blog' )
  @php
    remove_action('wp_head', '_wp_render_title_tag', 1)
  @endphp

  @if($title == '')
    <title>{{get_post_meta($post->ID, _aioseop_title, true)}}</title>
  @endif

  @if($description=='')
    <meta name="description" content="{{get_post_meta($post->ID, _aioseop_description, true)}}">
  @endif

  @if($keywords=='')
    <meta name="keywords" content="{{get_post_meta($post->ID, _aioseop_keywords, true)}}">
  @endif

@endif


@if( is_category() )
  @php
    $cat_id = get_queried_object()->cat_ID; $post_id = 'category_'.$cat_id
  @endphp
  @php
    remove_action('wp_head', '_wp_render_title_tag', 1)
  @endphp

    <title>{{the_field('meta_title',$post_id)}}</title>

  @if($description=='')
    <meta name="description" content="@php(the_title())の高価買取は【日本スニーカー買取センター】加水分解から、黄ばみがあっても買い取ります、まずは一度ご相談ください。2万足の買取実績経験があなたのJORDANに正当価格をお付けします！">
  @endif

  @if($keywords=='')
    <meta name="keywords" content="@php(the_title()),nike,買取,買い取り,買取り">
  @endif
@endif
