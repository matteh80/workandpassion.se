<section class="wap-panel bg-white {{ $panelclass }}">
    <div class="panel-image" style="background-image: url({{ $panelimage }})"></div>
    <section class="panel-content py-5">
        @yield('panel-content')
    </section>
</section>