@extends('layouts.usoft')
@section('content')

<!-- intro -->
<section class="section intro--section ">
        <div class="container">
            <div class="intro">
                <div class="intro__content col-6">
                    <div class="intro__title" style="font-size: 39px">
                        @if(app()->getLocale() == 'ru')
                            {!! $main_content->title_ru !!}
                        @elseif(app()->getLocale() == 'uz')
                            {!! $main_content->title_uz !!}
                        @else
                            {!! $main_content->title_ru !!}
                        @endif
                    </div>
                    <div class="  col-11">

                        <div class="swiper mySwiper card__width">
                            <div class="swiper-wrapper">
                                @foreach($main_services as $item)
                                <div class="swiper-slide">
                                    <div class="new__btn">
                                        <a href="{{route('service_show',$item->id)}}" class="new__item">
                                            <div class="new__title">
                                                @if(app()->getLocale() == 'ru')
                                                    {{$item->title_ru}}
                                                @elseif(app()->getLocale() == 'uz')
                                                    {{$item->title_uz}}
                                                @else
                                                    {{$item->title_ru}}
                                                @endif
                                            </div>
                                            <img class="new__img" src="{{$item->getImage()}}" alt="">
                                        </a>

                                    </div>
                                </div>
                                @endforeach
                                {{--<div class="swiper-slide">
                                    <div class="new__btn">
                                        <a href="{{route('service_show',4)}}" class="new__item">
                                            <div class="new__title">
                                                {{__('main.slide2')}}
                                            </div>
                                            <img class="new__img" src="/usoft/images/btn/cuate.svg" alt="">
                                        </a>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="new__btn">
                                        <a href="{{route('service_show',6)}}" class="new__item">
                                            <div class="new__title">
                                                {{__('main.slide3')}}
                                            </div>
                                            <img class="new__img" src="/usoft/images/btn/mobile.svg" alt="">
                                        </a>

                                    </div>
                                </div>--}}

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

        <div class="team__inner row justify-content-md-center">
            @foreach($web_service as $item)
                <div class="team__item col-lg-4 col-md-6 col-12 ">
                    <a href="{{route('service_show', $item->id)}}">
                    <div class="team__img"><img src="{{$item->getImage()}}" alt=""></div>
                    <div class="team__title">
                        @if(app()->getLocale() == 'ru')
                            {{$item->title_ru}}
                        @elseif(app()->getLocale() == 'uz')
                            {{$item->title_uz}}
                        @else
                            {{$item->title_ru}}
                        @endif
                    </div>
                    <div class="team__text">
                        @if(app()->getLocale() == 'ru')
                            {{$item->description_ru}}
                        @elseif(app()->getLocale() == 'uz')
                            {{$item->description_uz}}
                        @else
                            {{$item->description_ru}}
                        @endif
                    </div>
                    </a>
                </div>

            @endforeach
            {{--<div class="team__item col-lg-4 col-md-6 col-12">
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
            </div>--}}
        </div>
    </div><!-- CONTAINER -->
</section>
<section class="order__btn">
    <button id="order_btn" class="app__btn app__btn--red   col-md-6 col-sm-12 col-xs-10 ">{{__('website.button')}} </button>
</section>
<section class="section section__top">
    <div class="container">
        <div class="section__title">
            @if(app()->getLocale() == 'ru')
                {{$section_benefit_title->title_ru}}
            @elseif(app()->getLocale() == 'uz')
                {{$section_benefit_title->title_uz}}
            @else
                {{$section_benefit_title->title_ru}}
            @endif
        </div>

        <div class="works row">
            @foreach($section_benefit as $item)
            <div class=" col-12 col-sm-6">
                <div class="works__item">
                    <div class="works__img"><img src="{{$item->getImage()}}" alt=""></div>
                    <div class="works__content">
                        <div class="works__title">
                            @if(app()->getLocale() == 'ru')
                                {{$item->title_ru}}
                            @elseif(app()->getLocale() == 'uz')
                                {{$item->title_uz}}
                            @else
                                {{$item->title_ru}}
                            @endif
                        </div>
                        <div class="works__text">
                            @if(app()->getLocale() == 'ru')
                                {{$item->description_ru}}
                            @elseif(app()->getLocale() == 'uz')
                                {{$item->description_uz}}
                            @else
                                {{$item->description_ru}}
                            @endif
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
            {{--<div class=" col-12 col-sm-6">
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
            </div>--}}
        </div><!-- works -->
    </div><!-- container -->
