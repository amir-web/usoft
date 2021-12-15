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
                            <li class="breadcrumb-item"><a href="{{route('icon.index')}}">Разработка сайтов</a>
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
                            <form action="{{route('icon.update', $edit->id)}}" method="post" class="form form-vertical" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Название</label>
                                                <input type="text" id="first-name-vertical" class="form-control" name="title" placeholder="Название на русском" value="{{$edit->title}}">
                                                @if($errors->has('title'))
                                                    <span class="text-danger error-text">{{$errors->first('title')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <div><label for="first-name-vertical">Изображение</label></div>
                                                <div>
                                                    <img id="image" width="150" height="100"
                                                         style="object-fit: contain; margin-bottom: 10px;" src="/storage/uploads/{{$img->filename}}" alt="">
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
