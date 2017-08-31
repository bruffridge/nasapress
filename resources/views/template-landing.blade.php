{{--
  Template Name: Landing Page
--}}

@extends('layouts.app')

@section('content')
  <main id="main-content" class="usa-content usa-layout-docs">
    <div class="usa-overlay"></div>
    @while(have_posts()) @php(the_post())
    <section class="usa-hero">
      <div class="usa-grid">
      <div class="usa-width-one-half">
        @php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb('<p class="breadcrumbs" id="breadcrumbs">','</p>');
        }
        @endphp
        @include('partials.page-header')
      </div>
      </div>
      <div class="usa-grid">
      <div class="usa-width-one-half">
        <p class="usa-font-lead">{{ get_field('lpt_leading_paragraph') }}</p>
       </div></div>
    <!-- custom html here -->
    </section>

    <div class="usa-grid usa-section">
      @php ($gridSize = 'one-whole')
      @if ( !get_field('otp_hide') )
      @php ($gridSize = 'three-fourths')
      <aside class="usa-width-one-fourth usa-layout-docs-sidenav sticky"><p class='usa-layout-docs-sidenav-title'>On this page:</p><nav class='anchorific' data-headings='{{ get_field('otp_heading_tags') }}'></nav></aside>
      @endif
      <div class="usa-width-{{ $gridSize }} usa-layout-docs-main_content">
      
        @include('partials.content-page')
      
      </div>
    </div>
    @endwhile
  </main>
@endsection


