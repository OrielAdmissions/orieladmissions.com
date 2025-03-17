@props([
    "icon" => get_svg("images.chevron-right",
    "size-4"),
    "classes" => "",
    "button_style" => $button_style??"primary",
    "attributes" => "",
    "button_link" => "#_",
    "button_tag" => "a",
    "size" => "normal",
])

<{{ $button_tag }}
  @if ($button_tag === "a")
      href="{{ $button_link }}"
  @endif
  @class([
      "btn",
      "border-keyline/80 border" => $button_style == "outline",
      "text-white" => $button_style == "primary" || $button_style == "ivy",
      "border-white text-black" => $button_style == "secondary",
      "$classes",
  ])
  {!! $attributes !!}
>
  {{ $slot }}
</{{ $button_tag }}>
