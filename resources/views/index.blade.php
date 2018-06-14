@extends('layout')

@section('content')

    <div class="container">
        <div class="head-title">
            <h3>Hello, Guest!</h3>
            <p>Today is</p>
            <div>
                <span class="today">{{ $today }} </span>
            </div>
            <hr>
            <h3>Have a Nice Day!</h3>
        </div>
    </div>

@endsection