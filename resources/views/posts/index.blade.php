@extends('components.layouts.app')

@section('title', 'Latest Blog')

@section('content')

<x-page-header>
    Blog
</x-page-header>


<!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-end mb-4">
            <div class="col-lg-6">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Latest Blog</h6>
                <h1 class="section-title mb-3">Latest Articles From Our Blog Post</h1>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post)

            <div class="col-lg-4 col-md-6 mb-5">
                <div class="position-relative mb-4">
                    <img width="350" height="300" src="{{ asset('storage/' . $post->image) }}" alt="">
                    <div class="blog-date ">
                        <h4 class="font-weight-bold mb-n1">1</h4>
                        <small class="text-white text-uppercase">Jan</small>
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a>
                    <span class="text-primary px-2">|</span>
                    <a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a>
                </div>
                <h5 class="font-weight-medium mb-2">{{$post->title}}</h5>
                <p class="mb-4">{{$post->short_content}}</p>
                <a class="btn btn-sm btn-primary py-2" href="{{route('posts.show', $post->id)}}">Read More</a>
            </div>
            @endforeach

            <div class="col-12" style="margin-left:40%">
                {{$posts->links()}}
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->


@endsection