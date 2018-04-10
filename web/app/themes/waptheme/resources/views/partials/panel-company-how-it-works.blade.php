@extends('layouts.panel', ['panelimage' => @\App\asset_path("images/kille_dator.jpg"), 'paneltitle' => 'Hur funkar det?', 'panelclass' => 'candidate-how-it-works'])

@section('panel-content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 d-flex flex-column mb-5">
                <div class="text-center">
                    <img src="@asset('images/ikon1_foretag_kandidat.png')" class="img-fluid how-it-works-icon" />
                </div>
                <h4>Kandidat</h4>
                <span>
                    När ni hittat en kandidat som verkar intressant och som ni vill ha kontaktuppgifter till så betalar ni 900 kr. Då får ni tillgång till namn, telefonnummer och mejladress i 30 dagar.
                </span>
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column mb-5">
                <div class="text-center">
                    <img src="@asset('images/ikon2_foretag_kontakt.png')" class="img-fluid how-it-works-icon" />
                </div>
                <h4>Kontakt</h4>
                <span>
                    Kandidaten får reda på vilket företag som ”öppnat” hens CV, så det är bara att höra av sig och berätta mer om tjänsten.
                </span>
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column mb-5">
                <div class="text-center">
                    <img src="@asset('images/ikon3_foretag_intervju.png')" class="img-fluid how-it-works-icon" />
                </div>
                <h4>Intervju</h4>
                <span>
                    Efter eventuell intervju betalar ni 6000 kr.
                </span>
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column mb-5">
                <div class="text-center">
                    <img src="@asset('images/ikon4_foretag_anstallning.png')" class="img-fluid how-it-works-icon" />
                </div>
                <h4>Anställning</h4>
                <span>
                     Skulle det vara så att matchningen var helt perfekt och ni vill anställa kandidaten så kostar det 15 000 kr.
                </span>
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column mb-5">
                <div class="text-center">
                    <img src="@asset('images/ikon5_foretag_dela.png')" class="img-fluid how-it-works-icon" />
                </div>
                <h4>Dela</h4>
                <span>
                    Allt som allt betalar ni 21 900 kr för hela digitala rekryteringsprocessen! Av det går 30% direkt
                    till kandidaten. Det känns rättvist. Och 2,5% av all omsättning går till välgörande ändamål.
                    Bara för att det känns bra.
                </span>
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column mb-5">
                <div class="text-center">
                    <img src="@asset('images/ikon6_foretag_flerKandidater.png')" class="img-fluid how-it-works-icon" />
                </div>
                <h4>Flera kandidater</h4>
                <span>
                    Ovan prisexempel gäller för en (1) kandidat. Skulle ni vilja få fler kontaktuppgifter, intervjua fler
                    eller rent utav anställa fler så är det bara att addera samma kostnad för varje kandidat.

                </span>
            </div>
        </div>
    </div>
@overwrite