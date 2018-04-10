@extends('layouts.panel', ['panelimage' => @\App\asset_path("images/kille_dator.jpg"), 'paneltitle' => 'Hur funkar det?', 'panelclass' => 'candidate-how-it-works'])

@section('panel-content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 d-flex flex-column mb-5">
                <div class="text-center">
                    <img src="@asset('images/ikoner_sa_funkar_det_pencil.png')" class="img-fluid how-it-works-icon" />
                </div>
                <h4>Registrera</h4>
                <span>
                    När du väl har registrerat dig och fyllt i alla nödvändiga uppgifter så kan vi matcha din profil med seriösa arbetsgivare.
                </span>
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column mb-5">
                <div class="text-center">
                    <img src="@asset('images/ikoner_sa_funkar_det_info.png')" class="img-fluid how-it-works-icon" />
                </div>
                <h4>Anonymitet</h4>
                <span>
                    Det enda vi direkt ger tillgång till är ett kortfattat CV som visar vilka färdigheter du har,
                    erfarenhet och löneanspråk. Inget namn, inga kontaktuppgifter eller nuvarande arbetsgivare.
                </span>
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column mb-5">
                <div class="text-center">
                    <img src="@asset('images/ikoner_sa_funkar_det_envelope.png')" class="img-fluid how-it-works-icon" />
                </div>
                <h4>Kontakt</h4>
                <span>
                    När ett företag vill komma i kontakt med dig så ger vi dem ditt namn, mejladress och telefonnummer. För det får du 280 kr av företaget.
                </span>
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column mb-5">
                <div class="text-center">
                    <img src="@asset('images/ikoner_sa_funkar_det_speech_bubble.png')" class="img-fluid how-it-works-icon" />
                </div>
                <h4>Intervju</h4>
                <span>
                    Om företaget (och du som kandidat) vill gå vidare och träffas för en intervju, då får du 1800 kr till.
                </span>
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column mb-5">
                <div class="text-center">
                    <img src="@asset('images/ikoner_sa_funkar_det_heart.png')" class="img-fluid how-it-works-icon" />
                </div>
                <h4>Anställning</h4>
                <span>
                    Skulle det vara så att matchningen var perfekt och du skriver på ett anställningsavtal, då får du 5000 kr till!
                </span>
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column mb-5">
                <div class="text-center">
                    <img src="@asset('images/ikoner_sa_funkar_det_hand_star.png')" class="img-fluid how-it-works-icon" />
                </div>
                <h4>Arbetsgivare</h4>
                <span>
                    Om flera företag skulle vara intresserad av dig så blir det ännu mer klirr i kassan.
                    Varje företag som vill se ditt CV och varje intervju du går på ger dig en summa.
                    På så sätt kan vi säkerställa att det enbart är seriösa arbetsgivare med ett uppriktigt
                    intresse som hör av sig.
                </span>
            </div>
        </div>
    </div>
@overwrite