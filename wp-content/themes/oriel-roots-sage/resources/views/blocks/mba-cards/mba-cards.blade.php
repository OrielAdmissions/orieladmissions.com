@php
  $features = get_field('features') ?: [];
@endphp

@if ($features)
  <ul role="list" class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
    @foreach ($features as $feature)
      <li class="bg-chalk col-span-1 space-y-4 rounded-lg p-6 py-10 shadow">
        <div class="flex h-16 w-16 items-center">
          @if (!empty($feature['icon']))
            {{ wp_get_attachment_image( $id, 'full', true, ['class'=>'h-full w-full object-contain'] )}}
          @endif
        </div>
        <h3 class="font-sans text-2xl">{{ $feature['title'] }}</h3>
        <div class="text-lg">
          {!! $feature['content'] !!}
        </div>
      </li>
    @endforeach
  </ul>
@else
  <p class="text-center text-sm text-gray-500">Add some feature cards in the block settings.</p>
@endif
