<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h1>
    @if (get_post_type() === 'post')
      @include('partials/entry-meta')
    @endif
  </header>
  <main>
    @php the_excerpt() @endphp
</main>
</article>
