@php
  $title = get_field('title');
@endphp
<x-hero>
  <x-slot name="headline">
    <h1
      class="fade-in-bottom text-8xl-fluid justify-self-center mx-auto max-w-200 text-center text-white"
    >
      {!! $title !!}
    </h1>
  </x-slot>
</x-hero>
