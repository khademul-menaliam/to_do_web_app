@extends('layouts.main')
@push('head')
    <title>ToDo List App 001</title>
@endpush
@section('main-section')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <div class="h2">All ToDo</div>
            <a href="{{route("new.todo")}}" class="btn btn-primary btn-lg">Add Task</a>
        </div>

        <table class="table table-stripped table-dark">
            <tr>
                <td>Name</td>
                <td>Work</td>
                <td>Due Date</td> 
                <td>Action</td> 
            </tr>
            @foreach ($todos as $todo)
            <tr valign='middle'>
                <td>{{$todo->name}}</td>
                <td>{{$todo->work}}</td>
                <td>{{$todo->duedate}}</td>
                <td>
                    <a href="{{route("todo.edit",$todo->id)}}" class="btn btn-success btn-sm">Update</a>
                    <a href="{{route("todo.delete",$todo->id)}}" class="btn btn-danger btn-sm">Delete</a>
                </td> 


            </tr>
            @endforeach

        </table>

    </div>



@endsection