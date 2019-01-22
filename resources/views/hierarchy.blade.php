@extends('layout')

@php

@endphp

@section('content')
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="mb-4">
        <h2>Page with hierarchy tree view</h2>
        <div class="background">
            <ul id="workers">
                @foreach($workers as $worker)
                    <li class="closed">

                        <div class="worker">
                            <div class="worker-avatar">
                                <img src="https://randomuser.me/api/portraits/{{$worker->avatar}}.jpg" class="avatar" alt="avatar">
                            </div>
                            <div class="worker-info">
                                <h6 class="worker-name">{{ $worker->first_name ." ".$worker->last_name}}</h6>
                                <span class="position">{{ $worker->position->name}}</span>
                            </div>
                        </div>

                        @if(count($worker->childs))
                            @include('workerTemplate',['childs' => $worker->childs])
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection