@extends('layouts.usoft')
@section('content')
    <section class="section intro--section ">
        <div class="container">
            <div class="section__title">{{__('service.title')}}</div>
            <div class="team__inner row justify-content-md-center">
                <a href="{{route('website')}}" class="team__item col-lg-4 col-md-6 col-12 ">
                    <div class="team__img"><img src="/public/usoft/images/team/1.svg" alt=""></div>
                    <div class="team__title">{{__('service.title1')}}</div>
                    <div class="team__text">
                        {{__('service.desc1')}}
                    </div>
                </a>
                <a href="{{route('mobile_app')}}" class="team__item col-lg-4 col-md-6 col-12">
                    <div class="team__img"><img src="/public/usoft/images/team/2.svg" alt=""></div>
                    <div class="team__title">
                        {{__('service.title2')}}
                    </div>
                    <div class="team__text">
                        {{__('service.desc2')}}
                    </div>
                </a>
                <a href="{{route('automation')}}" class="team__item col-lg-4 col-md-6 col-12">
                    <div class="team__img"><img src="/public/usoft/images/team/3.svg" alt=""></div>
                    <div class="team__title">{{__('service.title3')}}</div>
                    <div class="team__text">
                        {{__('service.desc3')}}
                    </div>
                </a>
            </div>

        </div><!-- CONTAINER -->
    </section>


@endsection
