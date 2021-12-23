@extends('layouts.admin')
@section('content')
    <script src="http://SortableJS.github.io/Sortable/Sortable.js"></script>
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
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div id="headingCollapse1" class="card-header mb-2 collapsed" data-toggle="collapse" role="button" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    <span style="color: #4839EB" class="lead collapse-title">
                                        <button type="button" class="btn btn-primary waves-effect waves-light"><i class="feather icon-copy"></i> Сортировка</button>
                                    </span>
                                </div>
                                <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1" class="collapse" style="">
                                    <div id="simpleList" class="row">
                                        @foreach($sort_item as $item)
                                            <div class="col-4 mb-1" id="{{$item->id}}">
                                                <img class="w-100" style="height: 200px; object-fit: cover;" src="{{$item->getImage()}}" alt="">
                                                <h4  class="text-center">{{$item->title_ru}}</h4>
                                            </div>
                                        @endforeach
                                    </div>

                                    <h3>Поискать портфолио</h3>
                                    {{--                                    <form action="">--}}
                                    <fieldset class="form-group position-relative">
                                        <input type="text" class="form-control search_input" id="iconLeft2" placeholder="Что ищем?" data-url="{{route('portfolio.mobile')}}">
                                        <div class="form-control-position">
                                            <i class="feather icon-search"></i>
                                        </div>
                                    </fieldset>
                                    {{--                                    </form>--}}

                                    <div id="bb" class="row">

                                    </div>

                                    <div style="display: none" id="error_search" class="text-danger">
                                        <h4 class="text-center">Ничего не найдено!</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header" style="display: flex;justify-content: flex-end;">
                        {{--<h4 class="card-title">Borderless Table</h4>--}}
                        <a href="{{route('portfolio.create')}}" class="btn btn-success mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus"></i> Добавить</a>
                    </div>
                    <div class="card-content">
                        @if(count($mobile))
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
                                    @foreach($mobile as $item)
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
                {{$mobile->links('vendor.pagination.my_paginate')}}
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>

        $('.search_input').keypress(function(event){
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if(keycode == '13'){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                let url = $('.search_input').data('url')
                let date = $('.search_input').val()




                $.ajax({
                    url: url,
                    data: { date: date },
                    type: 'GET',
                    success: function (res) {
                        $('#bb').html(res)
                    }
                })
                    .done(function f(res) {
                        $('#bb').html(res)
                        if (res === ''){
                            $('#error_search').show()
                        }
                    })
                    .fail(function (jqXHR, ajaxOptions, thrownError) {
                        $('#error_search').show()
                    })
            }
        });
        // Simple list
        Sortable.create(simpleList, {
            multiDrag: true,
            group: 'shared',
            swap: true,
            animation: 150,
            ghostClass: 'blue-background-class',
            onAdd(event){
                let ids = []

                let children = Array.from(event.target.children);

                children.map(child => {
                    ids.push(child.id)
                })
                $.ajax({
                    url: '{{route('mobile_sort')}}',
                    data: { array: ids },
                    type: 'GET',
                })
                    .done(function f(res) {
                        alert('Изменения сохранено!');
                    })
                    .fail(function (jqXHR, ajaxOptions, thrownError) {
                        alert('Ошибка!')
                    })
            },
            onEnd(event) {
                let ids = []

                let children = Array.from(event.target.children);

                children.map(child => {
                    ids.push(child.id)
                })
                $.ajax({
                    url: '{{route('mobile_sort')}}',
                    data: { array: ids },
                    type: 'GET',
                })
                    .done(function f(res) {
                        alert('Изменения сохранено!');
                    })
                    .fail(function (jqXHR, ajaxOptions, thrownError) {
                        alert('Ошибка!')
                    })

            }
        });

        Sortable.create(bb, {
            multiDrag: true,
            group: 'shared',
            swap: true,
            animation: 150,
            ghostClass: 'blue-background-class',
            /*onEnd(event) {
                //console.log(event.target.innerText)
                //console.log([event.target.innerText])
                //console.log(event)

                let title = event.target.id
                let arr = title.split("\n")

                console.log(arr)

            }*/
        });
    </script>
@endsection
