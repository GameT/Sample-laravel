@extends('layouts.default')
@section('title','用户列表')
@section('content')
    <div class="com-md-8 col-md-offset-2">
        <h1>所有用户</h1>
        <ul class="users">
            @foreach($users as $user)
                @include('users._user')
            @endforeach
        </ul>
        {!! $users->render() !!}
    </div>
@stop