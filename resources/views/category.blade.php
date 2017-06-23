@extends('layouts.app')
	@section('content')
	  @include('partials.page-header')
		
	  <ul class="breadcrumb list flex" typeof="BreadcrumbList" vocab="http://schema.org/">
			@php
			  if(function_exists('bcn_display'))
			  	bcn_display();
		  @endphp
		</ul>

	  @include('partials/category-title')

		@php
			$cats   = get_queried_object();
			$parent = $cats->parent;
		@endphp

		@if ($parent == 0)
			@include('partials/content-cat-parent')
		@else
			@include('partials/content-cat-child')
		@endif

		<?php
$categories = get_terms( 'category', array(
    'orderby'    => 'count',
    'hide_empty' => 0,
    'child_of' => get_query_var('cat'),
 ) );
    foreach($categories as $value):
 ?>
		<p><a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name;?></a></p>
<?php endforeach; ?>


	@endsection
