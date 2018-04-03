@extends('layouts.app')

@section('content')
    <section class="punch-lines bg-white py-5">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-6 offset-3 col-md-3 offset-md-0 col-lg-2 px-4">
                    <img src="@asset('images/tummenUpp.png')" class="punch-icon img-fluid" />
                </div>
                <div class="col-12 col-md-9 col-lg-10">
                    <h2 class="mt-0 display-4 fg-primary punch-title">Work, passion och win-win.</h2>
                    Work and Passion är en unik plattform där seriösa arbetsgivare möter rätt kandidater.
                    Vi erbjuder ett enormt utbud av kompetenta personer som i sin tur får betalt för att arbetsgivaren
                    ska få deras kontaktuppgifter. Smidig rekrytering och lönsamt jobbsökande helt enkelt.
                    Det tycker vi känns rättvist.
                </div>
            </div>

            <div class="row my-5 align-items-center">
                <div class="col-6 offset-3 col-md-3 offset-md-0 col-lg-2 px-4">
                    <img src="@asset('images/planbok.png')" class="punch-icon img-fluid" />
                </div>
                <div class="col-12 col-md-9 col-lg-10">
                    <h2 class="mt-0 display-4 fg-primary punch-title">Att söka jobb är ett jobb i sig.<br /> Och jobb ska man få lön för.</h2>
                    Genom oss matchas du med seriösa arbetsgivare och tjänar pengar på kuppen.
                    Ju mer information de vill ha om dig, desto mer betalt får du. Och skulle du bli kallad till
                    intervju eller rent utav få drömjobbet, då väntar en bonus. Bra va?
                </div>
            </div>

            <div class="row mb-5 align-items-center">
                <div class="col-6 offset-3 col-md-3 offset-md-0 col-lg-2 px-4">
                    <img src="@asset('images/gris.png')" class="punch-icon img-fluid" />
                </div>
                <div class="col-12 col-md-9 col-lg-10">
                    <h2 class="mt-0 display-4 fg-primary punch-title">Att rekrytera kostar.<br /> Att rekrytera fel är svindyrt.</h2>
                    Det är inte lätt att hitta rätt. Särskilt när den som skulle passa perfekt inte aktivt letar nytt
                    jobb. Work and Passion matchar ihop företag med eftertraktade och lämpliga kandidater.
                    Även de som bara är öppna för att byta jobb om rätt erbjudande kommer.
                </div>
            </div>
        </div>
    </section>
    @include('partials.panel-candidate-how-it-works')
    @include('partials.panel-candidate-contact')
@endsection
