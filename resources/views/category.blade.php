@extends('layouts.app')
  @section('content')
    @include('partials.page-header')
    <ul class="breadcrumb list flex" typeof="BreadcrumbList" vocab="http://schema.org/">
      @php
        if(function_exists('bcn_display'))
          bcn_display();
      @endphp
    </ul>

    <article class="inner mdl-grid">
      <section class="mdl-cell mdl-cell--9-col">

      @php
        $cats   = get_queried_object();
        $parent = $cats->parent;
      @endphp

      @if ($parent == 0)
        @include('partials/content-cat-parent')
      @else
        @include('partials/content-cat-child')
      @endif

			<?php echo do_shortcode( '[contact-form-7 id="5" title="買取、無料見積もり依頼" html_class="h-adr"]' ); ?>

			<div class="flex flex--center">
			<div class="tel">
				<div class="tel__title">お問合せ</div>
				<div class="tel__item">
				<i class="material-icons">perm_phone_msg</i> 0284-22-7923
				<div class="mdl-color-text--white">10:00～18:00</div>
				</div>

			</div>
			</div>
      </section>


      <section class="mdl-cell mdl-cell--3-col">
				@include('partials/sidebar')
      </section>
    </article>

		<div class="mdl-grid mdl-grid--no-spacing">
			<div class="mdl-cell mdl-cell--12-col mdl-cell--hide-tablet mdl-cell--hide-phone">
				<img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/delivery.png" alt="宅配での買取ご希望のお客様" class="" />
			</div>
      <div class="mdl-cell mdl-cell--12-col mdl-cell--hide-tablet mdl-cell--hide-phone">
				<img src="{{bloginfo( 'url' )}}/wp-content/uploads/2017/06/business-trip.png" alt="出張買取ご希望のお客様" class="" />
			</div>
		</div>
  @endsection
