@extends('layouts.usoft')
@section('content')
    <!-- intro -->
    <section class="section intro--section">
        <div class="container">
            <div class="intro">
                <div class="intro__content col-6">
                    <div class="intro__title">{{ __('main.port_title') }}</div>
                    <div class="intro__text col-10  ">
                        {{ __('main.port_desc') }}
                    </div>


                </div>
                <div class="intro__img col-6">
                    <img src="/public/usoft/images/services/1.svg" alt="">
                </div>

            </div><!-- intro -->
        </div><!-- container -->
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

                <div class="col-sm-12">
                    <div class="row h-100">
                        @foreach($portfolio as $item)
                            <div class=" col-md-4 col-6 px-3 pb-4">
                                <div class="portfolio__inner">
                                    <div class="portfolio__img">
                                        <img class="port_img_height" src="{{$item->getImage() }}" alt="">
                                    </div>
                                    <div class="portfolio__text">
                                        <a href="{{route('show_portfolio', $item->id)}}" target="blank">{{$item->title_ru}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div><!-- container -->
    </section><!-- portfolio -->

    <section class="portfolio__button"></section>


@endsection
