@extends('layouts.admin')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-12">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">{{$show->title_ru}}</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('benefit.index')}}">Только у нас</a>
                            </li>
                            <li class="breadcrumb-item active">{{$show->title_ru}}
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <style>
            .sec_con_title{
                margin-bottom: 7px;
                opacity: .5!important;
            }
        </style>
        <!-- Borderless table start -->
        <div class="row" id="table-borderless">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="sec_con_title">Название на русском</div>
                            <h4 class="card-title">{{$show->title_ru}}</h4><br>
                            <div class="sec_con_title">Название на узбекском</div>
                            <h4 class="card-title">{{$show->title_uz}}</h4><br>

                            <div class="sec_con_title">Описание на русском</div>
                            <div>
                                {{$show->description_ru}}
                            </div>
                            <br>
                            <div class="sec_con_title">Описание на узбекском</div>
                            <div>
                                {{$show->description_uz}}
                            </div>
                            <br>
                        </div>

                        <div class="row" style="padding: 15px">
                            <div class="col-4">
                                {{--<div class="sec_con_title">Картинка 1</div>--}}
                                <img class="card-img-bottom img-fluid" src="{{$show->getImage()}}" alt="Card image cap">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Borderless table end -->

    </div>
@endsection
