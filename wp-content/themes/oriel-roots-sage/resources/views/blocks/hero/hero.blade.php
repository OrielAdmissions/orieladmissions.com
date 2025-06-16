@php
  $use_page_title = get_field('use_page_title');
  $custom_title = get_field('title');

  $title = $use_page_title ? get_the_title() : $custom_title;

  // Highlight any |text| as a <span class="text-oriel">text</span>
  $title = preg_replace('/\|(.+?)\|/', '<span class="text-oriel">$1</span>', e($title));
@endphp

<x-hero>
  <x-slot name="headline">
    <h1 class="fade-in-bottom text-8xl-fluid justify-self-center mx-auto max-w-200 text-center text-white">
      {!! $title !!}
    </h1>
  </x-slot>
</x-hero>
