@extends('layouts.usoft')
@section('content')

    <div class=" section--chit">
        <ul class="breadcrumb">
            <div class="container">
                <li><a href="{{route('main')}}">
                        @if(app()->getLocale() == 'ru')
                            Главная
                        @elseif(app()->getLocale() == 'uz')
                            Asosiy
                        @else
                            Главная
                        @endif
                    </a></li>
                @if($show->parent_id > 0)
                    <li>
                        <a href="{{route('service_show', $show->parent_id)}}">
                            {{$show->parent($show->parent_id)}}
                        </a>
                    </li>
                @endif
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

    @if($show->id <= 3)
        <section class="section">
            <div class="container">
                <div class="section__title">
                    @if(app()->getLocale() == 'ru')
                        {{$portfolio->title_ru}}
                    @elseif(app()->getLocale() == 'uz')
                        {{$portfolio->title_uz}}
                    @else
                        {{$portfolio->title_ru}}
                    @endif
                </div>
                @if($show->id == 1)
                    <section class="portfolio">
                        <div class="container">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row h-100">
                                                @foreach($web as $web_item)
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
                                                        <div class="portfolio__inner">
                                                            <div class="portfolio__img">
                                                                <img class="pi" src="{{$web_item->getImage()}}" alt="">
                                                            </div>
                                                            <div class="portfolio__text">
                                                                <a href="{{route('show_portfolio', $web_item->id)}}">
                                                                    @if(app()->getLocale() == 'ru')
                                                                        {{$web_item->title_ru}}
                                                                    @elseif(app()->getLocale() == 'uz')
                                                                        {{$web_item->title_uz}}
                                                                    @else
                                                                        {{$web_item->title_ru}}
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
                    </section>
                @elseif($show->id == 2)
                    <section class="portfolio">
                        <div class="container">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row h-100">
                                                @foreach($mobile as $mobile_item)
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
                                                        <div class="portfolio__inner">
                                                            <div class="portfolio__img">
                                                                <img class="pi" src="{{$mobile_item->getImage()}}" alt="">
                                                            </div>
                                                            <div class="portfolio__text">
                                                                <a href="{{route('show_portfolio', $mobile_item->id)}}">
                                                                    @if(app()->getLocale() == 'ru')
                                                                        {{$mobile_item->title_ru}}
                                                                    @elseif(app()->getLocale() == 'uz')
                                                                        {{$mobile_item->title_uz}}
                                                                    @else
                                                                        {{$mobile_item->title_ru}}
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
                    </section>
                @elseif($show->id == 3)
                    <section class="portfolio">
                        <div class="container">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="row h-100">
                                                @foreach($design as $design_item)
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 p-3">
                                                        <div class="portfolio__inner">
                                                            <div class="portfolio__img">
                                                                <img class="pi" src="{{$design_item->getImage()}}" alt="">
                                                            </div>
                                                            <div class="portfolio__text">
                                                                <a href="{{route('show_portfolio', $design_item->id)}}">
                                                                    @if(app()->getLocale() == 'ru')
                                                                        {{$design_item->title_ru}}
                                                                    @elseif(app()->getLocale() == 'uz')
                                                                        {{$design_item->title_uz}}
                                                                    @else
                                                                        {{$design_item->title_ru}}
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
                    </section>
                @endif

            </div><!-- container -->

        </section><!-- section -->
    @endif

    @if(count($children))
        <section class="section">
            <div class="container">
                <h1 class="section__title">
                    @if(app()->getLocale() == 'ru')
                        {{$show->title_ru}}
                    @elseif(app()->getLocale() == 'uz')
                        {{$show->title_uz}}
                    @else
                        {{$show->title_ru}}
                    @endif
                </h1>
                <div class="works row ">
                    @foreach($children as $child)
                    <div class=" col-12 col-sm-6 mb-4 ">
                        <div class="works__item paeg__w  h-100 ">
                            <div class="works__img"><img src="{{$child->getImage()}}" alt=""></div>
                            <div class="works__content">
                                <div class="works__title">
                                    @if(app()->getLocale() == 'ru')
                                        {{$child->title_ru}}
                                    @elseif(app()->getLocale() == 'uz')
                                        {{$child->title_uz}}
                                    @else
                                        {{$child->title_ru}}
                                    @endif
                                </div>
                                <div class="works__text">
                                    @if(app()->getLocale() == 'ru')
                                        {{$child->description_ru}}
                                    @elseif(app()->getLocale() == 'uz')
                                        {{$child->description_uz}}
                                    @else
                                        {{$child->description_ru}}
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div><!-- works -->
            </div>
        </section>
    @endif


    @if($show->stack_title_ru != '')
        <section>
            <div class="container">
                <h1 class="section__title">
                    @if(app()->getLocale() == 'ru')
                        {{$show->stack_title_ru}}
                    @elseif(app()->getLocale() == 'uz')
                        {{$show->stack_title_uz}}
                    @else
                        {{$show->stack_title_ru}}
                    @endif
                </h1>
                <div class="section__text">
                    @if(app()->getLocale() == 'ru')
                        {{$show->stack_text_ru}}
                    @elseif(app()->getLocale() == 'uz')
                        {{$show->stack_text_uz}}
                    @else
                        {{$show->stack_text_ru}}
                    @endif
                </div>
            </div>
        </section>
    @endif
    @if(count($show->icons))
        <section>
            <div class="container">
                <div class="devices">
                    @foreach($show->icons as $icon)
                    <div class="devices__item col-md-2 col-sm-4 p-5 m-4">
                        <img class="devices__photo" src="{{$icon->getImage()}}" alt="">
                        <div class="devices__text">
                            {{$icon->title}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


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
                @foreach($main_service as $item)
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
            </div>

        </div><!-- container -->

    </section><!-- section -->



@endsection
