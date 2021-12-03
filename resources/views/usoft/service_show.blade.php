@extends('layouts.usoft')
@section('content')


    <div class=" section--chit">
        <ul class="breadcrumb">
            <div class="container">
                <li><a href="{{route('main')}}">{{ __('menu.home') }}</a></li>
                <li>
                    <a>
                        <span>
                            @if(app()->getLocale() == 'ru')
                                {{$show->title_ru}}
                            @elseif(app()->getLocale() == 'uz')
                                {{$show->title_uz}}
                            @else
                                {{$show->title_ru}}
                            @endif
                        </span>
                    </a>
                </li>
            </div>
        </ul>
    </div>


    <!--  -->

    <!-- intro -->
    <section class=" section__mobile  ">
        <div class="container">
            <div class="intro intro--mobile">
                <div class="intro__content intro__content--mobile col-md-8 ">
                    <div class="intro__title intro__title--mobile">
                        @if(app()->getLocale() == 'ru')
                            {{$show->title_ru}}
                        @elseif(app()->getLocale() == 'uz')
                            {{$show->title_uz}}
                        @else
                            {{$show->title_ru}}
                        @endif
                    </div>
                    <div class="intro__text intro--text--mobile col-11  ">
                        @if(app()->getLocale() == 'ru')
                            {{$show->text_ru}}
                        @elseif(app()->getLocale() == 'uz')
                            {{$show->text_uz}}
                        @else
                            {{$show->text_ru}}
                        @endif
                    </div>
                    <button id="order_btn" class="app__btn app__btn--red   col-md-6 col-sm-12 col-xs-10 ">{{__('website.button')}} </button>


                </div>
                <div class="intro__img intro__img--mobile col-4">
                    @foreach($image2 as $item)
                    <img src="/storage/uploads/{{$item->filename}}" alt="">
                    @endforeach
                </div>

            </div><!-- intro -->
        </div><!-- container -->
    </section>



    <section class="section">
        <div class="container">
            <div class="section__title">
                @if(app()->getLocale() == 'ru')
                    {{$section_service_title->title_ru}}
                @elseif(app()->getLocale() == 'uz')
                    {{$section_service_title->title_uz}}
                @else
                    {{$section_service_title->title_ru}}
                @endif
            </div>
            <div class="team__inner row justify-content-md-center">
                @foreach($section_service as $item)
                    <a href="{{route('service_show', $item->id)}}" class="team__item col-lg-4 col-md-6 col-12 ">
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
                @endforeach
                {{--<a href="{{route('mobile_app')}}" class="team__item col-lg-4 col-md-6 col-12">
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
                </a>--}}
            </div>

        </div><!-- container -->

    </section><!-- section -->
@endsection
