{{--
  Template Name: Front page
--}}

@extends('layouts.app')

@section('content')
    <section class="punch-lines bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <img src="@asset('images/tummenupp.png')" class="punch-icon img-fluid mx-auto d-block"/>
                    <h1 class="mt-0 fg-primary display-1 text-center">Work, passion och win&#8209;win.</h1>
                    <span>
                        Work and Passion är en unik plattform där seriösa arbetsgivare möter rätt kandidater.
                        Vi erbjuder ett enormt utbud av kompetenta personer som i sin tur får betalt för att arbetsgivaren
                        ska få deras kontaktuppgifter. Smidig rekrytering och lönsamt jobbsökande helt enkelt.
                        Det tycker vi känns rättvist.
                    </span>
                </div>

                <div class="col-12 col-lg-6 mt-3">
                    {{--<img src="@asset('images/planbok_shadow.png')" class="punch-icon img-fluid mx-auto d-block"/>--}}
                    <h2 class="mt-0 fg-primary">Att söka jobb är ett jobb i sig. <br /> Och jobb ska man få betalt för.</h2>
                    <span>
                        Genom oss matchas du med seriösa arbetsgivare och tjänar pengar på kuppen.
                        Ju mer information de vill ha om dig, desto mer betalt får du. Och skulle du bli kallad till
                        intervju eller rent utav få drömjobbet, då väntar en bonus. Bra va?
                    </span>
                </div>

                <div class="col-12 col-lg-6 mt-3">
                    {{--<img src="@asset('images/gris_shadow.png')" class="punch-icon img-fluid mx-auto d-block"/>--}}
                    <h2 class="mt-0 fg-primary">Att rekrytera kostar. <br/> Att rekrytera fel är svindyrt.</h2>
                    <span>
                        Det är inte lätt att hitta rätt. Särskilt när den som skulle passa perfekt inte aktivt letar nytt
                        jobb. Work and Passion matchar ihop företag med eftertraktade och lämpliga kandidater.
                        Även de som bara är öppna för att byta jobb om rätt erbjudande kommer.lle du bli kallad till
                        intervju eller rent utav få drömjobbet, då väntar en bonus. Bra va?
                    </span>
                </div>
            </div>
        </div> {{--End container--}}
    </section>
    @include('partials.panel-candidate-how-it-works')

    @while(have_posts()) @php(the_post())
        @if ( !empty( get_the_content() ) )
            @include('partials.content-page')
        @endif
    @endwhile

    @include('partials.panel-candidate-contact')

    <section class="sounds-fair d-flex flex-column align-items-center justify-content-center">
        <h2 class="display-2 mb-5">Låter rättvist</h2>
        <a href="https://app.workandpassion.se/register"><button class="btn btn-lg btn-outline-light">Skapa en profil</button></a>
    </section>
@endsection
