@php
  $roles = get_field('roles');
@endphp

@if ($roles)
    @foreach ($roles as $role)
      <x-accordion
        :heading="$role['title']"
        summary_classes="text-5xl-fluid py-12 font-serif font-light"
      >
        <div class="space-y-8">
          @if ($role['description'])
            <p class="text-lg md:text-xl">{!! $role['description'] !!}</p>
          @endif

          <div class="space-y-4">
            @if (!empty($role['sections']))
              @foreach ($role['sections'] as $section)
                @if ($section['section_title'] || $section['section_content'])
                  <div class="rounded-xl bg-white p-6 md:p-10">
                    @if ($section['section_title'])
                      <h6 class="mb-4 font-sans font-medium text-lg md:text-xl">
                        {{ $section['section_title'] }}
                      </h6>
                    @endif

                    @if ($section['section_content'])
                      <div class="md:text-lg">{!! $section['section_content'] !!}</div>
                    @endif
                  </div>
                @endif
              @endforeach
            @endif
          </div>
        </div>
      </x-accordion>
    @endforeach
@endif
