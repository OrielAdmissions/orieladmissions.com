@props([
  'type' => 'ul',
  'listClasses' => '',
  'itemClasses' => '',
  'icon' => null,
  'items' => [],
  'content',
  'icon',
  'classes',
])

@php
  $tag = in_array($type, ['ul', 'ol']) ? $type : 'ul';
@endphp

<{{ $tag }} class="{{ $listClasses }}">
  @foreach ($items as $item)
    @php
      // If the item is an array, extract content, optional icon, and additional classes; otherwise, default.
      if (is_array($item)) {
        $content = $item['content'] ?? '';
        $itemIcon = $item['icon'] ?? $icon;
        $additionalClasses = $item['classes'] ?? '';
      } else {
        $content = $item;
        $itemIcon = $icon;
        $additionalClasses = '';
      }
      // Merge global itemClasses with any extra classes provided.
      $classes = trim($itemClasses . ' ' . $additionalClasses);
    @endphp

    <li class="{{ $classes }}">
      @if ($itemIcon)
        {!! $itemIcon !!}
      @endif

      {!! $content !!}
    </li>
  @endforeach
</{{ $tag }}>
