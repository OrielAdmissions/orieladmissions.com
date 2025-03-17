@props([
    "name" => null,
    "inactive" => "",
    "active" => "text-oriel",
])

@php($menu = Navi::build($name))

@if ($menu->isNotEmpty())
  <div
    {{ $attributes }}
    class="bg-chalk relative flex h-full w-full flex-col items-start gap-y-6 p-4 xl:hidden"
    x-data="{ activePanel: null }"
  >
    <ul
      {{ $attributes }}
      class="bg-chalk divide-keyline/40 flex w-full flex-col items-start divide-y"
      x-data="{ activePanel: null }"
    >
      @foreach ($menu->all() as $item)
        <li
          @class([
              $item->classes,
              $inactive => ! $item->active,
              $active => $item->active,
              "group w-full bg-[linear-gradient(var(--color-keyline),var(--color-keyline)),linear-gradient(var(--color-oriel),var(--color-oriel))] bg-[length:100%_1px,0_1px] bg-[position:100%_100%,0_100%] bg-no-repeat transition-[background-size] duration-300 hover:bg-[0_1px,100%_1px]",
          ])
          x-data="{ open: false }"
        >
          <a
            @if ($item->children)
                @click.prevent="open = true"
            @endif
            class="relative flex w-full items-center justify-start overflow-hidden py-4 transition-all duration-300 ease-in-out group-hover:pr-6 group-hover:pl-10"
            href="{{ $item->children ? "javascript:void(0)" : $item->url }}"
          >
            <span
              class="absolute right-0 leading-none text-current duration-300 ease-out group-hover:translate-x-12"
            >
              {!! get_svg("images.chevron-right", "size-3") !!}
            </span>
            <span
              class="text-oriel absolute left-0 -translate-x-12 leading-none duration-300 ease-out group-hover:translate-x-0"
            >
              {!! get_svg("images.chevron-right", "size-3") !!}
            </span>
            <span
              class="relative block w-full text-xl leading-tight font-normal text-current transition-colors duration-300 ease-in-out"
            >
              {!! $item->label !!}
            </span>
          </a>

          {{-- Submenu Panel --}}
          @if ($item->children)
            <div
              x-show="open"
              x-cloak
              style="display: none"
              x-transition:enter="transform transition duration-300 ease-out"
              x-transition:enter-start="translate-x-full"
              x-transition:enter-end="translate-x-0"
              x-transition:leave="transform transition duration-300 ease-in"
              x-transition:leave-start="translate-x-0"
              x-transition:leave-end="translate-x-full"
              class="bg-chalk absolute top-0 right-0 z-[1] h-full w-full p-4"
            >
              <button
                @click="open = false"
                class="hover:text-oriel mb-4 flex cursor-pointer items-center gap-2 transition-colors duration-300"
              >
                {!! get_svg("images.chevron-left", "size-3") !!} Back
              </button>

              <ul class="divide-keyline/40 w-full divide-y">
                @foreach ($item->children as $child)
                  <li
                    @class([
                        $child->classes,
                        $inactive => ! $child->active,
                        $active => $child->active,
                        "w-full bg-[linear-gradient(var(--color-keyline),var(--color-keyline)),linear-gradient(var(--color-oriel),var(--color-oriel))] bg-[length:100%_1px,0_1px] bg-[position:100%_100%,0_100%] bg-no-repeat transition-[background-size] duration-300 hover:bg-[0_1px,100%_1px]",
                    ])
                    x-data="{ open: false }"
                  >
                    <a
                      class="relative flex w-full items-center justify-start overflow-hidden py-4"
                      href="{{ $child->children ? "javascript:void(0)" : $child->url }}"
                    >
                      <span
                        class="child-group-hover:translate-x-12 absolute right-0 hidden leading-none text-current duration-300 ease-out"
                      >
                        {!! get_svg("images.chevron-right", "size-3") !!}
                      </span>
                      <span
                        class="text-oriel child-group-hover:translate-x-0 absolute left-0 hidden -translate-x-12 leading-none duration-300 ease-out"
                      >
                        {!! get_svg("images.chevron-right", "size-3") !!}
                      </span>
                      <span
                        class="relative block w-full text-xl leading-tight font-normal text-current transition-colors duration-300 ease-in-out"
                      >
                        {!! $child->label !!}
                      </span>
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          @endif
        </li>
      @endforeach
    </ul>
    <div>
      <a href="/contact" class="btn btn-primary whitespace-nowrap">
        Contact Us
      </a>
    </div>
  </div>
@endif
