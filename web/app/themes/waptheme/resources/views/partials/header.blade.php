<header class="banner cloudbanner" style="background-image: url(@asset('images/moln.jpg'));">
    <img src="@asset('images/cloud_1.png')" class="clouds" id="cloud1" />
    <img src="@asset('images/cloud_2.png')" class="clouds" id="cloud2" />
    <img src="@asset('images/cloud_3.png')" class="clouds" id="cloud3" />
    <img src="@asset('images/cloud_1.png')" class="clouds" id="cloud4" />
    <img src="@asset('images/cloud_2.png')" class="clouds" id="cloud5" />
    <img src="@asset('images/cloud_3.png')" class="clouds" id="cloud6" />

    <div class="header-text container d-flex flex-column justify-content-center align-items-center">
        <h1 class="title text-center">Lorem ipsum <span class="text-secondary">dolor</span> sit amet</h1>
        <h3 class="subtitle text-center">consectetur adipiscing elit</h3>
        <div class="row buttons mt-5 w-100">
            <div class="col-12 col-md-3 offset-md-3">
                <button class="btn btn-lg btn-primary w-100">Logga in</button>
            </div>
            <div class="col-12 col-md-3">
                <button class="btn btn-lg btn-outline-primary w-100">Registrera dig</button>
            </div>
        </div>
    </div>
    <nav class="nav-primary navbar navbar-expand-lg navbar-light bg-light">
        <div class="header-container">
            <a class="brand text-hide float-left" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}
                <img src="@asset('images/wap-header-logo.png')" class="header-logo py-3" />
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
