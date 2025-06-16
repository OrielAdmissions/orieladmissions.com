@php
  $headline_prefix = get_field('headline_prefix') ?: 'We are';
  $cycling_words = get_field('cycling_words') ?: 'Passionate,Student-centric,Admissions-obsessed';
  $static_word = get_field('static_word_fallback') ?: 'Passionate';
  $subtext = get_field('subtext');
  $button_link = get_field('button_link');
  $button_text = get_field('button_text') ?: 'Contact Us';
@endphp

<div class="flex min-h-svh flex-col items-center justify-center overflow-hidden py-24 text-center">
  <h1 class="fade-in-bottom text-8xl-fluid mb-4">
    {{ $headline_prefix }}
    <span
      x-data="textCycler()"
      x-ref="text"
      data-words="{{ $cycling_words }}"
      class="text-oriel block"
    >
      {{ $static_word }}
    </span>
  </h1>

  @if ($subtext)
    <p class="mx-auto mb-4 max-w-md font-serif text-[32px]/tight font-light">
      {!! $subtext !!}
    </p>
  @endif

  @if ($button_link)
    <a href="{{ $button_link }}" class="btn btn-primary">{{ $button_text }}</a>
  @endif
</div>
