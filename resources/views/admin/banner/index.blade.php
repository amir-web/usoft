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
                    <div class="card-header" style="display: flex;justify-content: flex-end;">
                        {{--<h4 class="card-title">Borderless Table</h4>--}}
                        <a href="{{route('banner.create')}}" class="btn btn-success mr-1 mb-1 waves-effect waves-light">Добавить</a>
                    </div>
                    <div class="card-content">
                        @if(count($banner))
                            <div class="card-body">
                            </div>
                            <div class="table-responsive">

                                <table class="table table-borderless mb-0">
                                    <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Название</th>
                                        <th>Описание</th>
                                        <th>Ссылка</th>
                                        <th>Изображение</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($banner as $item)
                                        <tr>
                                            <th scope="row">{{$item->id}}</th>
                                            <th>
                                                <ul class="lang_ul">
                                                    <li>Ru: {{$item->title_ru}}</li>
                                                    <li>Uz: {{$item->title_uz}}</li>
                                                </ul>
                                            </th>
                                            <td>
                                                <ul class="lang_ul">
                                                    <li>Ru: {{$item->description_ru}}</li>
                                                    <li>Uz: {{$item->description_uz}}</li>
                                                </ul>
                                            </td>
                                            <td><a href="{{$item->link}}">{{$item->title_ru}}</a></td>
                                            <td>
                                                @foreach($item->images as $img)
                                                <img width="250" src="/public/storage/uploads/{{$img->filename}}" alt="">
                                                @endforeach{{--{{$item->status}}--}}</td>
                                            <td style="display:flex;flex-wrap:wrap;width:200px;align-items: center;height: 168px;">
                                                <a href="{{route('banner.edit', $item->id)}}" class="btn btn-warning mr-1 mb-1 waves-effect waves-light">Изменить</a>
                                                <form action="{{route('banner.destroy',$item->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger mr-1 mb-1 waves-effect waves-light">Удалить</button>
                                                </form>
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
                {{$banner->links('vendor.pagination.my_paginate')}}
            </div>
        </div>

        <style>
            .lang_ul li{
               list-style: none;
                padding-bottom: 15px;
            }

            .lang_ul{
                padding: 0;
                margin: 0;
            }
        </style>
    </div>
@endsection
