@extends('layouts.usoft')
@section('content')
    <div class=" section--chit">
        <ul class="breadcrumb">
            <div class="container">
                <li><a href="{{route('main')}}">{{ __('menu.home') }}</a></li>
                <li><a><span>{{__('automation.title')}}</span></a></li>
            </div>
        </ul>
    </div>


    <!--  -->

    <!-- intro -->
    <section class="section__mobile">
        <div class="container">
            <div class="intro intro--mobile">
                <div class="intro__content intro__content--mobile col-md-8 ">
                    <div class="intro__title intro__title--mobile">{{__('automation.title')}}</div>
                    <div class="intro__text intro--text--mobile col-8  ">
                        {{__('automation.desc')}}
                    </div>
                    <button id="order_btn" class="app__btn app__btn--red   col-md-6 col-sm-12 col-xs-10 ">{{__('website.button')}}</button>
                </div>
                <div class="intro__img  col-4">
                    <img src="/usoft/images/page/bro.png" alt="">
                </div>

            </div><!-- intro -->
        </div><!-- container -->
    </section>


    <section class="section">
        <div class="container">
            <div class="section__title">
                {{__('automation.title2')}}
            </div>


            <div class="works row">
                <div class=" col-md-4 col-sm-6">
                    <div class="works__item works__item--automatic">
                        <div class="works__img"><img src="/usoft/images/works/1.svg" alt=""></div>
                        <div class="works__content">
                            <div class="works__text works__text--automatic">
                                {{__('automation.desc2')}}
                            </div>
                        </div>
                    </div>

                </div>

                <div class=" col-md-4  col-sm-6">
                    <div class="works__item works__item--automatic">
                        <div class="works__img"><img src="/usoft/images/works/2.svg" alt=""></div>
                        <div class="works__content">
                            <div class="works__text works__text--automatic">
                                {{__('automation.desc2')}}
                            </div>
                        </div>
                    </div>

                </div>

                <div class=" col-md-4  col-sm-6">
                    <div class="works__item works__item--automatic">
                        <div class="works__img"><img src="/usoft/images/works/3.svg" alt=""></div>
                        <div class="works__content">
                            <div class="works__text works__text--automatic">
                                {{__('automation.desc2')}}
                            </div>
                        </div>
                    </div>

                </div>
                <div class=" col-md-4  col-sm-6">
                    <div class="works__item works__item--automatic">
                        <div class="works__img"><img src="/usoft/images/works/3.svg" alt=""></div>
                        <div class="works__content">
                            <div class="works__text works__text--automatic">
                                {{__('automation.desc2')}}
                            </div>
                        </div>
                    </div>

                </div>
                <div class=" col-md-4  col-sm-6">
                    <div class="works__item works__item--automatic">
                        <div class="works__img"><img src="/usoft/images/works/3.svg" alt=""></div>
                        <div class="works__content">
                            <div class="works__text works__text--automatic">
                                {{__('automation.desc2')}}
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- works -->
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section__title">
                {{__('website.other_projects')}}
            </div>


            <div class="team__inner row justify-content-md-center">
                <a href="webdevelopment.html" class="team__item col-lg-4 col-md-6 col-12 ">
                    <div class="team__img"><img src="/usoft/images/team/1.svg" alt=""></div>
                    <div class="team__title">{{__('main.ser_title1')}}</div>
                    <div class="team__text">
                        {{__('main.ser_desc1')}}
                    </div>
                </a>
                <a href="Mobiledevelopment.html" class="team__item col-lg-4 col-md-6 col-12">
                    <div class="team__img"><img src="/usoft/images/team/2.svg" alt=""></div>
                    <div class="team__title">
                        {{__('main.ser_title2')}}
                    </div>
                    <div class="team__text">
                        {{__('main.ser_desc2')}}
                    </div>
                </a>
                <a href="businessAutomation.html" class="team__item col-lg-4 col-md-6 col-12">
                    <div class="team__img"><img src="/usoft/images/team/3.svg" alt=""></div>
                    <div class="team__title">{{__('main.ser_title3')}}</div>
                    <div class="team__text">
                        {{__('main.ser_desc3')}}
                    </div>
                </a>
            </div>
        </div>

    </section>
@endsection
