@extends('layouts.default')
@section('title','主页')
@section('content')
    @if(Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
                <h3>微博列表</h3>
                @include('shared._feed')
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info',['user' => Auth::user()])
                </section>
                <section class="stat">
                    @include('shared._stats',['user'=>Auth::user()])
                </section>
            </aside>
        </div>
    @else
        <div class="jumbotron">
            <h1>这是我的第一个laravel程序</h1>
            <p class="lead">请前往我的<a href="http://wangzhenyu.tk">个人站观摩</a></p>
            <p>万里长征第一步！</p>
            <p>
                <a class="btn btn-lg btn-success" href="{{ route('users.create') }}" role="button">现在注册</a>
            </p>
        </div>
    @endif
@stop