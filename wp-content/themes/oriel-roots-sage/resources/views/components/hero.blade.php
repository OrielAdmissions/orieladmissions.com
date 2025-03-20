{{-- components/hero.blade.php --}}

@props([
  'headline',
])
<div class="full-width ">
  <div class="the-stack">
    <div class="h-svh min-h-[500px] overflow-hidden">
      @if (has_post_thumbnail($page_id))
        {!! App\get_picture([get_post_thumbnail_id($page_id)], 'full', false, ['loading' => false, 'class' => 'w-full h-full object-cover kenburns-top']) !!}
      @endif
    </div>
    <div class="hero__window-overlay relative bg-[black] opacity-50"></div>
    <div class="content-grid">
      <div class="breakout relative flex flex-col justify-center">
        {{ $headline ?? '' }}

        {{ $content ?? '' }}
      </div>
    </div>
  </div>
</div>
