@extends('layouts.admin')
@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>

    <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-12">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Добавить</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('portfolio.index')}}">Список наших работ</a>
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
                            <form action="{{route('portfolio.store')}}" method="post" id="portfolio_create" class="form form-vertical" enctype="multipart/form-data">
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
                                                <label for="first-name-vertical">Подготовка к проекту на русском</label>
                                                <textarea class="form-control" id="tab1_ru" name="tab1_ru" placeholder="Подготовка к проекту на русском" rows="10" cols="50"></textarea>
                                                @if($errors->has('tab1_ru'))
                                                    <span class="text-danger error-text">{{$errors->first('tab1_ru')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Подготовка к проекту на узбекском</label>
                                                <textarea class="form-control" id="tab1_uz" name="tab1_uz" placeholder="Подготовка к проекту на узбекском" rows="10" cols="50"></textarea>
                                                @if($errors->has('tab1_uz'))
                                                    <span class="text-danger error-text">{{$errors->first('tab1_uz')}}</span>
                                                @endif

                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Принцип работы на русском</label>
                                                <textarea class="form-control" id="tab2_ru" name="tab2_ru" placeholder="Принцип работы на русском" rows="10" cols="50"></textarea>
                                                @if($errors->has('tab2_ru'))
                                                    <span class="text-danger error-text">{{$errors->first('tab2_ru')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Принцип работы на узбекском</label>
                                                <textarea class="form-control" id="tab2_uz" name="tab2_uz" placeholder="Принцип работы на узбекском" rows="10" cols="50"></textarea>
                                                @if($errors->has('tab2_uz'))
                                                    <span class="text-danger error-text">{{$errors->first('tab2_uz')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">С UI/UX дизайн на русском</label>
                                                <textarea class="form-control" id="tab3_ru" name="tab3_ru" placeholder="С UI/UX дизайн на русском" rows="10" cols="50"></textarea>
                                                @if($errors->has('tab3_ru'))
                                                    <span class="text-danger error-text">{{$errors->first('tab3_ru')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">С UI/UX дизайн на узбекском</label>
                                                <textarea class="form-control" id="tab3_uz" name="tab3_uz" placeholder="С UI/UX дизайн на узбекском" rows="10" cols="50"></textarea>
                                                @if($errors->has('tab3_uz'))
                                                    <span class="text-danger error-text">{{$errors->first('tab3_uz')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <select  class="form-control" name="category" form="portfolio_create">
                                                    <option value="Разработка мобильных приложений">Разработка мобильных приложений</option>
                                                    <option value="Веб-разработка">Веб-разработка</option>
                                                    <option value="Дизайн">Дизайн</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Ссылка</label>
                                                <input type="url" id="first-name-vertical" class="form-control" name="link" placeholder="Ссылка">
                                                @if($errors->has('link'))
                                                    <span class="text-danger error-text">{{$errors->first('link')}}</span>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <div>
                                                            <label for="first-name-vertical">Баннер на главной</label>
                                                        </div>
                                                        <div>
                                                            <img id="image1" width="150" height="100"
                                                                 style="object-fit: cover; margin-bottom: 10px;" src="#" alt="">
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
                                                                 style="object-fit: cover; margin-bottom: 10px;" src="#" alt="">
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


    <!-- CKEditor 5 -->

    <script>
        ClassicEditor
            .create( document.querySelector( '#tab1_ru' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#tab1_uz' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#tab2_ru' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#tab2_uz' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#tab3_ru' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#tab3_uz' ) )
            .catch( error => {
                console.error( error );
            } );


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
