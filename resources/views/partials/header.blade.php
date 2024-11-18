<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> @yield('title', 'Klean - Cleaning Services') </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="/img/favicon.ico" rel="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="/https://fonts.gstatic.com">
    <link href="/https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="{{ route('home') }}"
                    class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h2 class="m-0 display-3 text-primary">{{__('Klean')}}</h2>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row bg-dark d-none d-lg-flex">
                    <div class="col-lg-7 text-left text-white">
                        <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>formy@gmail.com</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+998 99 027 08 07</small>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center pr-2">
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary">{{__('Klean')}}</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    {{-- {{ dump($locale) }} --}}
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ route('home') }}" class="nav-item nav-link active">{{ __('Home')}}</a>
                            <a href="{{ route('about') }}" class="nav-item nav-link">{{ __('About')}}</a>
                            <a href="{{ route(name: 'services') }}" class="nav-item nav-link">{{ __('Services')}}</a>
                            <a href="{{ route('projects') }}" class="nav-item nav-link">{{ __('Project')}}</a>
                            @if (auth()->check())
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ __('Pages')}}</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="{{ route('posts.index') }}" class="dropdown-item">{{ __('Latest Blog')}}</a>
                                    </div>
                                </div>
                            @endif
                            <a href="{{ route('contacts') }}" class="nav-item nav-link">{{ __('Contact')}}</a>
                        </div>
                        <select
                        style="padding: 10px; padding-right: 0; margin: 20px; border-radius: 20px;"
                        class="btn btn-primary"
                        id="languageSelector"
                        onchange="changeLanguage(this)">

                        <!-- Display the current locale as the selected option -->
                        <option value="" disabled selected>{{ session('locale') }}</option>

                        <!-- List other locales as selectable options -->
                        @foreach ($all_locales as $locale)
                            @if ($locale !== session('locale'))
                                <option value="{{ route('change.language', $locale) }}">
                                    {{ $locale }}
                                </option>
                            @endif
                        @endforeach
                    </select>

                    <script>
                        function changeLanguage(select) {
                            const url = select.value;
                            if (url) {
                                window.location.href = url;
                            }
                        }
                    </script>


                        @auth

                            <div style="margin-right:12px; position: relative;">
                                <a href="{{ route('notify') }}">
                                    <svg style="width: 26px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                                    </svg>
                                </a>
                                <!-- Notification Badge -->
                                @if (auth()->user()->unReadNotifications->count() > 0)
                                    <span class="notification-badge"></span>
                                @endif
                            </div>

                            <style>
                                /* Badge styling */
                                .notification-badge {
                                    position: absolute;
                                    top: 0px;
                                    right: 0px;
                                    transform: translate(8%, -42%);
                                    background-color: red;
                                    color: white;
                                    width: 10px;
                                    height: 10px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    font-size: 0.5rem;
                                    padding: 3px;
                                    border-radius: 50%;
                                }
                            </style>

                            <a href="{{ route('posts.create') }}" class="btn btn-primary mr-3 d-none d-lg-block">{{ __('Create Post')}}</a>

                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark mr-3 d-none d-lg-block">{{__('Logout')}}</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary mr-3 d-none d-lg-block">{{__('Login')}}</a>
                        @endauth
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <script>
        function changeLanguage(select) {
            const url = select.value;
            if (url) {
                window.location.href = url;
            }
        }
    </script>
    <!-- Header End -->
