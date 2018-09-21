@extends('layouts.default')
@section('title','主页')
@section('content')
    <div class="jumbotron">
        <h1>这是我的第一个laravel程序</h1>
        <p class="lead">请前往我的<a href="http://wangzhenyu.tk">个人站观摩</a></p>
        <p>万里长征第一步！</p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('users.store') }}" role="button">现在注册</a>
        </p>
    </div>
@stop