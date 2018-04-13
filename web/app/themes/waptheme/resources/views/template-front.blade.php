{{--
  Template Name: Front page
--}}

@extends('layouts.app')

@section('content')
    {{--@include('partials.front-page-punch-lines)--}}

    @while(have_posts()) @php(the_post())
        @if ( !empty( get_the_content() ) )
            @include('partials.content-page')
        @endif
    @endwhile


    {{--@include('partials.panel-candidate-how-it-works')--}}

    @include('partials.panel-candidate-contact')

    <section class="sounds-fair d-flex flex-column align-items-center justify-content-center">
        <h2 class="display-2 mb-5">Låter rättvist</h2>
        <a href="https://app.workandpassion.se/register" class="btn btn-outline-light register-btn">Skapa en profil</a>
    </section>
@endsection
