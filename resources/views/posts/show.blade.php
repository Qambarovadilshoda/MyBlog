@extends('components.layouts.app')

@section('title', 'Blog Detail')

@section('content')

<x-page-header>
    {{ 'Post - '.  $post->id}}
</x-page-header>

<!-- Detail Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-5">
                    <div class="d-flex mb-2">

                        @foreach ($post->tags as $tag)
                        <a class="text-secondary text-uppercase font-weight-medium" href="">{{$tag->name}}</a>
                        <span class="text-primary px-2">|</span>
                        @endforeach
                        <a class="text-secondary text-uppercase font-weight-medium" href="">{{$post->created_at}}</a>
                    </div>
                    <p class="text-danger text-uppercase font-weight-medium">{{$post->category->name}}</p>
                    <h1 class="section-title mb-3">{{$post->title}}</h1>
                </div>
                <div class="mb-5">

                    <img class="img-fluid rounded w-100" src=" {{ asset('storage/' . $post->image) }}" alt="Image">
                    <p>{{$post->context}}</p>
                    @auth
                    @canany(['update', 'delete'], $post)
                    <div>
                        <a class="btn btn-sm btn-outline-secondary" href="{{route('posts.edit', $post->id)}}">Edit</a>
                        <form style="display: inline;" action="{{route('posts.destroy', $post->id)}}"
                            method="POST"
                            onSubmit="return confirm('Are you sure you wish to delete?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </div>
                    @endcanany
                    @endauth
                </div>
                <div class="mb-5">
                    <h3 class="mb-4 section-title">{{$post->comments()->count()}} Comments</h3>
                    @foreach($post->comments as $comment)
                    <div class="media mb-4">
                        <img src="/img/user.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6>{{$comment->user->name}} <small><i>{{$comment->created_at}}</i></small></h6>
                            <p>{{$comment->comment}}</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="bg-light rounded p-5">
                    <h3 class="mb-4 section-title">Leave a comment</h3>
                    @auth
                    <form action="{{route('comments.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="comment">Message *</label>
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <textarea name="comment" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" value="Leave Comment" class="btn btn-primary">
                        </div>
                    </form>
                    @else
                    <div>
                        <a href="{{route('login')}}" class="btn btn-primary">Login For Leave Comment</a>
                    </div>
                    @endauth
                </div>
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <div class="d-flex flex-column text-center bg-secondary rounded mb-5 py-5 px-4">
                    <img src="/img/user.jpg" class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px;">
                    <h3 class="text-white mb-3">{{$post->user->name}}</h3>
                    <p class="text-white m-0">Conset elitr erat vero dolor ipsum et diam, eos dolor lorem ipsum,
                        ipsum
                        ipsum sit no ut est. Guber ea ipsum erat kasd amet est elitr ea sit.</p>
                </div>
                <div class="mb-5">
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control" style="padding: 25px;" placeholder="Keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <h3 class="mb-4 section-title">Categories</h3>
                    <ul class="list-inline m-0">
                        @foreach ($categories as $category)
                        <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                            <a class="text-dark" href="#"><i class="fa fa-angle-right text-secondary mr-2"></i>{{$category->name}}</a>
                            <span class="badge badge-primary badge-pill">{{$category->posts()->count()}}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="mb-5">
                    <h3 class="mb-4 section-title">Tag Cloud</h3>
                    <div class="d-flex flex-wrap m-n1">
                        @foreach ($tags as $tag)
                        <a href="" class="btn btn-outline-secondary m-1">{{$tag->name}}</a>
                        @endforeach
                    </div>
                </div>
                < class="mb-5">

                    <h3 class="mb-4 section-title">Recent Post</h3>
                    @foreach ($resent_posts as $resent_post)

                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-fluid rounded" src="{{ asset('storage/' . $resent_post->image) }}" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="{{route('posts.show', $resent_post->id)}}">{{$resent_post->title}}</a>
                            <div class="d-flex">
                                <small><a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a></small>
                                <small class="text-primary px-2">|</small>
                                <small><a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a></small>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>

        </div>
    </div>
</div>
</div>
<!-- Detail End -->

@endsection