@props([
  'name' => null,
  'inactive' => '',
  'active' => 'text-oriel',
])

@php($menu = Navi::build($name))

@if ($menu->isNotEmpty())
  <ul
    id="desktop-menu"
    {{ $attributes }}
    class="desktop-menu relative grid auto-cols-auto grid-flow-col gap-4 self-stretch rounded-full"
    x-data
  >
    @foreach ($menu->all() as $item)
      <li
        @class([
          'has-submenu' => $item->children,
          $item->classes,
          $inactive => ! $item->active,
          $active => $item->active,
        ])
        x-data="{
          open: false,
          hasChildren: {{ $item->children ? 'true' : 'false' }},
        }"
        @mouseenter="open = hasChildren"
        @mouseleave="open = false"
        @keydown.escape.window="open = false"
      >
        <a
          :aria-expanded="open"
          @click.prevent="hasChildren ? open = !open : window.location.href='{{ $item->url }}'"
          class="desktop-menu__parent-link relative flex h-full items-center justify-center overflow-hidden rounded-full px-6 transition-all"
          href="{{ $item->children ? 'javascript:void(0)' : $item->url }}"
        >
          <span class="relative">{!! $item->label !!}</span>
        </a>

        @if ($item->children)
          <div class="submenu">
            <div class="content">
              <div
                class="subcontent relative flex gap-x-12 overflow-hidden rounded-xl p-6 shadow-sm before:absolute before:inset-0 before:h-full before:w-full before:bg-white/80 before:backdrop-blur-[32px]"
              >
                <ul class="relative basis-[60%]">
                  @foreach ($item->children as $child)
                    <li
                      @class([
                        $child->classes,
                        $inactive => ! $child->active,
                        $active => $child->active,
                        'group bg-[linear-gradient(var(--color-keyline),var(--color-keyline)),linear-gradient(var(--color-oriel),var(--color-oriel))] bg-[length:100%_1px,0_1px] bg-[position:100%_100%,0_100%] bg-no-repeat transition-[background-size] duration-300 hover:bg-[0_1px,100%_1px]',
                      ])
                      style="--index: {{ $loop->index }}"
                    >
                      <a
                        href="{{ $child->url }}"
                        @class([
                          'relative flex items-center justify-start overflow-hidden py-4 hover:pr-6 hover:pl-10',
                        ])
                        style="--subindex: {{ $loop->index }}"
                      >
                        <span
                          class="absolute right-0 leading-none text-current duration-300 ease-out group-hover:translate-x-12"
                        >
                          {!! get_svg('images.chevron-right', 'size-3') !!}
                        </span>
                        <span
                          class="text-oriel absolute left-0 -translate-x-12 leading-none duration-300 ease-out group-hover:translate-x-0"
                        >
                          {!! get_svg('images.chevron-right', 'size-3') !!}
                        </span>
                        <span
                          class="relative block w-full leading-tight font-normal text-current transition-colors duration-300 ease-in-out"
                        >
                          {!! $child->label !!}
                        </span>
                      </a>
                    </li>
                  @endforeach
                </ul>
                <div class="items-between relative inline-flex basis-[40%] flex-col justify-start gap-12 max-xl:hidden">
{{--                  {!! dynamic_sidebar('menu-widget-' . Str::slug($item->label)) !!}--}}
                  @php(dynamic_sidebar('menu-widget-' . Str::slug($item->label)))
                </div>
              </div>
            </div>
          </div>
        @endif
      </li>
    @endforeach
  </ul>
@endif
