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
                            <li class="breadcrumb-item"><a href="{{route('service.index')}}">Наши услуги</a>
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
                            <form action="{{route('service.store')}}" method="post" class="form form-vertical" enctype="multipart/form-data" id="service_create">
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
                                                <label for="first-name-vertical">Краткое описание на русском</label>
                                                <textarea class="form-control" name="description_ru" placeholder="Краткое описание на русском" rows="7" cols="50"></textarea>
                                                @if($errors->has('description_ru'))
                                                    <span class="text-danger error-text">{{$errors->first('description_ru')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Краткое описание на узбекском</label>
                                                <textarea class="form-control" name="description_uz" placeholder="Краткое описание на узбекском" rows="7" cols="50"></textarea>
                                                @if($errors->has('description_uz'))
                                                    <span class="text-danger error-text">{{$errors->first('description_uz')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Описание на русском</label>
                                                <textarea class="form-control" name="text_ru" placeholder="Описание на русском" rows="7" cols="50"></textarea>
                                                @if($errors->has('description_uz'))
                                                    <span class="text-danger error-text">{{$errors->first('description_uz')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Описание на узбекском</label>
                                                <textarea class="form-control" name="text_uz" placeholder="Описание на узбекском" rows="7" cols="50"></textarea>
                                                @if($errors->has('description_uz'))
                                                    <span class="text-danger error-text">{{$errors->first('description_uz')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Стек название на русском</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="stack_title_ru" placeholder="Стек название на русском">
                                                @if($errors->has('title_uz'))
                                                    <span class="text-danger error-text">{{$errors->first('title_uz')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Стек название на узбекском</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="stack_title_uz" placeholder="Стек название на русском">
                                                @if($errors->has('title_uz'))
                                                    <span class="text-danger error-text">{{$errors->first('title_uz')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Стек описание на русском</label>
                                                <textarea class="form-control" name="stack_text_ru" placeholder="Стек описание на русском" rows="7" cols="50"></textarea>
                                                @if($errors->has('stack_title_ru'))
                                                    <span class="text-danger error-text">{{$errors->first('stack_title_ru')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Стек описание на узбекском</label>
                                                <textarea class="form-control" name="stack_text_uz" placeholder="Стек описание на узбекском" rows="7" cols="50"></textarea>
                                                @if($errors->has('stack_title_uz'))
                                                    <span class="text-danger error-text">{{$errors->first('stack_title_uz')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Категория</label>
                                                <select  class="form-control" name="parent_id" form="service_create">
                                                    <option value="0">Основной</option>
                                                    @foreach($all_service as $item)
                                                        <option value="{{$item->id}}">{{$item->title_ru}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="first-name-vertical">Иконки</label>
                                                <select class="multiple_select form-control" name="icons[]" multiple="multiple" form="service_create">
                                                    @foreach($icon as $item)
                                                    <option value="{{$item->id}}">{{$item->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <div>
                                                            <label for="first-name-vertical">Баннер на главной</label>
                                                        </div>
                                                        <div>
                                                            <img id="image1" width="150" height="100"
                                                                 style="object-fit: contain; margin-bottom: 10px;" src="#" alt="">
                                                        </div>
                                                        <input onchange="readURL1(this);" type="file" class="form-control-file" name="image1" id="basicInputFile">
                                                        @if($errors->has('image1'))
                                                            <span class="text-danger error-text">{{$errors->first('image1')}}</span>
                                                        @endif
                                                    </div>
                                                </div>




                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <div>
                                                            <label for="first-name-vertical">Баннер внутренней</label>
                                                        </div>
                                                        <div>
                                                            <img id="image2" width="150" height="100"
                                                                 style="object-fit: contain; margin-bottom: 10px;" src="#" alt="">
                                                        </div>
                                                        <input onchange="readURL2(this);" type="file" class="form-control-file" name="image2" id="basicInputFile" multiple>
                                                        @if($errors->has('image2'))
                                                            <span class="text-danger error-text">{{$errors->first('image2')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
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


    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove{
            left: -6px!important;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover, .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:focus {
            background-color: #7367F0 !important;
            color: #333;
            outline: none;
        }
    </style>

    <script>
        /* image change onload input */
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image1')
                        .attr('src', e.target.result)
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image2')
                        .attr('src', e.target.result)
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>







@endsection
