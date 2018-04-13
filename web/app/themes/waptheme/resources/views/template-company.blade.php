{{--
  Template Name: Company Page
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
    @include('partials.content-page')
    @endwhile

    {{--@include('partials.panel-company-how-it-works')--}}

    @include('partials.panel-candidate-contact')
@endsection
