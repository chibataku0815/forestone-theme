<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  @php(wp_head())
  @php
    $description = get_post_meta($post->ID, _aioseop_description, true);
    $keywords = get_post_meta($post->ID, _aioseop_keywords, true);
  @endphp

  @if($description=='')
    <meta name="description" content="<?php bloginfo('description'); ?>">
  @endif

  @if($keywords=='')
    <meta name="keywords" content="nike,買取,買い取り,買取り">
  @endif

  <!--[if lte IE 10 ]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/flexibility/2.0.1/flexibility.js" data-turbolinks-track="true"></script>
  <![endif]-->

</head>
