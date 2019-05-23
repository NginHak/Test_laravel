@extends('layouts.app')

@section('content')
    <div class="row justify-content-around">
        <table class="table col-8">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                    @if (count($students) > 0)
                        @foreach ($students as $student)
                                <tr>
                                    <th>{{$student->id}}</th>
                                    <th>{{$student->name}}</th>
                                    <th>{{$student->score}}</th>
                                    <th><a href="/delete/{{$student->id}}" class="btn btn-link">Delete</a></th>
                                    <th><a href="/edit/{{$student->id}}" class="btn btn-link">Edit</a></th>
                                </tr>
                        @endforeach
                    @endif
            </tbody>
        </table>
    </div>

    <div class="row justify-content-around">
        <a href="/students/create" class="btn btn-primary col-2">New Student</a>
    </div>
@endsection
  
        
 
