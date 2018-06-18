@extends('layout')

@section('content')
   
<div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-2">
            <p class="task-item-title">Create task</p>

            @include('errors')

            <div class="row">

                {!! Form::open(['route' => 'tasks.store']) !!}
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Title" required>
                            <br>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Description">{{old('description')}}</textarea>
                            <br>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <button class="btn btn-success">Submit</button>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                    <a href="{{ route('tasks.index')}}" class="btn btn-success">< Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
</div>
    
@endsection
