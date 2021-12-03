@extends('layouts.admin')
@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">О компании</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a>
                            </li>
                            <li class="breadcrumb-item active">О компании</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrum-right">
                {{--<div class="dropdown">
                    <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                </div>--}}
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Borderless table start -->
        <div class="row" id="table-borderless">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <form style="width: 100%; padding-top: 20px;" action="{{route('about.update', 1)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <label for="first-name-vertical">Название на русском</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="Название на русском" name="title_ru" value="{{$about->title_ru}}">
                                            <label for="first-name-column">Название на русском</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <label for="first-name-vertical">Название на узбекском</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="Название на узбекском" name="title_uz" value="{{$about->title_uz}}">
                                            <label for="first-name-column">Название на узбекском</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Описание на русском</label>
                                            <textarea class="form-control" id="tab1_ru" name="description_ru" placeholder="Описание на русском" rows="4" cols="50">{{$about->description_uz}}</textarea>
                                            @if($errors->has('description_ru'))
                                                <span class="text-danger error-text">{{$errors->first('description_ru')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Описание на узбекском</label>
                                            <textarea class="form-control" id="tab1_uz" name="description_uz" placeholder="Описание на узбекском" rows="4" cols="50">{{$about->description_uz}}</textarea>
                                            @if($errors->has('description_uz'))
                                                <span class="text-danger error-text">{{$errors->first('description_uz')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Изображение</label>
                                            <input type="file" class="form-control-file" name="about_image" id="basicInputFile" multiple>
                                        </div>
                                    </div>
                                    <div class="col-8 text-right">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Сохранить</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Borderless table end -->

        <div class="bottom">
            <div class="actions"></div>
            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                {{--{{$portfolio->links('vendor.pagination.my_paginate')}}--}}
            </div>
        </div>

    </div>

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
    </script>
@endsection
