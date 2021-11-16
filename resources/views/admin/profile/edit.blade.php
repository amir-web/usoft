@extends('layouts.admin')
@section('content')

    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Пользовательские данные</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a>
                            </li>
                            <li class="breadcrumb-item active">Пользовательские данные
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Basic Tables start -->
        {{--<div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Tables</h4>
                        <button type="button" class="btn btn-success mr-1 mb-1 waves-effect waves-light">Add Contact</button>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        --}}{{--<th>ID</th>--}}{{--
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Phone 2</th>
                                        <th>Email</th>
                                        <th>Facebook</th>
                                        <th>LinkedIn</th>
                                        <th>Instagram</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th> Ташкент, ул, Афросиоб 6/1
                                            Ор-р: Напротив Корейского посольства</th>
                                        <td>+998 71 200-12-00</td>
                                        <td>+998 90 965-76-34</td>
                                        <td>info@usoft.uz</td>
                                        <td>https://www.facebook.com/umbrellasoftuz</td>
                                        <td>https://www.linkedin.com/company/usoft-round-umbrella-llc</td>
                                        <td>https://instagram.com/usoft.uz?utm_medium=copy_link</td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        --}}{{--<p class="px-2"><span class="text-bold-600">Example 2:</span> Minimal Table with no outer spacing.</p>

                        <!-- Table with no outer spacing -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>User ID</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Leanne Graham</td>
                                    <td>sincere@april.biz</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Ervin Howell</td>
                                    <td>shanna@melissa.tv</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Clementine Bauch</td>
                                    <td>nathan@yesenia.net</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>--}}{{--
                    </div>
                </div>
            </div>
        </div>--}}

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            {{--<h4 class="card-title">Multiple Column</h4>--}}
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" action="{{route('profile.update', $user->id)}}" method="post">
                                    @method('put')
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-label-group">
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="Андрей" name="name" value="{{$user->name}}">
                                                    <label for="first-name-column">Имя</label>
                                                    @if($errors->has('name'))
                                                        <span class="text-danger error-text">{{$errors->first('name')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-label-group">
                                                    <input type="email" id="last-name-column" class="form-control" placeholder="Почта" name="email" value="{{$user->email}}">
                                                    <label for="last-name-column">Почта</label>
                                                    @if($errors->has('email'))
                                                        <span class="text-danger error-text">{{$errors->first('email')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-label-group">
                                                    <input type="password" id="country-floating" class="form-control" name="password" placeholder="Пароль">
                                                    <label for="country-floating">Пароль</label>
                                                    @if($errors->has('password'))
                                                        <span class="text-danger error-text">{{$errors->first('password')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-label-group">
                                                    <input type="password" id="company-column" class="form-control" name="password_confirmation" placeholder="Подтверждение пароля">
                                                    <label for="company-column">Подтверждение пароля</label>
                                                    @if($errors->has('password_confirmation'))
                                                        <span class="text-danger error-text">{{$errors->first('password_confirmation')}}</span>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
