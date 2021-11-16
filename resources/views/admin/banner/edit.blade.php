@extends('layouts.admin')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-12">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Изменить</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('banner.index')}}">Список наших работ</a>
                            </li>
                            <li class="breadcrumb-item active">Изменить
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
                            <form action="{{route('banner.update', $edit->id)}}" method="post" class="form form-vertical" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Название на русском</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="title_ru" placeholder="Название на русском" value="{{$edit->title_ru}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Название на узбекском</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="title_uz" placeholder="Название на узбекском" value="{{$edit->title_uz}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Описание на русском</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="description_ru" placeholder="Описание на русском" value="{{$edit->description_ru}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Описание на узбекском</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="description_uz" placeholder="Описание на узбекском" value="{{$edit->description_uz}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Ссылка</label>
                                                <input type="url" id="first-name-vertical" class="form-control" name="link" placeholder="Ссылка" value="{{$edit->link}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Изображение</label>
                                                <input type="file" class="form-control-file" name="image" id="basicInputFile">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Изменить</button>
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
