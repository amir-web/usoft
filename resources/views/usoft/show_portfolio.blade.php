@extends('layouts.usoft')
@section('content')

    <div class=" section--chit">
        <ul class="breadcrumb">
            <div class="container">
                <li><a href="{{route('main')}}">Главная</a></li>
                <li>
                    <a>
                        <span>
                            @if(app()->getLocale() == 'ru')
                                {{$portfolio->title_ru}}
                            @else
                                {{$portfolio->title_uz}}
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
                            type="button" role="tab" aria-controls="nav-home" aria-selected="true">Подготока к проекту</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                            type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Принцип работы </button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                            type="button" role="tab" aria-controls="nav-contact" aria-selected="false"> С UI/UX дизайн</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="webwork__content">
                        <div class="row">
                            <div class="webwork__text col-md-6">
                                @if(app()->getLocale() == 'uz')
                                    {{$portfolio->description_uz}}
                                @else
                                    {{$portfolio->description_ru}}
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
                            <div class="webwork__text col-md-6">
                                @if(app()->getLocale() == 'uz')
                                    {{$portfolio->description_uz}}
                                @else
                                    {{$portfolio->description_ru}}
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
                            <div class="webwork__text col-md-6">
                                @if(app()->getLocale('uz'))
                                    {{$portfolio->description_uz}}
                                @else
                                    {{$portfolio->description_ru}}
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
            <a href="{{$portfolio->link}}" target="blank"><img class="alutex__img col-md-12" src="/public/storage/uploads/{{$portfolio->images[1]->filename}}" alt=""></a>

        </div>
    </div>


@endsection
