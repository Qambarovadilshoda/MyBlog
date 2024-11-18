@extends('components.layouts.app')

@section('title', 'Post Page')

@section('content')

<x-page-header>
    {{__('Create New Post')}}
</x-page-header>


<!-- Contact Start -->
<div class="container-fluid py-4">
    <div class="v-50">
        <div class="row" style="margin-left:25%">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="contact-form">
                    <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="control-group">
                            <input type="text" class="form-control p-4" name="title" value="{{ old('title') }}" placeholder="{{__('Title')}}" />
                            @error('title')
                            <p class="help-block text-danger">{{ ' * ' . $message }}</p>
                            @enderror
                        </div><br>
                        <div class="control-group">
                            <select class="form-control" name="category_id">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div><br>
                        <div class="control-group">
                            <select class="form-control" name="tags[]" multiple>
                                @foreach ($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>
                        </div><br>
                        <div class="control-group">
                            <textarea class="form-control p-4" rows="3" name="short_content" placeholder="{{__('Short content')}}">{{ old('short_content') }}</textarea>
                            @error('short_content')
                            <p class="help-block text-danger">{{ ' * ' . $message }}</p>
                            @enderror
                        </div><br>
                        <div class="control-group">
                            <textarea class="form-control p-4" rows="6" name="context" placeholder="{{__('Your content')}}">{{ old(  'context') }}</textarea>
                            @error('context')
                            <p class="help-block text-danger">{{ ' * ' . $message }}</p>
                            @enderror
                        </div><br>
                        <div class="control-group">
                            <input type="file" class="form-control p-4.9" name="image">
                            @error('image')
                            <p class="help-block text-danger">{{ ' * ' . $message }}</p>
                            @enderror
                        </div><br>
                        <div>
                            <button class="btn btn-primary btn-block py-3 px-5" type="submit"">{{__('Create Post')}}</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
