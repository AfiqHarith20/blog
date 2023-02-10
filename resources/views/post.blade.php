@extends('layouts/main')

@section('container')
<article>
    <h1 class="mb-5">{{ $post->title }}</h1>
    <p>By. Afiq Harith in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {{-- <h5>{{ $post['author'] }}</h5> --}}
    {!! $post->body !!}
</article>
    <a href="/posts">Back to Posts Page</a>
@endsection

