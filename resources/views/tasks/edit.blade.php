@extends('layout')

@section('content')
   
<div class="container">
    <h3>Edit task # - {{ $task->id }}</h3>
    
    @include('errors')
    
    <div class="row">
        {!! Form::open(['route' => ['tasks.update', $task->id], 'method'=>'PUT']) !!}
            <div class="col-md-10">
                <div class="form-group">
                    <input type="text" class="form-control" name="title" value="{{$task->title}}">
                    <br>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"> {{$task->description}} </textarea>
                    <br>
                    <button class="btn btn-warning">Submit</button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
    
@endsection
