@extends('layouts.admin')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Список наших работ</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a>
                            </li>
                            <li class="breadcrumb-item active">Список наших работ
                            </li>
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
                        <form style="width: 100%; padding-top: 20px;" action="{{route('portfolio.main_item')}}" method="post">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <label for="first-name-vertical">Название на русском</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="Название на русском" name="title_ru" value="{{$main_item->title_ru}}">
                                            <label for="first-name-column">Название на русском</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <label for="first-name-vertical">Название на узбекском</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="Название на узбекском" name="title_uz" value="{{$main_item->title_uz}}">
                                            <label for="first-name-column">Название на узбекском</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Описание на русском</label>
                                            <textarea class="form-control" name="tab1_ru" placeholder="Описание на русском" rows="4" cols="50">{{$main_item->tab1_ru}}</textarea>
                                            @if($errors->has('tab3_ru'))
                                                <span class="text-danger error-text">{{$errors->first('tab1_ru')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Описание на узбекском</label>
                                            <textarea class="form-control" name="tab1_uz" placeholder="Описание на узбекском" rows="4" cols="50">{{$main_item->tab1_uz}}</textarea>
                                            @if($errors->has('tab3_ru'))
                                                <span class="text-danger error-text">{{$errors->first('tab1_uz')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Сохранить</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-header" style="display: flex;justify-content: flex-end;">
                        {{--<h4 class="card-title">Borderless Table</h4>--}}
                        <a href="{{route('portfolio.create')}}" class="btn btn-success mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus"></i> Добавить</a>
                    </div>
                    <div class="card-content">
                        @if(count($portfolio))
                            {{--<div class="card-body">
                            </div>--}}
                            <div class="table-responsive">

                                <table class="table table-borderless mb-0">
                                    <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Название RU</th>
                                        <th>Название UZ</th>
                                        <th>Ссылка</th>
                                        <th>Изображение</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($portfolio as $item)
                                        <tr>
                                            <th scope="row">{{$item->id}}</th>
                                            <th>{{$item->title_ru}}</th>
                                            <th>{{$item->title_uz}}</th>
                                            <td><a href="{{$item->link}}">{{$item->title_ru}}</a></td>
                                            <td>
                                                    <img width="122" src="{{$item->getImage() }}" alt="">
                                            </td>
                                            <td style="width:190px;">
                                                <div style="display:flex;flex-wrap:wrap;align-items: center;">
                                                    <a target="blank" href="{{route('show_portfolio', $item->id)}}" class="btn btn-icon btn-sm btn-success mr-1 mb-1 waves-effect waves-light"><i class="feather icon-edit icon-eye"></i></a>
                                                    <a href="{{route('portfolio.edit', $item->id)}}" class="btn btn-icon btn-sm btn-warning mr-1 mb-1 waves-effect waves-light"><i class="feather icon-edit"></i></a>
                                                    <form action="{{route('portfolio.destroy',$item->id)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-icon btn-sm btn-danger mr-1 mb-1 waves-effect waves-light"><i class="feather icon-trash-2"></i></button>
                                                    </form>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        @else
                            <h4 style="margin: 50px auto; text-align: center">Работы нету! :(</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Borderless table end -->

        <div class="bottom">
            <div class="actions"></div>
            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                {{$portfolio->links('vendor.pagination.my_paginate')}}
            </div>
        </div>

    </div>
@endsection
