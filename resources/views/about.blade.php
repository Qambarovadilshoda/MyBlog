@extends('components.layouts.app')

@section('title', 'About Page')

@section('content')


<x-page-header>
    {{__('About')}}
</x-page-header>


<!-- About Start -->
<div class="container-fluid py-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="d-flex flex-column align-items-center justify-content-center bg-about rounded h-100 py-5 px-3">
                    <i class="fa fa-5x fa-award text-primary mb-4"></i>
                    <h1 class="display-2 text-white mb-2" data-toggle="counter-up">25</h1>
                    <h2 class="text-white m-0">{{__('Years Experience')}}</h2>
                </div>
            </div>
            <div class="col-lg-7 pt-5 pb-lg-5">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">{{__('Learn About Us')}}</h6>
                <h1 class="mb-4 section-title">{{__('We Provide The Best Cleaning Services')}}</h1>
                <h5 class="text-muted font-weight-normal mb-3">{{__('Cleaning')}}</h5>
                <p>{{__('Cleaning is the process of removing unwanted substances, such as dirt, infectious agents, and other impurities, from an object or environment. Cleaning is often performed for aesthetic, hygienic, functional, safety, or environmental protection purposes.')}}</p>
                <div class="d-flex align-items-center pt-4">
                    <a href="" class="btn btn-primary mr-5">{{__('Learn More')}}</a>
                    <button type="button" class="btn-play" data-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                        <span></span>
                    </button>
                    <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">{{__('Play Video')}}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Video Modal Start -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- Features Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 pt-lg-5 pb-3">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">{{__('Why Choose Us')}}</h6>
                <h1 class="mb-4 section-title">{{__('25 Years Experience In Cleaning Industry')}}</h1>
                <p class="mb-4">{{__('Cleaning occurs in many different contexts, and uses many different methods. Several occupations are devoted to cleaning.')}}</p>
                <div class="row">
                    <div class="col-sm-4">
                        <h1 class="text-secondary mb-2" data-toggle="counter-up">225</h1>
                        <h6 class="font-weight-semi-bold mb-sm-4">{{__('Our Cleaners')}}</h6>
                    </div>
                    <div class="col-sm-4">
                        <h1 class="text-secondary mb-2" data-toggle="counter-up">1050</h1>
                        <h6 class="font-weight-semi-bold mb-sm-4">{{__('Happy Clients')}}</h6>
                    </div>
                    <div class="col-sm-4">
                        <h1 class="text-secondary mb-2" data-toggle="counter-up">2500</h1>
                        <h6 class="font-weight-semi-bold mb-sm-4">{{__('Projects Done')}}</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 400px;">
                <div class="position-relative h-100 rounded overflow-hidden">
                    <img class="position-absolute w-100 h-100" src="img/feature.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Team Start -->
<div class="container-fluid pt-5">
    <div class="container py-5">
        <div class="row align-items-end mb-4">
            <div class="col-lg-6">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">{{__('Meet Our Team')}}</h6>
                <h1 class="section-title mb-3">{{__('Meet Our Highly Experienced Cleaners')}}</h1>
            </div>
            <div class="col-lg-6">
                <h4 class="font-weight-normal text-muted mb-3">{{__('Cleaning occurs in various commercial, domestic, personal, and environmental contexts, which differ in scale and requirements.')}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel team-carousel position-relative">
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            </div>
                            <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">{{__('Full Name')}}</h5>
                            <p class="text-white m-0">{{__('Designation')}}</p>
                        </div>
                    </div>
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            </div>
                            <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">{{__('Full Name')}}</h5>
                            <p class="text-white m-0">{{__('Designation')}}</p>
                        </div>
                    </div>
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            </div>
                            <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">{{__('Full Name')}}</h5>
                            <p class="text-white m-0">{{__('Designation')}}</p>
                        </div>
                    </div>
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                            </div>
                            <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">{{__('Full Name')}}</h5>
                            <p class="text-white m-0">{{__('Designation')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@endsection
