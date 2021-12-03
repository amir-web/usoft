@extends('layouts.admin')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-12">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Добавить</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('web-development.index')}}">Разработка сайтов</a>
                            </li>
                            <li class="breadcrumb-item active">Добавить
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Borderless table start -->
        <div class="row" id="table-borderless">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{--{{$client->name}}--}}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{route('web-development.store')}}" method="post" class="form form-vertical" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Название на русском</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="title_ru" placeholder="Название на русском">
                                                @if($errors->has('title_ru'))
                                                    <span class="text-danger error-text">{{$errors->first('title_ru')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Название на узбекском</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="title_uz" placeholder="Название на узбекском">
                                                @if($errors->has('title_uz'))
                                                    <span class="text-danger error-text">{{$errors->first('title_uz')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Описание на русском</label>
                                                <textarea class="form-control" name="description_ru" placeholder="Описание на русском" rows="7" cols="50"></textarea>
                                                @if($errors->has('description_ru'))
                                                    <span class="text-danger error-text">{{$errors->first('description_ru')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Описание на узбекском</label>
                                                <textarea class="form-control" name="description_uz" placeholder="Описание на узбекском" rows="7" cols="50"></textarea>
                                                @if($errors->has('description_uz'))
                                                    <span class="text-danger error-text">{{$errors->first('description_uz')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Изображение</label>
                                                <input type="file" class="form-control-file" name="image" id="basicInputFile">
                                                @if($errors->has('image'))
                                                    <span class="text-danger error-text">{{$errors->first('image')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Добавить</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Borderless table end -->

    </div>
@endsection
