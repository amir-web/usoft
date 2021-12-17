@extends('layouts.admin')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Страницы сайта</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Страницы сайта</li>
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
                    <div class="card-header" style="display: flex;justify-content: flex-end;">
                        {{--<h4 class="card-title">Borderless Table</h4>--}}
                        {{--<a href="{{route('page.create')}}" class="btn btn-success mb-1 waves-effect waves-light"><i class="feather icon-plus"></i> Добавить</a>--}}
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                        </div>
                        <div class="table-responsive">
                            @if(count($page))
                                <table class="table table-borderless mb-0">
                                    <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Название RU</th>
                                        <th>Название UZ</th>
                                        <th>Изображение</th>
                                        <th style="text-align: center">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($page as $item)
                                        <tr>
                                            <th scope="row">{{$item->id}}</th>
                                            <th>{{$item->title_ru}}</th>
                                            <th>{{$item->title_uz}}</th>
                                            <td>
                                                <img width="122" src="{{$item->getImage() }}" alt="">
                                            </td>
                                            <td style="display:flex;justify-content: center;width:190px;align-items: center;height: 168px;">
                                                <a href="{{route('page.edit', $item->id)}}" class="btn btn-icon btn-sm btn-warning mr-1 mb-1 waves-effect waves-light"><i class="feather icon-edit"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h4 style="margin: 50px auto; text-align: center">Пусто!</h4>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Borderless table end -->

        <div class="bottom">
            <div class="actions"></div>
            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                {{$page->links('vendor.pagination.my_paginate')}}
            </div>
        </div>

    </div>
@endsection