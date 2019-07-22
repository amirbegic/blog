
@extends('layouts.app')

@section('content')


    <div class="header bg-gradient-primary pb-6 pt-5 pt-md-8" style="height:50px">

    </div>
    <div>
    <form method = 'POST' class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto" action="{{route('task.saveTask')}}">
            {{csrf_field()}}
            <select name = "userID" class="btn btn-primary my-4" class="form-control-label">
                @foreach($users as $user)
                    <option value="{{$user->id}}" > {{$user->name}}</option>
                @endforeach
            </select>
            <select name = "taskID" class="btn btn-primary my-4" class="form-control-label">
                @foreach($tasks as $task)
                    <option value="{{$task->id}}" > {{$task->name}}</option>
                @endforeach
            </select>

            <button class="btn btn-primary my-4" type="submit">Save</button>
        @if ($message = Session::get('message'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        </form>

        <form method = 'POST' class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto" action="{{route('task.newTask')}}">
            {{csrf_field()}}
            <select name = "userID" class="btn btn-primary my-4" class="form-control-label">
                @foreach($users as $user)
                    <option value="{{$user->id}}" > {{$user->name}}</option>
                @endforeach
            </select>
            <input class="form-control" placeholder="Add Task" type="text" style = "color:rebeccapurple" name="task" value="" required="" autofocus="">




            <button class="btn btn-primary my-4" type="submit">Save</button>

        </form>

    </div>



@endsection