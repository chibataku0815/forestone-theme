<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @if( is_category() )
    @php
      remove_action('wp_head', '_wp_render_title_tag', 1)
    @endphp
  @endif
  @include('partials/head-meta')
  @php(wp_head())

  <!--[if lte IE 10 ]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/flexibility/2.0.1/flexibility.js" data-turbolinks-track="true"></script>
  <![endif]-->

</head>
