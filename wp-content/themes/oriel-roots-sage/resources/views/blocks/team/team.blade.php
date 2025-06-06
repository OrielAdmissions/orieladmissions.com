@php
  $team_members = get_field('team_members');
@endphp

@if($team_members)
  <div class="py-12 md:py-30">
      <div class="mx-auto grid grid-cols-[repeat(auto-fill,_minmax(min(275px,_300px),_1fr))] gap-4">
        @foreach($team_members as $member)
          @php
            setup_postdata($member);
          @endphp
          <x-team-card :name="get_the_title($member)" :role="get_field('role', $member->ID)"
                       :education="get_field('education', $member->ID)" :link="get_field('link_text', $member->ID)"
                       :bio="apply_filters('the_content', $member->post_content)">
            <x-slot:image>
              {!! get_the_post_thumbnail($member->ID, 'full', [
                'class' => 'team-card__image object-center mx-auto aspect-square h-auto w-full max-w-full object-cover'
              ]) !!}
            </x-slot>
          </x-team-card>
        @endforeach
        @php wp_reset_postdata(); @endphp
      </div>
  </div>
@endif
