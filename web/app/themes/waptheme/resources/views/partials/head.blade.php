<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="https://pro.fontawesome.com/releases/v5.0.9/js/all.js"
            integrity="sha384-DtPgXIYsUR6lLmJK14ZNUi11aAoezQtw4ut26Zwy9/6QXHH8W3+gjrRDT+lHiiW4"
            crossorigin="anonymous"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-100067149-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }

      gtag('js', new Date());

      gtag('config', 'UA-100067149-3');
      gtag('config', 'UA-100067149-4');
    </script>

    <!-- Facebook Pixel Code -->

    <script>
      !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
          n.callMethod ?

            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };

        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';

        n.queue = [];
        t = b.createElement(e);
        t.async = !0;

        t.src = v;
        s = b.getElementsByTagName(e)[0];

        s.parentNode.insertBefore(t, s)
      }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');

      fbq('init', '624108044602744');
      fbq('track', 'PageView');
    </script>

    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=624108044602744&ev=PageView&noscript=1"/>
    </noscript>

    <!-- End Facebook Pixel Code -->

    <!-- Hotjar Tracking Code for www.workandpassion.se -->
    <script>
      (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:885913,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
      })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    @php(wp_head())
</head>
