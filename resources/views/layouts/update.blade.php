@extends('layouts.main')
@push('head')
    <title>ToDo List App 001</title>
@endpush
@section('main-section')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <div class="h2">Update ToDo</div>
            <a href="{{route("todo.home")}}" class="btn btn-primary btn-lg">Back</a>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{route("todo.updateData")}}" method="post">
                    @csrf
                     <label for="" class="form-label mt-4"  >Name</label>
                     <input type="text" name="name" class="form-control" value="{{$todo->name}}">

                     <label for="" class="form-label mt-4"  >Work</label>
                     <input type="text" name="work" class="form-control"value="{{$todo->work}}">

                     <label for="" class="form-label mt-4"  >Due date</label>
                     <input type="date" name="duedate" class="form-control"value="{{$todo->duedate}}">

                     <label for="" class="form-label mt-4"  >description</label>
                     <input type="text" name="description" class="form-control"value="{{$todo->description}}">
                    
                     <input type="number" name="id" value="{{$todo->id}}" hidden>
                     <button class="btn btn-primary btn-lg mt-4">Update ToDo</button>
                </form>
            </div>
        </div>
    </div>


@endsection