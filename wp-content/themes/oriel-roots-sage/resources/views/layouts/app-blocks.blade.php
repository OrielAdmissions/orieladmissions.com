<!DOCTYPE html>
<html @php(language_attributes())>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  @php(do_action('get_header'))
  @php(wp_head())
  @if ($headScript = get_field('head_scripts', 'option'))
    {!! $headScript !!}
  @endif
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body @php(body_class())>
@if ($bodyScript = get_field('body_open_scripts', 'option'))
  {!! $bodyScript !!}
@endif
<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content', 'sage') }}
</a>
@include('sections.header')
@php(wp_body_open())
<div id="smooth-wrapper">
  <div id="smooth-content">
    <div id="app">
      <main id="main" class="main">
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
    @if ($footerScript = get_field('footer_scripts', 'option'))
      {!! $footerScript !!}
    @endif
  </div>
</div>
</body>
</html>
