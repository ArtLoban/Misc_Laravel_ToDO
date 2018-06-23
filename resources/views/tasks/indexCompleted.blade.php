@extends('layout')

@section('content')

    <div class="container">
        <div class="head-title">
            <h3>Completed tasks</h3>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="row my-btn compl">
                    <a href="{{ route('tasks.index')}}" class="btn btn-success">< Back</a>
                </div>

                <table class="table table-hover ">
                    <thead>
                    <tr class="tcenter">
                        <td>Id</td>
                        <td>Title </td>
                        <td>Delete</td>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{ $tasks->perPage() * ($tasks->currentPage()-1) + $loop->iteration }}</td>
                            <td class="task-title">
                                <a href="{{ route('tasks.show', $task->id) }}"> {{ $task->title }} </a>
                            </td>
                            <td>
                                {!! Form::open(['method' => 'DELETE',
                                     'route' => ['tasks.destroy',$task->id]]) !!}
                                <button onclick="return confirm('Are you sure?')">
                                    <i class="glyphicon glyphicon-remove"></i>
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                @if($tasks->isEmpty())
                    <div class="no-tasks text-center">
                        <p>... nothing here</p>
                    </div>
                @endif

                <div>
                    {{ $tasks->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
