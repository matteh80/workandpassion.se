@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        @while(have_posts()) @php(the_post())
            {{--@include('partials.page-header')--}}
            @include('partials.content-page')
        @endwhile
    </div>
@endsection
