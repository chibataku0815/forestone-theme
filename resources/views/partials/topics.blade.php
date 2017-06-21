@section('content')
  @while(have_posts()) @php(the_post())
    @php(
      $args = array(
            'category_name'  => 'press',  // カテゴリー「news」を読み込む
            'posts_per_page' => 3        // 表示数　3件
      );
    )
  @endwhile
@endsection
