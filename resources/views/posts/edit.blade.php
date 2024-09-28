@extends('components.layouts.app')

@section('title', 'Post Edit Page')

@section('content')

<x-page-header>
    Edit Post - {{$post->id}}
</x-page-header>


<!-- Contact Start -->
<div class="container-fluid py-4">
    <div class="v-50">
        <div class="row" style="margin-left:25%">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="contact-form">
                    <form action="{{route('posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="control-group">
                            <input type="text" class="form-control p-4" name="title" value="{{ $post->title}}"/>
                            @error('title')
                            <p class="help-block text-danger">{{ ' * ' . $message }}</p>
                            @enderror
                        </div><br>
                        <div class="control-group">
                            <textarea class="form-control p-4" rows="3" name="short_content" >{{ $post->short_content }}</textarea>
                            @error('short_content')
                            <p class="help-block text-danger">{{ ' * ' . $message }}</p>
                            @enderror
                        </div><br>
                        <div class="control-group">
                            <textarea class="form-control p-4" rows="6" name="context" >{{ $post->context}}</textarea>
                            @error('context')
                            <p class="help-block text-danger">{{ ' * ' . $message }}</p>
                            @enderror
                        </div><br>
                        <div class="control-group">
                            <input type="file" class="form-control p-4.9" name="image" value="{{$post->image}}">
                            @error('image')
                            <p class="help-block text-danger">{{ ' * ' . $message }}</p>
                            @enderror
                        </div><br>
                        <div>
                            <button class="btn btn-primary btn-block py-3 px-5" type="submit"">Update</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->
@endsection