<section class="wap-panel bg-white {{ $panelclass }}">
    <div class="panel-image" style="background-image: url({{ $panelimage }})">
        <div class="overlay"></div>
        <h2 class="panel-title display-4">{{ $paneltitle  }}</h2>
    </div>
    <section class="panel-content py-5">
        @yield('panel-content')
    </section>
</section>