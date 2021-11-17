@extends('layouts.usoft')
@section('content')

<!-- intro -->
<section class="section intro--section ">
        <div class="container">
            <div class="intro">
                <div class="intro__content col-6">
                    <div class="intro__title" style="font-size: 39px">{{__('main.banner_title')}}</div>
                    <div class="  col-11">

                        <div class="swiper mySwiper card__width">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="new__btn">
                                        <a href="{{route('website')}}" class="new__item">
                                            <div class="new__title">
                                                {{__('main.slide1')}}
                                            </div>
                                            <img class="new__img" src="/usoft/images/btn/1.svg" alt="">
                                        </a>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="new__btn">
                                        <a href="{{route('automation')}}" class="new__item">
                                            <div class="new__title">
                                                {{__('main.slide2')}}
                                            </div>
                                            <img class="new__img" src="/usoft/images/btn/cuate.svg" alt="">
                                        </a>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="new__btn">
                                        <a href="{{route('mobile_app')}}" class="new__item">
                                            <div class="new__title">
                                                {{__('main.slide3')}}
                                            </div>
                                            <img class="new__img" src="/usoft/images/btn/mobile.svg" alt="">
                                        </a>

                                    </div>
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>


                        <!--                   <div class="new__btn">
                              <a href="#" class="new__item">
                                 <div class="new__title">
                                    Разработка веб сайтов
                                 </div>
                                 <img class="new__img" src="/usoft/images/btn/1.svg" alt="">
                              </a>

                           </div> -->
                        <!-- <a href="#" class="app__btn app__btn--red col-10 ">Разработка веб сайтов</a>
                        <a href="#" class="app__btn app__btn--yellow col-10">Автоматизация систем</a>
                        <a href="#" class="app__btn app__btn--orchid mb-0 col-10">Дополнительные услуги</a> -->
                    </div>
                </div>
                <div class="intro__img col-6">
                    <img src="/usoft/images/intro.svg" alt="">
                </div>

            </div><!-- intro -->
        </div><!-- container -->
    </section>

<section class="section section__bottom">
    <div class="container">
        <div class="section__title">{{__('main.cat_sec_title')}}</div>

        <div class="team__inner row justify-content-md-center">
            <div class="team__item col-lg-4 col-md-6 col-12 ">
                <div class="team__img"><img src="/usoft/images/team/1.svg" alt=""></div>
                <div class="team__title">{{__('main.cat_title1')}}</div>
                <div class="team__text">
                    {{__('main.cat_desc1')}}
                </div>
            </div>
            <div class="team__item col-lg-4 col-md-6 col-12">
                <div class="team__img"><img src="/usoft/images/team/2.svg" alt=""></div>
                <div class="team__title">{{__('main.cat_title2')}}</div>
                <div class="team__text">
                    {{__('main.cat_desc2')}}
                </div>
            </div>
            <div class="team__item col-lg-4 col-md-6 col-12">
                <div class="team__img"><img src="/usoft/images/team/3.svg" alt=""></div>
                <div class="team__title">{{__('main.cat_title3')}}</div>
                <div class="team__text">
                    {{__('main.cat_desc3')}}
                </div>
            </div>
        </div>
    </div><!-- CONTAINER -->
</section>
<section class="order__btn">
    <button id="order_btn" class="app__btn app__btn--red   col-md-6 col-sm-12 col-xs-10 ">{{__('website.button')}} </button>
</section>

