@extends('layouts.default')
@section('title','登录')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>登录<h5>
            </div>
            <div class="panel-body">
                @include('shared._errors')
                <form method="POST" action="{{ route('login') }}" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <lable for="email" >邮箱：</lable>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}" >
                    </div>
                    <div class="form-group">
                        <lable for="password" >密码：(<a href="{{ route('password.request') }}">忘记密码</a>)</lable>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" >
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember" >记住我</label>
                    </div>
                    <input type="submit" class="btn btn-primary" value="登录">
                </form>
                <hr>
                <a href="{{ route('users.create') }}">注册</a>
            </div>
        </div>
    </div>
@stop