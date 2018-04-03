<header class="banner videobanner">
    <div class="" id="bgvid">
        <video playsinline autoplay muted loop poster="polina.jpg">
            <source src="@asset('videos/startfilm.mp4')" type="video/mp4">
        </video>
    </div>
    <div class="header-text container-fluid d-flex flex-column justify-content-center align-items-center">
        <h1 class="title text-center"><i>Rätt jobb</i> eller <i>rätt person?</i></h1>
        <h1 class="title text-center">Hitta båda här.</h1>
        <h3 class="subtitle text-center">Matchning värd varje krona och sekund.</h3>
        <div class="row buttons mt-5 w-100">
            <div class="col-12 col-md-3 offset-md-3 col-lg-2 offset-lg-4">
                <button class="btn btn-lg btn-secondary w-100">Logga in</button>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <button class="btn btn-lg btn-outline-secondary w-100">Registrera dig</button>
            </div>
        </div>
    </div>
    <nav class="nav-primary navbar navbar-expand-lg navbar-light bg-light">
        <div class="header-container">
            <a class="brand text-hide float-left" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}
                <img src="@asset('images/wap-header-logo.png')" class="header-logo py-1" />
            </a>
            <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse float-lg-right" id="navbarSupportedContent">
                @if (has_nav_menu('primary_navigation'))
                    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav mr-auto']) !!}
                @endif
            </div>
        </div>
    </nav>
</header>
