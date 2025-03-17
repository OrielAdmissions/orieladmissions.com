@props([
  'image_id' => null,
  'grade' => '',
  'title' => 'Default Title',
  'description' => '',
  'accordion' => null,
])

<div class="college-services__card rounded-xl bg-gray-100 md:p-4">
  <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
    <!-- Left: Image -->
    <div class="flex flex-col overflow-hidden rounded-t-lg md:rounded-b-lg">
      @if ($image_id)
        {!! App\get_picture([$image_id], 'full', false, ['class' => 'w-full h-full object-cover mx-auto']) !!}
      @endif
    </div>

    <!-- Right: Content -->
    <div class="flex flex-col gap-6 px-4">
      <div class="flex grow items-center">
        <div class="space-y-6">
          @if ($grade)
            <span class="pill bg-sand">
              {{ $grade }}
            </span>
          @endif

          <h2 class="text-4xl-fluid">{{ $title }}</h2>

          @if ($description)
            <p class="">{{ $description }}</p>
          @endif
        </div>
      </div>
      @if (! empty($accordion))
        @include('partials.modules.accordion', ['accordions' => [$accordion]])
      @endif
    </div>
  </div>
</div>
