@extends('layouts.usoft')
@section('content')
    <div class=" section--chit">
        <ul class="breadcrumb">
            <div class="container">
                <li><a href="{{route('main')}}">{{ __('menu.home') }}</a></li>
                <li><a><span>{{__('website.title')}}</span></a></li>
            </div>
        </ul>
    </div>


    <!--  -->

    <!-- intro -->
    <section class="section__mobile ">
        <div class="container">
            <div class="intro intro--mobile">
                <div class="intro__content intro__content--mobile col-md-6 ">
                    <div class="intro__title intro__title--mobile">{{__('website.title')}}</div>
                    <div class="intro__text intro--text--mobile col-12 ">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat ac id sed augue odio cras justo, id.
                        Fringilla amet et, blandit sit enim. Amet, vel feugiat mauris urna sit. Sed cursus ultricies tris
                    </div>
                    <button id="order_btn" class="app__btn app__btn--red   col-md-6 col-sm-12 col-xs-10 ">{{__('website.button')}} </button>


                </div>
                <div class="intro__img   col-6">
                    <img class="w-100" src="/public/usoft/images/MacBook Pro.png" alt="">
                </div>

            </div><!-- intro -->
        </div><!-- container -->
    </section>



    <section class="section">
        <div class="container">
            <div class="section__title">{{__('main.ser_title')}}</div>
            <div class="section__text">
                Из приложений B2B или B2E для предприятий, малого бизнеса и стартапов, lorem ipsum dolor sit amet,
                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
    </section>

    <section class="section__pligins">
        <div class="container">
            <div class="section__icon row justify-content-md-center ">
                <div class="section__item col-lg-2 col-md-3 col-6">
                    <a href="#"><img src="/public/usoft/images/services/apple.png" alt=""></a>
                    <p>
                        ios
                    </p>
                </div>
                <div class="section__item col-lg-2 col-md-3 col-6">
                    <a href="#"><img src="/public/usoft/images/services/android.png" alt=""></a>
                    <p>
                        android
                    </p>
                </div>
                <div class="section__item col-lg-2 col-md-3 col-6">
                    <a href="#"><img src="/public/usoft/images/services/react.png" alt=""></a>
                    <p>
                        react native
                    </p>
                </div>
                <div class="section__item col-lg-2 col-md-3 col-6">
                    <a href="#"><img src="/public/usoft/images/services/coffe.png" alt=""></a>
                    <p>
                        hybrid app
                    </p>
                </div>
                <div class="section__item col-lg-2 col-md-3 col-6">
                    <a href="#"><img src="/public/usoft/images/services/connectdevelop.png" alt=""></a>
                    <p>
                        cross-platform
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section__title">
                {{__('website.last_projects')}}
            </div>
        </div>
    </section>


    <section class="portfolio">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <div class="row h-100 justify-content-center">
                        <div class=" col-md-4 col-8  px-3 pb-3">
                            <div class="portfolio__inner">
                                <div class="portfolio__img">
                                    <img src="/public/usoft/images/portfolio/2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-4 col-8  px-3 pb-3">
                            <div class="portfolio__inner">
                                <div class="portfolio__img">
                                    <img src="/public/usoft/images/projects/1.jpg" alt="">
                                </div>
                                <div class="portfolio__text">
                                    <a href="{{route('show_portfolio', 2)}}">alutex.uz</a>
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-4 col-8  px-3 pb-3">
                            <div class="portfolio__inner">
                                <div class="portfolio__img">
                                    <img src="/public/usoft/images/portfolio/3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- container -->
    </section><!-- portfolio -->



    <section class="section">
        <div class="container">
            <div class="section__title">
                {{__('website.other_projects')}}
            </div>


            <div class="team__inner row justify-content-md-center">
                <a href="webdevelopment.html" class="team__item col-lg-4 col-md-6 col-12 ">
                    <div class="team__img"><img src="/public/usoft/images/team/1.svg" alt=""></div>
                    <div class="team__title">{{__('main.ser_title1')}}</div>
                    <div class="team__text">
                        {{__('main.ser_desc1')}}
                    </div>
                </a>
                <a href="Mobiledevelopment.html" class="team__item col-lg-4 col-md-6 col-12">
                    <div class="team__img"><img src="/public/usoft/images/team/2.svg" alt=""></div>
                    <div class="team__title">
                        {{__('main.ser_title2')}}
                    </div>
                    <div class="team__text">
                        {{__('main.ser_desc2')}}
                    </div>
                </a>
                <a href="businessAutomation.html" class="team__item col-lg-4 col-md-6 col-12">
                    <div class="team__img"><img src="/public/usoft/images/team/3.svg" alt=""></div>
                    <div class="team__title">{{__('main.ser_title3')}}</div>
                    <div class="team__text">
                        {{__('main.ser_desc3')}}
                    </div>
                </a>
            </div>
        </div>

    </section>
@endsection
