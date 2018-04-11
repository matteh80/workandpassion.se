<?php if(is_front_page()): ?>
<header class="banner videobanner">
        <div id="bgvid" style="background-image: url('@asset('images/man_startsidebild_mobil.jpg')')">
            <video playsinline autoplay muted loop poster="@asset('images/man_startsidebild_mobil.jpg')" width="1920" height="1080">
                <source src="@asset('videos/startfilm.mp4')" type="video/mp4">
            </video>
        </div>
        <div class="header-text container-fluid d-flex flex-column justify-content-center align-items-center">
            <h1 class="title text-center">Rätt jobb eller rätt person?</h1>
            <h1 class="title text-center">Hitta båda här.</h1>
            <h3 class="subtitle text-center">Matchning värd varje krona och sekund.</h3>
            <div class="row buttons mt-5 w-100">
                <div class="col-12 col-md-3 offset-md-3 col-lg-2 offset-lg-4 mb-2 mb-md-0">
                    <a href="https://app.workandpassion.se/login" class="btn btn-lg btn-primary w-100 btn-lg btn-heading">Logga in</a>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <a href="https://app.workandpassion.se/register" class="btn btn-lg btn-outline-light w-100 btn-lg btn-heading">Registrera dig</a>
                </div>
            </div>
        </div>

    <nav class="nav-primary navbar navbar-expand-lg">
        <div class="header-container container">
            <a class="brand text-hide float-left on-transparent" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}
                <img src="@asset('images/wap-header-logo-white.png')" class="header-logo py-1" />
            </a>
            <a class="brand text-hide float-left on-white" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}
                <img src="@asset('images/wap-header-logo.png')" class="header-logo py-1" />
            </a>
            <button class="navbar-toggler float-right mt-1 hamburger hamburger--squeeze collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>

            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navbarSupportedContent">
                @if (has_nav_menu('primary_navigation'))
                    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav mr-auto']) !!}
                @endif
            </div>
        </div>
    </nav>
</header>
<?php endif; ?>

<?php if(!is_front_page() && !is_page_template('views/template-company.blade.php')): ?>
<header class="banner" style="background-image: url(@asset('images/default-header-bg.jpg');)">
    <div class="header-text d-flex justify-content-center align-items-center">
        <h3>{!! App::title() !!}</h3>
        <h4><?php echo get_page_template_slug( get_the_ID() ); ?></h4>
    </div>
    <nav class="nav-primary navbar navbar-expand-lg">
        <div class="header-container container">
            <a class="brand text-hide float-left on-transparent" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}
                <img src="@asset('images/wap-header-logo-white.png')" class="header-logo py-1" />
            </a>
            <a class="brand text-hide float-left on-white" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}
                <img src="@asset('images/wap-header-logo.png')" class="header-logo py-1" />
            </a>
            <button class="navbar-toggler float-right mt-1 hamburger hamburger--squeeze collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>

            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navbarSupportedContent">
                @if (has_nav_menu('primary_navigation'))
                    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav mr-auto']) !!}
                @endif
            </div>
        </div>
    </nav>
</header>
<?php endif; ?>

<?php if(is_page_template('views/template-company.blade.php')): ?>
<header class="banner company-banner">
    <div class="header-text d-flex flex-column justify-content-center align-items-center">
        <h1 class="title text-center">Att rekrytera kostar.</h1>
        <h1 class="title text-center">Att rekrytera fel är svindyrt.</h1>
    </div>
    <nav class="nav-primary navbar navbar-expand-lg">
        <div class="header-container container">
            <a class="brand text-hide float-left on-transparent" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}
                <img src="@asset('images/wap-header-logo-white.png')" class="header-logo py-1" />
            </a>
            <a class="brand text-hide float-left on-white" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}
                <img src="@asset('images/wap-header-logo.png')" class="header-logo py-1" />
            </a>
            <button class="navbar-toggler float-right mt-1 hamburger hamburger--squeeze collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>

            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navbarSupportedContent">
                @if (has_nav_menu('primary_navigation'))
                    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav mr-auto']) !!}
                @endif
            </div>
        </div>
    </nav>
</header>
<?php endif; ?>
