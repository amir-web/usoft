@extends('layouts.usoft')
@section('content')
    <section class="section intro--section ">
        <div class="container">
            <div class="intro">
                <div class="intro__content col-7">
                    <div class="intro__title">O Usoft </div>
                    <div class="intro__text col-12">
                        <p>
                        <h6 class="intro__text--title">
                            USOFT is a leading tech company specializing in
                            providing IT services for corporate customers
                            around the globe.
                        </h6>
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur condimentum pretium id ac
                            vestibulum scelerisque aliquam dui neque. In rhoncus libero scelerisque erat id gravida arcu
                            egestas lacus. Hac nunc phasellus nunc amet, sit. Diam eget sed ultricies molestie.

                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur condimentum pretium id ac
                            vestibulum scelerisque aliquam dui neque. In rhoncus libero scelerisque erat id gravida arcu
                            egestas lacus. Hac nunc phasellus nunc amet, sit. Diam eget sed ultricies molestie.

                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mauris tincidunt non, ipsum augue
                            accumsan, condimentum sit. Netus turpis viverra nam eget ipsum volutpat ante luctus. Eleifend
                            tortor vel massa nunc elit viverra.
                        </p>
                    </div>
                </div>
                <div class="intro__img  col-5">
                    <img src="/usoft/images/page2.png" alt="">
                </div>

            </div><!-- intro -->
        </div><!-- container -->
    </section>
    <section class="section intro--section ">
        <div class="container">
            <div class="section__title">{{__('service.title')}}</div>
            <div class="team__inner row justify-content-md-center">
                <a href="{{route('website')}}" class="team__item col-lg-4 col-md-6 col-12 ">
                    <div class="team__img"><img src="/usoft/images/team/1.svg" alt=""></div>
                    <div class="team__title">{{__('service.title1')}}</div>
                    <div class="team__text">
                        {{__('service.desc1')}}
                    </div>
                </a>
                <a href="{{route('mobile_app')}}" class="team__item col-lg-4 col-md-6 col-12">
                    <div class="team__img"><img src="/usoft/images/team/2.svg" alt=""></div>
                    <div class="team__title">
                        {{__('service.title2')}}
                    </div>
                    <div class="team__text">
                        {{__('service.desc2')}}
                    </div>
                </a>
                <a href="{{route('automation')}}" class="team__item col-lg-4 col-md-6 col-12">
                    <div class="team__img"><img src="/usoft/images/team/3.svg" alt=""></div>
                    <div class="team__title">{{__('service.title3')}}</div>
                    <div class="team__text">
                        {{__('service.desc3')}}
                    </div>
                </a>
            </div>

        </div><!-- CONTAINER -->
    </section>



@endsection
