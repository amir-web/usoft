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
                                {{$portfolio->title_ru}}
                            @elseif(app()->getLocale() == 'uz')
                                {{$portfolio->title_uz}}
                            @else
                                {{$portfolio->title_ru}}
                            @endif
                        </span>
                    </a>
                </li>
            </div>
        </ul>
    </div>


    <!--  -->

    <section class="webwork  ">
        <div class="container ">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                            type="button" role="tab" aria-controls="nav-home" aria-selected="true">{{__('show_portfolio.tab_title1')}}</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                            type="button" role="tab" aria-controls="nav-profile" aria-selected="false">{{__('show_portfolio.tab_title2')}}</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                            type="button" role="tab" aria-controls="nav-contact" aria-selected="false">{{__('show_portfolio.tab_title3')}}</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="webwork__content">
                        <div class="row">
                            <div class="webwork__text col-12">
                                @if(app()->getLocale() == 'ru')
                                    {!! $portfolio->tab1_ru !!}
                                @elseif(app()->getLocale() == 'uz')
                                    {!! $portfolio->tab1_uz !!}
                                @else
                                    {!! $portfolio->tab1_ru !!}
                                @endif
                            </div>
                            <div class="webwork__img col-md-6 ">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="webwork__content">
                        <div class="row">
                            <div class="webwork__text col-12">
                                @if(app()->getLocale() == 'ru')
                                    {!! $portfolio->tab2_ru !!}
                                @elseif(app()->getLocale() == 'uz')
                                    {!! $portfolio->tab2_uz !!}
                                @else
                                    {!! $portfolio->tab2_ru !!}
                                @endif
                            </div>
                            <div class="webwork__img col-md-6 ">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="webwork__content">
                        <div class="row">
                            <div class="webwork__text col-12">
                                @if(app()->getLocale() == 'ru')
                                    {!! $portfolio->tab3_ru !!}
                                @elseif(app()->getLocale() == 'uz')
                                    {!! $portfolio->tab3_uz !!}
                                @else
                                    {!! $portfolio->tab3_ru !!}
                                @endif
                            </div>
                            <div class="webwork__img col-md-6 ">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            @if(isset($image3))
                @foreach($image3 as $item)
                <a href="{{$portfolio->link}}" target="blank"><img class="w-100 alutex__img col-md-12" src="/storage/uploads/{{$item->filename}}" alt=""></a>
                @endforeach
            @else
            <p>Кортинка нету!</p>
            @endif
        </div>
    </div>


@endsection
