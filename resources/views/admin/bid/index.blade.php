@extends('layouts.admin')
@section('content')
    <div class="content-header row">
        <div style="position: fixed;
                    right: 30px;
                    z-index: 99999999;
                    background: rgba(40, 199, 111, 1) !important;
                    color: white!important;
                    display: none"
             class="alert alert-success alert-dismissible fade show" id="success_status_message" role="alert">
            <p class="mb-0">
                Статус успешно изменен!
            </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Список клиентов</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a>
                            </li>
                            <li class="breadcrumb-item active">Список клиентов
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrum-right">
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Borderless table start -->
        <div class="row" id="table-borderless">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="default-collapse collapse-bordered">
                            <div class="card collapse-header">
                                <div id="headingCollapse1" class="card-header collapsed" data-toggle="collapse" role="button" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                                    <span style="color: #4839EB" class="lead collapse-title">
                                                        <button type="button" class="btn btn-primary waves-effect waves-light"><i class="feather icon-filter"></i> Фильтр</button>
                                                    </span>
                                </div>
                                <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1" class="collapse" style="">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form id="filter_bid" action="{{route('bid_filter')}}" method="get">
                                                <div style="display: flex;align-items: center" class="form-group">
                                                    {{--<label for="first-name-vertical">начало</label>--}}
                                                    <span style="margin-right: 5px;">От:</span>
                                                    <input class="form-control" id="first-name-column" name="date_start" type="date" placeholder="начало">
                                                </div>
                                                <div style="display: flex; align-items: center" class="form-group">
                                                    {{--<label for="first-name-vertical">конец</label>--}}
                                                    <span style="margin-right: 5px;">До:</span>
                                                    <input class="form-control" id="first-name-column" name="date_end" type="date" placeholder="конец">
                                                </div>
                                                <div class="form-group" name="status">
                                                    <select  class="form-control" name="status" form="filter_bid">
                                                        <option value="Новый клиент">Новый клиент</option>
                                                        <option value="в обработке">в обработке</option>
                                                        <option value="закрыто">закрыто</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-primary">Фильтровать</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="bid_container" class="card-content">
                        @if(count($bid))
                            <div class="card-body">
                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Имя</th>
                                        <th>Телефон</th>
                                        <th>Дата и Время</th>
                                        <th>Статус</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($bid as $item)
                                        <tr>
                                            <th scope="row">{{$item->id}}</th>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->number}}</td>
                                            <td>{{$item->created_at->format('d m Y | H:i')}}</td>
                                            <td>
                                                <select data-html="{{$item->id}}" data-url="{{route('bid.update', $item->id)}}" class="client_status form-control" id="basicSelect">
                                                    <option value="Новый клиент" @if ($item->status == "Новый клиент") selected @endif>Новый клиент</option>
                                                    <option value="в обработке" @if ($item->status == "в обработке") selected @endif>в обработке</option>
                                                    <option value="закрыто" @if ($item->status == "закрыто") selected @endif>закрыто</option>
                                                </select>
                                            </td>
                                            <td style="display: flex; align-items: center">
                                                <form action="{{route('bid.destroy',$item->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-icon btn-sm btn-danger waves-effect waves-light"><i class="feather icon-trash-2"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <h4 style="margin: 50px auto; text-align: center">Нет Заявок!</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Borderless table end -->

        <div class="bottom">
            <div class="actions"></div>
            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                {{$bid->links('vendor.pagination.my_paginate')}}
            </div>
        </div>
    </div>

    <style>
        #filter_bid{
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
        }

        #filter_bid .form-group{
            margin: 0 10px;
        }
    </style>
@endsection
