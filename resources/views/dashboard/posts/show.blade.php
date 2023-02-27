@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row mb-3">
        <div class="col-md-8">
            <h1 class="mb-5">{{ $post->title }}</h1>

            <a href="" class="btn btn-success"><i class="fa-regular fa-arrow-left">Back to My Post</i></a>
            <a href="" class="btn btn-warning"><i class="fa-regular fa-pen-to-square">Edit</i></a>
            <a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>Delete</a>
            
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    class="img-fluid" alt="{{ $post->category->name }}" >

                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>
            
            <a href="/posts" 
            class="d-block mt-3">Back to Posts Page</a>

        </div>
    </div>
</div>

@endsection