@extends('layouts.default')
@section('title','用户信息')
@section('content')
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <div class="col-md-12">
                <div class="col-md-offset-2 col-md-8">
                    <section class="user_info">
                        @include('shared._user_info',['user'=>$user])
                    </section>
                </div>
            </div>
        <div>
        <div class="col-md-12">
            @if(Auth::check())
                @include('users._follower_form')
            @endif

            @if(count($statuses))
                <ol class="statuses">
                    @foreach($statuses as $status)
                        @include('statuses._status')
                    @endforeach
                </ol>
                {!! $statuses->render() !!}
            @endif
        </div>
    </div>
@stop