<section class="section section__top">
    <div class="container">
        <div class="section__title">{{__('main.only_sec_title')}}</div>

        <div class="works row">
            <div class=" col-12 col-sm-6">
                <div class="works__item">
                    <div class="works__img"><img src="/usoft/images/works/1.svg" alt=""></div>
                    <div class="works__content">
                        <div class="works__title">{{__('main.on_title1')}}</div>
                        <div class="works__text">
                            {{__('main.on_desc1')}}
                        </div>
                    </div>
                </div>

            </div>

            <div class=" col-12 col-sm-6">
                <div class="works__item">
                    <div class="works__img"><img src="/usoft/images/works/2.svg" alt=""></div>
                    <div class="works__content">
                        <div class="works__title">{{__('main.on_title2')}}</div>
                        <div class="works__text">
                            {{__('main.on_desc2')}}
                        </div>
                    </div>
                </div>

            </div>

            <div class=" col-12 col-sm-6">
                <div class="works__item">
                    <div class="works__img"><img src="/usoft/images/works/3.svg" alt=""></div>
                    <div class="works__content">
                        <div class="works__title">{{__('main.on_title3')}}</div>
                        <div class="works__text">
                            {{__('main.on_desc3')}}
                        </div>
                    </div>
                </div>

            </div>

            <div class=" col-12 col-sm-6">
                <div class="works__item">
                    <div class="works__img"><img src="/usoft/images/works/4.svg" alt=""></div>
                    <div class="works__content">
                        <div class="works__title">{{__('main.on_title4')}}</div>
                        <div class="works__text">
                            {{__('main.on_desc4')}}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- works -->
    </div><!-- container -->
</section>

<section class="section">
    <div class="container">
        <div class="section__title">{{ __('main.port_title') }}</div>
        <div class="section__text">
            {{ __('main.port_desc') }}
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="servisec__btn">
            <a href="#" class="servisec__btn__item--red ">{{ __('buttons.mobile_app') }}</a>

            <a href="#" class="servisec__btn__item--yellow ">{{ __('buttons.web_dev') }}</a>
            <a href="#" class="servisec__btn__item--orchid ">{{ __('buttons.design') }}</a>
        </div>
    </div>
</section>

<section class="portfolio">
    <div class="container">
        <div class="row">
            <div class=" col-sm-4 px-3 mb-sm-0 mb-4">
                <div class="portfolio__inner">
                    <div class="portfolio__img">
                        <img src="/usoft/images/portfolio/1.jpg" alt="">
                    </div>
                    <div class="portfolio__text">
                        <a href="{{route('show_portfolio', 1)}}"> 24seven.uz</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row h-100">
                    <div class=" col-6 px-3 pb-3">
                        <div class="portfolio__inner">
                            <div class="portfolio__img">
                                <img src="/usoft/images/projects/1.jpg" alt="">
                            </div>
                            <div class="portfolio__text">
                                <a href="{{route('show_portfolio', 2)}}"> alutex.uz</a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-6 px-3 pb-3">
                        <div class="portfolio__inner">
                            <div class="portfolio__img">
                                <img src="/usoft/images/projects/2.jpg" alt="">
                            </div>
                            <div class="portfolio__text">
                                <a href="{{route('show_portfolio', 1)}}"> 24seven.uz</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pt-3">
                        <div class="portfolio__inner">
                            <div class="portfolio__img">
                                <img src="/usoft/images/portfolio/4.png" alt="">
                            </div>
                            <div class="portfolio__text">
                                <a href="{{route('show_portfolio', 2)}}"> alutex.uz</a>
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
        <div class="section__title">{{__('main.ser_title')}}</div>
        <div class="team__inner row justify-content-md-center">
            <a href="{{route('website')}}" class="team__item col-lg-4 col-md-6 col-12 ">
                <div class="team__img"><img src="/usoft/images/team/1.svg" alt=""></div>
                <div class="team__title">{{__('main.ser_title1')}}</div>
                <div class="team__text">
                    {{__('main.ser_desc1')}}
                </div>
            </a>
            <a href="{{route('mobile_app')}}" class="team__item col-lg-4 col-md-6 col-12">
                <div class="team__img"><img src="/usoft/images/team/2.svg" alt=""></div>
                <div class="team__title">
                    {{__('main.ser_title2')}}
                </div>
                <div class="team__text">
                    {{__('main.ser_desc2')}}
                </div>
            </a>
            <a href="{{route('automation')}}" class="team__item col-lg-4 col-md-6 col-12">
                <div class="team__img"><img src="/usoft/images/team/3.svg" alt=""></div>
                <div class="team__title">{{__('main.ser_title3')}}</div>
                <div class="team__text">
                    {{__('main.ser_desc3')}}
                </div>
            </a>
        </div>

    </div><!-- container -->

</section><!-- section -->


@endsection
