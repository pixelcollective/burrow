<article @php post_class() @endphp>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    @include('partials/entry-meta')
  </header>
  <main class="entry-summary">
    @php the_excerpt() @endphp
  </main>
  <footer class="entry-jump">
    <a href="{!! get_the_permalink() !!}">Read more</a>
  </footer>
</article>
