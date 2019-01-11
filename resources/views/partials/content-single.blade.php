<article @php post_class() @endphp>
  <header>
    @include('partials/entry-meta-time')
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials/entry-meta-author')
  </header>
  <main class="entry-content">
    @php the_content() @endphp
  </main>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    @php comments_template('/partials/comments.blade.php') @endphp
  </footer>
</article>