<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  @if( is_single() )
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

  @if( is_category() )
    @php
      remove_action('wp_head', '_wp_render_title_tag', 1)
    @endphp
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



  @php(wp_head())

  @php
    $title = get_post_meta($post->ID, _aioseop_title, true);
    $description = get_post_meta($post->ID, _aioseop_description, true);
    $keywords = get_post_meta($post->ID, _aioseop_keywords, true);
  @endphp



  <!--[if lte IE 10 ]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/flexibility/2.0.1/flexibility.js" data-turbolinks-track="true"></script>
  <![endif]-->

</head>
