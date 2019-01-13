@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="gutenberg">
      @include('partials.page-header')
      @include('partials.content-page')
    </div>
  @endwhile
@endsection
