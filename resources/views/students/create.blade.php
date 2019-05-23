@extends('layouts.app')

@section('content')
    <form class="row justify-content-around" action="/store" method="post">
        {{csrf_field()}}
        <div class="form-group col-6">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" required>
            <label for="score">Score</label>
            <input name="score" type="text" class="form-control" id="score" required>
            <input class="btn btn-primary" type="submit" value="Submit" style="margin-top:10px">
        </div>
    </form>
@endsection