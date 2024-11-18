@extends('components.layouts.app')

@section('title', 'Home Page')

@section('content')

<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-primary text-uppercase mb-md-3">{{__('Cleaning Services')}}</h5>
                        <h1 class="display-3 text-white mb-md-4">{{__('Best Quality Solution In Cleaning')}}</h1>
                        <a href="{{route('posts.index')}}" class="btn btn-primary">{{__('All Posts')}}</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-primary text-uppercase mb-md-3">{{__('Cleaning Services')}}</h5>
                        <h1 class="display-3 text-white mb-md-4">{{__('Highly Professional Cleaning Services')}}</h1>
                        <a href="{{route('posts.index')}}" class="btn btn-primary">{{__('All Posts')}}</a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="img/carousel-3.jpg" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-primary text-uppercase mb-md-3">{{__('Cleaning Services')}}</h5>
                        <h1 class="display-3 text-white mb-md-4">{{__('Experienced & Expert Cleaners')}}</h1>
                        <a href="{{route('posts.index')}}" class="btn btn-primary">{{__('All Posts')}}</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Contact Info Start -->
<div class="container-fluid pb-5 contact-info">
    <div class="row">
        <div class="col-lg-4 p-0">
            <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                <i class="fa fa-3x fa-map-marker-alt text-secondary mr-4"></i>
                <div class="">
                    <h5 class="mb-2">{{__('Our Office')}}</h5>
                    <p class="m-0">{{__('Tashkent, Uzbekistan')}}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 p-0">
            <div class="contact-info-item d-flex align-items-center justify-content-center bg-secondary text-white py-4 py-lg-0">
                <i class="fa fa-3x fa-envelope-open text-primary mr-4"></i>
                <div class="">
                    <h5 class="mb-2">{{__('Email Us')}}</h5>
                    <p class="m-0">formy@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 p-0">
            <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                <i class="fa fa-3x fa-phone-alt text-secondary mr-4"></i>
                <div class="">
                    <h5 class="mb-2">{{__('Call Us')}}</h5>
                    <p class="m-0">+998 99 027 08 07</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
