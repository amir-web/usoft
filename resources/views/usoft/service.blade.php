@extends('layouts.usoft')
@section('content')
    <section class="section">
        <div class="container">
            <div style="margin-top: 100px;" class="section__title">
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
