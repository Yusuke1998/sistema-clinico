<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/website.css') }}" rel="stylesheet">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div id="wrapper">
        <div id="app">
            @include('layouts.web-ly.header')
            <!-- Section: intro -->
            <section id="intro" class="intro">
                <div class="intro-content">
                    <div class="container">
                        <v-carousel  
                            :autoplay="true"
                            autoplay_speed="3"
                            :nav="false"
                            :items="4">
                            <img src="{{asset('website/img/photo/1.jpg')}}">
                            <img src="{{asset('website/img/photo/2.jpg')}}">
                            <img src="{{asset('website/img/photo/3.jpg')}}">
                            <img src="{{asset('website/img/photo/4.jpg')}}">
                            <img src="{{asset('website/img/photo/5.jpg')}}">
                            <img src="{{asset('website/img/photo/6.jpg')}}">
                        </v-carousel>
                    </div>
                </div>      
            </section>
            <!-- /Section: intro -->

            <!-- Section: eventos -->
            <section id="eventos" class="home-section nopadding paddingtop-60">
                <div class="container">
                    <div class="row">
                        
                    </div>      
                </div>
            </section>
            <!-- /Section: eventos -->

            <!-- Section: noticias -->
            <section id="noticias" class="home-section nopadding paddingtop-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-title">Hola</div>
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-title">Hola</div>
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-title">Hola</div>
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-title">Hola</div>
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </section>
            <!-- /Section: noticias -->

            <!-- Section: servicios -->
            <section id="servicios" class="home-section nopadding paddingtop-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <img src="{{ asset('website/img/dummy/img-1.jpg') }}" class="img-responsive" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <div class="wow fadeInRight" data-wow-delay="0.1s">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <span class="fa fa-stethoscope fa-3x"></span> 
                                    </div>
                                    <div class="service-desc">
                                        <h5 class="h-light">Medical checkup</h5>
                                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="wow fadeInRight" data-wow-delay="0.2s">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <span class="fa fa-wheelchair fa-3x"></span> 
                                    </div>
                                    <div class="service-desc">
                                        <h5 class="h-light">Nursing Services</h5>
                                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="wow fadeInRight" data-wow-delay="0.3s">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <span class="fa fa-plus-square fa-3x"></span> 
                                    </div>
                                    <div class="service-desc">
                                        <h5 class="h-light">Pharmacy</h5>
                                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <div class="wow fadeInRight" data-wow-delay="0.1s">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <span class="fa fa-h-square fa-3x"></span> 
                                    </div>
                                    <div class="service-desc">
                                        <h5 class="h-light">Gyn Care</h5>
                                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="wow fadeInRight" data-wow-delay="0.2s">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <span class="fa fa-filter fa-3x"></span> 
                                    </div>
                                    <div class="service-desc">
                                        <h5 class="h-light">Neurology</h5>
                                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="wow fadeInRight" data-wow-delay="0.3s">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <span class="fa fa-user-md fa-3x"></span> 
                                    </div>
                                    <div class="service-desc">
                                        <h5 class="h-light">Sleep Center</h5>
                                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </section>
            <!-- /Section: servicios -->

            <!-- Section: contactos -->
            <section id="contactos" class="home-section nopadding paddingtop-60">
                <div class="container">
                    <div class="row">
                        
                    </div>      
                </div>
            </section>
            <!-- /Section: contactos -->

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="wow fadeInDown" data-wow-delay="0.1s">
                                <div class="widget">
                                    <h5>Localización</h5>
                                    <p>San Juan de los Morros.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-offset-4 col-md-4">
                            <div class="wow fadeInDown" data-wow-delay="0.1s">
                                <div class="widget">
                                    <h5>Redes Sociales</h5>
                                    <ul class="company-social">
                                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                            <li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-12 text-center text-uppercase">
                        <small>Dirección de Informatica / UNERG / JhonnyPrz</small>
                    </div> 
                </div>
            </footer>
        </div>
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <script src="{{ asset('js/website.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
