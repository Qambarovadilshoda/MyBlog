    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="{{route('home')}}" class="navbar-brand">
                    <h1 class="m-0 mt-n3 display-4 text-primary">{{__('Klean')}}</h1>
                </a>
                <p>{{__('Cleanliness is the future!')}}</p>
                <h5 class="font-weight-semi-bold text-white mb-2">{{__('Opening Hours:')}}</h5>
                <p class="mb-1">{{__('Mon – Sat, 8AM – 5PM')}}</p>
                <p class="mb-0">{{__('Sunday: Closed')}}</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">{{__('Get In Touch')}}</h4>
                <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>{{__('Tashkent, Uzbekistan')}}</p>
                <p><i class="fa fa-phone-alt text-primary mr-2"></i>+998 99 027 08 07</p>
                <p><i class="fa fa-envelope text-primary mr-2"></i>formy@gmail.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">{{__('Quick Links')}}</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="{{route('home')}}"><i class="fa fa-angle-right mr-2"></i>{{__('Home')}}</a>
                    <a class="text-white mb-2" href="{{route('about')}}"><i class="fa fa-angle-right mr-2"></i>{{__('About Us')}}</a>
                    <a class="text-white mb-2" href="{{route('services')}}"><i class="fa fa-angle-right mr-2"></i>{{__('Our Services')}}</a>
                    <a class="text-white mb-2" href="{{route('projects')}}"><i class="fa fa-angle-right mr-2"></i>{{__('Our Projects')}}</a>
                    <a class="text-white" href="{{route('contacts')}}"><i class="fa fa-angle-right mr-2"></i>{{__('Contact Us')}}</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">{{__('Newsletter')}}</h4>
                <p>{{__('Cleanliness is the future!')}}</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-0" style="padding: 25px;" placeholder="{{__('Your Email')}}">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">{{__('Sign Up')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="{{route('home')}}">{{__('Your Site Name')}}</a>. {{__('All Rights Reserved. Designed by')}} <a href="https://laravel.com">Laravel</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <!-- Contact javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

    </html>
