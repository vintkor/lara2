@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if(Auth::guest())
                <div class="col-md-12 align-center">
                    <img class="stop" src="/img/stop.svg" alt="Только для зарегистрированных">
                    <p>
                        Только зарегистрированные пользователи могут просматривать профиль пользователя
                    </p>
                </div>
            @else
                <div class="col-md-12 flex">
                    <img src="{{ $user->avatar }}" alt="{{ $user->name }}" class="profile-big">
                    <h1>Профиль пользователя {{ $user->name }}</h1>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <form action="/profile" method="POST" class="form-inline" role="form">
                        <div class="form-group">
                            <input type="file" name="avatar">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="text">
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
            @endif
        </div>
        @if(Auth::guest())
        @else
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td class="col-md-6"><b>Новость</b></td>
                            <td class="col-md-4"><b>Категория</b></td>
                            <td class="col-md-2"><b>Дата публикации</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#" title="">Тестовая новость</a></td>
                            <td><a href="#" title="">Тестовая категория</a></td>
                            <td>21.08.2016</td>
                        </tr>
                        <tr>
                            <td><a href="#" title="">Тестовая новость</a></td>
                            <td><a href="#" title="">Тестовая категория</a></td>
                            <td>21.08.2016</td>
                        </tr>
                        <tr>
                            <td><a href="#" title="">Тестовая новость</a></td>
                            <td><a href="#" title="">Тестовая категория</a></td>
                            <td>21.08.2016</td>
                        </tr>
                        <tr>
                            <td><a href="#" title="">Тестовая новость</a></td>
                            <td><a href="#" title="">Тестовая категория</a></td>
                            <td>21.08.2016</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
@endsection