</section>

<section class="section">
    <div class="container">
        <div class="section__title">
            @if(app()->getLocale() == 'ru')
                {{$portfolio_content->title_ru}}
            @elseif(app()->getLocale() == 'uz')
                {{$portfolio_content->title_uz}}
            @else
                {{$portfolio_content->title_ru}}
            @endif
        </div>
        <div class="section__text">
            @if(app()->getLocale() == 'ru')
                {!! $portfolio_content->description_ru !!}
            @elseif(app()->getLocale() == 'uz')
                {!! $portfolio_content->description_uz !!}
            @else
                {!! $portfolio_content->description_ru !!}
            @endif
        </div>
    </div>
</section>




<section class="portfolio">
    <div class="container">
        <nav>
            <div class="nav nav-tabs servisec__btn" id="nav-tab" role="tablist">
                <button class="nav-link active servisec__btn__item--red" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">{{ __('buttons.web_dev') }}</button>
                <button class="nav-link servisec__btn__item--yellow" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">{{ __('buttons.mobile_app') }}</button>
                <button class="nav-link servisec__btn__item--orchid" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">{{ __('buttons.design') }}</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row h-100">
                            @foreach($web_items as $web)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
                                <div class="portfolio__inner">
                                    <div class="portfolio__img">
                                        <img class="pi" src="{{$web->getImage()}}" alt="">
                                    </div>
                                    <div class="portfolio__text">
                                        <a href="{{route('show_portfolio', $web->id)}}">
                                            @if(app()->getLocale() == 'ru')
                                                {{$web->title_ru}}
                                            @elseif(app()->getLocale() == 'uz')
                                                {{$web->title_uz}}
                                            @else
                                                {{$web->title_ru}}
                                            @endif
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row h-100">
                            @foreach($mob_items as $mob)
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
                                    <div class="portfolio__inner">
                                        <div class="portfolio__img">
                                            <img class="pi" src="{{$mob->getImage()}}" alt="">
                                        </div>
                                        <div class="portfolio__text">
                                            <a href="{{route('show_portfolio', $mob->id)}}">
                                                @if(app()->getLocale() == 'ru')
                                                    {{$mob->title_ru}}
                                                @elseif(app()->getLocale() == 'uz')
                                                    {{$mob->title_uz}}
                                                @else
                                                    {{$mob->title_ru}}
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row h-100">
                            @foreach($aut_items as $dis)
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
                                    <div class="portfolio__inner">
                                        <div class="portfolio__img">
                                            <img class="pi" src="{{$dis->getImage()}}" alt="">
                                        </div>
                                        <div class="portfolio__text">
                                            <a href="{{route('show_portfolio', $dis->id)}}">
                                                @if(app()->getLocale() == 'ru')
                                                    {{$dis->title_ru}}
                                                @elseif(app()->getLocale() == 'uz')
                                                    {{$dis->title_uz}}
                                                @else
                                                    {{$dis->title_ru}}
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- portfolio -->


<section class="section">
    <div class="container">
        <h1 class="section__title">
            @if(app()->getLocale() == 'ru')
                {{$service_title->title_ru}}
            @elseif(app()->getLocale() == 'uz')
                {{$service_title->title_uz}}
            @else
                {{$service_title->title_ru}}
            @endif
        </h1>
        <div class="swiper mySwiper1">
            <div class="swiper-wrapper">
                @foreach($other_service as $service)
                    <div class="swiper-slide sldier--services">
                        <a href="{{route('service_show', $service->parent_id)}}" class="services__card my-3 d-block">
                            <div class="secvices__card__inner">
                                <img src="{{$service->getImage()}}" alt="">
                                <div class="secvices__card__text">
                                    @if(app()->getLocale() == 'ru')
                                        {{$service->title_ru}}
                                    @elseif(app()->getLocale() == 'uz')
                                        {{$service->title_uz}}
                                    @else
                                        {{$service->title_ru}}
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination pogi"></div>
        </div>


    </div><!-- container -->

</section><!-- section -->







@endsection
