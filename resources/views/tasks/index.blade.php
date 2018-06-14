@extends('layout')

@section('content')
   
<div class="container">
    <div class="head-title">
        <h3>Task List</h3>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="row my-btn">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <a href="{{ route('tasks.create')}}" class="btn btn-success">Add New</a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                    <a href="{{ route('tasks.completed')}}" class="btn btn-success">See completed</a>
                </div>
            </div>

            <table class="table table-hover ">
                <thead>
                    <tr class="tcenter">
                        <td>ID</td>
                        <td>Title </td>
                        <td>Edit</td>
                        <td>Complete</td>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="task-title">
                            <a href="{{ route('tasks.show', $task->id) }}"> {{ $task->title }} </a>
                        </td>
                        <td>
                            <a href="{{ route('tasks.edit', $task->id) }}">
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                        </td>
                        <td>
                            {!! Form::open(['method' => 'DELETE',
                                 'route' => ['tasks.destroy',$task->id]]) !!}
                            <button onclick="return confirm('Удалить запись?')">
                                <i class="glyphicon glyphicon-ok"></i>
                                {{--<i class="glyphicon glyphicon-remove"></i>--}}
                            </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection
