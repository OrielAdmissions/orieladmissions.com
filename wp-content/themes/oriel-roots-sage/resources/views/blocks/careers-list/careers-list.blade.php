@php
  $roles = get_field('roles');
@endphp

@if ($roles)
  <div>
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
            @if ($role['responsibilities'])
              <div class="rounded-xl bg-white p-6 md:p-10">
                <h6 class="mb-4 font-sans font-medium text-lg md:text-xl">Responsibilities</h6>
                <ul class="list-disc pl-4 md:text-lg">
                  @foreach ($role['responsibilities'] as $item)
                    <li>{!! $item['item'] !!}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            @if ($role['qualifications'])
              <div class="rounded-xl bg-white p-6 md:p-10">
                <h6 class="mb-4 font-sans font-medium text-lg md:text-xl">Qualifications</h6>
                <ul class="list-disc pl-4 md:text-lg">
                  @foreach ($role['qualifications'] as $item)
                    <li>{!! $item['item'] !!}</li>
                  @endforeach
                </ul>
              </div>
            @endif
          </div>
        </div>
      </x-accordion>
    @endforeach
  </div>
@endif
