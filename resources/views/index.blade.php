@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 head-title">
                @if (Auth::guest())
                    <h3>Hello, Guest!</h3>
                @else
                    <h3>Hello, {{ Auth::user()->name }}!</h3>
                @endif
                <p>Today is</p>
                <div>
                    <span class="today">{{ $today }} </span>
                </div>
                <hr>
                <h3>Have a Nice Day!</h3>
            </div>
        </div>
    </div>

@endsection
