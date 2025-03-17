<x-post-card-2
  :title="get_the_title($post->ID)"
  :content="get_the_excerpt($post->ID)"
  :button_link="get_the_permalink($post->ID)"
  :button_style="'outline'"
  :image_id="get_post_thumbnail_id($post->ID)"
></x-post-card-2>
