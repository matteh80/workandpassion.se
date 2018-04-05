@extends('layouts.panel', ['panelimage' => @\App\asset_path("images/kille_dator.jpg"), 'paneltitle' => 'Hur funkar det?', 'panelclass' => 'candidate-how-it-works'])

@section('panel-content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <h3 class="display-3 mb-3 text-center">Hur funkar det?</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <ul>
                    <li>
                        <div class="icon">
                            <i class="fal fa-file-edit"></i>
                        </div>

                        När du väl har registrerat dig och fyllt i alla nödvändiga uppgifter så kan vi matcha din profil med seriösa arbetsgivare.
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fal fa-id-card-alt"></i>
                        </div>
                        Det enda vi direkt ger tillgång till är ett kortfattat CV som visar vilka färdigheter du har,
                        erfarenhet och löneanspråk. Inget namn, inga kontaktuppgifter eller nuvarande arbetsgivare. </li>
                    <li>
                        <div class="icon">
                            <i class="fal fa-phone"></i>
                        </div>
                        När ett företag vill komma i kontakt med dig så ger vi dem ditt namn, mejladress och telefonnummer. För det får du 280 kr av företaget. </li>
                    <li>
                        <div class="icon">
                            <i class="fal fa-comments"></i>
                        </div>
                        Om företaget (och du som kandidat) vill gå vidare och träffas för en intervju, då får du 1800 kr till. </li>
                    <li>
                        <div class="icon">
                            <i class="fal fa-handshake-alt"></i>
                        </div>
                        Skulle det vara så att matchningen var perfekt och du skriver på ett anställningsavtal, då får du 5000 kr till!
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fal fa-hand-holding-usd"></i>
                        </div>
                        Om flera företag skulle vara intresserad av dig så blir det ännu mer klirr i kassan.
                        Varje företag som vill se ditt CV och varje intervju du går på ger dig en summa.
                        På så sätt kan vi säkerställa att det enbart är seriösa arbetsgivare med ett uppriktigt
                        intresse som hör av sig. </li>
                </ul>
            </div>
            <div class="col-12 text-center mt-5">
                <button class="btn btn-outline-light btn-lg btn-heading">Skapa en profil</button>
            </div>
        </div>
    </div>
@overwrite