{{--
  Template Name: Agency
--}}

{{--
Theme base on the "agency" startboostrap template
https://startbootstrap.com/themes/agency/
--}}

@extends('layouts.agency')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('landing.agency.navbar')
    @include('landing.agency.masthead')
    @include('landing.agency.features')
    @include('landing.agency.instructors')
    @include('landing.agency.program')
    @include('landing.agency.pricing')
    {{-- @include('landing.agency.partners') --}}
    @include('landing.agency.team')
    @include('landing.agency.contact')
  @endwhile
@endsection
