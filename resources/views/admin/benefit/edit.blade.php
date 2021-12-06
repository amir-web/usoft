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
                            <li class="breadcrumb-item"><a href="{{route('benefit.index')}}">Только у нас</a>
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
                            <form action="{{route('benefit.update', $edit->id)}}" method="post" class="form form-vertical" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Название на русском</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="title_ru" placeholder="Название на русском" value="{{$edit->title_ru}}">
                                                @if($errors->has('title_ru'))
                                                    <span class="text-danger error-text">{{$errors->first('title_ru')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Название на узбекском</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="title_uz" placeholder="Название на узбекском" value="{{$edit->title_uz}}">
                                                @if($errors->has('title_uz'))
                                                    <span class="text-danger error-text">{{$errors->first('title_uz')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Описание на русском</label>
                                                <textarea class="form-control" name="description_ru" placeholder="Описание на русском" rows="7" cols="50">{{$edit->description_ru}}</textarea>
                                                @if($errors->has('description_ru'))
                                                    <span class="text-danger error-text">{{$errors->first('description_ru')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name-vertical">Описание на узбекском</label>
                                                <textarea class="form-control" name="description_uz" placeholder="Описание на узбекском" rows="7" cols="50">{{$edit->description_uz}}</textarea>
                                                @if($errors->has('description_uz'))
                                                    <span class="text-danger error-text">{{$errors->first('description_uz')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <div><label for="first-name-vertical">Изображение</label></div>
                                                <div>
                                                    <img id="image" width="150" height="100"
                                                         style="object-fit: cover; margin-bottom: 10px;" src="/storage/uploads/{{$img->filename}}" alt="">
                                                </div>
                                                <input onchange="readURL(this);" type="file" class="form-control-file" name="image" id="basicInputFile" multiple>
                                                @if($errors->has('image'))
                                                    <span class="text-danger error-text">{{$errors->first('image')}}</span>
                                                @endif
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

    <script>
        /* image change onload input */
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result)
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
