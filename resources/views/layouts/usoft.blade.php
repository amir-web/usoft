<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/usoft/images/g10.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&family=Rubik:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/usoft/css/style.css">
    <title>Usoft</title>
</head>

<body>

<!-- my modal -->
<div class="none">
    <div class="back">
        <div class="message_modal">
            <h2>{{__('modal_form.s_title')}}</h2>
            <p>{{__('modal_form.s_desc')}}</p>
            <button type="button" class="btn modal__btn modal--btn m_close">Ок</button>
        </div>
    </div>
</div>


<!-- header -->
<div class="container">
    <header class="header">
        <nav class="navbar">
            <a href="{{route('main')}}" class="nav-logo"><img src="/usoft/images/logo-black.svg" class="w-100" alt=""></a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{route('main')}}" class="nav-link">{{ __('menu.home') }}</a>
                    @if(request()->is('/'))
                        <span class="border1"></span>
                    @endif
                </li>
                <li class="nav-item">
                    <a href="{{route('service')}}" class="nav-link">{{ __('menu.services') }}</a>
                    @if(request()->is('service*'))
                        <span class="border1"></span>
                    @endif
                </li>
                <li class="nav-item">
                    <a href="{{route('about')}}" class="nav-link">{{ __('menu.about') }}</a>
                    @if(request()->is('about*'))
                        <span class="border1"></span>
                    @endif
                </li>
                <li class="nav-item">
                    <a href="{{route('portfolio')}}" class="nav-link">{{ __('menu.portfolio') }}</a>
                    @if(request()->is('portfolio*'))
                        <span class="border1"></span>
                    @endif
                </li>
                <li class="nav-item">
                    <a href="{{route('contact')}}" class="nav-link">{{ __('menu.contact') }}</a>
                    @if(request()->is('contact*'))
                        <span class="border1"></span>
                    @endif
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <div class="dropdown">
                <ul class="lang">
                    <li><a @if(app()->getLocale() != 'uz')
                           class="active_lang"
                           @endif href="{{route('locale', 'ru')}}">Ru</a></li>
                    <li><a>|</a></li>
                    <li><a @if(app()->getLocale() == 'uz')
                            class="active_lang"
                        @endif href="{{route('locale', 'uz')}}">Uz</a></li>
                </ul>
            </div>

            <div>
                <a id="app__btn" class="app__btn app__btn__header" data-bs-toggle="modal" data-bs-target="#exampleModal"
                   type="submit">{{ __('buttons.bid') }}</a>

            </div>

        </nav>
    </header>
</div>


<div style="display: none" class="usoft_modal_form">
    <div class="form_block">
        <button id="modal_close_button" class="modal_close">✖</button>
        <h3>{{__('modal_form.title')}}</h3>
        <div class="form">
            <div class="field_group">
                <label>{{__('modal_form.name_label')}}</label>
                <input type="text" id="modal_name" placeholder="{{__('modal_form.name_input')}}">
                <span style="color: red!important;font-size: 14px; display: none" id="name_modal_error" class="text-danger error-text"></span>
            </div>
            <div class="field_group">
                <label>{{__('modal_form.number_label')}}</label>
               <input type="text" id="modal_number" placeholder="{{__('modal_form.number_input')}}" class="phone-number-input">
                <span style="color: red!important;font-size: 14px; display: none" id="number_modal_error" class="text-danger error-text"></span>
            </div>
            <button data-url="{{route('bid_modal')}}" class="mbtn">{{__('modal_form.button')}}</button>
        </div>
    </div>
</div>


@yield('content')


<?php
$contact = \App\Models\Contact::find(1);
$main_services = \App\Models\Service::where('parent_id', 0)->with('image')->get();
?>

<section class="project">
    <div class="container">
        <div class="row">
            <div class="project__inner">
                <div class="row w-100">
                    <div class="project__item col-md-6 col-sm-12 mb-3">
                        <div class="project__title">{{ __('usoft.form_title') }}</div>
                        <div class="project__text">
                            {{ __('usoft.form_desc') }}
                        </div>
                    </div>
                    <div id="form_block" class="project__item col-md-6 col-sm-12">
                        <form class="form col-12 col-md-10">
                            <div class="form__group">
                                <span style="color: red!important;font-size: 14px; display: none" id="name_error" class="text-danger error-text"></span>
                                <input placeholder="{{ __('usoft.form_name_input') }}" type="text"  name="name" id="name" class="form__input">

                            </div>
                            <div class="form__group">
                                <span style="color: red!important;font-size: 14px; display: none" id="number_error" class="text-danger error-text"></span>
                                <input placeholder="{{ __('usoft.phone_placeholder') }}" type="text" name="number" id="number" class="form__input phone-number-input">

                                <button data-url="{{route('bid')}}" class="form__button bid col-12"
                                        type="button">{{ __('buttons.order_dev') }}</button>


                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- project__inner -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- project -->

<section class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__item">
                <div class="footer__logo"><img src="/usoft/images/logo-black.svg" alt=""></div>
                <div class="footer__icon">
                    @if(!$contact->facebook == '')
                    <a target="blink" href="{{$contact->facebook}}"><i class="fab fa-facebook-f"></i></a>
                    @else
                    @endif
                    @if(!$contact->linkedIn == '')
                    <a target="blink" href="{{$contact->linkedIn}}"><i class="fab fa-linkedin-in"></i></a>
                    @else
                    @endif
                    @if(!$contact->instagram == '')
                    <a target="blink" href="{{$contact->instagram}}"><i class="fab fa-instagram"></i></a>
                    @else
                    @endif
                </div>
            </div>
            <div class="footer__item">
                <div class="footer__title ">{{__('usoft.links_title')}}</div>
                @foreach($main_services as $link)
                <p>
                    <a href="{{route('service_show', $link->id)}}">
                        @if(app()->getLocale() == 'ru')
                            {{$link->title_ru}}
                        @elseif(app()->getLocale() == 'uz')
                            {{$link->title_uz}}
                        @else
                            {{$link->title_ru}}
                        @endif
                    </a>
                </p>
                @endforeach

            </div>
            <div class="footer__item footer__item--phone">
                <div class="footer__title">{{__('usoft.contact_title')}}</div>
                <div class="footer__contet">
                    <a href="#"><img src="/usoft/images/footer/1.svg" alt=""></a>
                    <div class="footer__phone">

                        <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a>

                        <a href="tel:{{$contact->mobile}}">{{$contact->mobile}}</a>
                    </div>
                </div>
                <div class="footer__contet">
                    <a href="#"><img src="/usoft/images/footer/2.svg" alt=""></a>
                    <div class="footer__phone">
                        <a href="https://goo.gl/maps/TBa6QBmXKyEKb25p8" target="blank">
                            @if(app()->getLocale() == 'uz')
                                {{$contact->address_uz}}
                            @else
                                {{$contact->address_ru}}
                            @endif

                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<a id="myBtn" title="Go to top"><i class="fas fa-arrow-circle-up"></i></a>

<footer class="copyright">
    ©Usoft 2009-2021
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="/usoft/Js/jquery.maskedinput.min.js"></script>

<script src="/usoft/Js/app.js"></script>
</body>

</html>
