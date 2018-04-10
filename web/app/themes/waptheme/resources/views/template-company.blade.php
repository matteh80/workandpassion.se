{{--
  Template Name: Company Page
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
    @include('partials.content-page')
    @endwhile

    @include('partials.panel-candidate-how-it-works')
    
    @include('partials.panel-candidate-contact')

    <section class="sounds-fair d-flex flex-column align-items-center justify-content-center">
        <h2 class="display-2 mb-5">Låter rättvist</h2>
        <button class="btn btn-lg btn-outline-dark-gray">Skapa en profil</button>
    </section>
@endsection
