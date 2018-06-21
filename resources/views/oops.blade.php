@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 head-title">

                <p class="task-item-title">Oops...</p>
                <hr>
                <p>Sorry, but only registered Users can run Tasks</p>
                <p>
                    Please <a href="{{ route('login')}}">login</a> or <a href="{{ route('register')}}">register</a>
                </p>

            </div>
        </div>

    </div>

@endsection
