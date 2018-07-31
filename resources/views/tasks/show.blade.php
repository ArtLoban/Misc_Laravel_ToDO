@extends('layout')

@section('content')
   
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <p class="task-item-title">{{$task->title }}</p>
{{--            <p>{{$task->description}}</p>--}}
{{--            <p>{!! nl2br($task->description) !!}</p>--}}
            <p>{!! nl2br(e($task->description)) !!}</p>
            <p class="created_at">( created {{$task->created_at->diffForHumans()}} )</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <a href="{{ url()->previous() }}" class="btn btn-success">< Back</a>
        </div>
    </div>
    
</div>
    
@endsection
