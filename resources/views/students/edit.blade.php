@extends('layouts.app')

@section('content')
    <form class="row justify-content-around" action="/update/{{$student->id}}" method="post">
        {{csrf_field()}}
        <div class="form-group col-6">
            <label for="name">Name</label>
            <input value="{{$student->name}}" name="name" type="text" class="form-control" id="name" required>
            <label for="score">Score</label>
            <input value="{{$student->score}}" name="score" type="text" class="form-control" id="score" required>
            <input class="btn btn-primary" type="submit" value="Update" style="margin-top:10px">
        </div>
    </form>
@endsection