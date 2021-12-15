@extends('layouts.usoft')
@section('content')
    <!-- intro -->
    <section class="section intro--section">
        <div class="container">
            <div class="intro">
                <div class="intro__content col-6">
                    <div class="intro__title">
                        @if(app()->getLocale() == 'ru')
                            {{$portfolio_content->title_ru}}
                        @elseif(app()->getLocale() == 'uz')
                            {{$portfolio_content->title_uz}}
                        @else
                            {{$portfolio_content->title_ru}}
                        @endif
                    </div>
                    <div class="intro__text col-10  ">
                        @if(app()->getLocale() == 'ru')
                            {!! $portfolio_content->description_ru !!}
                        @elseif(app()->getLocale() == 'uz')
                            {!! $portfolio_content->description_uz !!}
                        @else
                            {!! $portfolio_content->description_ru !!}
                        @endif
                    </div>


                </div>
                <div class="intro__img col-6">
                    <img src="{{$portfolio_content->getImage()}}" alt="">
                </div>

            </div><!-- intro -->
        </div><!-- container -->
    </section>

    <section class="portfolio">
        <div class="container">
            <nav>
                <div class="nav nav-tabs servisec__btn" id="nav-tab" role="tablist">
                    <button class="nav-link active servisec__btn__item--red" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">Веб-разработка</button>
                    <button class="nav-link servisec__btn__item--yellow" id="nav-profile-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                            aria-selected="false">Разработка мобильных приложений</button>
                    <button class="nav-link servisec__btn__item--orchid" id="nav-contact-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                            aria-selected="false">Дизайн</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="web_dev" class="row h-100">

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
                                <div class="surface-container">
                                    <div class="article" id="article1">


                                    </div>

                                    <div class="status">
                                        <div class="loader">...</div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row h-100">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
                                    <div class="portfolio__inner">
                                        <div class="portfolio__img">
                                            <img src="./usoft/images/projects/alutex.jpg" alt="">
                                        </div>
                                        <div class="portfolio__text">
                                            <a href="portfolio/3.html">
                                                ALUTEX.UZ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
                                    <div class="portfolio__inner">
                                        <div class="portfolio__img">
                                            <img src="./usoft/images/projects/24seven.jpg" alt="">
                                        </div>
                                        <div class="portfolio__text">
                                            <a href="portfolio/3.html">
                                                ALUTEX.UZ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
                                    <div class="portfolio__inner">
                                        <div class="portfolio__img">
                                            <img src="./usoft/images/img/3.png" alt="">
                                        </div>
                                        <div class="portfolio__text">
                                            <a href="portfolio/3.html">
                                                ALUTEX.UZ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
                                    <div class="portfolio__inner">
                                        <div class="portfolio__img">
                                            <img src="./usoft/images/img/4.png" alt="">
                                        </div>
                                        <div class="portfolio__text">
                                            <a href="portfolio/3.html">
                                                ALUTEX.UZ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
                                    <div class="portfolio__inner">
                                        <div class="portfolio__img">
                                            <img src="./usoft/images/img/5.png" alt="">
                                        </div>
                                        <div class="portfolio__text">
                                            <a href="portfolio/3.html">
                                                ALUTEX.UZ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
                                    <div class="portfolio__inner">
                                        <div class="portfolio__img">
                                            <img src="./usoft/images/img/6.png" alt="">
                                        </div>
                                        <div class="portfolio__text">
                                            <a href="portfolio/4.html">
                                                web3
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row h-100">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
                                    <div class="portfolio__inner">
                                        <div class="portfolio__img">
                                            <img src="./usoft/images/projects/alutex.jpg" alt="">
                                        </div>
                                        <div class="portfolio__text">
                                            <a href="portfolio/3.html">
                                                ALUTEX.UZ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
                                    <div class="portfolio__inner">
                                        <div class="portfolio__img">
                                            <img src="./usoft/images/projects/24seven.jpg" alt="">
                                        </div>
                                        <div class="portfolio__text">
                                            <a href="portfolio/3.html">
                                                ALUTEX.UZ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
                                    <div class="portfolio__inner">
                                        <div class="portfolio__img">
                                            <img src="./usoft/images/img/3.png" alt="">
                                        </div>
                                        <div class="portfolio__text">
                                            <a href="portfolio/3.html">
                                                ALUTEX.UZ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
                                    <div class="portfolio__inner">
                                        <div class="portfolio__img">
                                            <img src="./usoft/images/img/4.png" alt="">
                                        </div>
                                        <div class="portfolio__text">
                                            <a href="portfolio/3.html">
                                                ALUTEX.UZ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
                                    <div class="portfolio__inner">
                                        <div class="portfolio__img">
                                            <img src="./usoft/images/img/5.png" alt="">
                                        </div>
                                        <div class="portfolio__text">
                                            <a href="portfolio/3.html">
                                                ALUTEX.UZ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
                                    <div class="portfolio__inner">
                                        <div class="portfolio__img">
                                            <img src="./usoft/images/img/6.png" alt="">
                                        </div>
                                        <div class="portfolio__text">
                                            <a href="portfolio/4.html">
                                                web3
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- portfolio -->

    <div class="container text-center preloader" style="display: none">
        <img src="/public/usoft/images/preloader.gif" alt="">
    </div>

    <section class="portfolio__button"></section>

    {{--<section class="portfolio">
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
                                @foreach($dis_items as $dis)
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

    <section class="portfolio__button"></section>--}}




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let load = true
        function loadMore(page) {
            $.ajax({
                url:'?page=' + page,
                type:'get',
                beforeSend: function () {
                    $('.preloader').show()
                }
            })
            .done(function f(data) {
                load = true

                if(data.html == ''){
                    load = false
                    $('.preloader').html('<div></div>')
                    return
                }
                $('.preloader').hide()
                $('#web_dev').append(data.html)
            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
                console.log('Not found!')

            })
        }

        let page = 1




        $(window).scroll(function() {
            var hT = $('#web_dev').offset().top,
                hH = $('#web_dev').outerHeight(),
                wH = $(window).height(),
                wS = $(this).scrollTop();
            //console.log((hT-wH) , wS);
            if (wS > (hT+hH-wH) && load){
                page++
                loadMore(page)
                load = false
            }
        });
    </script>


@endsection
