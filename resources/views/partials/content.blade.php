<article @php post_class() @endphp>
  <header>
    @include('partials/entry-meta-time')
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
  </header>
  <main class="entry-summary">
    @php the_excerpt() @endphp
  </main>
  <footer class="entry-jump">
    <a href="{!! get_the_permalink() !!}">Read more</a>
  </footer>
</article>
