<!DOCTYPE html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Google Tag Manager -->

    <script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start':

            new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],

          j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =

          'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);

      })(window, document, 'script', 'dataLayer', 'GTM-T98TPJPC');</script>

    <!-- End Google Tag Manager -->
    @php(do_action('get_header'))
    @php(wp_head())

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body @php(body_class())>
  <!-- Google Tag Manager (noscript) -->

  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T98TPJPC"

            height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>

  <!-- End Google Tag Manager (noscript) -->
    <a class="sr-only focus:not-sr-only" href="#main">
      {{ __('Skip to content', 'sage') }}
    </a>
    @include('sections.header')
    @php(wp_body_open())
    <div id="smooth-wrapper">
      <div id="smooth-content">
        <div id="app">
          <main id="main" class="main content-grid">
            @yield('content')
          </main>

          @hasSection('sidebar')
            <aside class="sidebar">
              @yield('sidebar')
            </aside>
          @endif

          @include('sections.footer')
        </div>

        @php(do_action('get_footer'))
        @php(wp_footer())
      </div>
    </div>
  </body>
</html>
