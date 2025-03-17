@props([
  'direction' => 'right',
  'classes' => '',
])

<button
  @class(['group border-keyline focus-visible:outline-oriel focus:ring-oriel !relative inline-flex size-12 cursor-pointer items-center justify-center overflow-hidden rounded-full border focus:ring focus-visible:outline', $classes])
>
  <div
    @class([
      'translate-x-0 transition duration-300',
      'group-hover:translate-x-[500%]' => $direction == 'right',
      'group-hover:-translate-x-[500%]' => $direction == 'left',
    ])
  >
    {!! get_svg("images/chevron-{$direction}", 'size-3') !!}
  </div>
  <div
    @class([
      'absolute transition duration-300 group-hover:translate-x-0',
      '-translate-x-[500%]' => $direction == 'right',
      'translate-x-[500%]' => $direction == 'left',
    ])
  >
    {!! get_svg("images/chevron-{$direction}", 'size-3') !!}
  </div>
</button>
