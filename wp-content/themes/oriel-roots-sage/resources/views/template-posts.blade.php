<div x-data="filterPosts('{{ admin_url('admin-ajax.php') }}')">
  <!-- Category Filter -->
  <aside>
    <p class="text-xl font-medium">Categories</p>
    <ul>
      <li>
        <button @click="filterPosts('all')" class="px-4 py-2">All</button>
      </li>
      @foreach ($categories as $category)
        <li>
          <button
            class="px-4 py-2"
            @click="filterPosts('{{ $category->term_id }}')"
          >
            {{ $category->name }}
          </button>
        </li>
      @endforeach
    </ul>
  </aside>

  <!-- Posts Container -->
  <div id="posts-container">
    @foreach ($posts as $post)
      @include('partials.content-post', ['post' => $post])
    @endforeach
  </div>
</div>
